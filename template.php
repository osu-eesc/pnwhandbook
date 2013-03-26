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

//function pnwhandbook_preprocess_node(&$variables) {
	//dpm($variables, '$variables');

	//$variables['field_styled_title'][0]['value'] = $variables['title_attributes_array']['class'][];
	//$variables['title_attributes_array']['class'][] = 'field_styled_title';
	
	// if ($vars['field_styled_title'][0]['value']) {
		
	// 	$vars['title'] =  $vars['field_styled_title'][0]['value'];

	// }
	
//}

//function pnwhandbook_preprocess_page(&$variables) {
	//dpm($variables, '$variables');
	
	//$variables['title_attributes_array']['class'][] = $variables['field_styled_title'][0]['value'];
	// dpm(field_get_items('node', $variables['node'], 'field_styled_title', '0', 'value'), 'styled title array');

	// dpm(field_get_items('node', $variables['node'], 'title#', '0', '#items'), 'title array');

	// dpm($variables['page']['content']['system_main']['nodes'][732]['title'][0]['#markup'], 'current title');
	// dpm(field_get_items('node', $variables['node'], 'field_styled_title[0]['value']'));
	//if (field_get_items('node', $variables['node'], 'field_styled_title')) {

		//$variables['title'] =  'some new title name';

	// }
	
//}



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
