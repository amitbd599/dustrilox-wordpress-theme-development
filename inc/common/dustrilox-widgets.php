<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dustrilox_widgets_init() {

    $footer_style_2_switch = get_theme_mod( 'footer_style_2_switch', false );
    $footer_style_3_switch = get_theme_mod( 'footer_style_3_switch', false );
    $footer_style_4_switch = get_theme_mod( 'footer_style_4_switch', false );

    /**
     * blog sidebar
     */
    register_sidebar( [
        'name'          => esc_html__( 'Blog Sidebar', 'dustrilox' ),
        'id'            => 'blog-sidebar',
        'description'          => esc_html__( 'Set Your Blog Widget', 'dustrilox' ),
        'before_widget' => '<div id="%1$s" class="blog-sidebar__widget mb-60 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="blog-sidebar__widget-head mb-30"> <h3 class="blog-sidebar__widget-title">',
        'after_title'   => '</h3></div>',
    ] );


    $footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

    // footer default
    for ( $num = 1; $num <= $footer_widgets; $num++ ) {
        register_sidebar( [
            'name'          => sprintf( esc_html__( 'Footer Style 1 : %1$s', 'dustrilox' ), $num ),
            'id'            => 'footer-1-' . $num,
            'description'   => sprintf( esc_html__( 'Footer column %1$s', 'dustrilox' ), $num ),
            'before_widget' => '<div id="%1$s" class="footer__widget footer-default-widget footer__col-'.$num.' mb-40 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="footer__widget-title">',
            'after_title'   => '</h5>',
        ] );
    }

    // footer 2
    if ( $footer_style_2_switch ) {
        for ( $num = 1; $num <= $footer_widgets; $num++ ) {

            register_sidebar( [
                'name'          => sprintf( esc_html__( 'Footer Style 2 : %1$s', 'dustrilox' ), $num ),
                'id'            => 'footer-2-' . $num,
                'description'   => sprintf( esc_html__( 'Footer Style 2 : %1$s', 'dustrilox' ), $num ),
                'before_widget' => '<div id="%1$s" class="footer__widget footer-default-widget  footer__col-'.$num.' mb-50 %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h5 class="footer__widget-title">',
                'after_title'   => '</h5>',
            ] );
        }
    }

    // footer 3
    if ( $footer_style_3_switch ) {
        for ( $num = 1; $num <= $footer_widgets + 1; $num++ ) {
            register_sidebar( [
                'name'          => sprintf( esc_html__( 'Footer Style 3 : %1$s', 'dustrilox' ), $num ),
                'id'            => 'footer-3-' . $num,
                'description'   => sprintf( esc_html__( 'Footer Style 3 : %1$s', 'dustrilox' ), $num ),
                'before_widget' => '<div id="%1$s" class="footer__widget footer__widget-3 footer-col-3-'.$num.' mb-50 %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h5 class="footer__widget-title">',
                'after_title'   => '</h5>',
            ] );
        }
    }


}
add_action( 'widgets_init', 'dustrilox_widgets_init' );