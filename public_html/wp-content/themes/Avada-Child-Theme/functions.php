<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );
// hook the translation filtersadd_filter(  'gettext',  'change_post_to_article'  );add_filter(  'ngettext',  'change_post_to_article'  );function change_post_to_article( $translated ) {     $translated = str_ireplace(  'Post',  'Article',  $translated );  // ireplace is PHP5 only     return $translated;}