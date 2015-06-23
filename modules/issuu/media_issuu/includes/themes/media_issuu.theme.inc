<?php
/**
 * @file
 * media_issuu/includes/themes/media_issuu.theme.inc
 *
 * Theme and preprocess functions for Media: Issuu.
 */

/**
 * Preprocess function for theme('media_issuu_document').
 */
function media_issuu_preprocess_media_issuu_document(&$variables) {
  // Build the URL for display.
  $uri = $variables['uri'];
  $wrapper = file_stream_wrapper_get_instance_by_uri($uri);
  $parameters = $wrapper->get_parameters();
  $properties = $wrapper->getIssuuProperties($parameters);
  $variables['document'] = check_plain($parameters['document']);
  $variables['docs'] = check_plain($parameters['docs']);
  $variables['id'] = $properties['documentId'];

  $variables['wrapper_id'] = 'media_issuu_' . $variables['document'] . '_' . $variables['docs'];

  // For users with JavaScript, these object and embed tags will be replaced
  // by an iframe, so that we can support users without Flash.
  $variables['output'] = <<<OUTPUT
    <object width="{$variables['width']}" height="{$variables['height']}">
      <param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf?mode=mini&amp;backgroundColor=%23222222&amp;documentId={$variables['id']}">
      <param name="wmode" value="transparent" />
      <embed src="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf"
             type="application/x-shockwave-flash"
             width="{$variables['width']}" height="{$variables['height']}"
             flashvars="mode=mini&amp;backgroundColor=%23222222&amp;documentId={$variables['id']}"/>
    </object>
OUTPUT;
  drupal_add_css(drupal_get_path('module', 'media_issuu') . '/css/media_issuu.css');
}

/**
 * Theme formatter styles.
 */
function theme_media_issuu_field_formatter_styles($variables) {
  $element = $variables['element'];
  $style = $variables['style'];
  $variables['file'] = $element['#item'];
  $variables['uri'] = $variables['file']['uri'];
  $variables['style_name'] = $style['name'];
  return theme('media_issuu_embed', $variables);
}

/**
 * Preview for Styles UI.
 */
function theme_media_issuu_preview_style($variables) {
  $variables['uri'] = media_issuu_variable_get('preview_uri');
  $variables['field_type'] = 'file';
  $variables['object'] = file_uri_to_object($variables['uri']);

  return theme('styles', $variables);
}

/**
 * NOTE: Deprecated with Styles version 2.
 */
function theme_media_issuu_styles($variables) {
  $style = $variables['style'];
  $variables['file'] = $variables['object'];
  $variables['uri'] = $variables['object']->uri;
  $variables['style_name'] = $style['name'];
  return theme('media_issuu_embed', $variables);
}

/**
 * This code is for embedding documents in WYSIYWG areas, not currently working.
 *
 * NOTE: Deprecated with Styles version 2.
 */
function theme_media_issuu_embed($variables) {
  $preset_name = $variables['preset_name'];
  $preset = styles_containers_available_styles('file', 'media_issuu', $preset_name);
  $output = '';
  if (!empty($preset)) {
    // Build the URL for display.
    $uri = $variables['uri'];
    $wrapper = file_stream_wrapper_get_instance_by_uri($uri);
    $parts = $wrapper->get_parameters();

    $fullscreen_value = 'false';
    $in_browser = $thumbnail = FALSE;

    foreach ($preset['effects'] as $effect) {
      switch ($effect['name']) {
        case 'resize':
          $width = $effect['data']['width'];
          $height = $effect['data']['height'];
          break;

        case 'fullscreen':
          $fullscreen_value = $effect['data']['fullscreen'] ? 'true' : 'false';
          break;

        case 'thumbnail':
          $thumbnail = $effect['data']['thumbnail'];
      }
    }
    if (isset($variables['object']->override)) {
      $override = $variables['object']->override;
      if (isset($override['width'])) {
        $width = $override['width'];
      }
      if (isset($override['height'])) {
        $height = $override['height'];
      }
      if (isset($override['wysiwyg'])) {
        $thumbnail = TRUE;
      }
      if (isset($override['browser']) && $override['browser']) {
        $in_browser = TRUE;
        $thumbnail = TRUE;
      }
    }
    $width = isset($width) ? $width : media_issuu_variable_get('width');
    $height
      = isset($height) ? $height : media_issuu_variable_get('height');
    $video_id = check_plain($parts['document']);
    if ($thumbnail) {
      // @todo Clean this up.
      $image_variables = array(
        'path' => $wrapper->getOriginalThumbnailPath(),
        'alt' => $variables['alt'],
        'title' => $variables['title'],
        'getsize' => FALSE,
      );
      if (isset($preset['image_style'])) {
        $image_variables['path'] = $wrapper->getLocalThumbnailPath();
        $image_variables['style_name'] = $preset['image_style'];
        $output = theme('image_style', $image_variables);
      }
      else {
        // We need to add this style attribute here so that it doesn't get lost
        // If you resize a document in a node, save it, edit it, but don't
        // adjust the sizing of the video while editing, the size will revert
        // to the default.  Adding the specific size here retains the original
        // resizing.
        $wysiwyg
          = isset($variables['object']->override['style']) ? $variables['object']->override['style'] : '';
        $image_variables['attributes'] = array(
          'width' => $width,
          'height' => $height,
          'style' => $wysiwyg,
        );
        $output = theme('image', $image_variables);
      }
      if ($in_browser) {
        // Add an overlay that says 'Issuu' to media library browser thumbnails.
        $output .= '<span />';
      }
    }
    else {
      $output = theme('media_issuu_document',
                      array(
                        'uri' => $uri,
                        'width' => $width,
                        'height' => $height,
                        'fullscreen' => ($fullscreen_value === 'true' ? TRUE : NULL),
                      ));
    }
  }
  return $output;
}
