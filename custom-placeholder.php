/*-----------------------------------------------------------------------------------*/
// Featured image place holder
/*-----------------------------------------------------------------------------------*/
if( !function_exists('houzez_get_image_placeholder')){
    function houzez_get_image_placeholder( $featured_image_size ){

        global $_wp_additional_image_sizes;
        $title_img_text = get_bloginfo('name');
        $feat_img_width = 0;
        $feat_img_height = 0;

        if ( in_array( $featured_image_size , array( 'thumbnail', 'medium', 'large' ) ) ) {

            $feat_img_width = get_option( $featured_image_size . '_size_w' );
            $feat_img_height = get_option( $featured_image_size . '_size_h' );

        } elseif ( isset( $_wp_additional_image_sizes[ $featured_image_size ] ) ) {

            $feat_img_width = $_wp_additional_image_sizes[ $featured_image_size ]['width'];
            $feat_img_height = $_wp_additional_image_sizes[ $featured_image_size ]['height'];

        }

        if( intval( $feat_img_width ) > 0 && intval( $feat_img_height ) > 0 ) {
            return '<img src="https://lovemyfield.com/wp-includes/images/media/placeholder-field.jpg" />';
        }

        return '';
    }
}

if( !function_exists('houzez_get_image_placeholder_url')){
    function houzez_get_image_placeholder_url( $image_size ){

        global $_wp_additional_image_sizes;
        $img_width = 0;
        $img_height = 0;
        $img_text = get_bloginfo('name');

        if ( in_array( $image_size , array( 'thumbnail', 'medium', 'large' ) ) ) {

            $img_width = get_option( $image_size . '_size_w' );
            $img_height = get_option( $image_size . '_size_h' );

        } elseif ( isset( $_wp_additional_image_sizes[ $image_size ] ) ) {

            $img_width = $_wp_additional_image_sizes[ $image_size ]['width'];
            $img_height = $_wp_additional_image_sizes[ $image_size ]['height'];

        }

        if( intval( $img_width ) > 0 && intval( $img_height ) > 0 ) {
            return '<img src="https://lovemyfield.com/wp-includes/images/media/placeholder-field.jpg" />';
        }

        return '';
    }
}

if( !function_exists( 'houzez_image_placeholder' ) ) {
    function houzez_image_placeholder( $image_size ) {
        echo houzez_get_image_placeholder( $image_size );
    }
}
