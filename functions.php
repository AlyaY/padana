<?php

// enable auto-update for plugins and core
add_filter( 'allow_dev_auto_core_updates', '__return_true' );
add_filter( 'allow_minor_auto_core_updates', '__return_true' );
add_filter( 'allow_major_auto_core_updates', '__return_true' );
add_filter( 'auto_update_plugin', '__return_true' );

// add menu
function register_menu() {
  register_nav_menu( 'main', 'Главное меню' );
}
add_action( 'after_setup_theme', 'register_menu' );

function ck_attributes_nav_link( $atts, $item, $args ) {
	$menu = wp_get_nav_menu_items( 'Главное меню' );
	foreach ( $menu as $menu_object ) {
		$menu_classes = [];
		foreach ( $menu_object->classes as $menu_object_class ) {
			$menu_classes[] = $menu_object_class;
		}
		$classes = implode( " ", $menu_classes );
		if ( $item->ID == $menu_object->ID ) {
			$atts['class'] = "menu__link js-scroll-to";
		}
	}
	
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'ck_attributes_nav_link', 10, 3 );

// disable admin bar
function remove_admin_bar() {
	show_admin_bar( false );
}
add_action( 'after_setup_theme', 'remove_admin_bar' );

// hide content editor
function hide_editor() {
	remove_post_type_support( 'page', 'editor' );
}
add_action( 'admin_init', 'hide_editor' );

// remove useless pages from admin
function remove_pages() {
    remove_menu_page( 'edit.php' );
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_pages' );

// add fields to general options page
function register_fields() {
    $settingFields = array(
        'phone' => 'Контактный телефон'
    );

    add_settings_section(
		'site_contacts',
		'Контактная информация',
		'useless_callback',
        'general'
	);

    foreach ( $settingFields as $field => $label ) {
        register_setting( 'general', 'site_' . $field, 'esc_attr' );
        add_settings_field(
    		'site_' . $field,
    		'<label for="site_' . $field . '">' . __( $label , 'padana_theme' ) . '</label>',
            function() use ($field) {
                $value = get_option( 'site_' . $field, '' );
                echo '<input type="text" id="site_' . $field . '" name="site_' . $field . '" value="' . esc_attr( $value ) . '" />';
            },
    		'general',
            'site_contacts'
    	);
    }
}

function useless_callback() {
    return true; // this callback required but useless
}
add_action( 'admin_init', 'register_fields' );

// add image size for portfolio
add_image_size( 'portfolio', 595, 340, true );