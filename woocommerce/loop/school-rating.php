<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $product;

$class = $args['class'];
$rating_data = $args['rating_data'];
$school_link = $args['school_link'];

if ( $rating_data['count'] == 0 ) {
    return false;
}
?>

<div class="cat_info <?php echo esc_attr($class); ?>">
    <div class="cat_rating">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.55163 0.908493C8.73504 0.53687 9.26496 0.53687 9.44837 0.908493L11.8226 5.71919C11.8954 5.86677 12.0362 5.96905 12.1991 5.99271L17.508 6.76415C17.9181 6.82374 18.0818 7.32772 17.7851 7.61699L13.9435 11.3616C13.8257 11.4765 13.7719 11.642 13.7997 11.8042L14.7066 17.0916C14.7766 17.5001 14.3479 17.8116 13.9811 17.6187L9.23267 15.1223C9.08701 15.0457 8.91299 15.0457 8.76733 15.1223L4.01888 17.6187C3.65207 17.8116 3.22335 17.5001 3.29341 17.0916L4.20028 11.8042C4.2281 11.642 4.17433 11.4765 4.05648 11.3616L0.21491 7.61699C-0.0818487 7.32772 0.0819064 6.82374 0.492017 6.76415L5.80094 5.99271C5.9638 5.96905 6.10458 5.86677 6.17741 5.71919L8.55163 0.908493Z" fill="#4967D0"/>
        </svg> 
        <span><?php echo esc_html($rating_data['rating']); ?></span>
    </div>
    <div class="cat_coment">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.5 12.5C17.5 12.942 17.3244 13.366 17.0118 13.6785C16.6993 13.9911 16.2754 14.1667 15.8333 14.1667H5.83333L2.5 17.5V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H15.8333C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V12.5Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg> 
        <span>
            <?php 
            echo sprintf( 
                '<a href="%s">%s о школе</a>', 
                esc_url($school_link),
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