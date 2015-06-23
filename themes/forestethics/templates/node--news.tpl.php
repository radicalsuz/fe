<?php

/**
NEWS POST
Special code here for building out our author sidebar.
If the news item has an author_ref, it means a forestethics author wrote the article. We should show their name and picture in the sidebar and link it to their node. If not, this is a fair-use sample of the article and we should display the source logo and link to the original article URL, stored in the redirect_url field.
 */
 
?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>>
      <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>
  <?php if ($page): ?>
<div id="news-bar">
<?php if(count($node->field_author_ref)>0) {
  $node_auth = node_load($node->field_author_ref['und'][0]['nid']);
  echo 'AUTHOR<br/><a href="/node/'.$node_auth->nid.'">';
  echo '<img style="width:80px;" src="/sites/forestethics.org/files/'.substr($node_auth->field_author_image['und'][0]['uri'],9).'"><br/>';
  echo $node_auth->title."</a>";
} else {
  echo '<a href="'.$node->field_redirect_url['und'][0]['value'].'" target="_blank">';
  if(count($node->field_external_author)>0) {
  echo '<div id="news-author">By <span>'.$node->field_external_author['und'][0]['value'].'</span></div>';
  }
  if(count($node->field_logo)>0) {
  echo '<div class="news-logo"><img src="/sites/forestethics.org/files/'.substr($node->field_logo['und'][0]['uri'],9).'"></div><div class="clear"></div>';
  }
  echo $node->field_source['und'][0]['value'].'</a><br />';
}
?><div class="clear"></div>
<?php rd_social(); ?>
</div>
<div id="news-right">
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
    <h2<?php print $title_attributes; ?>>
    <?php print $title; ?>
    </h2>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="meta submitted">
      <?php print $user_picture; ?>
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>
  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
      if($node->field_redirect_url['und'][0]['value']){
      echo '<a href="'.$node->field_redirect_url['und'][0]['value'].'" target="_blank">Read the full article &#187;</a><br/><br/>';
      }
      
        if($node->field_stories['und'][0]['tid']==495){ //if there's no internal author, this must be external. print our fair use noticex
  print '<div class="fair-use">FAIR USE NOTICE. ForestEthics is making this article available in our efforts to advance the understanding of environmental and social issues. We believe that this constitutes a \'fair use\' of ANY copyrighted material as provided for in section 107 of the U.S. Copyright Law. If you wish to use this copyrighted material for any purpose, you must obtain permission from the owner of any copyrighted material.</div>';
  }

    ?>
  </div>

</div>
</div><!--end floating node wrapper -->
<div class="clear"></div>
  <?php endif; ?>


<script src="http://www.google.com/jsapi"></script>

<script type="text/javascript">
google.load("jquery", "1");


function sticky_relocate_news() {
  var window_top = $(window).scrollTop();
  var div_top = $('#social-news-box').offset().top;
  if (window_top > div_top)
    $('#social-news').addClass('stick');
  else
    $('#social-news').removeClass('stick');
  }

google.setOnLoadCallback(function() {
  $(window).scroll(sticky_relocate_news);
  sticky_relocate_news();
  });
</script>


