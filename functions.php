<?php
add_theme_support('title-tag');

function klise_menus()
{
    register_nav_menus(
        array(
            'main-menu' => _('Main Menu'),
            'footer-menu' => _('Footer Menu')
        )
    );
}
add_action('init', 'klise_menus');

function klise_check_active_menu($menu_item)
{
    global $wp;
    $actual_link = home_url($wp->request) . '/';
    if ($actual_link == $menu_item->url) {
        return 'active';
    }
    return '';
}

function klise_customizer($wp_customize) {
    
    $wp_customize->add_section( 'author_section' , array(
        'title'       => __( 'Author Section', 'klise' ),
        'description' => 'Author section settings.',
    ));

    $wp_customize->add_setting( 'author_image', array(
        'default' => ''
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'author_image', array(
        'label'    => __( 'Author image', 'urlista_theme' ),
        'section'  => 'author_section',
        'settings' => 'author_image',
    )));

    $wp_customize->add_setting( 'author_name', array(
        'capability' => 'edit_theme_options',
        'default' => 'Wordpress Klisé',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control( 'author_name', array(
        'type' => 'text',
        'section' => 'author_section',
        'label' => __( 'Author Name' ),
    ));

    $wp_customize->add_setting( 'author_bio', array(
        'capability' => 'edit_theme_options',
        'default' => 'The minimalist Wordpress theme, light and dark mode support, for running a personal site and blog, meet Klisé theme at <a href="https://github.com/enderkus/klise">@github</a>.',
    ));

    $wp_customize->add_control( 'author_bio', array(
        'type' => 'textarea',
        'section' => 'author_section',
        'label' => __( 'Author Bio' ),
    ));

    $wp_customize->add_section( 'klise_theme_settings' , array(
        'title'       => __( 'Klisé Settings', 'klise' ),
        'description' => 'Theme settings.',
    ));

    $wp_customize->add_setting( 'copyright_text', array(
        'capability' => 'edit_theme_options',
        'default' => '&copy; 2023 Klisé',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control( 'copyright_text', array(
        'type' => 'text',
        'section' => 'klise_theme_settings',
        'label' => __( 'Copyright Text' ),
    ));

}

add_action('customize_register', 'klise_customizer');

function klise_end_point_register()
{
    register_rest_route('klise/v1', 'postlist', [
        'methods'  => WP_REST_SERVER::READABLE,
        'callback' => 'klise_end_point_results'
    ]);
}
 
function klise_end_point_results($data)
{
    $search_query = new WP_Query([
        'post_type'      => ['post'],
        'posts_per_page' => -1,
    ]);
 
    $results = [];
    // proceed to database query
    while ($search_query->have_posts()) {
        $search_query->the_post();
 
        array_push($results, [
            'title'     => get_the_title(),
            'url' => get_the_permalink(),
            'description' => get_the_excerpt()
        ]);
    }
 
    wp_reset_postdata();
 
    return $results;
}
 
add_action('rest_api_init', 'klise_end_point_register');