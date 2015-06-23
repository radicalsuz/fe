<div id="page-wrapper"><div id="page" class="no-nip">
<?php include('header.php'); ?>
  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">
  <div class="box">
       <?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>
      <a id="main-content"></a>
<?php
      echo('<h1 class="title">');
      print $title;
      echo('</h1>');
      //print render($content['field_subtitle']);
      if($node->field_subtitle){
        print $node->field_subtitle['und'][0]['value'];
      }
      //print render($content['field_top_area']);
      if($node->field_top_area){
        print $node->field_top_area['und'][0]['value'];
      }
?>
<div id="front-top-left">
     
<?php      print render($page['content']); ?>
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>

      <?php # print $feed_icons; ?>
    
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
