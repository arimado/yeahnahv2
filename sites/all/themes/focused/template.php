<?php


function focused_menu_tree__MAIN_MENU($variables){
  return $variables['tree'];
  
}


/* NAVIGATION BAR PREPROCESS CALL */


function focused_menu_link__MAIN_MENU($variables) {
  $element = $variables['element'];
  $sub_menu = '';  

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return  '<span class="top-menu-link">' . $output . $sub_menu . '</span>' ;

}


/* NAVIGATION BAR PREPROCESS CALL */



function focused_menu_link__MENU_BACKEND_MENU($variables) {
  $element = $variables['element'];
  $sub_menu = '';  

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return  '<span class="backend-menu-link">' . $output . $sub_menu . '</span>' ;

}

/* XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX */


/* SEARCH FORM */


function focused_form_alter(&$form, &$form_state, $form_id) {
  kpr($vars);
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#title'] = t("type something here"); // Change the text on the label element
    $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    $form['search_block_form']['#size'] = 21;  // define size of the textfield
    $form['search_block_form']['#default_value'] = t('type something here'); // Set a default value for the textfield
    $form['actions']['submit']['#value'] = t('SEARCH'); // Change the text on the submit button
    //$form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/search-button.png');

    // Add extra attributes to the text box
    $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'type something here';}";
    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'type something here') {this.value = '';}";

    // Prevent user from searching the default text
    $form['#attributes']['onsubmit'] = "if(this.search_block_form.value=='type something here'){ alert('You didnt type anything bro'); return false; }";

    // Alternative (HTML5) placeholder attribute instead of using the javascript
    $form['search_block_form']['#attributes']['placeholder'] = t('type something here');
  }
} 

/* SEARCH FORM END */

function focused_theme() {
  $items = array();
  $items['user_login'] = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'focused') . '/templates',
  'template' => 'user-login',
  'preprocess functions' => array(
  'focused_preprocess_user_login'
  ),
 );
return $items;
}


/* SEARCH RESULTS */


/**
 * Variables preprocess function for the "page" theming hook.
 */
 
 
function focused_preprocess_page(&$vars) {

  // Do we have a node?
  if (isset($vars['node'])) {

    // Ref suggestions cuz it's stupid long.
    $suggests = &$vars['theme_hook_suggestions'];

    // Get path arguments.
    $args = arg();
    // Remove first argument of "node".
    unset($args[0]);

    // Set type.
    $type = "page__type_{$vars['node']->type}";

    // Bring it all together.
    $suggests = array_merge(
      $suggests,
      array($type),
      theme_get_suggestions($args, $type)
    );

  }
}

function focused_node($node, $mode = 'n') {
  if (!function_exists('prev_next_nid')) {
    return NULL;
  }
 
  switch($mode) {
    case 'p':
      $n_nid = prev_next_nid($node->nid, 'prev');
        $link_text = 'previous';
      break;
		
    case 'n':
      $n_nid = prev_next_nid($node->nid, 'next');
      $link_text = 'next';
    break;
		
    default:
    return NULL;
  }
 
  if ($n_nid) {
    $n_node = node_load($n_nid);
		
    switch($n_node->type) {	
      case 'haiku': 
        $html = l('"'.$n_node->title .'"', 'node/'.$n_node->nid); 
      return $html; 
    }
  }
  
  if ($n_nid) {
    $n_node = node_load($n_nid);
		
    switch($n_node->type) {	
      case 'streetstyle': 
        $html = l('"'.$n_node->title .'"', 'node/'.$n_node->nid); 
      return $html; 
    }
  }
}

/* XXXXXXXXXXXXXXXXXXX FORMAT DATE XXXXXXXXXXXXXX */
 

/*   override field output  */


/*  DRUPAL site function documentation 

function focused_theme() {
  $items = array();
    
  $items['user_login'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'focused') . '/templates',
    'template' => 'user-login',
    'preprocess functions' => array(
       'focused_preprocess_user_login'
    ),
  );
  $items['user_register_form'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'focused') . '/templates',
    'template' => 'user-register-form',
    'preprocess functions' => array(
      'focused_preprocess_user_register_form'
    ),
  );
  
}
  
  function focused_preprocess_user_login(&$vars) {
  	$vars['intro_text'] = t('This is my awesome login form');
}

function focused_preprocess_user_register_form(&$vars) {
  	$vars['intro_text'] = t('This is my super awesome reg form');
}
  

*/