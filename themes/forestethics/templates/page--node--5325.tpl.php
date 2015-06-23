<?php
/**
* NEW Template for media room (PRESS) view, no node content here just views
*/
?>
<div id="page-wrapper"><div id="page"  class="no-nip">
<?php include('header.php'); ?>
  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">
  <div class="box">
        <div id="front-top-left">
        <img src ="/sites/forestethics.huang.radicaldesigns.org/files/<?php print($node->field_feature_image['und'][0]['filename']); ?>" alt="Media Room">
        <!--<img src="/<?php echo($theme_path);?>/images/pressroom.png" alt="Take Action">-->
      <div class="padding-10">
      <div id="tab-nav">
        <ul>
        <li><a href="#press-1">Press Releases</a></li>
        <li><a href="#press-2">News</a></li>
        <li><a href="#press-3">Reports</a></li>
        <li><a href="#press-4">Ads</a></li>
        <li><a href="#press-5">Blog</a></li>
        </ul>
        <div class="clear"></div>
          <?php if ($page['press_room']): ?>
            <?php print render($page['press_room']); ?>
          <?php endif; ?>  
      </div> 
          <?php if ($tabs): ?>
      <div class="tabs">
        <?php print render($tabs); ?>
      </div>
    <?php endif;  ?>
      </div><!-- /tabs -->
    </div>

    </div> <!-- /content-area -->
    
    <div id="front-top-right">  
       <?php if ($page['press_sidebar']): ?>
            <?php print render($page['press_sidebar']); ?>
          <?php endif; ?> 
      <div class="clear">
      </div>
    <div 
    </div><!-- /takeaction -->
  </div> <!-- /#content -->


  </div>
  </div> <!-- /#main, /#main-wrapper -->

  <div id="footer-wrapper">
          <?php include('footer.php'); ?>
 </div> <!-- /#section, /#footer-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->
