<style>

#fe2013-popup-bg {
    background: none repeat scroll 0 0 #000000;
    min-height: 1000px;
    height: 100%;
    left: 0;
    opacity: 0.8;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
}
#fe2013-popup-container {
    left: 0;
    margin-left: 50%;
    position: fixed;
    top: 250px; 
    width: 0;
    z-index: 2000;
}
#fe2013-popup-content {
    height: 318px;
    margin: auto auto auto -320px;
    position: relative;
    width: 573px;
}

#fe2013-popup-content form{
  position: absolute;
  bottom: 20px;
  right: 20px;
}

#fe2013-popup-content a, #fe2013-popup-content a img {
    border: 0 none;
    text-decoration: none;
}
#fe2013-popup-close-btn {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    cursor: pointer;
    display: block;
    height: 43px;
    position: absolute;
    right: 20px;
    text-decoration: none;
    top: 6px;
    width: 43px;
    z-index: 500;
}
.clear {
    clear: both;
}



  #fe2013-popup-content #eaFormButtonGroup_1{
    float: right;
    position: absolute;
    right: 0;
    bottom: 10px;
  }

#fe2013-popup-content form{
  width: 520px;  
  height: 100px;
  font-family: Helvetica, sans-serif;  
}

#fe2013-popup-content .eaFullWidthContent{
  height: 32px;
  line-height: 32px;
  width: 70%;
}

#fe2013-popup-content .eaFormElementLabel{
  float: left;
  width: 120px;
  font-family: inherit;
}

#fe2013-popup-content input[type="text"], #fe2013-popup-content select{
  width: 200px;
  float: left;
  border: 1px solid #e5e5e5;
  background-color: #f1eee9;
  margin-top:5px;
}


#fe2013-popup-content label.error{
  float: right;
  font-size: 10px;
  color: #ff0000;
}

</style>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.cookie/1.3.1/jquery.cookie.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.min.js"></script>
<script>
jQuery(function() {
if(jQuery.cookie('fe2013-popup-devo') !== 'true'){ 
jQuery('#fe2013-popup').fadeIn();
jQuery('#fe2013-popup-bg').click(function(){
jQuery('#fe2013-popup').fadeOut();
});
jQuery('#fe2013-popup-close-btn').click(function(){
jQuery('#fe2013-popup').fadeOut();
});
jQuery(document).keyup(function(e){
  if(e.keyCode == 27){jQuery('#fe2013-popup').fadeOut();}
});
jQuery.cookie('fe2013-popup-devo', 'true', { expires: 10, path: '/' });
};


  var validator  = jQuery('#fe2013-popup-content form').validate({    
    rules:{
    'First Name' : 'required',    
    'Primary Email' : {required:true,email:true},
    'Mailing State Province' : 'required'
    },
    messages:{
    'First Name' : 'required',    
    'Primary Email' : 'invalid',
    'Mailing State Province' : 'required'
    
    }
  });
  
  

});
</script>
<div style="display: none;" id="fe2013-popup">
  <div id="fe2013-popup-bg"></div>
  <div id="fe2013-popup-container">
      <div id="fe2013-popup-content">
        <span id="fe2013-popup-close-btn"><img src="/sites/forestethics.huang.radicaldesigns.org/themes/forestethics/images/fe2013_lightbox_assets/close.png"/></span>
        <a href="#">
          <img alt="fe" src="/sites/forestethics.huang.radicaldesigns.org/themes/forestethics/images/fe2013_lightbox_assets/background.png">
        </a>
        
<form method='POST' name='FE Main Sign Up_1' id='ea5307id' class='eaform ea5307class' action='http://action.forestethics.org/ea-action/action' onsubmit='return validateEAform(this, false)'>
<input type='hidden' name='ea_requested_action' value='ea_submit_user_form' />
<input type='hidden' name='ea_javascript_enabled' id='ea_javascript_enabled' value='false' />
<input type='hidden' name='ea.AJAX.submit' value='false' />
<input type='hidden' name='ea.tracking.id' value='lightbox2'/>
<input type='hidden' name='ea.client.id' value='1818' />
<input type='hidden' name='ea.campaign.id' value='23356' />
<input type='hidden' name='ea.form.id' value='5307' />
<input type='hidden' name='ea.submitted.page' value='1' />
<input type='hidden' name='sessionId' value='718d6ed8-d934-42cc-9121-649d0e4bbf4c' />
<div id='eaerrors' class='eaErrorMessage'>
</div>

