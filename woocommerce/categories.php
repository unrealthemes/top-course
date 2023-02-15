<?php 
$i = 1;
$tax_name = 'product_cat';
$term = get_queried_object();
$terms = [];

if ( is_archive() && $term->parent == 0 ) {
    $term_childs = get_terms( ['taxonomy' => $tax_name, 'parent' => $term->term_id] );
    if ( $term_childs ) {
        foreach ( $term_childs as $term_child ) {
            if ( $term_child->term_id != $term->term_id ) {
                $terms[ $term_child->term_id ] = $term_child;
            }
        }
    }
} else if ( is_archive() && $term->parent > 0 ) {
    $terms = [];
} else {    
    $term_parents = get_terms( ['taxonomy' => $tax_name, 'parent' => 0] );
    if ( $term_parents ) {
        foreach ( $term_parents as $term_parent ) {
            if ( $term_parent->term_id != $term->term_id ) {
                $terms[ $term_parent->term_id ] = $term_parent;
            }
        }
    }
} 

if ( ! $terms ) :
    return false;
endif;
?>

<div class="row_di main_tag">
    <div class="row_5_di">

        <?php 
        foreach ( (array)$terms as $key => $_term ) : 
            if ( $i > 10 ) break;
            unset($terms[ $key ]);
            $term_link = get_term_link($_term->term_id, $tax_name);
        ?>
            <a href="<?php echo esc_url($term_link); ?>">
                <?php echo esc_html($_term->name); ?>
            </a>
        <?php 
        $i++;
        endforeach; 
        ?>
        
        <?php if ( $terms ) : ?>
            <a class="seeall more" href="#" onclick="return false">
                + Еще <?php echo count($terms); ?>
            </a> 
            <div class="seeall_vn">  
                
            <?php 
            foreach ( (array)$terms as $_term ) : 
                $term_link = get_term_link($_term->term_id, $tax_name);
            ?>
                <a href="<?php echo esc_url($term_link); ?>">
                    <?php echo esc_html($_term->name); ?>
                </a>
            <?php endforeach; ?>

                <a class="seeall_close" title="Close">закрыть</a> 
            </div> 
        <?php endif; ?>

    </div>
</div> 