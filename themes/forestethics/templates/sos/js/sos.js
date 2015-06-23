

function faqBehaviors(){    
    if(window.innerWidth<1200){
      $('.question').click(function(){
        $('.answer',this).toggleClass('open');
      });      
    }        
}

function learnMoreBehaviors(){

  if(window.innerWidth<1024){
    $('.three-col').click(function(){
      $('.learn-more-col',this).toggleClass('open');
      console.log('click');
    });
  }
}




$(function() {
  
  faqBehaviors();
  $(window).resize(function(){
    faqBehaviors();
  });
  
  learnMoreBehaviors();
  $(window).resize(function(){
    learnMoreBehaviors();
  });
  
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
  
  
  //Text-Alerts
  
  $('#action-alerts').click(function(event){
   // event.preventDefault();
    //$('.action-alerts-area').toggle();
    
  });
  
  
});