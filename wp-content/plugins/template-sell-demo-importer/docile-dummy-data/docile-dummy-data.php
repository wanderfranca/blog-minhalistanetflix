<?php
/**
 * Demo Data of Intimate.
 *
 * @package Template Sell Demo Importer
 */
/*Disable PT branding.*/
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );
/**
 * Demo Data files.
 *
 * @since 1.0.0
 *
 * @return array Files.
 */
function templatesell_demo_importer_import_files() {
    return array(
    array(
        'import_file_name'=> __('Main Demo','templatesell-demo-importer'),
        'categories'      =>  array( 'Main Demo' ),
        'local_import_file'=> plugin_dir_path( __FILE__ ). 'dummy-data-files/main/main.xml',
        'local_import_widget_file' =>  plugin_dir_path( __FILE__ ) . 'dummy-data-files/main/main.wie',
        'local_import_customizer_file' =>  plugin_dir_path( __FILE__ ) . 'dummy-data-files/main/main.dat',
        'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'dummy-data-files/assets/main.jpg',
        'import_notice'              => __( 'Import the demo and check the options inside Appearance > Customize.', 'templatesell-demo-importer' ),
        'preview_url'                => 'https://www.templatesell.net/docile/',
    ),

    array(
        'import_file_name'=> __('News Demo','templatesell-demo-importer'),
        'categories'      =>  array( 'News' ),
        'local_import_file'=> plugin_dir_path( __FILE__ ) . 'dummy-data-files/news/news.xml',
        'local_import_widget_file'     =>  plugin_dir_path( __FILE__ ) . 'dummy-data-files/news/news.wie',
        'local_import_customizer_file' =>  plugin_dir_path( __FILE__ ) . 'dummy-data-files/news/news.dat',
        'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'dummy-data-files/assets/news.jpg',
        'import_notice'              => __( 'Import the demo and check the options inside Appearance > Customize.', 'templatesell-demo-importer' ),
        'preview_url'                => 'https://www.templatesell.net/docile-news/',
    ),
);

}
add_filter( 'pt-ocdi/import_files', 'templatesell_demo_importer_import_files' );


/**
 * Demo Data after import.
 *
 * @since 1.0.0
 */

function templatesell_demo_importer_after_import_setup() {
    // Assign front page and posts page (blog page).

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Primary', 'nav_menu' );
    $top_menu = get_term_by( 'name', 'Top Header', 'nav_menu' );
    $social_menu = get_term_by( 'name', 'Social Icons', 'nav_menu' );
    $footer_menu = get_term_by( 'name', 'Footer Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
        'menu-1' => $main_menu->term_id,
        'top' => $top_menu->term_id,
        'social' => $social_menu->term_id,
        'footer' => $footer_menu->term_id,
    )
);
}
add_action( 'pt-ocdi/after_import', 'templatesell_demo_importer_after_import_setup' );
