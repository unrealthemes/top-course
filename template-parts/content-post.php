<?php if ( is_single() ) : ?>

    <article class="container_di_860 blog_post_content">
        <div class="row_di"> 
            
            <?php 
            echo get_the_post_thumbnail( 
                get_the_ID(), 
                'full', 
                []
            ); 
            ?>
            
            <div class="container_di_640">
                <?php the_title('<h1>', '</h1>'); ?>
                <?php the_content(); ?>
            </div> 
            
        </div>
    </article>

<?php else : ?>

    <div class="col_4_di" data-id="<?php echo get_the_ID(); ?>">
        <div class="home_blog_item item_block_white">
            <div class="div home_blog_item_img">
                <a href="<?php the_permalink(); ?>">
                    <?php 
                    echo get_the_post_thumbnail( 
                        get_the_ID(), 
                        'large', 
                        []
                    ); 
                    ?>
                </a>
            </div>
            <div class="div home_blog_item_title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </div> 
            <div class="div home_blog_niz"> 
                <?php echo ut_get_the_category_list('  '); ?>
                <div class="data"><?php echo get_the_date('d.m.y'); ?></div>
            </div> 
        </div>
    </div>

<?php endif; ?>