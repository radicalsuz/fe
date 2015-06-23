<style>
#front-top-right div{
border: 1px solid #000;
height: 400px;
margin: 0 30px 30px;
}
</style>
<div id="page-wrapper"><div id="page">
  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">
  <div class="box">
        <div id="front-top-left">
          <h1>SOS: Save Our Shores Blog</h1>
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
      <div>poll</div>
      <div>fb like box</div>
    </div>

    <div class="clear"></div>
    
    </div></div> <!-- /.section, /#content -->


  </div>
  </div> <!-- /#main, /#main-wrapper -->


</div></div> <!-- /#page, /#page-wrapper -->
