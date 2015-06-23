// Custom Light for multimedia room - radicalDesigns
//Create a lightbox and dynamically fill it with typed embeds
// <div class="rd-lightbox" type="video" id="12341234"></div>

jQuery(document).ready(function(){
  
  function rdShowBox(id,type){
    jQuery('.lightbox-overlay').show();
    jQuery('.lightbox-guts,.lightbox-fake').show();
    var html;
    if(type=="flickr"){
      html = '<iframe align="center" src="https://www.flickr.com/photos/forestethics/sets/'+id+'/player" frameBorder="0" width="500" height="500" scrolling="yes"></iframe>';
    } else if(type=="video") {
      html = '<iframe width="480" height="360" src="http://www.youtube.com/embed/'+id+'" frameborder="0" allowfullscreen></iframe>';  
    }
    html += '<div class="lightbox-close"><a href="">Close [X]</a></div>';
    jQuery('.lightbox-guts').html(html);
    return false;
  }
  
  function rdHideBox(){
    jQuery('.lightbox-overlay,.lightbox-guts,.lightbox-fake').hide();
    return false;
  }

if(jQuery('.rd-lightbox').length>0){
  //stick our lightbox in hidden at the bottom of the doc
  jQuery('body').append('<div class="lightbox-overlay" style="display:none;"></div><div class="lightbox-fake" style="display:none;"><div class="lightbox-guts" style="display:none;"></div></div>');
  
  //bind links to rdShowBox()
  jQuery('.rd-lightbox, .rd-lightbox a').click(function(){
  //console.log(this);
    rdShowBox(jQuery(this).attr('id'),jQuery(this).attr('type'));
    return false;
  });
  //bind the background to rdHideBox()
  jQuery('.lightbox-overlay,.lightbox-fake,.lightbox-close').click(rdHideBox);
  
  //cancel out normal links who are wrapped inside of our lightbox
  //prevents browser from following link after lightbox is closed
  //jQuery('.rd-lightbox a').click(function(){return false;});

  }
});