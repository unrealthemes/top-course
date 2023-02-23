<?php 
$category_obj = $args['category_obj'];
$title = get_field('title_inf_filter', $category_obj);
$desc = get_field('desc_inf_filter', $category_obj);
?>
 
<div class="cat_text">

    <?php if ($title) : ?>
        <h2><?php echo esc_html($title); ?></h2> 
    <?php endif; ?>

    <?php if ($desc) : ?>
        <?php echo nl2br($desc); ?>
    <?php endif; ?>

</div> 