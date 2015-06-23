<?php

/**
 * @file
 * media_issuu/includes/media_issuu.styles.inc
 * Styles definitions for Media: Issuu.
 */

/**
 * Implements hook_styles_register().
 */
function media_issuu_styles_register() {
  return array(
    'MediaIssuuStyles' => array(
      'field_types' => 'file',
      'name' => t('MediaIssuu'),
      'description' => t('Media Issuu styles.'),
      'path' => drupal_get_path('module', 'media_issuu') . '/includes',
      'file' => 'media_issuu.styles.inc',
    ),
  );
}

/**
 * Implements hook_styles_containers().
 */
function media_issuu_styles_containers() {
  return array(
    'file' => array(
      'containers' => array(
        'media_issuu' => array(
          'label' => t('Issuu Styles'),
          'data' => array(
            'streams' => array(
              'issuu',
            ),
            'mimetypes' => array(
              'document/issuu',
            ),
          ),
          'weight' => 0,
          'filter callback' => 'media_issuu_formatter_filter',
          'themes' => array(
            'field_formatter_styles' => 'media_issuu_field_formatter_styles',
            'styles' => 'media_issuu_styles',
            'preview' => 'media_issuu_preview_style',
          ),
          'description' => t(
            'Issuu Styles will display embedded Issuu documents and thumbnails to your choosing, such as by resizing, setting colors. You can !manage.',
            array(
              '!manage' => l(
                t('manage your Issuu styles here'),
                'admin/config/media/media-issuu-styles'))
          ),
        ),
      ),
    ),
  );
}

/**
 * Implements hook_formatter_filter().
 */
function media_issuu_formatter_filter($variables) {
  if (isset($variables['object'])) {
    $object = isset($variables['object']->file) ? $variables['object']->file : $variables['object'];
    return (file_uri_scheme($object->uri) === 'issuu') && ($object->filemime === 'document/issuu');
  }
}

/**
 * Implements hook_file_styles_filter().
 */
function media_issuu_file_styles_filter($object) {
  $file = isset($object->file) ? $object->file : $object;
  if ((file_uri_scheme($file->uri) === 'issuu') && ($file->filemime === 'document/issuu')) {
    return 'media_issuu';
  }
}

/**
 * Implements hook_styles_styles().
 */
function media_issuu_styles_styles() {
  $styles = array(
    'file' => array(
      'containers' => array(
        'media_issuu' => array(
          'styles' => array(
            'issuu_thumbnail' => array(
              'name' => 'issuu_thumbnail',
              'effects' => array(
                array(
                  'label' => t('Thumbnail'),
                  'name' => 'thumbnail',
                  'data' => array('thumbnail' => 1),
                ),
                array(
                  'label' => t('Resize'),
                  'name' => 'resize',
                  'data' => array('width' => 100, 'height' => 75),
                ),
              ),
            ),
            'issuu_preview' => array(
              'name' => 'issuu_preview',
              'effects' => array(
                array(
                  'label' => t('Resize'),
                  'name' => 'resize',
                  'data' => array('width' => 220, 'height' => 165),
                ),
              ),
            ),
            'issuu_full' => array(
              'name' => 'issuu_full',
              'effects' => array(
                array(
                  'label' => t('Resize'),
                  'name' => 'resize',
                  'data' => array('width' => 640, 'height' => 480),
                ),
                array(
                  'label' => t('Full screen'),
                  'name' => 'fullscreen',
                  'data' => array('fullscreen' => 1),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  );
  /* Allow any image style to be applied to the thumbnail. */
  foreach (image_styles() as $style_name => $image_style) {
    $styles['file']['containers']['media_issuu']['styles']['issuu_thumbnail_' . $style_name] = array(
      'name' => 'issuu_thumbnail_' . $style_name,
      'image_style' => $style_name,
      'effects' => array(
        array(
          'label' => t('Thumbnail'),
          'name' => 'thumbnail',
          'data' => array('thumbnail' => 1)),
      ),
    );
  }

  return $styles;
}

/**
 * Implements hook_styles_presets().
 */
function media_issuu_styles_presets() {
  $presets = array(
    'file' => array(
      'square_thumbnail' => array(
        'media_issuu' => array(
          'issuu_thumbnail_square_thumbnail',
        ),
      ),
      'thumbnail' => array(
        'media_issuu' => array(
          'issuu_thumbnail',
        ),
      ),
      'small' => array(
        'media_issuu' => array(
          'issuu_preview',
        ),
      ),
      'large' => array(
        'media_issuu' => array(
          'issuu_full',
        ),
      ),
      'original' => array(
        'media_issuu' => array(
          'issuu_full',
        ),
      ),
    ),
  );
  return $presets;
}

/**
 * Implements hook_styles_default_containers().
 */
function media_issuu_styles_default_containers() {
  /* We append Issuu to the file containers. */
  return array(
    'file' => array(
      'containers' => array(
        'media_issuu' => array(
          'class' => 'MediaIssuuStyles',
          'name' => 'media_issuu',
          'label' => t('Issuu'),
          'preview' => 'media_issuu_preview_style',
        ),
      ),
    ),
  );
}


/**
 * Implements hook_styles_default_presets().
 */
function media_issuu_styles_default_presets() {
  $presets = array(
    'file' => array(
      'containers' => array(
        'media_issuu' => array(
          'default preset' => 'unlinked_thumbnail',
          'styles' => array(
            'original' => array(
              'default preset' => 'document',
            ),
            'thumbnail' => array(
              'default preset' => 'linked_thumbnail',
            ),
            'square_thumbnail' => array(
              'default preset' => 'linked_square_thumbnail',
            ),
            'medium' => array(
              'default preset' => 'linked_medium',
            ),
            'large' => array(
              'default preset' => 'large_document',
            ),
          ),
          'presets' => array(
            'document' => array(
              array(
                'name' => 'document',
                'settings' => array(),
              ),
            ),
            'large_document' => array(
              array(
                'name' => 'resize',
                'settings' => array(
                  'width' => 640,
                  'height' => 390,
                ),
              ),
              array(
                'name' => 'document',
                'settings' => array(),
              ),
            ),
          ),
        ),
      ),
    ),
  );
  /* Allow any image style to be applied to the thumbnail.*/
  foreach (image_styles() as $style_name => $image_style) {
    $presets['file']['containers']['media_issuu']['presets']['linked_' . $style_name] = array(
      array(
        'name' => 'linkToMedia',
        'settings' => array(),
      ),
      array(
        'name' => 'imageStyle',
        'settings' => array(
          'image_style' => $style_name,
        ),
      ),
      array(
        'name' => 'thumbnail',
        'settings' => array(),
      ),
    );
    $presets['file']['containers']['media_issuu']['presets']['unlinked_' . $style_name]
      = $presets['file']['containers']['media_issuu']['presets']['linked_' . $style_name];
    array_shift($presets['file']['containers']['media_issuu']['presets']['unlinked_' . $style_name]);
    foreach ($image_style['effects'] as $effect) {
      if (in_array($effect['name'],
            array(
              'image_scale',
              'image_scale_and_crop',
              'image_resize',
              'image_crop',
            ))) {
        $presets['file']['containers']['media_issuu']['presets']['document_' . $style_name] = array(
          array(
            'name' => 'resize',
            'settings' => $effect['data'],
          ),
          array(
            'name' => 'document',
            'settings' => array(),
          ),
        );
      }
    }
  }
  return $presets;
}
