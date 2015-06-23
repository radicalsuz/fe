<?php
/**
HTML.TPL.PHP
 */ 
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>  >

<head profile="<?php print $grddl_profile; ?>">
  <title>Blog | Tar Sands SOS</title>
  
  <!-- DRUPAL META BLOB -->
  <?php print $head; ?>
  <meta name="description" content="Read and share stories and articles from Tar Sands SOS campaigners and people whose lives are or could be affected by tar sands oil."> 
  <meta property="og:title" content="Blog | Tar Sands SOS" />
  <meta property="og:type" content="non_profit" />
  <meta property="og:url" content="http://tarsandssos.org/blog" />
  <meta property="og:image" content="http://tarsandssos.org/images/sos-fb-meta.png" />
  <meta property="og:description" content="Read and share stories and articles from Tar Sands SOS campaigners and people whose lives are or could be affected by tar sands oil." />
  <meta property="og:site_name" content="Tar Sands SOS, By ForestEthics" />
  <meta property="fb:admins" content="14603164" />
  <!-- DRUPAL STYLES BLOB -->
  <?php  print $styles; ?><!-- commented out for now as the footer styles were conflicting -->
  <link rel="stylesheet" href="http://tarsandssos.org/css/style.css" type="text/css" media="screen" />
  <!-- DRUPAL SCRIPTS BLOB -->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<link rel="shortcut icon"  href="http://sos.huang.radicaldesigns.org/sos-favicon.ico" /> 
  <?php print $scripts; ?>
<script type="text/javascript" src="sites/forestethics.huang.radicaldesigns.org/themes/forestethics/templates/sos/js/sos.js"></script>
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
      echo '<meta property="og:image" content="http://forestethics.org/sites/forestethics.huang.radicaldesigns.org/files/styles/square_thumbnail/public/'.$thumbnail.'"/>';
    } elseif(!empty($featured_image)) {
      echo '<meta property="og:image" content="http://forestethics.org/sites/forestethics.huang.radicaldesigns.org/files/'.$featured_image.'"/>';
    }
    echo '<meta property="og:image" content="http://forestethics.org/sites/forestethics.org/themes/forestethics/images/defaultimage.png"/>';
    
/*    if(isset($GLOBALS['header_image'])) {
      echo '<meta property="og:image" content="'.$GLOBALS['header_image'].'"/>';
    } else{
      echo '<meta property="og:image" content="http://forestethics.org/sites/forestethics.org/themes/forestethics/images/slideshow.png"/>';
    }
*/    
    if(!empty( $field_meta )){
      echo '<meta property="og:description" content="'.$field_meta.'" />';
      echo '<meta name="description" content="'.$field_meta.'" />';
//    } elseif(!empty( $GLOBALS['body_sample'] )){
//      echo '<meta property="og:description" content="'.$GLOBALS['body_sample'].'" />';
//      echo '<meta name="description" content="'.$GLOBALS['body_sample'].'" />'; }
    } else {
      echo '<meta property="og:description" content="ForestEthics is a nonprofit environmental group committed to protecting North America\'s forests and the people and wildlife that depend on them."/>';
      echo '<meta name="description" content="ForestEthics is a nonprofit environmental group committed to protecting North America\'s forests and the people and wildlife that depend on them." />';      
    }
  ?>

    <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f58ffbf12e2d246"></script>

<meta name="google-site-verification" content="s1pvOujfHDJoRq0rINS3S_6nO5T0p4MSuT5uKxqkHe8" />
<meta name="google-site-verification" content="V7E4iS0m6CHPnn2RF8isLpF7jKIUS95CKHZAMrqXASk" />
<style>

form#signup-header{
right: 0;
background: none;
}

form#signup-header .text, form#signup-header input.text:focus{
width: 214px;
border: 2px solid #0077C0;
}

#signup-header .button{
background: #002c53;
font-variant: small-caps;
border-radius: 5px;
color: #fff;
background-position: inherit;
border:1px solid #4D97D4;
width: auto;
margin: 0;
cursor: pointer;
padding: 0;
float: right;
height: auto;
padding: 0px 5px 4px;
font-size: 1em;
margin: 5px 18px;
vertical-align: middle;
}

#email-sign-up-dropdown{
border:5px solid #4D97D4;
border-top: none;
background: #F0FFFF;
position:absolute;
top: 38px;
right:0px;
border-radius: 0px 0px 20px 20px;
line-height: 2em;
display: none;
}

input.form-field, select.form-field{
background: #fff;
color: #888;
border: 2px solid #4D97D4;
padding: 5px;
box-sizing: border-box;
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
width: 214px;
margin: 5px 0px 0px 18px;
height: 30px;
}
div.error {
  float: left;
  width: 122px;
  color: red;
  font-size: 12px !important;
  line-height: 1em;
  margin-left: 20px;
  margin-top: 5px;
  font-style: italic;
  background: none !important;
}
</style>

</head>
<body class="<?php print $classes; ?> inner" <?php print $attributes;?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/all.js#xfbml=1&appId=367496393380142";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/all.js#xfbml=1&appId=576623205730713";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-9469538-2']);
  _gaq.push(['_trackPageview']);
  _gaq.push(['_setDomainName','forestethics.org']);
  _gaq.push(['_setAllowLinker',true]);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
