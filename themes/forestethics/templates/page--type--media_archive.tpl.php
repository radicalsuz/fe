<div id="page-wrapper"><div id="page" class="no-nip">
<?php include('header.php'); ?>
  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">
  <div class="box">
        <div id="front-top-full">
       <?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>
      <a id="main-content"></a>
      <h1 style="margin: 10px 0;"><?php print $title; ?></h1>
      <?php print render($page['content']); ?>
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>

      <?php # print $feed_icons; ?>
    
    </div> <!-- /content-area -->
    
    <div class="clear"></div>
    
    </div></div> <!-- /.section, /#content -->


  </div>
  </div> <!-- /#main, /#main-wrapper -->

  <div id="footer-wrapper">
          <?php include('footer.php'); ?>
 </div> <!-- /#section, /#footer-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->
