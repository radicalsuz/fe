<?php global $theme_path; ?>
<style type="text/css">

.lightbox-sibling{
    position: absolute;
    z-index: 1000;
    height: 100%;
    width: 100%;
    background-color: black;
    opacity: 0.9;
    display: none;
}

.lightbox-wrapper{
    position: absolute;
    z-index: 1001;
    left: 50%;
    top: 50%;
    display: none;
}

.lightbox-inner{
    width: 575px;
    height: 318px;
    position: relative;
    z-index: 1;
    left: -280px;
    top: -158px;
}

  .lightbox-inner img.background{
    position: absolute;
    width: 100%;
    height: 100%;
    max-width: 100%;
    max-height: auto;
    
  }

.lightbox-inner .close-btn{
    display: block;
    width: 10px;
    height: 10px;
    position: absolute;
    left: 500px;
    top: 3px;
    width: 70px;
    height: 17px;    
    background: url(/<?php echo($theme_path);?>/images/fe_2013_eoy/close.png) no-repeat;
}

.lightbox-inner .give-btn{
    display: block;
    width: 10px;
    height: 10px;
    position: absolute;
    left: 295px;
    top: 10px;
    border: 0;
    width: 141px;
    height: 35px;
    text-indent: -9999px;
    background: url(/<?php echo($theme_path);?>/images/fe_2013_eoy/give_now.png) no-repeat;
}

.lightbox-inner .in-us-btn{
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
    
    .form-holder{
      width: 545px;
      height: 50px;
      position: absolute;
      z-index: 200;
      left: 15px;
      bottom: 15px;
      background-color: #fff;
    }
    
    .amount-input{
      font-size: 16px;
      float: left;
      margin-left: 75px;
      margin-top: 16px;
      
    }
    .eaRadioTextfield{
      float: left;
      height: 27px;
      line-height: 27px;
      background-color: #ebebeb;
      border: 2px solid #9d9d9d;
      margin-top: 10px;
      width: 68px;
      margin-left: 10px;
    }
}
</style>
<div class='lightbox-wrapper' id="FE_wrap">
    
    <div class='lightbox-inner'>
    <a href="https://forestethics.netdonor.net/ea-action/action?ea.client.id=1818&ea.campaign.id=23742&ea.tracking.id=lightbox">
      <img src="/<?php echo($theme_path);?>/images/fe_2013_eoy/fe_lightbox_background_with_copy.png" class="background" alt="North America's forests and wild places need protection from dirty energy climate disasters. Give now and help us fight tar sands."/>
    </a>
    
    
    <div class="form-holder">
      <form  action="https://forestethics.netdonor.net/ea-action/action" class="eaform ea5506class" id="ea5506id" name="FE Fundraising Form Responsive 111213_1" method="POST" onsubmit="_gaq.push(['_linkByPost', this]);">
        <input type="hidden" value="ea_submit_user_form" name="ea_requested_action">
        <input type="hidden" value="true" id="ea_javascript_enabled" name="ea_javascript_enabled">
        <input type="hidden" value="false" name="ea.AJAX.submit">
        <input type="hidden" value="1818" name="ea.client.id">
        <input type="hidden" value="23742" name="ea.campaign.id">
        <input type="hidden" value="5506" name="ea.form.id">
        <input type="hidden" value="1" name="ea.submitted.page">
        <div class="eaFormField" id="Donation_AmountField">
           <span class="eaFormRadio">
            <label for="Other" class="amount-input">Enter Amount $ </label>
        <input type="text" class="eaRadioTextfield" onchange="checkdep(this);" value="" name="Donation Amount" id="OtherInput">
           </span>
        </div>
        <input type="submit" value="" class="eaSubmitButton give-btn">
      </form>
      
      
    </div>
      <a class='close-btn' href='#'>&nbsp;&nbsp;&nbsp;</a>
      
      
    
    </div>
  </div>
<div class='lightbox-sibling' id="FE_sib">
</div>

<!-- FEA Lightbox -->
<div class="lightbox-wrapper" id="FEA_wrap">
   <div class='lightbox-inner'>
    <a href="https://forestethicsadvocacy.netdonor.net/ea-action/action?ea.client.id=1818&ea.campaign.id=23744&ea.tracking.id=lightbox">
      <img src="/<?php echo($theme_path);?>/images/fe_2013_eoy/fea_lightbox_background_with_copy.png" class="background" alt="From the streets of BC to the federal courtroom, we’re fighting tar sands from every angle. Give now to help protect Canada’s forests, waters, wildlife and communities."/>
    </a>
    
    
    <div class="form-holder">
      <form  action="https://forestethicsadvocacy.netdonor.net/ea-action/action" class="eaform ea5507class" id="ea5507id" name="FEA Fundraising Form Responsive 111213_1" method="POST" onsubmit="_gaq.push(['_linkByPost', this]);">
        <input type="hidden" value="ea_submit_user_form" name="ea_requested_action">
        <input type="hidden" value="true" id="ea_javascript_enabled" name="ea_javascript_enabled">
        <input type="hidden" value="false" name="ea.AJAX.submit">
        <input type="hidden" value="1818" name="ea.client.id">
        <input type="hidden" value="23744" name="ea.campaign.id">
        <input type="hidden" value="5507" name="ea.form.id">
        <input type="hidden" value="1" name="ea.submitted.page">
        <div class="eaFormField" id="Donation_AmountField">
           <span class="eaFormRadio">
            <label for="Other" class="amount-input">Enter Amount $ </label>
        <input type="text" class="eaRadioTextfield" onchange="checkdep(this);" value="" name="Donation Amount" id="OtherInput">
           </span>
        </div>
        <input type="submit" value="" class="eaSubmitButton give-btn">
      </form>
      
      
    </div>
      <a class='close-btn' href='#'>&nbsp;&nbsp;&nbsp;</a>
      
      
    
    </div>
</div>
<div class="lightbox-sibling" id="FEA_sib">

</div>

<script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
<script type='text/javascript'>   
    var geo_ip_global = '';
    
    function check_cookie(){
      if(jQuery.cookie('eoy2013_lightbox')=='closed'){
      }
      else{
        wrap_selector = '#'+geo_ip_global+'_wrap';
        sib_selector = '#'+geo_ip_global+'_sib';
       jQuery(wrap_selector).css({'display': 'block'});
       jQuery(sib_selector).css({'display': 'block'});
      }      
    }
    
    function close_lightbox(){
      jQuery('.lightbox-sibling').fadeOut(500);
      jQuery('.lightbox-wrapper').fadeOut(500);
      jQuery.cookie('eoy2013_lightbox', 'closed', { expires: 2000 });  // fe.org already has jquery-cookie plugin
    }
    
  jQuery(document).ready(function()
    {    
      myCountry=geoplugin_countryCode();    
      if(myCountry == "CA"){
        geo_ip_global = "FEA";     
      }
      else{
        geo_ip_global = "FE";      
      }
      check_cookie();
    });
    
  $('.close-btn, .lightbox-sibling, .give-btn').click(function(){
      close_lightbox();
    });
    $(document).keyup(function(e){
      if(e.keyCode == 27){
        close_lightbox();
      }
    });       
      
</script>
<?php /*}*/ ?>
