<script>
// facebook button 
  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<?php  include('lightboxes/lightbox_early_2014.tpl.php'); ?>
<div id="page-wrapper"><div id="page">
<?php 

include('header.php');
 
 ?><!-- get header -->
<div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">
      <div id="front-top-left">
<!-- <a class="home-slide-link" href="https://forestethics.netdonor.net/ea-action/action?ea.client.id=1818&ea.campaign.id=23742&ea.tracking.id=homepage">
        <img src="/<?php echo($theme_path);?>/images/fe_2013_eoy/forestethics-eoy_appeal_slide.jpg"/>
       </a>
 -->          
    <?php 
    if ($page['slideshow']):
    print render($page['slideshow']);
    endif;
     ?>
     </div>
      <div id="front-top-right">
        <div id="take-action">
        <?php if ($page['take_action']): ?>
        <?php print render($page['take_action']); ?>
        <?php endif; ?>
        </div>
      </div>
      
   
      
<div id="front-bottom">
      <div id="front-bottom-left">
        <div id="front-stories">
          <!--<a href="/blog" id="blog-home-title"><h2 class="gil"><span>the root word:</span> forestethics blog</h2></a>-->
          <a href="/blog" id="blog-home-title"><h2 class="gil"><span>Happening</span> Now</h2></a>
          <?php if ($page['explore']): ?>
            <?php print render($page['explore']); ?>
          <?php endif; ?>
        </div>
      <div class="clear"></div>
      </div>
      <div id="front-bottom-mid">
        <h2 class="gil"><span>Making</span> News</h2>
        <?php 
        if ($page['front_news']):
        print render($page['front_news']);
        endif; 
        ?>                
      <div class="clear"></div>      

      </div>
      <div id="front-bottom-right">
        <?php 
        if ($page['front_right']):
        print render($page['front_right']);
        endif; 
        ?>                
      
<!--         <a href=""></a><img src="/<?php echo($theme_path);?>/images/about_us.png" alt="About Us" width="340"></a>
        <br/><br/>

 -->
      </div>
      <div class="clear"></div>
      <div class="padding-10"></div>
      </div> <!-- /#front-bottom -->
  </div></div> <!-- /#main, /#main-wrapper -->

  <div id="footer-wrapper">
    <?php include('footer.php'); ?>
  </div> <!-- /#footer-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->