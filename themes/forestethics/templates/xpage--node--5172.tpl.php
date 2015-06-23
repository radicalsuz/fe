<?php 
/*
ABOUT US OVERRIDE
*/
?>
<!-- about us -->
<div id="page-wrapper"><div id="page" class="no-nip">
<?php include('header.php'); ?>
  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">
  <div class="box">
        <div id="front-top-left">
      <div class="padding-10">
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php print render($title_suffix); ?>
      
      <?php print render($page['content']); ?>
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>

      <?php print $feed_icons; ?>
    
    </div>
    </div> <!-- /content-area -->
    
    <div id="front-top-right">
      <?php if ($page['sidebar']): ?>
        <?php print render($page['sidebar']); ?>
      <?php endif; ?>
    </div>

    <div class="clear"></div>
    
    </div></div> <!-- /.section, /#content -->


  </div>
  </div> <!-- /#main, /#main-wrapper -->

  <div id="footer-wrapper">
          <?php include('footer.php'); ?>
 </div> <!-- /#section, /#footer-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->
