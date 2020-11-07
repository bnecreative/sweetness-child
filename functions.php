<?php
/*
 * 	Main Child Theme Functions
 *
 * 	@author		Kerry Kline
 * 	@copyright	Copyright (c) 2020, Kerry Kline
 * 	@link		http://www.bnecreative.com
 * 	@package	Child Theme for BNE Sweetness v2 WordPress Framework
 *
*/



/* ===================================================================================
 * 	Run BNE Filters BEFORE the Framework is loaded
 * ================================================================================ */



/* ===================================================================================
 * 	Run BNE WordPress Framework (required)
 * ================================================================================ */


require_once( get_template_directory() . '/framework/bne-functions.php' );


/* ===================================================================================
 * 	Child Theme Functions
 * ================================================================================ */

/* 
 *	Enqueue Child Theme scripts
 *
*/
/*
function bne_childtheme_scripts(){

	// Child Theme JS
	wp_enqueue_script( 'bne-child-js', get_stylesheet_directory_uri() . '/assets/js/theme.js', array('jquery') );

}
add_action( 'wp_enqueue_scripts', 'bne_childtheme_scripts', 11 );
*/



/*
 *	Inline Header Scripts and Tags
*/
/*
function bne_child_wp_head() {

} 
add_action( 'wp_head', 'bne_child_wp_head' );
*/



/*
 *	Inline Footer Scripts/Content
*/
/*
function bne_child_wp_footer() {
	
} 
add_action( 'wp_footer', 'bne_child_wp_footer' );
*/



/* 
 *	Configure Theme Settings
 *
 *	Allows overriding parent theme settings and hooks.
 *
*/
function bne_child_theme_setup() {

	// Framework Page Option Overrides
	/*
	add_filter( 'bne_get_page_option', function($options) {
		if( is_singular('custom_post_type') ) {
			$options['sidebar_layout'] = 'left-sidebar';
		}
		return $options;
	});
	*/

	// Remove Footer Menu
	//unregister_nav_menu( 'footer-menu' );

	// Move Nav Button Location
	//remove_action( 'bne_header_before', 'bne_mobile_nav_btn' );
	//add_action( 'bne_header_menu_before', 'bne_mobile_nav_btn' );

	// Adjust Column Classes
	/*
	add_filter( 'bne_get_column_classes', function( $classes, $column, $layout ) {
		if( $layout == 'fourth_three_fourth' ) {
			if( $column == 'left-header' ) {
				$classes = 'col-md-2';
			} else {
				$classes = 'col-md-10';
			}
		}
		return $classes;
	}, 10, 3 );
	*/

	// Move Default Footer Widget Location
	//remove_action( 'bne_footer_content', 'bne_footer_content_default' );
	//add_action( 'bne_footer_before', 'bne_footer_widgets_alternate' );
	
	// Featured Area Shadow
	//add_filter( 'bne_featured_area_shadow', function() { return '4'; } );
	
	// Sidebar Layout Sizes and Breakpoints
	//add_filter( 'bne_sidebar_layout_width', function() { return '9-3'; } );
	//add_filter( 'bne_sidebar_layout_responsive', function() { return 'md'; } );
	//add_filter( 'bne_sidebar_layout_gutter', function() { return '60'; } );

	// Add Page Options
	/*
	add_action( 'cmb2_init_before_hookup', function() {
		$metabox = cmb2_get_metabox( 'bne_theme_meta_box_page' );
		if( $metabox ) {
	        $metabox->add_field( array(
	            'id'      	=>	'bne_page_action_bar',
	            'name'    	=>	'Action Bar Text',
	            'desc'		=>	'Enter a quick action message that is displayed before the page content',
	            'type'    	=>	'text',
	        ) );	
		}
	});
	*/

	// Enable basic dark styles on the frontend.
	// add_filter( 'bne_dark_theme_mode', '__return_true' );
	
	// Enable basic dark styles for the block editor.
	// add_filter( 'bne_editor_dark_theme_mode', '__return_true' );    

	// Enqueue Custom Google Fonts
	/*
	add_filter( 'bne_enqueue_google_font', function( $fonts ) {
		// Each font stack should look be formatted as: name:style1,style2. 
		$fonts[] = 'Srisakdi:400,700';
		return $fonts;
	});
	*/

	// Enqueue Editor Styles
	/*
	add_action( 'admin_enqueue_scripts', function() {
		$css = 'div { color: red; }';
		
		wp_add_inline_style( 'bne-blocks', $css );
	});
	*/
	
	// Enable FA Pseudo (CSS Before)
	/*
	add_filter( 'bne_fontawesome_setup', function($fa) {
		$fa['pseudo'] = true;
		return $fa;
	}, 10, 2);
	*/
	
}
add_action( 'after_setup_theme', 'bne_child_theme_setup' );

