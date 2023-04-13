<?php

/**
 * Template part for displaying footer layout four
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dustrilox
*/

$footer_bg_img = get_theme_mod( 'dustrilox_footer_bg' );
$dustrilox_footer_logo = get_theme_mod( 'dustrilox_footer_logo' );
$dustrilox_footer_top_space = function_exists('get_field') ? get_field('dustrilox_footer_top_space') : '0';
$dustrilox_copyright_center = $dustrilox_footer_logo ? 'col-lg-4 offset-lg-4 col-md-6 text-right' : 'col-lg-12 text-center';
$dustrilox_footer_bg_url_from_page = function_exists( 'get_field' ) ? get_field( 'dustrilox_footer_bg' ) : '';
$dustrilox_footer_bg_color_from_page = function_exists( 'get_field' ) ? get_field( 'dustrilox_footer_bg_color' ) : '';
$footer_bg_color = get_theme_mod( 'dustrilox_footer_bg_color' );

// bg image
$bg_img = !empty( $dustrilox_footer_bg_url_from_page['url'] ) ? $dustrilox_footer_bg_url_from_page['url'] : $footer_bg_img;

// bg color
$bg_color = !empty( $dustrilox_footer_bg_color_from_page ) ? $dustrilox_footer_bg_color_from_page : $footer_bg_color;


// footer_columns
$footer_columns = 0;
$footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

for ( $num = 1; $num <= $footer_widgets; $num++ ) {
    if ( is_active_sidebar( 'footer-4-' . $num ) ) {
        $footer_columns++;
    }
}

switch ( $footer_columns ) {
case '1':
    $footer_class[1] = 'col-lg-12';
    break;
case '2':
    $footer_class[1] = 'col-lg-6 col-md-6';
    $footer_class[2] = 'col-lg-6 col-md-6';
    break;
case '3':
    $footer_class[1] = 'col-xl-4 col-lg-6 col-md-5';
    $footer_class[2] = 'col-xl-4 col-lg-6 col-md-7';
    $footer_class[3] = 'col-xl-4 col-lg-6';
    break;
case '4':
    $footer_class[1] = 'col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7';
    $footer_class[2] = 'col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5';
    $footer_class[3] = 'col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5';
    $footer_class[4] = 'col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7';
    break;
default:
    $footer_class = 'col-xl-3 col-lg-3 col-md-6';
    break;
}

?>

<!-- footer area start -->

<footer>
    <div class="footer__area footer__black">
        <?php if ( is_active_sidebar('footer-4-1') OR is_active_sidebar('footer-4-2') OR is_active_sidebar('footer-4-3') OR is_active_sidebar('footer-4-4') ): ?>
       <div class="footer__top black-bg-5 pt-95 pb-45" data-bg-color="<?php print esc_attr( $bg_color );?>" data-top-space="<?php print esc_attr($dustrilox_footer_top_space); ?>px"  data-background="<?php print esc_url( $bg_img );?>">
          <div class="container">
             <div class="row">
                <?php
                    if ( $footer_columns < 4 ) {
                    print '<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">';
                    dynamic_sidebar( 'footer-4-1' );
                    print '</div>';

                    print '<div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">';
                    dynamic_sidebar( 'footer-4-2' );
                    print '</div>';

                    print '<div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">';
                    dynamic_sidebar( 'footer-4-3' );
                    print '</div>';

                    print '<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">';
                    dynamic_sidebar( 'footer-4-4' );
                    print '</div>';
                    } else {
                        for ( $num = 1; $num <= $footer_columns; $num++ ) {
                            if ( !is_active_sidebar( 'footer-4-' . $num ) ) {
                                continue;
                            }
                            print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                            dynamic_sidebar( 'footer-4-' . $num );
                            print '</div>';
                        }
                    }
                ?>
             </div>
          </div>
       </div>
       <?php endif; ?>
       <div class="footer__bottom black-bg-5">
          <div class="container">
             <div class="footer__bottom-inner">
                <div class="row">
                   <div class="col-xxl-12">
                      <div class="footer__copyright text-center">
                         <p><?php print dustrilox_copyright_text(); ?></p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</footer>