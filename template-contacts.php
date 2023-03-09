<?php
/**
 * Template name: Contacts
 */

get_header(); 

$address = get_field('address_contacts');
$phone = get_field('phone_contacts');
$txt_phone = get_field('txt_phone_contacts');
$mail = get_field('mail_contacts');
$txt_mail = get_field('txt_mail_contacts');
$soc_network = get_field('soc_network_contacts');
$ymap = get_field('ymap_contacts');

// $args = array(
//     'post_type' => 'product',
//     'posts_per_page' => -1
//     );
// $loop = new WP_Query( $args );
// if ( $loop->have_posts() ) {
//     while ( $loop->have_posts() ) : $loop->the_post();
//         ut_help()->parser->delete_product($product->get_id(), TRUE);
//     endwhile;
// } 
// wp_reset_postdata();
?>

    <div class="container_di">
        <div class="row_di">
            <div class="simple_page">
            
                <div class="page_header">    
                    <div class="page_title">
                        <?php the_title('<h1>', '</h1>'); ?>
                    </div>
                </div>
            
                <div class="simple_page_content">  
                    <div class="contact">
                        <div class="row_di contact_block">
                            <div class="row_15_di"> 
                            
                                <?php if ( $address ) : ?>
                                    <div class="col_1_40_di">
                                        <div class="adres">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.6663 8.33341C16.6663 13.3334 9.99967 18.3334 9.99967 18.3334C9.99967 18.3334 3.33301 13.3334 3.33301 8.33341C3.33301 6.5653 4.03539 4.86961 5.28563 3.61937C6.53587 2.36913 8.23156 1.66675 9.99967 1.66675C11.7678 1.66675 13.4635 2.36913 14.7137 3.61937C15.964 4.86961 16.6663 6.5653 16.6663 8.33341V8.33341Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10 10.8333C11.3807 10.8333 12.5 9.71396 12.5 8.33325C12.5 6.95254 11.3807 5.83325 10 5.83325C8.61929 5.83325 7.5 6.95254 7.5 8.33325C7.5 9.71396 8.61929 10.8333 10 10.8333Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg> 
                                            <span><?php echo esc_html( $address ); ?></span>
                                        </div> 
                                    </div> 
                                <?php endif; ?>
                                
                                <div class="col_1_60_di">
                                    <div class="row_di"> 
                                        <div class="col_2_di contact_phone">
                                            <div class="phone">
                                                <div class="row_di phone_item">
                                                    <span>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M18.3332 14.0999V16.5999C18.3341 16.832 18.2866 17.0617 18.1936 17.2744C18.1006 17.487 17.9643 17.6779 17.7933 17.8348C17.6222 17.9917 17.4203 18.1112 17.2005 18.1855C16.9806 18.2599 16.7477 18.2875 16.5165 18.2666C13.9522 17.988 11.489 17.1117 9.32486 15.7083C7.31139 14.4288 5.60431 12.7217 4.32486 10.7083C2.91651 8.53426 2.04007 6.05908 1.76653 3.48325C1.7457 3.25281 1.77309 3.02055 1.84695 2.80127C1.9208 2.58199 2.03951 2.38049 2.1955 2.2096C2.3515 2.03871 2.54137 1.90218 2.75302 1.80869C2.96468 1.7152 3.19348 1.6668 3.42486 1.66658H5.92486C6.32928 1.6626 6.72136 1.80582 7.028 2.06953C7.33464 2.33324 7.53493 2.69946 7.59153 3.09992C7.69705 3.89997 7.89274 4.68552 8.17486 5.44158C8.28698 5.73985 8.31125 6.06401 8.24478 6.37565C8.17832 6.68729 8.02392 6.97334 7.79986 7.19992L6.74153 8.25825C7.92783 10.3445 9.65524 12.072 11.7415 13.2583L12.7999 12.1999C13.0264 11.9759 13.3125 11.8215 13.6241 11.755C13.9358 11.6885 14.2599 11.7128 14.5582 11.8249C15.3143 12.107 16.0998 12.3027 16.8999 12.4083C17.3047 12.4654 17.6744 12.6693 17.9386 12.9812C18.2029 13.2931 18.3433 13.6912 18.3332 14.0999Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </span>
                                                    
                                                    <?php if ( $phone ) : ?>
														<a href="tel:<?php echo esc_attr( $phone ); ?>">
															<?php echo esc_html( $phone ); ?>
														</a>
													<?php endif; ?>

                                                </div> 
                                                
                                                <?php if ( $txt_phone ) : ?>
													<div class="f_desc"><?php echo esc_html( $txt_phone ); ?></div>
												<?php endif; ?>

                                            </div>
                                            <div class="mail">
                                                <div class="row_di mail_item">
                                                    <span>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M18.3332 8.33317C18.3332 7.80817 18.0832 7.3165 17.6665 6.99984L10.9998 1.99984C10.7113 1.78347 10.3605 1.6665 9.99984 1.6665C9.63922 1.6665 9.28833 1.78347 8.99984 1.99984L2.33317 6.99984C2.12618 7.15508 1.95817 7.35639 1.84246 7.58781C1.72675 7.81924 1.6665 8.07443 1.6665 8.33317M18.3332 8.33317V16.6665C18.3332 17.1085 18.1576 17.5325 17.845 17.845C17.5325 18.1576 17.1085 18.3332 16.6665 18.3332H3.33317C2.89114 18.3332 2.46722 18.1576 2.15466 17.845C1.8421 17.5325 1.6665 17.1085 1.6665 16.6665V8.33317M18.3332 8.33317L10.8582 13.0832C10.6009 13.2444 10.3034 13.3298 9.99984 13.3298C9.69624 13.3298 9.39878 13.2444 9.1415 13.0832L1.6665 8.33317" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg> 
                                                    </span>
                                                    
                                                    <?php if ( $phone ) : ?>
														<a href="mailto:<?php echo esc_attr( $mail ); ?>">
															<?php echo esc_html( $mail ); ?>
														</a>
													<?php endif; ?>

                                                </div>
                                                
                                                <?php if ( $txt_mail ) : ?>
													<div class="f_desc"><?php echo esc_html( $txt_mail ); ?></div>
												<?php endif; ?>

                                            </div>  
                                        </div>

                                        <?php if ( $soc_network ) : ?>
                                            <div class="col_2_di contact_soc">
                                                <div class="soc">
                                                    <?php foreach ( (array)$soc_network as $item ) : ?>

                                                        <a href="<?php echo esc_url($item['url_soc_network']); ?>" target="_blank">
                                                            <?php 
                                                            if ( $item['icon_soc_network'] ) : 
                                                                $icon_url = wp_get_attachment_url( $item['icon_soc_network'], 'full' );
                                                                if ( get_post_mime_type($item['icon_soc_network']) == 'image/svg+xml' ) :
                                                                    echo file_get_contents( $icon_url );
                                                                else :
                                                                    echo '<img src="' . $icon_url . '" alt="">';
                                                                endif;
                                                            endif; 
                                                            ?>
                                                        </a>

                                                    <?php endforeach; ?>
                                                </div>
                                            </div> 
                                        <?php endif; ?>
                                            
                                    </div>
                                </div>

                            </div> 
                        </div> 

                        <?php if ( $ymap ) : ?>
                            <?php echo $ymap; ?>
                        <?php endif; ?>

                        <div class="contacts-content">
                            <?php the_content(); ?>
                        </div>
                       
                    </div> 
                        
                </div>
            </div> 
        </div>
    </div>  

<?php
get_footer();