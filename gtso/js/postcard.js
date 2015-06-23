$(document).ready(function() {

  $('#content').show();
/*
  $('#shadow-wrapper').show();
  $('#shadow-wrapper').delay(35000).fadeOut(800);
  $('#shadow-skip').click(function(event) {
    $('#shadow-wrapper').hide();
  });
*/    
//	var count = 1822;
// something isn't working on the line below, but the rest works great! :P
	var count = ($('#card-count-thx-span').text())*1;
  var countx = count / 100;	
	
	$('#therm').css("height",countx);
  
	var selected = 1;
	
/*  
  $('.card').hover(function(event) {
    hover = $(this).attr('alt');
    hoverImg = 'http://forestethics.org/custom/postcard/images/card-'+hover+'-big.jpg'
    $('#card-select-img').attr('src',hoverImg);
  });
*/
  $('.card').click(function(event) {
    selected = $(this).attr('alt');
    selectedImg = 'http://forestethics.org/custom/postcard/images/card-'+selected+'-big.jpg'
    $('#card-select-img').attr('src',selectedImg);
    $('#selected-img-preview').attr('src',selectedImg);
    $('.card').removeClass('selected-card');
    $(this).addClass('selected-card');
    $('#custom1').val(selected);
  });

	$('#step2-button').click(function(event) {
    $("#front").hide();
    $("#back").fadeIn();		
    $("#step2-button").hide();
    $("#step1-button").show();
	});

	$('#step1-button').click(function(event) {
    $("#back").hide();
    $("#front").fadeIn();		
    $("#step1-button").hide();
    $("#step2-button").show();
	});

$('textarea.textarea').hover(
  function() {
   $(this).addClass('focus');
   $(this).removeClass('blur');
  },
  function() {
   $(this).removeClass('focus');
   $(this).addClass('blur');
  }  
);


$('textarea.textarea').focus(function() {
   $(this).addClass('focus');
   $(this).removeClass('blur');
   $(this).unbind('mouseenter mouseleave');
   $('#add-your-own').hide();
});

$('textarea.textarea').blur(function() {
   $(this).removeClass('focus');
   $(this).addClass('blur');
});



/*
	$('#next-button').click(function(event) {		
		$("#right-1").flip({
    	direction:'rl',
    	content: $('#right-2'),
    	color: '#fff'
    });
*/    

	

/*	$(function() {
		$('.example-pic').lightBox();
	});

*/

 var container = $('div.error-container');

	$("#postform").validate({
		errorContainer: container,
		rules: {
			First_Name: { 
        required: true,
        notDefault : true         
      },
			Zip: {
				required: true,
        notDefault : true
			},
			Email: {
				required: true,
        notDefault : true,
				email: true
			}
		},
		messages: {
			First_Name: "",
			Email:      "",
			Zip:        ""
		}
	});

   $.validator.addMethod(
    "notDefault", function(value, element) {
    return this.optional(element) || ((value != 'First Name*') && (value != 'Email*') && (value != 'Postal / Zip Code*'));
}, "This field is required.");


	$('#custom2').maxChar(300, {
		singularMessage : ' character remaining',
		pluralMessage		: ' characters remaining',
		truncate : 'true'
		});		

 });