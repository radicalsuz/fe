<div id="page-wrapper"><div id="page">
  <?php include('header.php'); ?>
  <div id="full-width-hero">
    <?php print render($page['campaign_land_hero']);?>
    <?php 
      
      /*
      
      $landing_image = field_get_items('node', $node, 'field_landing_image');
      $landing_link = field_get_items('node', $node, 'field_campaign_url');      
      $landing_link = $landing_link[0]['value'];
      $landing_image = $landing_image[0]['filename'];     
       // var_dump($landing_image);
       // $landing_image = drupal_realpath($landing_image);
       // $landing_image = $_SERVER['HTTP_HOST'].$landing_image; 
       // $landing_image = render($landing_image);
       //echo $landing_image;
        
      $public_path = variable_get('file_public_path', conf_path() . '/files');
      //echo $public_path;
      
      
      if(strlen($landing_link)>5){
      echo '<a href="'.$landing_link.'">';
      }          
      echo '<img src="http://forestethics.huang.radicaldesigns.org/sites/forestethics.huang.radicaldesigns.org/files/'.$landing_image.'" />';    
      if(strlen($landing_link)>5){
      echo '</a>';
      }
      
      */
    
    ?>
    <div id="hero-slideshow-pager"></div>
    <script>
    jQuery(document).ready(function(){
      jQuery('#full-width-hero .view-content').cycle({
        speed : 1000,
        pager: '#hero-slideshow-pager',
        pagerAnchorBuilder : function(idx,el){
          return '<a href="#">&bull;</a>';
        }
      }
      );
     
    });
    
    
    
    
    
    
    
    

    </script>
    
  </div>
  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">
    <div id="front-top-left"><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
    <?php print render($page['content']); ?>
    <?php if ($tabs): ?>
<!-- hi -->
    <div class="tabs">
    <?php print render($tabs); ?>
    </div>
    <?php endif; ?>
    
    <?php print $feed_icons; ?>
    </div> <!-- /content-area -->
  
    <div id="front-top-right">
    <?php if ($page['sidebar']): ?>
    <?php print render($page['sidebar']); ?>
    <?php endif; ?>
    </div>
  </div> <!-- /#main, /#main-wrapper -->
  <div class="padding-10"></div>
  <div id="footer-wrapper">
  <?php include('footer.php'); ?>
  </div> <!-- /.section, /#footer-wrapper -->
  
</div></div> <!-- /#page, /#page-wrapper -->
