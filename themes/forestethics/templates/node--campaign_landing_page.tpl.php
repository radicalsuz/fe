<div class="content" style="margin:0;padding:0;">
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>


  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      ?>
      
    <div class="campaign-box">
    <?php 
      print render($content['field_feature_image']);
      if(strip_tags(render($content['field_hide_caption'])) != 1) {
        print('<div class="campaign-body">
          <div class="padding-10">' . render($content['body']) . '</div>
        </div>');
      }
      ?>
      <h1 class="campaign-title">      
        <?php 
          if(strip_tags(render($content['field_hide_title'])) != 1) {
            print render($title);
          }
        ?>
      </h1>
    </div>
    <?php print render($content['field_caption']); ?>
      </div>
      <br /><br />
    <div class="clear"><?php print render($content['field_description']);?></div>
    
            <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <?php if ($page['explore']): ?>
          <?php print render($page['explore']); ?>
        <?php endif; ?>
        
        
        
        
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
</div>
