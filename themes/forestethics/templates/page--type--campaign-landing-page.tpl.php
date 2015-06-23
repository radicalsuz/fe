<div id="page-wrapper"><div id="page">
  <?php include('header.php'); ?>
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