/*
 *	Add Customizer Options
 *
*/
/*
Kirki::add_field( $kirki_prefix, array(
	'type'			=>	'background',
	'settings'		=>	'footer_widgets_bg',
	'label'			=>	esc_attr__( 'Footer Widgets Background', 'bne' ),
	'description'	=>	'',
	'section'		=>	$kirki_prefix.'_section_backgrounds',
	'default'		=>	array(
		'background-color'		=>	'',
		'background-image'		=>	'',
		'background-repeat'		=>	'no-repeat',
		'background-position'	=>	'center center',
		'background-size'		=>	'cover',
		'background-attachment'	=>	'scroll',
	),
) );
*/


/*
 *	Header Before Content
 *
 *	Adds custom content above the main header.
*/
/*
function bne_child_header_before() {	
	?>
	<div id="header-above">
		<div class="content-area-width">
			<div class="row">
				<div class="col-md-6">
					Left
				</div>
				<div class="col-md-6">
					Right
				</div>
			</div>
		</div>
	</div>
	<?php
}
add_action( 'bne_header_before', 'bne_child_header_before' );
*/


/*
 *	Custom Featured Area
 *
 *	Adds custom content above the main header.
*/
/*
function bne_child_featured_content() {	
	?>
	<div id="featured-wrapper">
		<div class="content-area-width">
			<div class="row">
				<div class="col-md-6">
					Left
				</div>
				<div class="col-md-6">
					Right
				</div>
			</div>
		</div> <!-- /.content-area-width -->
	</div> <!-- /#featured-wrapper -->
	<?php
}
add_action( 'bne_featured_area', 'bne_child_featured_content' );
*/


/* Display Social Links in Footer */
/*
add_action( 'bne_footer_sub_content_before', function() {
	echo bne_contact_bar( 
		$location = 'footer', 
		$color = 'dark', 
		$shape = 'transparent', 
		$class = '', 
		$size = '60px', 
		$align = 'center', 
		$target = '' 
	);
});
*/


/* Display Social Links within the menu */
/*
add_action( 'bne_header_menu_addon', function() {
	$contact_bar = get_theme_mod( 'header_contact_bar', true );
	if( $contact_bar == 'true' ) {
		echo bne_contact_bar( 'header' );
	}
});
*/


/* ===================================================================================
 * 	WP Core
 * ================================================================================ */



/* ===================================================================================
 * 	Plugins
 * ================================================================================ */

/*
 *	Gravity Forms
*/
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

add_filter( 'gform_form_list_columns', function($columns) {
	$columns['shortcode'] = 'Shortcode';
	return $columns;
}, 10, 1 );

add_action( 'gform_form_list_column_shortcode', function($item) {
	echo '[gravityform id="'.$item->id.'" title="false" description="false" ajax="true"]';
}, 10, 1 );



// Add Captcha terms to forms
/*
add_filter( 'gform_get_form_filter', function( $form_string, $form ) {
	$terms = '<style>.gf-recaptcha-terms { display: block; }.gfield.h-label label.gfield_label {display: none !important;}</style>';
			
	// Google Terms
	//$terms .= '<div class="gf-recaptcha-terms small my-3"><em>This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy" style="color: inherit;">Privacy Policy</a> and <a href="https://policies.google.com/terms" style="color: inherit;">Terms of Service</a> apply.</em></div>';

	// hCaptcha Terms
	$terms .= '<div class="gf-recaptcha-terms small my-3"><em>This site is protected by hCaptcha and its <a href="https://hcaptcha.com/privacy" style="color: inherit;">Privacy Policy</a> and <a href="https://hcaptcha.com/terms" style="color: inherit;">Terms of Service</a> apply.</em></div>';

	$form_string = str_replace('</form>', '</form>'.$terms, $form_string);
	return $form_string;
}, 10, 2);
*/