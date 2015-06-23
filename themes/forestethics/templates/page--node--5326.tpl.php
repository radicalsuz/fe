<?php
/**
* NEW Template for multimedia room view
*/
?>
<style>
  #main-menu #blue-nipple {
    display:none !important;
  }
</style>
<div id="page-wrapper"><div id="page" class="no-nip">
<?php include('header.php'); ?>
  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">
  <div class="box">
        <div id="front-top-left" style="width:1010px;">
                <img src ="/sites/forestethics.huang.radicaldesigns.org/files/<?php print($node->field_feature_image['und'][0]['filename']); ?>" alt="Media Room">
            <div class="multimedia">
            <div class="region-media-room">
              <div class="media-title">IMAGES</div>
              <div class="media-title">SOUND</div>
              <div class="media-title">VIDEO</div>

            </div>
          <div class="clear"></div>
          <?php if ($page['media_room']): ?>
            <?php print render($page['media_room']); ?>
          <?php endif; ?>  
        </div>
      <div class="padding-10">
        <div class="clear"></div>
      
       <?php  if ($tabs): ?>
      <div class="tabs">
        <?php print render($tabs); ?>
      </div>
    <?php endif; ?>
      </div><!-- /tabs -->
    </div>
    </div> <!-- /content-area -->
    <!-- 
    <div id="front-top-right">   
              <?php if ($page['media_sidebar']): ?>
            <?php print render($page['media_sidebar']); ?>
          <?php endif; ?>  
            <div class="clear">
        <div class="padding-10"> </div>
    </div>
  </div> --> <!-- /#content -->

  </div>
  </div> <!-- /#main, /#main-wrapper -->

  <div id="footer-wrapper">
          <?php include('footer.php'); ?>
 </div> <!-- /#section, /#footer-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->
