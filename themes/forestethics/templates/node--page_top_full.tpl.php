<!-- basic page layout -->

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_top_area']);
/*
      echo('<h1 class="title">');
      print render($title);
      echo('</h1>');
      print render($content['field_subtitle']);
      print render($content['field_top_area']);
*/      
//      print render($content['field_image_file']);
//      print render($content['field_caption']);
      echo('<div>');
?>
<div>
  <div class="addthis_toolbox addthis_default_style">                                                                                                                                
    <a class="addthis_button_facebook_like"></a>
    <a class="addthis_button_google_plusone addthis_pill_style" g:plusone:count="false" g:plusone:size="medium"></a>
    <a class="addthis_button_tweet" tw:count="none"></a>
    <a class="addthis_button_compact"><img src="http://forestethics.org/sites/forestethics.huang.radicaldesigns.org/themes/forestethics/images/addthis-button.png"
             width="20" height="20" border="0" alt="Share" /></a>
  </div>
  <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f58ffbf12e2d246"></script>
</div> 

<?php
      print render($content);
      echo('</div>');
    ?>
</div>

</div>
