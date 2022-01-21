<?php $popup_package='premium'; require ($_SERVER['STRIMID'].'module/popup-package.php')?>
<?php $popup_package='free'; require ($_SERVER['STRIMID'].'module/popup-package.php')?>



<footer class="footer-all content_center">
  <span>
    strim.id &copy;2021 | All Right Reserved
    <div class="tnc content_center">
      <a class="tnc-link" href="tnc.php">Term & Condition &raquo;</a>
    </div>
  </span>
</footer>



<noscript id="deferred-styles">
  <link rel="stylesheet" type="text/css" href="css/hold.css?<?php echo $anticache; ?>"/>
</noscript>
<script defer>
  var loadDeferredStyles = function() {
	var addStylesNode = document.getElementById("deferred-styles");
	var replacement = document.createElement("div");
	replacement.innerHTML = addStylesNode.textContent;
	document.body.appendChild(replacement)
	addStylesNode.parentElement.removeChild(addStylesNode);
  };
  var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
	  window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
  else window.addEventListener('load', loadDeferredStyles);
</script>

<script defer src="js/lazysizes.min.js"></script>
<script defer src="js/rancak.js"></script>
</body>
</html>