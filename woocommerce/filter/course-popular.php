<?php 
$title = get_field('title_pc_filter', 'option');
$desc = get_field('desc_pc_filter', 'option');
$courses = get_field('courses_pc_filter', 'option');
?>

<div class="popular">
    
    <?php if ($title) : ?>
        <h3><?php echo esc_html($title); ?></h3> 
    <?php endif; ?>

    <?php if ($desc) : ?>
        <div class="popular_desk"><?php echo nl2br($desc); ?></div>
    <?php endif; ?>

    <?php if ($courses) : ?>
        <div class="list_list">
            <ul>

            <?php 
            foreach ($courses as $course) : 
                $link = get_permalink( $course->ID );
            ?>

                <li>
                    <a href="<?php echo esc_url($link); ?>">
                        <?php echo get_the_title($course->ID); ?>
                    </a>
                </li>
           
            <?php endforeach; ?>

            </ul>
        </div> 
    <?php endif; ?>

</div>