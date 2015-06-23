<!-- staff? -->
<div id="page-wrapper"><div id="page">
<?php include('header.php'); ?>
 <?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>
  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">
  <div class="box">
        <div id="front-top-left" style="width:1010px;">
                    <div class="multimedia">
                    
                    <div style="width:475px;float:left;">
                    <?php 
                    if($page['staff_pictures']){
                    print render($page['staff_pictures']);
                    } 
                    ?>
                    </div>
                    <div style="width:520px;float:left;"><div style="margin-left: 20px;">
                    <?php print render($page['content']); ?></div></div>
                    <div class="clear"></div>
                     
        </div>
      <div class="padding-10"></div>
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
              <?php if (isset($page['media_sidebar'])): ?>
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
