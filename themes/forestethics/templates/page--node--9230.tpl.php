<!-- NEW MOBILE HOMEPAGE -->

<style>
  #toolbar{display: none !important;}
  body.toolbar-drawer{padding-top: 2.2em !important;}

  .navbar-default{background: none !important;border:none !important;box-shadow: none !important;}
  .navbar-default .navbar-collapse, .navbar-default .navbar-form{border: none !important;}
  .navbar-default .navbar-toggle, 
  .navbar-nav{background: #c3d767 !important;}
  .navbar-nav a{
    color: #002C51 !important;
    text-shadow: 1px 1px 2px #eee !important;
    font-family: "prenton",sans-serif !important;
    font-variant: small-caps !important;
    text-transform: lowercase !important;
    font-weight: normal !important;
    font-size: 20px !important;
  }

  .region-content #block-system-main h1.title{display:none;}

  h2{
    text-align: center;
    background: #0077C0;
    color: #fff !important;
    text-shadow: 1px 1px 2px #002C51 !important;
    font-family: "prenton",sans-serif !important;
    font-variant: small-caps !important;
    text-transform: lowercase !important;
    font-weight: normal !important;
    font-size: 30px !important;
    padding: 5px 0 10px !important;
    margin: 5px 0 !important;
    }

  .views-field-title a{
    color: #002C51 !important;
    text-shadow: 1px 1px 2px #eee !important;
    font-family: "prenton",sans-serif !important;
    font-variant: small-caps !important;
    text-transform: lowercase !important;
    font-weight: normal !important;
    font-size: 25px !important;
    line-height: 1em;
    text-align: center !important;
    display: block;
    margin-bottom: 10px;
  }

  .view-mobile-homepage-actions{margin-bottom: 10px;}

  .view-mobile-homepage-actions img{max-width:100%;height:auto;}

  #footer-wrapper{ text-align:center;border-top: 1px solid #eee;padding-top:10px;}
  .node-unpublished{background-color:#fff;}

  .view-mobile-homepage-actions .btn{  
    background: #F57B20 !important;
    color:#fff !important;        
    margin:10px auto !important;
    display: block;
  }
  
  .view-mobile-homepage-actions .btn:hover,
  .view-mobile-homepage-actions .btn:active
  {
    background: #db6d1e !important;
  }
  
<?php if (geoip_country_code_by_name($_SERVER['REMOTE_ADDR']) == "CA"){ ?>
  #block-views-mobile-homepage-actions-block{display:none;}
<?php } else {  ?>
    #block-views-mobile-homepage-actions-block-1{display:none;}
<?php } ?>    
  
</style>
<div id="page-wrapper" class="container"><div id="page">
<?php# include('header.php'); ?>
<?php global $theme_path; ?>
<div id="fb-root"></div><!-- facebook header bloby -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="/"><img src="http://www.forestethics.org/sites/forestethics.org/themes/forestethics/images/FE_logo_2015.png" alt="forest ethics logo" style="max-width:250px;height:auto;top:5px;left:5px;position:relative;" /></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/about-us"><span>About</span> Us</a>
              </li>
              <li><a href="/thriving-forests"><span>Protect</span> Forests</a>      
              </li>
              <li><a href="/responsible-industry"><span>Oppose</span> Dirty Energy</a>
              </li>
              <li><a href="/healthy-communities"><span>Support</span> Community</a>
              </li>
              <li><a href="/take-action"><span>Do</span> Something</a>
              </li>
              <li><a href="/donate"><span>Donate</span></a>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
  <div id="main-wrapper" class="clearfix">
<h2 class="mobile-header">Who We Are</h2>    
      <?php print render($page['content']); ?>
  </div> <!-- /#main-wrapper -->

  <div id="footer-wrapper">
The ForestEthics coalition is leading the fight to protect people, our environment & 
our climate from the threats posed by logging & the pursuit of extreme oil like tar sands.<br>
<a href="http://forestethics.org/site-map">Site Map</a> | <a href="http://forestethics.org/privacy-policy">Privacy Policy</a><br/>
&copy; Copyright 2015 | info (at) forestethics.org </div> <!-- /#section, /#footer-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->
