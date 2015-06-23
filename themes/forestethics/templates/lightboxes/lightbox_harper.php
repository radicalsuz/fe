<?php global $theme_path; ?>
<style type="text/css">

#lightbox-sibling{
    position: absolute;
    z-index: 1000;
    height: 100%;
    width: 100%;
    background-color: black;
    opacity: 0.9;
    display: none;
}

#lightbox-wrapper{
    position: absolute;
    z-index: 1001;
    left: 50%;
    top: 50%;
    display: none;
}

#lightbox-inner{
    width: 560px;
    height: 316px;
    position: relative;
    left: -280px;
    top: -158px;
    background: url(/<?php echo($theme_path);?>/images/harper-lightbox/main-img.png) 0% 0% no-repeat;
}

#lightbox-inner #close-btn{
    display: block;
    width: 10px;
    height: 10px;
    position: absolute;
    left: 466px;
    top: 15px;
    width: 70px;
    height: 17px;
    text-indent: -9999px;
    background: url(/<?php echo($theme_path);?>/images/harper-lightbox/close-btn.png) no-repeat;
}

#lightbox-inner #give-btn{
    display: block;
    width: 10px;
    height: 10px;
    position: absolute;
    left: 400px;
    top: 264px;
    width: 141px;
    height: 35px;
    text-indent: -9999px;
    background: url(/<?php echo($theme_path);?>/images/harper-lightbox/support-btn.png);
}

#lightbox-inner #in-us-btn{
    display: block;
    width: 10px;
    height: 10px;
    position: absolute;
    left: 467px;
    top: 294px;
    width: 48px;
    height: 14px;
    text-indent: -9999px;
}
</style>
<?php ?>
<?php //if(isset($_COOKIE['harper_lightbox'])){ echo 'cookie should be set'; }elseif(($_SERVER['REQUEST_URI'] == "/forest-ethics-canada-only-lightbox")  && (geoip_country_code_by_name($_SERVER['REMOTE_ADDR']) == "US")){

?>
<div id='lightbox-wrapper'>
    <div id='lightbox-inner'>
      <a id='close-btn' href='#'>close</a>
      <a id='give-btn' onclick="close_lightbox()" href='http://bit.ly/19qsV7L'>Give Today</a>
<!--       <a id='in-us-btn' href='http://bit.ly/T0RFVE'>In the United States?  Give Here!</a> -->
    </div>
  </div>
<div id='lightbox-sibling'>
</div>
<script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
<script type='text/javascript'>   
    function check_cookie(){
      if(jQuery.cookie('harper_lightbox')=='closed'){        
      }
      else{
       jQuery('#lightbox-sibling').css({'display': 'block'});
       jQuery('#lightbox-wrapper').css({'display': 'block'});
      }      
    }
  
    function close_lightbox(){
      jQuery('#lightbox-sibling').fadeOut(500);
      jQuery('#lightbox-wrapper').fadeOut(500);
      jQuery.cookie('harper_lightbox', 'closed', { expires: 2000 });  // fe.org already has jquery-cookie plugin
    }
    
  jQuery(document).ready(function()
    {    
    myCountry=geoplugin_countryCode();    
    if(myCountry == "CA"){
      check_cookie();
    }
  });
  
  $('#close-btn, #lightbox-sibling, #give-btn').click(function(){
      close_lightbox();
    });
    $(document).keyup(function(e){
      if(e.keyCode == 27){
        close_lightbox();
      }
    });       
      
</script>
