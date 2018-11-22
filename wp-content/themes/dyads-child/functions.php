<?php
/*Questo file è parte di dyads-child, dyad-2-wpcom child theme.

Tutte le funzioni di questo file saranno caricate prima delle funzioni del tema genitore-
Per saperne di piùhttps://codex.wordpress.org/Child_Themes.

Nota: questa funzione carica prima il foglio di stile genitore, poi il foglio di stile figlio.
(non toccare se non sai cosa stai facendo)
*/

function dyads_child_enqueue_child_styles() {
$parent_style = 'parent-style'; 
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 
		'child-style', 
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );
	}
add_action( 'wp_enqueue_scripts', 'dyads_child_enqueue_child_styles' );

/*Scrivi qui le tue funzioni */

//add_theme_support("html5", array('search_form'));

function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Custom search', 'dyads-child' ),
            'id' => 'custom-top-search-bar',
            'description' => __( 'Top sidebar', 'dyads-child' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}

add_action( 'widgets_init', 'my_custom_sidebar' );
