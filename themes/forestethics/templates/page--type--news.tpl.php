<div id="page-wrapper"><div id="page">
<?php include('header.php'); ?>
  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">
  <div class="box">
        <div id="front-top-left">
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
    
    </div> <!-- /content-area -->
    
    <div id="front-top-right">    

<?php
//  if($node->field_stories['und'][0]['tid'] == 497){ //if this is a 'staff story'
//      if ($page['blog_sidebar']):
//      print render($page['blog_sidebar']);
//    endif; 
//  } else {
    if ($page['sidebar']):
      print render($page['sidebar']);
    endif; 
//  }
?>
    </div>

    <div class="clear"></div>
    
    </div></div> <!-- /.section, /#content -->


  </div>
  </div> <!-- /#main, /#main-wrapper -->

  <div id="footer-wrapper">
          <?php include('footer.php'); ?>
 </div> <!-- /#section, /#footer-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->
