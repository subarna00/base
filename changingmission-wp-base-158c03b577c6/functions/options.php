<?php
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title' 	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
    ));
	acf_add_options_page(array(
		'page_title' 	=> 'Ads Settings',
		'menu_title' 	=> 'Advertisements',
		'menu_slug' 	=> 'ads-settings',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
    ));
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Post Settings',
		'menu_title' 	=> 'Post Setting',
        'parent_slug' 	=> 'edit.php',
        'capability'    => 'edit_posts'
	));
	
}