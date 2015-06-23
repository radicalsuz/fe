<?php

/**
 * @file
 * Styles class implementation for Media: Issuu.
 */

class MediaIssuuStyles extends FileStyles {
  public $fullscreen;
  /**
   * Get FullScreen.
   */
  public function getFullscreen() {
    return $this->get('fullscreen');
  }
  /**
   * Set FullScreen.
   */
  public function setFullscreen($value) {
    return $this->set('fullscreen', $value);
  }
  /**
   * Get URL from thumbnail image.
   */
  public function getImageUri() {
    if ($image_uri = $this->get('imageUri')) {
      return $image_uri;
    }
    $object = $this->getObject();
    if ($object->uri) {
      $wrapper = file_stream_wrapper_get_instance_by_uri($object->uri);
      return $wrapper->getLocalThumbnailPath();
    }
  }
  /**
   * Fill in document values.
   */
  public function document($effect) {
    $variables = array(
      'uri' => $this->getUri(),
      'width' => $this->getWidth(),
      'height' => $this->getHeight(),
      'fullscreen' => $this->getFullscreen(),
    );
    $this->setOutput(theme('media_issuu_document', $variables));
  }
}
