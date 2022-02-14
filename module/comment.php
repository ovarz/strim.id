<section class="section-container section-info-bottom comment">
  <?php require ($_SERVER['STRIMID'].'module/comment-form.php')?>
  <div class="comment-list">
    <div class="comment-row">
      <?php $comment_parent='yes'; require ($_SERVER['STRIMID'].'module/comment-content.php')?>
      <div class="comment-reply">
        <?php for ($i=1; $i <= 2 ; $i++) { ?>
          <?php $comment_parent='no'; require ($_SERVER['STRIMID'].'module/comment-content.php')?>
        <?php }?>
      </div>
    </div>
    <?php for ($i=1; $i <= 4 ; $i++) { ?>
    <div class="comment-row">
      <?php $comment_parent='no'; require ($_SERVER['STRIMID'].'module/comment-content.php')?>
    </div>
    <?php }?>
  </div>
  <a aria-label="Link Title" title="Link Title" class="comment-loadmore" href="javascript:void(0)">
    <div>Muat Lainnya</div>
  </a>
</section>

<noscript id="comment-deferred">
  <link rel="stylesheet" type="text/css" href="css/comment.css"/>
</noscript>
<script defer>
  var loadDeferredStyles_comment = function() {
	var addStylesNode = document.getElementById("comment-deferred");
	var replacement = document.createElement("div");
	replacement.innerHTML = addStylesNode.textContent;
	document.body.appendChild(replacement)
	addStylesNode.parentElement.removeChild(addStylesNode);
  };
  var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
	  window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  if (raf) raf(function() { window.setTimeout(loadDeferredStyles_comment, 0); });
  else window.addEventListener('load', loadDeferredStyles_comment);
</script>
<script defer src="js/comment.js"></script>