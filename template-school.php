<?php
/**
 * Template name: School
 */

get_header(); 

global $wpdb;

date_default_timezone_set('UTC');
$tax_name = 'pa_onlajn-platforma';
$school_slug = ($_GET['slug']) ?? '';
$school = get_term_by('slug', $school_slug, $tax_name);

if ($school) :

    while (have_posts()) : the_post(); 
        $table = $wpdb->prefix . 'school_comments';
        $rating_data = ut_help()->school_review->get_rating($school->term_id);
        $reviews = $wpdb->get_results("SELECT * FROM $table WHERE comment_school_ID = $school->term_id AND comment_approved = 1", 'ARRAY_A');
    ?>

        <div class="container_di">
            <div class="row_di">  
                <div class="statick_page"> 
                    <div class="page_header">    
                        <div class="page_title">
                            <h1><?php echo esc_html($school->name); ?></h1>
                        </div>
                    </div> 

                    <?php if ( $rating_data['count'] != 0 ) : ?>
                        <div class="review_rating">
                            
                            <div class="rating">                                
                                <svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
                                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                                        <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z"></path>
                                    </symbol>
                                </svg>                                             
                                <div class="c-rate">

                                    <?php 
                                    for ($i = 1; $i <= 5; $i++) : 
                                        $class = ( $i <= round($rating_data['rating']) ) ? ' diactive' : '';
                                    ?>
                                        <svg class="c-icon<?php echo esc_attr($class); ?>" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    <?php endfor; ?>

                                </div>   
                            </div>

                            <div class="cat_coment">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 12.5C17.5 12.942 17.3244 13.366 17.0118 13.6785C16.6993 13.9911 16.2754 14.1667 15.8333 14.1667H5.83333L2.5 17.5V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H15.8333C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V12.5Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg> 
                                <span>
                                    <?php 
                                    echo sprintf( 
                                        '<a href="#reviews">%s о школе</a>', 
                                        ut_num_decline( 
                                            $rating_data['count'], 
                                            [ 
                                                'отзыв', 
                                                'отзывы', 
                                                'отзывов' 
                                            ] 
                                        ) 
                                    );
                                    ?>
                                </span>
                            </div>
                        </div> 
                    <?php endif; ?> 

                    <p><?php echo nl2br($school->description); ?></p>
                    <h2 id="reviews">Отзывы</h2>

                    <?php if ( $reviews ) : ?>

                        <div class="school-review-wrapper">

                            <?php 
                            foreach ( (array)$reviews as $review ) : 
                                $full_name = $review['comment_author'];
                                $first_letter = strtoupper(mb_substr($full_name, 0, 1));
                                $date = date_i18n('F j, Y', strtotime($review['comment_date']));
                                $content = $review['comment_content'];
                            ?>

                                <div class="item">
                                    <div class="item_block_white">
                                        <div class="row_di review_title">
                                            <div class="review_l">
                                                <?php echo esc_html($first_letter); ?>
                                            </div>
                                            <div class="review_r">

                                                <?php if ($full_name) : ?>
                                                    <div class="review_name">
                                                        <?php echo esc_html($full_name); ?>
                                                    </div>
                                                <?php endif; ?>

                                                <div class="review_rating">
                                                    <div class="rating">                                
                                                        <svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
                                                            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                                                                <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z" />
                                                            </symbol>
                                                        </svg>                                             
                                                        <div class="c-rate">
                                                            
                                                            <?php 
                                                            for ($i = 1; $i <= 5; $i++) : 
                                                                $class = ( $i <= $review['comment_rating'] ) ? ' diactive' : '';
                                                            ?>
                                                                <svg class="c-icon<?php echo esc_attr($class); ?>" width="20" height="20">
                                                                    <use xlink:href="#star"></use>
                                                                </svg>
                                                            <?php endfor; ?>

                                                        </div>
                                                    </div>
                                                    
                                                    <?php if ($date) : ?>
                                                        <div class="review_date">
                                                            <?php echo $date; ?>
                                                        </div>
                                                    <?php endif; ?>

                                                </div> 
                                            </div>
                                        </div>
                                        <div class="review_desk">

                                            <?php if ($content) : ?>
                                                <div class="review_desk_text">
                                                    <?php echo nl2br($content); ?>
                                                </div>
                                            <?php endif; ?>

                                        </div> 
                                    </div> 
                                </div>

                            <?php endforeach; ?>

                        </div>

                    <?php else : ?>

                        <p>Отзывов пока нет.</p>

                    <?php endif; ?>
                
                </div>
            </div>
        </div>

    <?php
    endwhile; 

else :
?>

    <div class="container_di">
        <div class="row_di">  
            <div class="statick_page"> 
                <div class="page_header">    
                    <div class="page_title">
                        <h1>Хакер, что ли?</h1>
                    </div>
                </div> 
            </div> 
        </div> 
    </div> 

<?php
endif;

get_footer();