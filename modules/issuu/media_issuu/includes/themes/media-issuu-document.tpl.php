<?php
/**
 * @file
 * Template file for theme('media_issuu_document').
 *
 * Variables available:
 *  $uri - The uri to the Issuu document, such as
 *  issuu://document_id/111027055928-fd8ffd9341844e2e895fb05ad8e8332a.
 *  $document_id - The unique identifier of the issuu document.
 *  $width - The width to render.
 *  $height - The height to render.
 *  $output - The object/embed code
 *
 * Note that we set the width & height of the outer wrapper manually so that
 * the JS will respect that when resizing later.
 */
?>
<div class="media-issuu-outer-wrapper" id="media-issuu-<?php print $id; ?>" style="width: <?php print $width; ?>px; height: <?php print $height; ?>px;">
  <div class="media-issuu-preview-wrapper"
    id="<?php print $wrapper_id; ?>">
    <?php print $output; ?>
  </div>
</div>
