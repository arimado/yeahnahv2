<?php
/*
function yn4_preprocess_page(&$vars) {
  if (isset($vars['node']->type)) {
    $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
  }
} */

function yn4_preprocess_page(&$variables) {

	$slogans = array(
	t('Life is good'),
	t('NO!'),
	t('OK!')
	);
	
	$slogan = $slogans[array_rand($slogans)];
	
	//t function makes strings available in other languages
	
	print $variables['site_name'] = $slogan;
	
	//Add new variables
	
	if($variables["logged_in"]) {
		$variables['footer_message'] = t('Jeremy loves you @username', array('@username' => $variables['user']->name));
	} else {
		$variables['footer_message'] = t('Thinks you\'re a mad fuck');
	}
	
	// there s a special way to use variables within the 't' fucntion. Pretty reckless. 
	// there's more there are no
	
	// print kpr($variables);
	
	if ($variblaes['is_front'] == TRUE) {
		drupal_add_css(path_to_theme(). '/stylesheets/lulla.css', array('group' => CSS_THEME));
	}
	
	//the above function didnt work
	
	
	//drupal_add_css('location of css file', '');
	//function for adding css
	
	//path_to_theme();
	//fucntion for getting the path of your theme folder


}




function yn4_breadcumb($variables) {
	
}
















