	jQuery(document).ready(function() {
		jQuery("div[name='/staff/todd-paglia']").fadeIn(400);
		jQuery("#block-views-senior-staff-pictures-block-1 a, #block-views-senior-staff-pictures-block-2 a,#block-views-senior-staff-pictures-block-3 a,#block-views-senior-staff-pictures-block-4 a,#block-views-senior-staff-pictures-block-5 a").mouseenter(function(){
			
			var $that = jQuery(this);	
			var timer = setTimeout(function(){
				jQuery('.all-staff-information').fadeOut(200);
				var whatIsMyPath = jQuery($that).attr('href');
				jQuery("div[name='"+whatIsMyPath+"']").delay(300).fadeIn(400); 
				}, 200);
			$that.data('timer', timer);
		}).mouseout(function(){
				clearTimeout(jQuery(this).data('timer'));
				//jQuery('.all-staff-information').fadeOut(200);
			});
		
	});
	 
	 
	 /*
	  jQuery(document).ready(function() {
		var staffInfoTimeout;
		jQuery("#block-views-staff-pictures-block a,#block-views-senior-staff-pictures-block a").hover(function(){staffInfoTimeout = setTimeout(showStaffInfo, 500);},
		hideStaffInfo);
		
		function() showStaffInfo{
			var whatIsMyPath = jQuery(this).attr('href');
			jQuery('div[name*='+whatIsMyPath+']').delay(100).fadeIn(300);
		}
		
		function()hideStaffInfo{
			clearTimeout(staffInfoTimeout);
			jQuery('.all-staff-information').fadeOut(300).remove();
			
		});
	});
	*/