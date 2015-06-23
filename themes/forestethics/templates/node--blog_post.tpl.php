<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($display_submitted): ?> 
    <div class="meta submitted">
      <?php print $user_picture; ?>
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>
<div id="social"><?php rd_social_blog(); ?> </div> 
  <div id="blog-post-thingy" class="content clearfix"<?php print $content_attributes; ?>>
   <div id="blog-post-title"> <h2<?php print $title_attributes; ?>> <?php print $title; ?> </h2> </div>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
      echo '<div class="clear"></div>';
      if ($node->field_author_ref[und][0][node]->vid != 8515 ) {?>
        <div class="author-replacer"> 
          <a href="/node/<?php print $node->field_author_ref[und][0][node]->nid ;?>">
            <?php 
            echo "By "; 
            print $node->field_author_ref[und][0][node]->title ; 
            echo ", "; 
            print $node->field_author_ref[und][0][node]->field_title[und][0][value]; ?>
          </a></div>
<?php };
      print render($content['comments']);
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

<script src="http://www.google.com/jsapi"></script>

<script type="text/javascript">
google.load("jquery", "1");

function sticky_relocate_blog() {
  var window_top = $(window).scrollTop();
  var div_top = $('#block-system-main').offset().top;
  var div_bottom = $('#block-views-blog-author-more-block').offset().top - $('#social').height();
  if (window_top > div_top && window_top < div_bottom) {
      $('#social').addClass('stick'); }
  else {
    $('#social').removeClass('stick');
  }}


google.setOnLoadCallback(function() {
  $(window).scroll(sticky_relocate_blog);
  sticky_relocate_blog();
  });

var newText = $('.author-replacer');

$('.field-name-field-author-ref').html(newText);
</script> 



