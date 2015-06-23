<?php
/**
 * @file
 * Create a Issuu Stream Wrapper class for the Media/Resource module.
 */

/**
 * Stream Wrapper class for Issuu.
 * Create an instance like this:
 * $issuu = new ResourceIssuuStreamWrapper('issuu://document/[issuu-name]');
 */
class MediaIssuuStreamWrapper extends MediaReadOnlyStreamWrapper {
  /**
   * Get MimeType.
   */
  public static function getMimeType($uri, $mapping = NULL) {
    return 'document/issuu';
  }

  /**
   * Get properties.
   *
   * @return array
   *   Array of properties.
   */
  public static function getIssuuProperties($parameters) {
    $request = 'http://search.issuu.com/api/2_0/document?q=username:' . drupal_encode_path($parameters['document'] . ' +docname:' . $parameters['docs']);
    $response = drupal_http_request($request);
    $decodedresponse = drupal_json_decode($response->data);
    // Check documentID for extra security.
    if (preg_match('#^[0-9]{12}\-[0-9a-f]{32}$#', $decodedresponse['response']['docs'][0]['documentId'], $matches)) {
      return $decodedresponse['response']['docs'][0];
    }
  }
  /**
   * Get target.
   */
  protected function getTarget($uri) {
    return FALSE;
  }
  /**
   * Transform URL.
   */
  public function interpolateUrl() {
    return 'http://issuu.com/' . $this->parameters['document'] . '/docs/' . $this->parameters['docs'];
  }

  /**
   * Get original thumbnail path.
   */
  public function getOriginalThumbnailPath() {
    $issuu_properties = self::getIssuuProperties($this->parameters);
    return 'http://image.issuu.com/' . $issuu_properties['documentId'] . '/jpg/page_1_thumb_medium.jpg';
  }
  /**
   * Get local thumbnail path.
   */
  public function getLocalThumbnailPath() {
    $local_path = 'public://media-issuu/' . $this->parameters['document'] . '-' . $this->parameters['docs'] . '.jpg';
    if (!file_exists($local_path)) {
      $dirname = drupal_dirname($local_path);
      file_prepare_directory($dirname, FILE_CREATE_DIRECTORY | FILE_MODIFY_PERMISSIONS);
      @copy($this->getOriginalThumbnailPath(), $local_path);
    }
    return $local_path;
  }
}