<div id='First_NameDiv' class='eaFullWidthContent'><div id='First_NameError' class='eaErrorMessage'></div>
<span class='eaFormElementLabel'><label for='First_Name'><a name='First_Name' style='text-decoration:none; color: inherit;'>First Name</a><span class='eaMandatoryFieldMarker'> *</span></label></span>
<div id='First_NameField' class='eaFormField'>
   <input id='First_Name' type='text' class='eaFormTextfield' name='First Name' value='' onblur='validatefield(this);' onchange='checkdep(this);' /><span id='First_NameIcon' class='eaValidationIcon'>&nbsp;</span>

</div>

</div>
<div id='Primary_EmailDiv' class='eaFullWidthContent'><div id='Primary_EmailError' class='eaErrorMessage'></div>
<span class='eaFormElementLabel'><label for='Primary_Email'><a name='Primary_Email' style='text-decoration:none; color: inherit;'>Email Address</a><span class='eaMandatoryFieldMarker'> *</span></label></span>
<div id='Primary_EmailField' class='eaFormField'>
   <input id='Primary_Email' type='text' class='eaFormTextfield' name='Primary Email' value='' onblur='validatefield(this);' onchange='checkdep(this);' /><span id='Primary_EmailIcon' class='eaValidationIcon'>&nbsp;</span>

</div>

</div>
<div id='Mailing_State_ProvinceDiv' class='eaFullWidthContent'><div id='Mailing_State_ProvinceError' class='eaErrorMessage'></div>
<span class='eaFormElementLabel'><label for='Mailing_State_Province'><a name='Mailing_State_Province' style='text-decoration:none; color: inherit;'>State/Province</a><span class='eaMandatoryFieldMarker'> *</span></label></span>
<div id='Mailing_State_ProvinceField' class='eaFormField'>
   <select id='Mailing_State_Province' class='eaFormSelect' name='Mailing State Province' onblur='validatefield(this);' onchange='checkdep(this);'>
      <option value=''>please select</option>
      <option value='AL'>AL</option>
      <option value='AK'>AK</option>
      <option value='AZ'>AZ</option>
      <option value='AR'>AR</option>
      <option value='CA'>CA</option>
      <option value='CO'>CO</option>
      <option value='CT'>CT</option>
      <option value='DC'>DC</option>
      <option value='DE'>DE</option>
      <option value='FL'>FL</option>
      <option value='GA'>GA</option>
      <option value='HI'>HI</option>
      <option value='ID'>ID</option>
      <option value='IL'>IL</option>
      <option value='IN'>IN</option>
      <option value='IA'>IA</option>
      <option value='KS'>KS</option>
      <option value='KY'>KY</option>
      <option value='LA'>LA</option>
      <option value='ME'>ME</option>
      <option value='MD'>MD</option>
      <option value='MA'>MA</option>
      <option value='MI'>MI</option>
      <option value='MN'>MN</option>
      <option value='MS'>MS</option>
      <option value='MO'>MO</option>
      <option value='MT'>MT</option>
      <option value='NE'>NE</option>
      <option value='NV'>NV</option>
      <option value='NH'>NH</option>
      <option value='NJ'>NJ</option>
      <option value='NM'>NM</option>
      <option value='NY'>NY</option>
      <option value='NC'>NC</option>
      <option value='ND'>ND</option>
      <option value='OH'>OH</option>
      <option value='OK'>OK</option>
      <option value='OR'>OR</option>
      <option value='PA'>PA</option>
      <option value='RI'>RI</option>
      <option value='SC'>SC</option>
      <option value='SD'>SD</option>
      <option value='TN'>TN</option>
      <option value='TX'>TX</option>
      <option value='UT'>UT</option>
      <option value='VT'>VT</option>
      <option value='VA'>VA</option>
      <option value='WA'>WA</option>
      <option value='WV'>WV</option>
      <option value='WI'>WI</option>
      <option value='WY'>WY</option>
      <option value='AB'>AB</option>
      <option value='BC'>BC</option>
      <option value='MB'>MB</option>
      <option value='NB'>NB</option>
      <option value='NL'>NL</option>
      <option value='NS'>NS</option>
      <option value='NT'>NT</option>
      <option value='NU'>NU</option>
      <option value='ON'>ON</option>
      <option value='PE'>PE</option>
      <option value='QC'>QC</option>
      <option value='SK'>SK</option>
      <option value='YT'>YT</option>
      <option value='INTL'>Outside of North America</option>
   </select><span id='Mailing_State_ProvinceIcon' class='eaValidationIcon'>&nbsp;</span>

</div>

</div><span class="eaSubmitResetButtonGroup" id="eaFormButtonGroup_1"><input type="image" src="/sites/forestethics.huang.radicaldesigns.org/themes/forestethics/images/fe2013_lightbox_assets/submit.png"class="eaSubmitButton" value="Send"></input></span>
</form>
        
        
      </div> <!-- /popup-content -->
  </div> <!-- /popup-container -->
</div>