<?php

/**
NODE--AUTHOR
We're manually printing node fields here to get some better layout control.
 */
 
 
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($teaser): ?>
    <div id="author-info">
      By <a href="<?php print $node_url; ?>"><?php print $title .', '.$node->field_title['und'][0]['value']; ?></a>
    </div>
    </div>
  <?php return; endif; ?>

  <?php if ($display_submitted): ?>
    <div class="meta submitted">
      <?php print $user_picture; ?>
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>
  
  <?php if ($page): ?>
  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      print '<div class="author-title">';
      print render($content['field_title']);
      print render($content['field_campaign']);
      print '</div>';
      print '<div class="clear"></div>';
      print '<img style="width:120px;float:left;margin:0px 10px 6px 0;" src="/sites/forestethics.org/files/'.substr($node->field_author_image['und'][0]['uri'],9).'">';
      print $node->body['und'][0]['value'];
   

      //print render($content);
      endif; ?>      

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

</div>
