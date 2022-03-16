var toggle_filter = function(){
  "use strict";
  $('.header-filter').click(function(){
	$(this).toggleClass('header-filter-open');
    $('.filter-popup').slideToggle('fast');
	$('.header-addcontent').removeClass('header-addcontent-open');
    $('.addcontent-popup').slideUp('fast');
    return false;
  });	
};

var toggle_addcontent = function(){
  "use strict";
  $('.header-addcontent').click(function(){
	$(this).toggleClass('header-addcontent-open');
    $('.addcontent-popup').slideToggle('fast');
	$('.header-filter').removeClass('header-filter-open');
    $('.filter-popup').slideUp('fast');
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

var popup_package = function(){
  "use strict";
  $('.package-popup').click(function(){
    var get_id = $(this).attr('title');
    $('#popup-package-' + get_id).fadeIn('fast');
    return false;
  });
  
  $('.popup-package-overlay').click(function(){
    $('.popup-package').fadeOut('fast');
    return false;
  });	
};



$(document).ready(function(){
  "use strict";
  toggle_filter();
  toggle_addcontent();
  toggle_detail_page();
  popup_package();
});



$(document).on('lazybeforeunveil lazyloaded', function(e) {
  if(e.type === 'lazyloaded'){
    $(e.target).parent().removeClass('thumb-loading');
  }
});