<?php 
$categories = get_terms( 
    'product_cat', [
        'orderby' => 'name',
        'order' => 'ASC',
        'parent' => 0,
        'hide_empty' => 0,
    ] 
); 
?>

<?php if ( $categories ) : ?>

    <nav class="cd-dropdown">  
        <a href="#0" class="cd-close">Close</a>
        <ul class="cd-dropdown-content">

            <?php 
            foreach ( $categories as $key => $category ) : 
                // $schools_arr = [];
                // $child_slugs = [];
                $schools = get_field( 'schools_megamenu', $category );
                $link = get_term_link( (int)$category->term_id, $category->taxonomy );
                $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true ); 
                $image = wp_get_attachment_url( $thumbnail_id ); 
                $child_categories = get_terms( 
                    [
                        'taxonomy' => $category->taxonomy, 
                        'hide_empty' => 0,
                        'child_of' => $category->term_id,
                    ]
                );
            ?>

                <li class="has-children">
                    <a href="<?php echo esc_url($link); ?>">

                        <?php if ( $image ) : ?>
                            <img src="<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($category->name); ?>">
                        <?php endif; ?>

                        <span><?php echo esc_html($category->name); ?></span>
                    </a> 

                    <?php if ( $child_categories ) : ?>
                        <ul class="cd-secondary-dropdown is-hidden">
                            <li class="go-back"><a href="#0">Назад</a></li>

                            <?php 
                            foreach ( $child_categories as $key => $child_category ) : 
                                $child_link = get_term_link( (int)$child_category->term_id, $child_category->taxonomy );
                                // $child_slugs[] = $child_category->slug;
                            ?>

                                <li>
                                    <a href="<?php echo esc_url($child_link); ?>">
                                        <?php echo esc_html($child_category->name); ?>
                                    </a>
                                </li>

                            <?php endforeach; ?>
                            
                            <div class="clear"></div>

                            <?php if ($schools) : ?>
                                <div class="menu_btand">
                                    <?php 
                                    foreach ($schools as $key => $school) : 
                                        $img_id = get_field('img_school', $school);
                                        $img_url = wp_get_attachment_image_url( $img_id, 'full' ); 
                                        $school_link = ut_get_permalik_by_template('template-school.php') . '?slug=' . $school->slug;
                                    ?>

                                        <a href="<?php echo esc_url($school_link); ?>">
                                            <img src="<?php echo esc_attr($img_url); ?>" alt="<?php echo esc_attr($school_obj->name); ?>">
                                        </a>

                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
 
                            <?php 
                            // $query = new WP_Query( [
                            //     'post_type' => 'product',
                            //     'post_status' => 'publish',
                            //     'posts_per_page' => -1,
                            //     'tax_query' => [
                            //         [
                            //             'taxonomy' => 'product_cat',
                            //             'field'    => 'slug',
                            //             'terms'    => $child_slugs
                            //         ]
                            //     ]
                            // ] );

                            // if ( $query->have_posts() ) :
                            //     while ( $query->have_posts() ) :
                            //         $query->the_post();
                            //         global $product;
                            //         $taxonomy = 'pa_onlajn-platforma';
                            //         $schools = wc_get_product_terms( $product->get_id(), $taxonomy, ['fields' => 'all'] );
                            //         $school = (isset($schools[0])) ? $schools[0] : null;

                            //         if ($school) :
                            //             $schools_arr[ $school->term_id ] = $school;
                            //         endif;
                            //     endwhile;
                            // endif;
                            // wp_reset_postdata();
                            ?>

                            <?php //if ($schools_arr) : ?>
                                <!-- <div class="menu_btand"> -->

                                    <?php 
                                    // foreach ( $schools_arr as $school_obj ) : 
                                    //     $img_id = get_field('img_school', $school_obj);
                                    //     $img_url = wp_get_attachment_image_url( $img_id, 'full' ); 
                                    //     $school_link = ut_get_permalik_by_template('template-school.php') . '?slug=' . $school_obj->slug;

                                    //     if ( ! $img_id ) continue;
                                    ?>

                                        <!-- <a href="<?php //echo esc_url($school_link); ?>">
                                            <img src="<?php //echo esc_attr($img_url); ?>" alt="<?php //echo esc_attr($school_obj->name); ?>">
                                        </a> -->

                                    <?php //endforeach; ?>

                                <!-- </div> -->
                            <?php //endif; ?>
                            
                        </ul>
                    <?php endif; ?>

                </li>

            <?php endforeach; ?>
                        
        </ul> 
    </nav> 

<?php endif; ?>