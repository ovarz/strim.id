var comment_reply = function(){
  "use strict";
  $(".comment-list-button").click(function(){
    $(this).toggleClass('comment-form-show');
    return false;
  });
  $(".comment-button-reply").click(function(){
    $(this).parent().find('.comment-form-inside').slideToggle('fast');
    return false;
  });
  $(".comment-button-toggle").click(function(){
    $(this).parents().eq(3).find('.comment-reply').slideToggle('fast');
    return false;
  });
};



$(document).ready(function(){
  "use strict";
  comment_reply();
});