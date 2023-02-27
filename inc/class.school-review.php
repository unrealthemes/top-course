<?php

class UT_School_Review {

    private static $_instance = null; 

    static public function get_instance() {

        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct() {

        $this->insert_review();
        add_action( 'admin_menu', [$this, 'settings_page'] );

        if ( wp_doing_ajax() ) {
            add_action( 'wp_ajax_delete_submitted_emails', [$this, 'delete_submitted_emails'] );
            add_action( 'wp_ajax_nopriv_delete_submitted_emails', [$this, 'delete_submitted_emails'] );

            add_action( 'wp_ajax_confirm_user_data', [$this, 'confirm_user_data'] );
            add_action( 'wp_ajax_nopriv_confirm_user_data', [$this, 'confirm_user_data'] );
        }
    }

    public function insert_review() {

        global $wpdb;

        if ( ! isset($_POST['school_submit']) ) {
            return false;
        }

        $table = $wpdb->prefix . 'school_comments';
        $data = wp_unslash( $_POST );

        $comment_author       = ! isset( $data['school_author'] ) ? '' : $data['school_author'];
        $comment_author_email = ! isset( $data['school_email'] ) ? '' : $data['school_email'];
        $comment_date      = ! isset( $data['comment_date'] ) ? current_time( 'mysql' ) : $data['comment_date'];
        $comment_date_gmt  = ! isset( $data['comment_date_gmt'] ) ? get_gmt_from_date( $comment_date ) : $data['comment_date_gmt'];
        $comment_school_ID = ! isset( $data['school'] ) ? 0 : $data['school'];
        $comment_content   = ! isset( $data['school_comment'] ) ? '' : $data['school_comment'];
        $comment_rating    = ! isset( $data['school_rating'] ) ? 0 : $data['school_rating'];
        $comment_approved  = 0; // ! isset( $data['comment_approved'] ) ? 1 : $data['comment_approved'];
        $user_id = ! isset( $data['user_id'] ) ? 0 : $data['user_id'];

        $compacted = [
            'comment_school_ID' => $comment_school_ID,
        ];

        $compacted += compact(
            'comment_author',
            'comment_author_email',
            'comment_date',
            'comment_date_gmt',
            'comment_content',
            'comment_rating',
            'comment_approved',
            'user_id'
        );

        if ( ! $wpdb->insert( $table, $compacted ) ) {
            return false;
        }

        $id = (int) $wpdb->insert_id;

        // TODO: redirect
        return $id;
    }

    public function get_rating( $school_id ) {

        global $wpdb;    

        $value = 0;
        $table = $wpdb->prefix . 'school_comments';
        $reviews = $wpdb->get_results("SELECT * FROM $table WHERE comment_school_ID = $school_id AND comment_approved = 1", 'ARRAY_A');

        if ( $reviews ) {
            foreach ( (array)$reviews as $review ) {
                $value += $review['comment_rating'];
            }
        } 
        $count = (int)count($reviews);
        $rating = ( $value == 0 ) ? 0 : round($value / $count, 2);

        return [
            'count' => $count,
            'rating' => $rating,
        ];
    }

    public function settings_page() {

        global $wpdb;    
        
        $table = $wpdb->prefix . 'school_comments';
        $reviews = $wpdb->get_var("SELECT COUNT(*) FROM $table WHERE comment_approved = 0");
        $count_not_approved = ($reviews) ? '<span class="awaiting-mod remaining-tasks-badge count-' . $reviews . '">' . $reviews . '</span>' : '';
        add_submenu_page( 
            'edit.php?post_type=product',
            'Отзывы школы', 
            'Отзывы школы ' .  $count_not_approved, 
            'edit_posts', 
            'submitted_form_data', 
            [$this, 'submitted_form_data_display'], 
            '', 
            124
        );
    }

    public function submitted_form_data_display() {

        global $wpdb;    

        $table = $wpdb->prefix . 'school_comments';
        $items_per_page = get_option( 'posts_per_page' );
        $total = $this->get_total_reviews();
        $page = isset( $_GET['cpage'] ) ? abs( (int)$_GET['cpage'] ) : 1;
        $total_page = ceil( $total / $items_per_page );
        $offset = ( $page * $items_per_page ) - $items_per_page;
        $reviews_data = $wpdb->get_results("SELECT * FROM $table ORDER BY comment_date DESC LIMIT $offset, $items_per_page", 'ARRAY_A');
        $pagination_html = $this->get_pagination( $page, $total_page );

        get_template_part( 
            'template-parts/admin/submitted-form-data', 
            'table', 
            [
                'users_data' => $reviews_data,
                'pagination' => $pagination_html,
            ] 
        );
    }

    public function delete_submitted_emails() {

        global $wpdb;    

        check_ajax_referer( 'admin_nonce', 'ajax_nonce' );
        parse_str( $_POST['form'], $form );

        $table = $wpdb->prefix . 'school_comments';
        foreach ( (array)$form['reviews'] as $review_id ) {
            $wpdb->delete( $table, [ 'comment_ID' => $review_id ] );
        }

        wp_send_json_success();
    }

    public function confirm_user_data() {

        check_ajax_referer( 'admin_nonce', 'ajax_nonce' );
        global $wpdb;    
        // update table
        $table = $wpdb->prefix . 'school_comments';
        $wpdb->update( 
            $table,
            [ 'comment_approved' => 1 ],
            [ 'comment_ID' => $_POST['id'] ]
        );

        wp_send_json_success();
    }

    function get_pagination( $page, $total_page ) {

        $html = '';

        if ( $total_page > 1 ) :
            $html = '<div class="tablenav ">
                        <div class="tablenav-pages">
                            <!--<span class="displaying-num">' . __('Page', 'acf') . ' ' . $page . ' ' . __('of', 'sitepress') . ' ' . $total_page . '</span>-->' .
                            paginate_links( [
                                'base' => add_query_arg( 'cpage', '%#%' ),
                                'format' => '',
                                'prev_text' => __('&laquo;'),
                                'next_text' => __('&raquo;'),
                                'total' => $total_page,
                                'current' => $page
                            ] )
                    . '</div>
                    </div>';
        endif;

        return $html;
    }

    function get_total_reviews() {

        global $wpdb;    

        $table = $wpdb->prefix . 'school_comments';
        $total_query = "SELECT COUNT(1) FROM $table";
        $result = $wpdb->get_var( $total_query );

        return $result;
    }

} 