<?php

/**
 * @file
 * controls load theme.
 */

include_once drupal_get_path('theme', 'tb_sirate') . '/inc/preprocess_functions.inc';

function tb_sirate_preprocess(&$vars, $hook){

	// dsm($hook);
}

function tb_sirate_menu_link(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';
  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  if (strpos( $element['#href'], 'nolink')) {
  	echo "tiwiex";
    $output = '<a href="#" class="nolink">' . "tiwiex" . $element['#title'] . '</a>';
  } else {
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  }
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}
?>