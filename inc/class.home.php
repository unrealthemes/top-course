<?php

class UT_Home {

    private static $_instance = null; 

    static public function get_instance() {

        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct() {

        add_action( 'acf/init', [$this, 'acf_init_block_types'] );
    }

    public function acf_init_block_types() {

        // Check function exists.
        if ( function_exists('acf_register_block_type') ) {
    
            acf_register_block_type([
                'name'              => 'schools',
                'title'             => __('Школы'),
                // 'description'       => __('A custom schools.'),
                'render_template'   => 'template-parts/home/schools.php',
                'category'          => 'top-course',
                'icon'              => 'welcome-learn-more',
                'keywords'          => [ 'Школы' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'courses',
                'title'             => __('Курсы'),
                // 'description'       => __('A custom courses.'),
                'render_template'   => 'template-parts/home/courses.php',
                'category'          => 'top-course',
                'icon'              => 'welcome-learn-more',
                'keywords'          => [ 'Курсы' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'about',
                'title'             => __('Про нас'),
                // 'description'       => __('A custom about.'),
                'render_template'   => 'template-parts/home/about.php',
                'category'          => 'about',
                'icon'              => 'welcome-learn-more',
                'keywords'          => [ 'Про нас' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);

            acf_register_block_type([
                'name'              => 'blog',
                'title'             => __('Блог'),
                // 'description'       => __('A custom blog.'),
                'render_template'   => 'template-parts/home/blog.php',
                'category'          => 'blog',
                'icon'              => 'welcome-learn-more',
                'keywords'          => [ 'Блог' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'course_collections',
                'title'             => __('Подборки курсов'),
                // 'description'       => __('A custom course_collections.'),
                'render_template'   => 'template-parts/home/course-collections.php',
                'category'          => 'course_collections',
                'icon'              => 'welcome-learn-more',
                'keywords'          => [ 'Подборки курсов' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'search',
                'title'             => __('Поиск'),
                // 'description'       => __('A custom search.'),
                'render_template'   => 'template-parts/home/search.php',
                'category'          => 'search',
                'icon'              => 'welcome-learn-more',
                'keywords'          => [ 'Поиск' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);

        }
    }

    public function get_short_desc_via_child_terms($child_terms, $link) {

        $i =1;
        $html = '';

        if ($child_terms) {
            $html .= '<div class="item_desc">';
            $text = '';
            foreach ($child_terms as $key => $child_term) { 

                if ( $i > 5 ) {
                    break;
                }
                $text .= $child_term->name . ', ';
                unset($child_terms[ $key ]);
                $i++;
            }
            // Python, JavaScript, тестирование, DevOps, С++ и др.
            if (count($child_terms)) {
                $html .= rtrim($text, ', ') . '  и др.';
            } else {
                $html .= rtrim($text, ', ');
            }
            $html .= '</div>';
            $html .= '<div class="item_a">';
                $html .= '<a href="' . esc_url($link) . '">';

                if (count($child_terms)) {
                    $html .= 'Еще ' . ut_num_decline( count($child_terms), [ 'категория', 'категории', 'категорий' ] );
                } else {
                    $html .= 'Подробнее';
                }
                $html .= '</a>';
            $html .= '</div>';
        } else {
            $html .= '<div class="item_desc"></div>';
            $html .= '<div class="item_a">';
                $html .= '<a href="' . esc_url($link) . '">';
                    $html .= 'Подробнее';
                $html .= '</a>';
            $html .= '</div>';
        }

        return $html;
    }

    public function get_categories_collection($courses) {

        $html = '';
        $tax_name = 'product_cat';

        if ($courses) {
            $all_terms = [];
            foreach ( $courses as $course ) {
                $terms = get_the_terms( $course->ID, $tax_name );
                if ( $terms ) {
                    foreach ( $terms as $term ) {
                        $all_terms[ $term->term_id ] = [
                            'name' => $term->name,
                            'link' => $term_link = get_term_link($term->term_id, $tax_name),
                        ];
                    }
                }
            }

            $html .= '<div class="row_di main_tag">';
                foreach ( $all_terms as $all_term ) {
                    $html .= '<a href="' . esc_url($all_term['link']) . '">' . esc_html($all_term['name']) . '</a>';
                }
            $html .= '</div>';
        }

        return $html;
    }

    public function count_objects() {

        global $wpdb;
        // courses
        $count_posts = wp_count_posts('product');
        // teachers

        // schools
		$terms = get_terms('pa_onlajn-platforma', ['hide_empty' => false]);
        // reviews
        $reviews_count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->comments WHERE comment_type = 'review' AND comment_approved = 1" );

        return [
            'courses' => $count_posts->publish,
            // 'teachers' => 1,
            'schools' => count($terms),
            'reviews' => $reviews_count,
        ];
    }

} 