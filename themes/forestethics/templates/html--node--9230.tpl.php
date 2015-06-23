<?php

/**
HTML.TPL.PHP
 */
 
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>  >

<head profile="<?php print $grddl_profile; ?>">
 <?php if(drupal_is_front_page()){
  echo '<script src="//cdn.optimizely.com/js/707000160.js"></script>';
 }?>

  <title><?php print $head_title; ?></title>
  
  <!-- DRUPAL META BLOB -->
  <?php print $head; ?>
  <!-- DRUPAL STYLES BLOB -->
  <?php print $styles; ?>
  <!-- DRUPAL SCRIPTS BLOB -->

  <?php #print $scripts; ?>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

  <!-- /END DRUPAL SCRIPTS AND STYLES -->
<script type="text/javascript" src="//use.typekit.net/lqr6gim.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<!--[if IE]>
<style type="text/css" media="all"> @import url("/sites/forestethics.huang.radicaldesigns.org/themes/forestethics/css/ie2.css");</style> 
<![endif]-->

  
  <!-- open graph -->
  <meta property="og:type" content="profile"/>
  <meta property="og:url" content="<?php echo "http://forestethics.org".$_SERVER['REQUEST_URI']; ?>" /> 
  <meta property="fb:admins" content="14603164" />
  <meta property="og:site_name" content="ForestEthics.org" />
  <?php 
    if(isset($GLOBALS['title'])) {
      echo '<meta property="og:title" content="ForestEthics | '.$GLOBALS['title'].'"/>';
    } else{
      echo '<meta property="og:title" content="ForestEthics: because protecting forests is everyone’s business"/>';
    }
    if(!empty( $thumbnail )) {
      echo '<meta property="og:image" content="'.$thumbnail.'"/>';
    } elseif(!empty($featured_image)) {
      echo '<meta property="og:image" content="'.$featured_image.'"/>';
    }
    echo '<meta property="og:image" content="http://forestethics.org/sites/forestethics.org/themes/forestethics/images/defaultimage.png"/>';
    
/*    if(isset($GLOBALS['header_image'])) {
      echo '<meta property="og:image" content="'.$GLOBALS['header_image'].'"/>';
    } else{
      echo '<meta property="og:image" content="http://forestethics.org/sites/forestethics.org/themes/forestethics/images/slideshow.png"/>';
    }
*/    
      echo '<meta property="og:description" content="ForestEthics is a nonprofit environmental group committed to protecting North America\'s forests and the people and wildlife that depend on them."/>';
      echo '<meta name="description" content="ForestEthics is a nonprofit environmental group committed to protecting North America\'s forests and the people and wildlife that depend on them." />';      
  ?>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f58ffbf12e2d246" async="async"></script>


<meta name="google-site-verification" content="s1pvOujfHDJoRq0rINS3S_6nO5T0p4MSuT5uKxqkHe8" />
<meta name="google-site-verification" content="V7E4iS0m6CHPnn2RF8isLpF7jKIUS95CKHZAMrqXASk" />
<?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) { ?>
	<script>
	$(function(){
		$('html').addClass('ie11');
	});
	</script>
<?php } ?>
<script type="text/javascript">
    var _bftn_options = { animation: 'banner' }
</script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

</head>
<body class="<?php print $classes; ?> fe-default" <?php print $attributes;?>>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MSF7XL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MSF7XL');</script>
<!-- End Google Tag Manager -->


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('require', 'displayfeatures');
  ga('create', 'UA-9469538-2', 'auto');
  ga('send', 'pageview');

</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-9469538-2']);
  _gaq.push(['_trackPageview']);
  _gaq.push(['_setDomainName','forestethics.org']);
  _gaq.push(['_setAllowLinker',true]);

  FB.Event.subscribe('edge.create', function(targetUrl) {
    _gaq.push(['_trackSocial', 'facebook', 'like', targetUrl]);
  });
  
 ga('require', 'displayfeatures');

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
<style>
#addthis-desktop{display: none;}
#addthis-mobile{z-index: 999;display: none;}

@media screen and (min-width: 1100px) {
  #addthis-desktop{display: block;}
  #addthis-mobile{display: none;}  
}  


</style>

<div id="addthis-mobile" style="position: fixed;bottom: 0;z-index: 999;">
<div class="addthis_horizontal_follow_toolbox"></div>
</div>    
    
  <?php print $page; ?>
  <?php print $page_bottom; ?>
<?php if($node->nid == 8712||$node->nid ==8713){?>
    
    
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 998297519;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
    
    
    
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>


<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/998297519/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<script src="//cdn.optimizely.com/js/2127120621.js"></script>
<script type="text/javascript" async defer src="https://apis.google.com/js/platform.js?publisherid=100999266855271816916"></script>


<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
  _fbq.push(['addPixelId', '1506814076272064']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height=""1"" width=""1"" alt="""" style=""display:none"" src=""https://www.facebook.com/tr?id=1506814076272064&amp;ev=PixelInitialized"" /></noscript>

<?php  } ?>
<?php
  if(drupal_is_front_page()){
    echo '<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0013/6154.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>';
  
}?>

<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
 <script type="text/javascript">
 twttr.conversion.trackPid('l523e');</script>
 <noscript>
 <img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l523e&p_id=Twitter" />
 <img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l523e&p_id=Twitter" /></noscript>



<script>
    jQuery(document).ready(function(){
      jQuery('#webform-client-form-9113').submit(function() {
        ga('send', 'event', 'forestethics_website', 'contactform', 'submitted' );
      })
      jQuery('#webform-client-form-5278').submit(function() {
        ga('send', 'event', 'forestethics_website', 'onthegroundaction', 'submitted' );
        if (! jQuery('input:textarea').is(":empty")) {
          ga('send', 'event', 'forestethics_website', 'onthegroundaction', 'comment_submitted' );
        };
      })
      jQuery('#fe2014popup').click(function() {
        ga('send', 'event', 'forestethics_website', 'signupform', 'opened_lightbox' );
      })
      jQuery('#signup-header').submit(function() {
        ga('send', 'event', 'forestethics_website', 'headersignupform', 'submitted' );
      })
      jQuery('#blog-signup-form').submit(function() {
        ga('send', 'event', 'forestethics_website', 'blogsignupform', 'submitted' );
      })

      //previous page
      var referrer =  document.referrer;

      //forms 
      var abandonedclick = false;
      jQuery('form').click(function() { abandonedclick = true; };
      jQuery('form').submit(function() { abandonedclick = false; };
      if(abandonedclick){
        window.onbeforeunload = function() {
          ga('send', 'event', 'forestethics_website', 'form', 'abandoned-click' );
        };
      }
      var abandonedtype = false;
      jQuery('form').click(function() { abandonedtype = true; };
      jQuery('form').submit(function() { abandonedtype = false; };
      if(abandonedtype){
        window.onbeforeunload = function() {
          ga('send', 'event', 'forestethics_website', 'form', 'abandoned-type' );
        };
      }



    });
</script>

<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1051610161;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1051610161/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

  <?php 
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


    if(false !== strpos($url,'/node/5278/done?sid=190')){?>         
<!-- Google Code for TreeHouse Activist Sign Up Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1051610161;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "7fISCI3WtVkQsZi59QM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1051610161/?label=7fISCI3WtVkQsZi59QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php } ?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>
</html>
