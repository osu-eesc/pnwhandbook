<?php

/**
 * @file
 * Template.php - process theme data for your sub-theme.
 * 
 * Rename each function and instance of "footheme" to match
 * your subthemes name, e.g. if you name your theme "footheme" then the function
 * name will be "footheme_preprocess_hook". Tip - you can search/replace
 * on "footheme".
 */


/**
 * Override or insert variables for the html template.
 */
/* -- Delete this line if you want to use this function
function pnwhandbook_preprocess_html(&$vars) {
}
function pnwhandbook_process_html(&$vars) {
}
// */


/**
 * Override or insert variables for the page templates.
 */
/* -- Delete this line if you want to use these functions
function pnwhandbook_preprocess_page(&$vars) {
}
function pnwhandbook_process_page(&$vars) {
}
// */


/**
 * Override or insert variables into the node templates.
 */

// function pnwhandbook_preprocess_node(&$variables) {
// 	dpm($variables, '$variables');

// 	$variables['field_styled_title'][0]['value'] = $variables['title_attributes_array']['class'][];
// 	$variables['title_attributes_array']['class'][] = 'field_styled_title';
	
// 	if ($vars['field_styled_title'][0]['value']) {
		
// 		$vars['title'] =  $vars['field_styled_title'][0]['value'];

// 	}
	
// }

function pnwhandbook_preprocess_page(&$variables) {
	
	// $search_box = drupal_render(drupal_get_form('search_form'));
	
 //  $variables['search_box'] = $search_box;

  // $search_box_block = drupal_render(drupal_get_form('search_form_block'));
  // $variables['search_box_block'] = $search_box_block;
	
	$detect = mobile_detect_get_object();
  $is_tablet = $detect->isTablet();
  $is_mobile = $detect->isMobile();

  $variables['is_tablet'] = $is_tablet;
	$variables['is_mobile'] = $is_mobile;

	//dpm($variables['search_box_block'], 'search box block');

}



/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function pnwhandbook_preprocess_comment(&$vars) {
}
function pnwhandbook_process_comment(&$vars) {
}
// */


/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function pnwhandbook_preprocess_block(&$vars) {
}
function pnwhandbook_process_block(&$vars) {
}
// */
