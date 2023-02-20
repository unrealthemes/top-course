<?php
/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<form class="woocommerce-ordering" method="get" style="display: none;">
	<select name="orderby" class="orderby" aria-label="<?php esc_attr_e( 'Shop order', 'woocommerce' ); ?>">
		<?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
			<option value="<?php echo esc_attr( $id ); ?>" <?php selected( $orderby, $id ); ?>><?php echo esc_html( $name ); ?></option>
		<?php endforeach; ?>
	</select>
	<input type="hidden" name="paged" value="1" />
	<?php wc_query_string_form_fields( null, array( 'orderby', 'submit', 'paged', 'product-page' ) ); ?>
</form>

<div class="produkt_short pk_vizible">

    <?php 
    foreach ( $catalog_orderby_options as $id => $name ) : 
        $name = ($orderby == $id) ? '<span>' . esc_html( $name ) . '</span>' : esc_html( $name );
        $active_class = ($orderby == $id) ? 'active' : '';
        $svg = ($orderby == $id) ? '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.22217 2.55566H15" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.22217 5.66675H12.6666" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.22217 8.77783H10.3333" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 11.8892L3.33334 14.2225L5.66668 11.8892" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M3.3335 12.6667V1.77783" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg> ' : '';
    ?>

        <a data-orderby="<?php echo esc_attr( $id ); ?>" class="<?php echo $active_class; ?>">
            <?php echo $name; ?>
            <?php echo $svg; ?>
        </a>

    <?php endforeach; ?>

</div> 