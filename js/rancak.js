/* scroll script */
var all_scroll = function(){
  "use strict";	

  $(window).scroll(function(){
    var scroll_position = $(window).scrollTop();
  });  
};
/* end scroll script */

var toggle_float = function(){
  "use strict";
  $('.open-sticky').click(function(){
    var get_id = $(this).attr('title');
	$(this).toggleClass('show-sticky');
	$('.open-sticky').not(this).removeClass('show-sticky');
    $('#float-' + get_id).slideToggle('fast');
    $('.float-box').not('#float-' + get_id).slideUp('fast');
    return false;
  });	
};



$(document).ready(function(){
  "use strict";
  toggle_float();
});



$(document).on('lazybeforeunveil lazyloaded', function(e) {
  if(e.type === 'lazyloaded'){
    // $(e.target).parent().removeClass('thumb-loading');
  }
});