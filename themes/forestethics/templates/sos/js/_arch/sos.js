$(function() {
    

	// scroll body to 0px on click
	$('#home').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 2000);
		return false;
	});  

  $(".image-swap").hover(
    function(){this.src = this.src.replace("_off","_on");},
    function(){this.src = this.src.replace("_on","_off");
  });
  
  $('#header-drawer').click(function() {
    $('#header-right').slideToggle('slow', function() {
      if($(this).is(":hidden")) {
        $('#header-drawer strong').html('&darr;');
      } else{
        $('#header-drawer strong').html('&uarr;');    
      }
    });
  });
});