<?php
/**
 * Add body classes if certain regions have content.
 */



 function rd_social_blog(){
 echo '
<div id="social-blog-box" class="addthis_toolbox addthis_default_style addthis_32x32_style">
    <div id="social-blog"  class="addthis_toolbox addthis_default_style">
<div><a style="padding: 5px 9px; clear:left;" class="addthis_button_facebook"></a></div>
<div><a style="padding: 5px 9px; clear:left;" class="addthis_button_twitter"></a></div>
<!--<div><a style="padding: 5px 9px; clear:left;" class="addthis_button_google_plusone_badge" g:plusone:size="medium"></a></div>-->
<div><a style="padding: 5px 9px; clear:left;" class="addthis_button_email"></a></div><br class="clear" />
<div><a class="addthis_counter"></a></div>

    </div>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f58ffbf12e2d246"></script>
';

 }


 function rd_social(){
 echo '
<div id="social-news-box" class="addthis_toolbox addthis_default_style addthis_32x32_style">
    <div id="social-news"  class="addthis_toolbox addthis_default_style">
<div><a style="padding: 5px 9px; clear:left;" class="addthis_button_facebook"></a></div>
<div><a style="padding: 5px 9px; clear:left;" class="addthis_button_twitter"></a></div>
<!--<div><a style="padding: 5px 9px; clear:left;" class="addthis_button_google_plusone_badge" g:plusone:size="medium"></a></div>-->
<div><a style="padding: 5px 9px; clear:left;" class="addthis_button_email"></a></div><br class="clear" />
<div><a class="addthis_counter"></a></div>

    </div>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f58ffbf12e2d246"></script>
';

 }

 function rd_social_horiz_2($url,$title){
   echo '<br/>
     <div class="addthis_toolbox addthis_default_style"
        addthis:url="'.$url.'"
        addthis:title="'.$title.'">
     <a class="addthis_button_facebook_like"></a>
     <a class="addthis_button_tweet"></a>
     <a class="addthis_button_google_plusone" g:plusone:annotation="none"></a> 
     <a class="addthis_counter addthis_pill_style"></a>
     </div>
     <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f58ffbf12e2d246"></script>';

 }

 function rd_social_horiz(){
 echo '<div id="soc-horiz" style="float:right;">
<fb:like send="true" layout="button_count" width="60" show_faces="false"></fb:like>
<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script><!-- Place this tag where you want the +1 button to render -->
<g:plusone></g:plusone>
</div>
<!-- Place this render call where appropriate -->
<script type="text/javascript">
  (function() {
    var po = document.createElement(\'script\'); po.type = \'text/javascript\'; po.async = true;
    po.src = \'https://apis.google.com/js/plusone.js\';
    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>';

 }

/*
function forestethics_preprocess_html(&$variables) {
  if (!empty($variables['page']['featured'])) {
    $variables['classes_array'][] = 'featured';
  }

  if (!empty($variables['page']['triptych_first'])
    || !empty($variables['page']['triptych_middle'])
    || !empty($variables['page']['triptych_last'])) {
    $variables['classes_array'][] = 'triptych';
  }

  if (!empty($variables['page']['footer_firstcolumn'])
    || !empty($variables['page']['footer_secondcolumn'])
    || !empty($variables['page']['footer_thirdcolumn'])
    || !empty($variables['page']['footer_fourthcolumn'])) {
    $variables['classes_array'][] = 'footer-columns';
  }

  // Add conditional stylesheets for IE
  drupal_add_css(path_to_theme() . '/css/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
  drupal_add_css(path_to_theme() . '/css/ie6.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 6', '!IE' => FALSE), 'preprocess' => FALSE));
  //drupal_add_css(path_to_theme() . '/css/ui-lightness/jquery-ui-1.8.17.custom.css');
   if ($node = menu_get_object()) {
      $variables['field_meta'] = $node->field_meta['und'][0]['value']; // find your cck field here                   
      $variables['fb_image'] = $node->field_thumbnail['und'][0]['filename']; // find your cck field here
   }   
  
}
*/
/**
 * Override or insert variables into the page template for HTML output.
 */

function forestethics_preprocess_html(&$variables) {
   if ($node = menu_get_object()) {
      $variables['featured_image'] = file_create_url($node->field_feature_image['und'][0]['uri']);
      $variables['thumbnail'] = file_create_url($node->field_thumbnail['und'][0]['uri']);
      $variables['field_meta'] = $node->field_meta['und'][0]['value'];     
/*   
  if ($node = menu_get_object()) {
    if($node->type == 'issue_landing_page' || $node->type == 'campaign_landing_page' || $node->type== 'landing_page'){
        $GLOBALS['header_image'] = 'http://'.$_SERVER['HTTP_HOST'].'/sites/forestethics.org/files/'.substr($node->field_feature_image['und'][0]['uri'],9);
    }
*/    
    
    if(isset($node->body['und'])){ //check if there's a body on this node
      if(strlen($node->body['und'][0]['value'])>10) {//check it's got at least ten chars of text
        $GLOBALS['body_sample'] = substr(strip_tags($node->body['und'][0]['value']),0,400);
      }
    }
    if(isset($node->title)){ //check if there's a title on this node
        $GLOBALS['title'] = $node->title;
    }
  }
  if (module_exists('path')) {
    $alias = drupal_get_path_alias(str_replace('/edit','',$_GET['q']));
    if ($alias != $_GET['q']) {
      $template_filename = 'html';
      foreach (explode('/', $alias) as $path_part) {
        $template_filename = $template_filename . '__' . $path_part;
        $vars['theme_hook_suggestions'][] = $template_filename;
      }
    }
  }
     
}                                                                                                                                     

 
function forestethics_process_html(&$variables) {
  // Hook into color.module.
  if (module_exists('color')) {
    _color_html_alter($variables);
  }
}

/**
 * Override or insert variables into the page template.
 */
function forestethics_process_page(&$variables) {
  // Hook into color.module.
  if (module_exists('color')) {
    _color_page_alter($variables);
  }
  // Always print the site name and slogan, but if they are toggled off, we'll
  // just hide them visually.
  $variables['hide_site_name']   = theme_get_setting('toggle_name') ? FALSE : TRUE;
  $variables['hide_site_slogan'] = theme_get_setting('toggle_slogan') ? FALSE : TRUE;
  if ($variables['hide_site_name']) {
    // If toggle_name is FALSE, the site_name will be empty, so we rebuild it.
    $variables['site_name'] = filter_xss_admin(variable_get('site_name', 'Drupal'));
  }
  if ($variables['hide_site_slogan']) {
    // If toggle_site_slogan is FALSE, the site_slogan will be empty, so we rebuild it.
    $variables['site_slogan'] = filter_xss_admin(variable_get('site_slogan', ''));
  }
  // Since the title and the shortcut link are both block level elements,
  // positioning them next to each other is much simpler with a wrapper div.
  if (!empty($variables['title_suffix']['add_or_remove_shortcut']) && $variables['title']) {
    // Add a wrapper div using the title_prefix and title_suffix render elements.
    $variables['title_prefix']['shortcut_wrapper'] = array(
      '#markup' => '<div class="shortcut-wrapper clearfix">',
      '#weight' => 100,
    );
    $variables['title_suffix']['shortcut_wrapper'] = array(
      '#markup' => '</div>',
      '#weight' => -99,
    );
    // Make sure the shortcut link is the first item in title_suffix.
    $variables['title_suffix']['add_or_remove_shortcut']['#weight'] = -100;
  }
}

/**
 * Implements hook_preprocess_maintenance_page().
 */
function forestethics_preprocess_maintenance_page(&$variables) {
  if (!$variables['db_is_active']) {
    unset($variables['site_name']);
  }
  drupal_add_css(drupal_get_path('theme', 'forestethics') . '/css/maintenance-page.css');
}

/**
 * Override or insert variables into the maintenance page template.
 */
function forestethics_process_maintenance_page(&$variables) {
  // Always print the site name and slogan, but if they are toggled off, we'll
  // just hide them visually.
  $variables['hide_site_name']   = theme_get_setting('toggle_name') ? FALSE : TRUE;
  $variables['hide_site_slogan'] = theme_get_setting('toggle_slogan') ? FALSE : TRUE;
  if ($variables['hide_site_name']) {
    // If toggle_name is FALSE, the site_name will be empty, so we rebuild it.
    $variables['site_name'] = filter_xss_admin(variable_get('site_name', 'Drupal'));
  }
  if ($variables['hide_site_slogan']) {
    // If toggle_site_slogan is FALSE, the site_slogan will be empty, so we rebuild it.
    $variables['site_slogan'] = filter_xss_admin(variable_get('site_slogan', ''));
  }
}

/**
 * Override or insert variables into the node template.
 */
function forestethics_preprocess_node(&$variables) {
  if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) {
    $variables['classes_array'][] = 'node-full';
  }
}

/**
 * Override or insert variables into the block template.
 */
function forestethics_preprocess_block(&$variables) {
  // In the header region visually hide block titles.
  if ($variables['block']->region == 'header') {
    $variables['title_attributes_array']['class'][] = 'element-invisible';
  }
}

/**
 * Implements theme_menu_tree().
 */
function forestethics_menu_tree($variables) {
  return '<ul class="menu clearfix">' . $variables['tree'] . '</ul>';
}

/**
 * Implements theme_field__field_type().
 */
function forestethics_field__taxonomy_term_reference($variables) {
  $output = '';

  // Render the label, if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<h3 class="field-label">' . $variables['label'] . ': </h3>';
  }

  // Render the items.
  $output .= ($variables['element']['#label_display'] == 'inline') ? '<ul class="links inline">' : '<ul class="links">';
  foreach ($variables['items'] as $delta => $item) {
    $output .= '<li class="taxonomy-term-reference-' . $delta . '"' . $variables['item_attributes'][$delta] . '>' . drupal_render($item) . '</li>';
  }
  $output .= '</ul>';

  // Render the top-level DIV.
  $output = '<div class="' . $variables['classes'] . (!in_array('clearfix', $variables['classes_array']) ? ' clearfix' : '') . '">' . $output . '</div>';

  return $output;
}


function forestethics_preprocess_username(&$vars) {
  // Username is linked, use the link_attributes to inject the rel attribute
  if (isset($vars['link_path'])) {
    $vars['link_attributes']['rel'][] = 'author';
  }
  // Username is NOT linked, use the attributes_array to inject the rel attribute
  else {
    $vars['attributes_array']['rel'][] = 'author';
  }
}




//allow for custom page.tpl based on content type
function forestethics_preprocess_page(&$variables, $hook) {
  if (isset($variables['node'])) { 
    $variables['theme_hook_suggestions'][] = 'page__type__'. $variables['node']->type;
    $variables['theme_hook_suggestions'][] = "page__node__" . $variables['node']->nid;
  }
}


 function forestethics_breadcrumb($variables) {
   $breadcrumb = $variables['breadcrumb'];
   if (!empty($breadcrumb)) {
    // // Adding the title of the current page to the breadcrumb.
     $breadcrumb[] = menu_get_active_title();//drupal_get_title();
    // // Provide a navigational heading to give context for breadcrumb links to
    // // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
     $output .= '<div class="breadcrumb">' . implode(' &raquo; ', $breadcrumb) . '</div>';
     return $output;
   }
}
/*
function forestethics_preprocess_username(&$vars) {
  // Username is linked, use the link_attributes to inject the rel attribute
  if (isset($vars['link_path'])) {
    $vars['link_attributes']['rel'][] = 'author';
  }
  // Username is NOT linked, use the attributes_array to inject the rel attribute
  else {
    $vars['attributes_array']['rel'][] = 'author';
  }
}

*/
