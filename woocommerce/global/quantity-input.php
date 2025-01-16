<?php
    defined( 'ABSPATH' ) || exit;
    
if ( $max_value && $min_value === $max_value ) { ?>
<div class="quantity hidden">
    <input type="hidden" id="<?php echo esc_attr( $input_id ); ?>" class="qty" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $min_value ); ?>" />
</div>
<?php
} else {
$label = ! empty( $args['product_name'] ) ? sprintf( esc_html__( '%s quantity', 'woocommerce' ), wp_strip_all_tags( $args['product_name'] ) ) : esc_html__( 'Quantity', 'woocommerce' );
?>
<div class="col-lg-2 col-sm-3 quantity">
    <?php do_action( 'woocommerce_before_quantity_input_field' ); ?>
    <input type="number" class="<?php echo esc_attr( join( ' ', (array) $classes ) ); ?> form-control qty rounded-0" id="<?php echo esc_attr( $input_id ); ?>" placeholder="<?php echo esc_attr( $placeholder ); ?>" required="true" step="<?php echo esc_attr( $step ); ?>" min="<?php echo esc_attr( $min_value ); ?>" max="<?php echo esc_attr( 0 < $max_value ? $max_value : '' ); ?>" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $input_value ); ?>" title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'woocommerce' ); ?>" size="4" inputmode="<?php echo esc_attr( $inputmode ); ?>"/>
    <?php do_action( 'woocommerce_after_quantity_input_field' ); ?>
</div>
<?php } ?>    
