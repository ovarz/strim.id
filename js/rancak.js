var toggle_filter = function(){
  "use strict";
  $('.header-filter').click(function(){
	$(this).toggleClass('header-filter-open');
    $('.filter-popup').slideToggle('fast');
    return false;
  });	
};

var toggle_detail_page = function(){
  "use strict";
  $('.header-info-toggle').click(function(){
	$(this).toggleClass('header-info-clicked');
    $('.videopage').toggleClass('videopage-full');
    return false;
  });	
};



$(document).ready(function(){
  "use strict";
  toggle_filter();
  toggle_detail_page();
});



$(document).on('lazybeforeunveil lazyloaded', function(e) {
  if(e.type === 'lazyloaded'){
    $(e.target).parent().removeClass('thumb-loading');
  }
});