//boot up tabs on media/press pages
jQuery(document).ready(function() {

  if(jQuery("#tab-nav").length>0){
  jQuery( "#tab-nav" ).tabs();
  }
	
  jQuery('.text').click(function () {
    if (jQuery("#email-sign-up-dropdown").is(":hidden")) {
      jQuery("#email-sign-up-dropdown").slideDown("slow");
    } else {
      jQuery("#email-sign-up-dropdown").slideUp("slow");
    }
  });
  
  if(jQuery('#Email_-_Opt_InY').length>0){
    //jQuery('#Email_-_Opt_InY').prop('checked',true).css({'visibility':'hidden'});jQuery('label[for="Email_-_Opt_InY"]').css({'visibility':'hidden'});
    // jQuery.prop is not supported on pre-1.6 and as the default state is visibility hidden and checked we don't need this any longer
  }
  
});