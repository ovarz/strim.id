var toggle_filter = function(){
  "use strict";
  $('.header-filter').click(function(){
	$(this).toggleClass('header-filter-open');
    $('.filter-popup').slideToggle('fast');
    return false;
  });	
};



$(document).ready(function(){
  "use strict";
  toggle_filter();
});



$(document).on('lazybeforeunveil lazyloaded', function(e) {
  if(e.type === 'lazyloaded'){
    $(e.target).parent().removeClass('thumb-loading');
  }
});