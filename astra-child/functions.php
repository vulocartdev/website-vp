<?php
/** VuloPilot Astra child theme. No Node.js or build step needed on WordPress. */
defined( 'ABSPATH' ) || exit;

function vulopilot_set_page( $page, $slug = '' ) {
    $GLOBALS['vulopilot_page'] = array( 'page' => $page, 'slug' => $slug );
}
function vulopilot_is_template() {
    $template = get_page_template_slug();
    return isset( $GLOBALS['vulopilot_page'] ) || 0 === strpos( (string) $template, 'templates/' );
}
function vulopilot_asset_base() {
    return apply_filters( 'vulopilot_asset_base', get_stylesheet_directory_uri() . '/assets/media' );
}
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'astra-child-style', get_stylesheet_uri(), array( 'astra-theme-css' ), '1.0.0' );
    if ( ! vulopilot_is_template() ) { return; }
    wp_enqueue_style( 'vulopilot-font', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&display=swap', array(), null );
    wp_enqueue_style( 'vulopilot-pages', get_stylesheet_directory_uri() . '/assets/css/vulopilot.css', array( 'astra-child-style' ), '1.0.0' );
    wp_enqueue_script( 'vulopilot-pages', get_stylesheet_directory_uri() . '/assets/js/vulopilot.js', array(), '1.0.0', true );
    $config = $GLOBALS['vulopilot_page'] ?? array( 'page' => 'home', 'slug' => '' );
    $config['home'] = untrailingslashit( home_url( '/' ) );
    $config['assets'] = vulopilot_asset_base();
    wp_add_inline_script( 'vulopilot-pages', 'window.VuloPilot = ' . wp_json_encode( $config ) . ';', 'before' );
} );
add_filter( 'body_class', function ( $classes ) {
    if ( vulopilot_is_template() ) { $classes[] = 'vulopilot-template'; }
    return $classes;
} );
add_filter( 'astra_page_layout', function ( $layout ) { return vulopilot_is_template() ? 'no-sidebar' : $layout; } );
add_filter( 'astra_the_title_enabled', function ( $enabled ) { return vulopilot_is_template() ? false : $enabled; } );
add_filter( 'astra_get_content_layout', function ( $layout ) { return vulopilot_is_template() ? 'page-builder' : $layout; } );

// WordPress normally scans only one template subdirectory; explicitly register all menu folders.
add_filter( 'theme_page_templates', function ( $templates ) {
    $routes = json_decode( file_get_contents( get_stylesheet_directory() . '/routes.json' ), true );
    foreach ( $routes as $route ) { $templates[ $route['file'] ] = $route['title']; }
    return $templates;
} );

// Optional setup: create missing pages and assign their matching templates.
// Runs only after an administrator clicks the setup button and passes the nonce check.
add_action( 'admin_menu', function () {
    add_theme_page( 'VuloPilot pages', 'VuloPilot pages', 'manage_options', 'vulopilot-pages', 'vulopilot_setup_screen' );
} );
function vulopilot_setup_screen() {
    if ( ! current_user_can( 'manage_options' ) ) { return; }
    echo '<div class="wrap"><h1>VuloPilot pages</h1><p>Create the supplied pages and assign templates. Existing pages are left unchanged.</p><form method="post" action="' . esc_url( admin_url( 'admin-post.php' ) ) . '">';
    wp_nonce_field( 'vulopilot_create_pages' );
    echo '<input type="hidden" name="action" value="vulopilot_create_pages">';
    submit_button( 'Create missing pages' );
    echo '</form></div>';
}
add_action( 'admin_post_vulopilot_create_pages', function () {
    if ( ! current_user_can( 'manage_options' ) ) { wp_die( 'Access denied.' ); }
    check_admin_referer( 'vulopilot_create_pages' );
    $routes = json_decode( file_get_contents( get_stylesheet_directory() . '/routes.json' ), true );
    usort( $routes, function ( $a, $b ) { return substr_count( $a['route'], '/' ) <=> substr_count( $b['route'], '/' ); } );
    foreach ( $routes as $route ) {
        $page_path = $route['route'] ?: 'home';
        if ( get_page_by_path( $page_path ) ) { continue; }
        $parent_path = dirname( $page_path );
        $parent = '.' !== $parent_path ? get_page_by_path( $parent_path ) : null;
        $id = wp_insert_post( array( 'post_type' => 'page', 'post_status' => 'publish', 'post_title' => $route['title'], 'post_name' => basename( $page_path ), 'post_parent' => $parent ? $parent->ID : 0 ), true );
        if ( ! is_wp_error( $id ) ) { update_post_meta( $id, '_wp_page_template', $route['file'] ); }
    }
    wp_safe_redirect( admin_url( 'edit.php?post_type=page' ) );
    exit;
} );
