<div id="page-wrapper"><div id="page">
<?php include('header.php'); ?>
  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">
  <div class="box">
        <div id="front-top-left">
          <div id="ribbon-padder"><h1 class="ribbon"><strong class="ribbon-content"><a href="http://forestethics.org/blog/">The Root Word: ForestEthics Blog</a></strong> <a href="http://forestethics.org/blog.xml"><img src="http://forestethics.org/sites/forestethics.org/themes/forestethics/images/feed-icon-28x28.png"></a></h1></div>
          <h1 id="blog-category-subtitle"><?php #print $title;?></h1>
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
    
    <?php if ($page['blog_sidebar']): ?>
      <?php print render($page['blog_sidebar']); ?>
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
