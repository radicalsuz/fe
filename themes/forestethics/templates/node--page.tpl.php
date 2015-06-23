<!-- basic page layout -->

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="content clearfix"<?php print $content_attributes; ?>>

    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);

      print render($content['field_image_file']);
      print render($content['field_caption']);
      echo('<h1 class="title">');
      print render($title);
      echo('</h1>');
      print render($content['field_subtitle']);
      echo('<div>');
      print render($content);
      echo('</div>');
    ?>
</div>

  <?php
    // Remove the "Add new comment" link on the teaser page or if the comment
    // form is being displayed on the same page.
    if ($teaser || !empty($content['comments']['comment_form'])) {
      unset($content['links']['comment']['#links']['comment-add']);
    }
    // Only display the wrapper div if there are links.
    $links = render($content['links']);
    if ($links):
  ?>
    <div class="link-wrapper">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

  <?php # print render($content['comments']); ?>
</div>
