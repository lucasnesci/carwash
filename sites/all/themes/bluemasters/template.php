<?php

/**
* Override or insert variables into the html template.
*/
function bluemasters_preprocess_html(&$variables) {
	if (!theme_get_setting('responsive_respond','bluemasters')):
	drupal_add_css(path_to_theme() . '/css/basic-layout.css', array('group' => CSS_THEME, 'browsers' => array('IE' => '(lte IE 8)&(!IEMobile)', '!IE' => FALSE), 'preprocess' => FALSE));
	endif;

	drupal_add_css(path_to_theme() . '/css/custom/fancybox/jquery.fancybox.css', array('type' => 'file'));
	drupal_add_js(path_to_theme() . '/js/custom/jquery-1.10.1.min.js', array('type' => 'file'));
	drupal_add_js(path_to_theme() . '/js/custom/jquery.noConflict.js', array('type' => 'file'));
	//drupal_add_js('jq(document).ready(function () { jq("div.view-id-gallery .view-content .views-row").find("a").addClass("fancybox").attr("rel", "group"); });', array('type' => 'inline', 'scope' => 'footer', 'weight' => 5));
	drupal_add_js(path_to_theme() . '/js/custom/fancybox/custom.fancybox.js', array('type' => 'file'));
	drupal_add_js(path_to_theme() . '/js/custom/fancybox/jquery.fancybox.js', array('type' => 'file'));
	//drupal_add_js('jq(document).ready(function () { jq(".fancybox").fancybox(); });' , array('type' => 'inline', 'scope' => 'footer', 'weight' => 6));

}

function bluemasters_preprocess_views_view_fields(&$vars) {
	/*echo '<pre>';
	foreach ($vars as $key => $a) {
		var_dump($key);
	}
	var_dump($vars);
	die();*/
}

/**
 * Add javascript files for jquery slideshow.
 */
if (theme_get_setting('slideshow_js','bluemasters')):

	drupal_add_js(drupal_get_path('theme', 'bluemasters') . '/js/jquery.flexslider-min.js');

	//Initialize slideshow using theme settings
	$effect=theme_get_setting('slideshow_effect','bluemasters');
	$effect_time=theme_get_setting('slideshow_effect_time','bluemasters')*1000;
	$slideshow_controls=theme_get_setting('slideshow_controls','bluemasters');
	$slideshow_random=theme_get_setting('slideshow_random','bluemasters');
	$slideshow_pause=theme_get_setting('slideshow_pause','bluemasters');
	$slideshow_touch=theme_get_setting('slideshow_touch','bluemasters');
	$animation_time=theme_get_setting('slideshow_animation_time','bluemasters')*1000;

	drupal_add_js('
		jQuery.noConflict();
		jQuery(document).ready(function($){

			$(window).load(function() {

				$(".flexslider").fadeIn("slow");

				$(".flexslider").flexslider({
				animationLoop: true,
				animation: "'.$effect.'",
				animationSpeed: "'.$animation_time.'",
				controlNav: '.$slideshow_controls.',
				directionNav: false,
				touch: '.$slideshow_touch.',
				pauseOnHover: '.$slideshow_pause.',
				slideshowSpeed: '.$effect_time.',
				randomize: '.$slideshow_random.',
				controlsContainer: "#slideshow",
				});
			});
		});  /* JQUERY ENDS */',
		array('type' => 'inline', 'scope' => 'footer', 'weight' => 5));

endif;


/**
 * Page alter.
 */
function bluemasters_page_alter($page) {

	if (theme_get_setting('responsive_meta','bluemasters')):
		$mobileoptimized = array(
			'#type' => 'html_tag',
			'#tag' => 'meta',
			'#attributes' => array(
			'name' =>  'MobileOptimized',
			'content' =>  'width'
			)
		);

		$handheldfriendly = array(
			'#type' => 'html_tag',
			'#tag' => 'meta',
			'#attributes' => array(
			'name' =>  'HandheldFriendly',
			'content' =>  'true'
			)
		);

		$viewport = array(
			'#type' => 'html_tag',
			'#tag' => 'meta',
			'#attributes' => array(
			'name' =>  'viewport',
			'content' =>  'width=device-width, initial-scale=1'
			)
		);

		drupal_add_html_head($mobileoptimized, 'MobileOptimized');
		drupal_add_html_head($handheldfriendly, 'HandheldFriendly');
		drupal_add_html_head($viewport, 'viewport');
	endif;
}


/**
 * Add Javascript for responsive mobile menu
 */
if (theme_get_setting('responsive_menu_state','bluemasters')) {

$responsive_menu_switchwidth=theme_get_setting('responsive_menu_switchwidth','bluemasters');
$responsive_menu_topoptiontext=theme_get_setting('responsive_menu_topoptiontext','bluemasters');

drupal_add_js(drupal_get_path('theme', 'bluemasters') .'/js/jquery.mobilemenu.min.js');
drupal_add_js('
jQuery(document).ready(function($) {

	$("#navigation > ul.menu, #navigation ul.sf-menu, #navigation .content > ul.menu").mobileMenu({
	prependTo: "#navigation",
	combine: false,
	switchWidth: '.$responsive_menu_switchwidth.',
	topOptionText: "'.$responsive_menu_topoptiontext.'"
	});

});', array('type' => 'inline', 'scope' => 'footer', 'weight' => 10)
);
}

?>
