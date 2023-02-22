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
        
        // echo '<pre>';
        // print_r( $attribute );
        // echo '</pre>';

        if ( $attribute->get_name() == 'pa_onlajn-platforma' ) :
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
                
                <?php if ( $attribute->get_name() == 'pa_slozhnost' ) : ?>
                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 8V14M1 8L11 3L21 8L11 13L1 8Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5 11V16.5172C8 19.8276 14 19.8276 17 16.5172V11" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> 
                <?php elseif ( $attribute->get_name() == 'pa_tip-obucheniya' ) : ?>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.66699 3.5H6.66699C7.55105 3.5 8.39889 3.85119 9.02401 4.47631C9.64914 5.10143 10.0003 5.94928 10.0003 6.83333V18.5C10.0003 17.837 9.73693 17.2011 9.26809 16.7322C8.79925 16.2634 8.16337 16 7.50033 16H1.66699V3.5Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M18.3333 3.5H13.3333C12.4493 3.5 11.6014 3.85119 10.9763 4.47631C10.3512 5.10143 10 5.94928 10 6.83333V18.5C10 17.837 10.2634 17.2011 10.7322 16.7322C11.2011 16.2634 11.837 16 12.5 16H18.3333V3.5Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                <?php elseif ( $attribute->get_name() == 'pa_trudoustrojstvo' ) : ?>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.667 5.8335H3.33366C2.41318 5.8335 1.66699 6.57969 1.66699 7.50016V15.8335C1.66699 16.754 2.41318 17.5002 3.33366 17.5002H16.667C17.5875 17.5002 18.3337 16.754 18.3337 15.8335V7.50016C18.3337 6.57969 17.5875 5.8335 16.667 5.8335Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13.3337 17.5V4.16667C13.3337 3.72464 13.1581 3.30072 12.8455 2.98816C12.5329 2.67559 12.109 2.5 11.667 2.5H8.33366C7.89163 2.5 7.46771 2.67559 7.15515 2.98816C6.84259 3.30072 6.66699 3.72464 6.66699 4.16667V17.5" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                <?php elseif ( $attribute->get_name() == 'pa_sertifikat' ) : ?>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 14.4444V16.2222C8 16.6937 7.81563 17.1459 7.48744 17.4793C7.15925 17.8127 6.71413 18 6.25 18C5.78587 18 5.34075 17.8127 5.01256 17.4793C4.68437 17.1459 4.5 16.6937 4.5 16.2222V3.77778C4.5 3.30628 4.31563 2.8541 3.98744 2.5207C3.65925 2.1873 3.21413 2 2.75 2C2.28587 2 1.84075 2.1873 1.51256 2.5207C1.18437 2.8541 1 3.30628 1 3.77778V6.44444H3.625" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M19 14V16C19 16.5304 18.8043 17.0391 18.4561 17.4142C18.1078 17.7893 17.6354 18 17.1429 18H6" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 14V3.71429C16 3.25963 15.8174 2.82359 15.4923 2.5021C15.1673 2.18061 14.7264 2 14.2667 2H3" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M19 14H8" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                <?php elseif ( $attribute->get_name() == 'pa_format-obucheniya' ) : ?>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.6669 13.3334V5.83341C16.6669 5.39139 16.4913 4.96746 16.1787 4.6549C15.8662 4.34234 15.4422 4.16675 15.0002 4.16675H5.00022C4.55819 4.16675 4.13427 4.34234 3.82171 4.6549C3.50915 4.96746 3.33355 5.39139 3.33355 5.83341V13.3334M16.6669 13.3334H3.33355M16.6669 13.3334L17.7336 15.4584C17.7978 15.5859 17.8282 15.7278 17.8219 15.8704C17.8156 16.013 17.7727 16.1516 17.6974 16.2729C17.6221 16.3942 17.5169 16.4941 17.3919 16.5631C17.2669 16.6321 17.1263 16.6677 16.9836 16.6667H3.01689C2.87413 16.6677 2.73351 16.6321 2.60851 16.5631C2.48351 16.4941 2.37832 16.3942 2.30303 16.2729C2.22775 16.1516 2.18488 16.013 2.17855 15.8704C2.17222 15.7278 2.20264 15.5859 2.26689 15.4584L3.33355 13.3334" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                <?php endif; ?>

            </div>
            <div >
                <div class="l-features__title"><?php echo esc_html($tax_label); ?></div>
                <div class="l-features__value"><?php echo esc_html($display_result); ?></div>
            </div>
        </div>
    
    <?php endforeach; ?>
        
</div>