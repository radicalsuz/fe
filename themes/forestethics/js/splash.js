jQuery(document).ready(function(){
  jQuery('body').append('<div class="lightbox-overlay" style="display:none;"></div><div class="lightbox-fake" style="display:none;"><div class="lightbox-guts" style="display:none;"></div></div>');
  
    
 // eraseCookie("fe-splash2");
  
  if(readCookie('fe-splash2')==null) {
    createCookie('fe-splash2','true',1);

    //show it
    jQuery('.lightbox-overlay').show();
    jQuery('.lightbox-fake').show();
    jQuery('.lightbox-guts').show();
    
    var html = '<a href="http://bit.ly/KSb9Lq"><img src="http://forestethics.org/sites/forestethics.org/themes/forestethics/images/splash-image.jpg"></a>';
    html += '<div class="lightbox-close"><a href="" style="font-weight:bold;">[ Close ]</a></div>';
    jQuery('.lightbox-guts').html(html);
    jQuery('.lightbox-overlay,.lightbox-close').click(hideBox);
    //jQuery('.lightbox-fake').not('.lightbox-guts').click(hideBox);
  }
  
  function hideBox(){
  console.log(this);
    jQuery('.lightbox-overlay,.lightbox-guts,.lightbox-fake').hide();
    return false;
  }

});


function createCookie(name, value, days)
{
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
    }
  else var expires = "";
  document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name)
{
  var ca = document.cookie.split(';');
  var nameEQ = name + "=";
  for(var i=0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1, c.length); //delete spaces
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
  return null;
}

function eraseCookie(name)
{
  createCookie(name, "", -1);
}