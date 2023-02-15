<?php 
global $product;
$attributes = $product->get_attributes();

if ( ! $attributes ) {
    return;
}
?>

<div class="info_block white_block"> 

    <?php 
    foreach ( $attributes as $attribute ) : 

        if ( $attribute->get_variation() ) :
            continue;
        endif;

        $name = $attribute->get_name();
        $terms = wp_get_post_terms( $product->get_id(), $name, 'all' );
        $tax = $terms[0]->taxonomy;
        $object_taxonomy = get_taxonomy($tax);

        if ( isset ($object_taxonomy->labels->singular_name) ) {
            $tax_label = $object_taxonomy->labels->singular_name;
        } elseif ( isset( $object_taxonomy->label ) ) {
            $tax_label = $object_taxonomy->label;
            if ( 0 === strpos( $tax_label, 'Product ' ) ) {
                $tax_label = substr( $tax_label, 8 );
            }
        }
        $display_result = '';
        $tax_terms = array();
        foreach ( $terms as $term ) {
            $single_term = esc_html( $term->name );
            array_push( $tax_terms, $single_term );
        }
        $display_result .= implode(', ', $tax_terms);
    ?>
   
        <div class="flex items-start no-wrap" >
            <div class="q-mr-xs" >
                
                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 8V14M1 8L11 3L21 8L11 13L1 8Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M5 11V16.5172C8 19.8276 14 19.8276 17 16.5172V11" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg> 

            </div>
            <div >
                <div class="l-features__title"><?php echo esc_html($tax_label); ?></div>
                <div class="l-features__value"><?php echo esc_html($display_result); ?></div>
            </div>
        </div>
    
    <?php endforeach; ?>
        
</div>