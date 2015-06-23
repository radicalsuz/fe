<div class="content landing-page-wide" style="margin:0;padding:0;">
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      ?>
      
    <div class="campaign-box-wide">
         
         
<!-- Social -->


<?php 


$share_url = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}/{$_SERVER['REQUEST_URI']}";


$twitter_url = $share_url;
$facebook_url = $share_url;
$tweet_txt =  $field_meta[0]['value'];

$twitter_url = urlencode($twitter_url);
$facebook_url = urlencode($facebook_url);
$tweet_txt = urlencode($tweet_txt);

//var_dump($field_meta);
//echo $twitter_url;
//echo $facebook_url;


//var_dump($field_meta);


?>



    <!-- AddThis Button BEGIN -->
<div class="landing-page-wide-social">
  <div class="home-baked">
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $facebook_url;?>&t=<?php echo $tweet;?>" target="_blank"><img src="http://forestethics.huang.radicaldesigns.org/sites/forestethics.huang.radicaldesigns.org/themes/forestethics/images/share-on-facebook.png"/></a>
    <a href="http://www.twitter.com/share?=url=<?php echo $twitter_url;?>&amp;text=<?php echo $tweet_txt;?>" target="_blank"><img src="http://forestethics.huang.radicaldesigns.org/sites/forestethics.huang.radicaldesigns.org/themes/forestethics/images/share-on-twitter.png"/></a>
  </div>
  <div class="addthis_toolbox addthis_default_style addthis_32x32_style landing-page-wide">
    <a class="addthis_button_compact"></a>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=suqzi"></script>    
    <script>
    var addthis_config =
      {
         services_exclude: 'facebook,twitter',
         services_compact: 'email,more'
      }
    </script>
  </div>
  <br style="clear: both;" />
</div>
<?php /* other stuff i tried 

<div class="addthis_toolbox ">
<div class="custom_images">
<a class="addthis_button_facebook_like"><img src="http://forestethics.huang.radicaldesigns.org/sites/forestethics.huang.radicaldesigns.org/files/share-on-facebook.png" /></a>
<a class="addthis_button_tweet" tw:text="I love addthis"><img src="http://forestethics.huang.radicaldesigns.org/sites/forestethics.huang.radicaldesigns.org/files/share-on-twitter.png" /></a>
<a class="addthis_button_compact"></a>
</div>
</div>


*/?>



<!-- AddThis Button END -->
    
    <h1 class="campaign-title-wide title">
        <?php 
          if(strip_tags(render($content['field_hide_title'])) != 1) {
            print render($title);
          }
        ?>
      </h1>    
    <?php 
      print render($content['field_feature_image']);
      if(strip_tags(render($content['field_hide_caption'])) != 1) {
        print('<div class="campaign-body-wide">
          <div class="">' . render($content['body']) . '</div>
        </div>');
      }
      ?>      
        </div>    
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
