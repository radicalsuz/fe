<div id="page-wrapper"><div id="page">
<?php include('header.php'); ?>
  <div id="full-width-hero">
  <div class="box">
       <?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>
      <a id="main-content"></a>
      <?php print render($page['content']); ?>
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>

      <?php # print $feed_icons; ?>
    
<!--    
    <div id="front-top-right">    
    
    <?php # if ($page['sidebar']): ?>
      <?php # print render($page['sidebar']); ?>
    <?php # endif; ?>
    </div>
-->
    <div class="clear"></div>
    
    </div></div> <!-- /.section, /#content -->


  </div> <!-- /#main-wrapper -->

  <div id="footer-wrapper">
          <?php include('footer.php'); ?>
 </div> <!-- /#section, /#footer-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->
