	jQuery(document).ready(function() {
		jQuery("#block-views-staff-pictures-block a,#block-views-senior-staff-pictures-block a").mouseenter(function(){
				var whatIsMyPath = jQuery(this).attr('href');
				jQuery('div[name*='+whatIsMyPath+']').delay(300).fadeIn(400); //trying to hack away at the delay issues...
			});
			jQuery(this).mouseout(function(){
				jQuery('.all-staff-information').fadeOut(200);
			});
		
	});
	 
	 /*
	 
	 jQuery(document).ready(function() {
		jQuery("#block-views-staff-pictures-block a,#block-views-senior-staff-pictures-block a").hover(function(){
			jQuery('.all-staff-information').removeClass('viewStaff');
			var whatIsMyPath = jQuery(this).attr('href');
			jQuery('div[name*='+whatIsMyPath+']').addClass('viewStaff');
		});
	});
	 
	 
	 */