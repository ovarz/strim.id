<div id="popup-package-<?php echo $popup_package; ?>" class="popup-package" style="display:none;">
  <a class="popup-package-overlay" href="javascript:void(0)"></a>
  <div class="popup-package-box">
    <div class="ppb-thumb">
      <div class="ppb-thumb-square flex_ori thumb-loading">
        <img class="lazyload" data-original="img/sample/sample-<?php echo rand(1,20); ?>.jpg" />
      </div>
    </div>
    <div class="ppb-info">
      <h2 class="ppb-title"><?php echo $popup_package; ?> Package</h2>
      <div class="ppb-misc">
        <span>2021</span>
        <span>Comedy</span>
        <span>Anime</span>
      </div>
      <div class="ppb-view">000K Views</div>
      <div class="ppb-desc">
        <?php echo $random_summary[array_rand($random_summary)]; ?>
      </div>
    </div>
    <div class="ppb-nav">
      <a class="ppb-nav-button <?php if($popup_package == 'premium') { ?>ppb-premium-button<?php } ?> btn" 
        <?php if($popup_package == 'premium') { ?>href="username/package/vod/premium.php"<?php } ?>
        <?php if($popup_package == 'free') { ?>href="username/package/vod/"<?php } ?>
      >
        <?php if($popup_package == 'premium') { ?>IDR 0.000.000<?php } ?>
        <?php if($popup_package == 'free') { ?>Play<?php } ?>
      </a>
      <a class="ppb-nav-button ppb-trailer-button btn" href="username/package/vod/detail.php">Trailer</a>
    </div>
    <a class="ppb-contentlist" 
      <?php if($popup_package == 'premium') { ?>href="username/package/vod/premium.php"<?php } ?>
      <?php if($popup_package == 'free') { ?>href="username/package/vod/"<?php } ?>
    >
      <span>More Info & Video</span>
      <span>
        <svg class="svgicon svgicon-doubleright" width="22.5" height="30" viewBox="0 0 384 512"><path d="M363.8 264.5L217 412.5c-4.7 4.7-12.3 4.7-17 0l-19.8-19.8c-4.7-4.7-4.7-12.3 0-17L298.7 256 180.2 136.3c-4.7-4.7-4.7-12.3 0-17L200 99.5c4.7-4.7 12.3-4.7 17 0l146.8 148c4.7 4.7 4.7 12.3 0 17zm-160-17L57 99.5c-4.7-4.7-12.3-4.7-17 0l-19.8 19.8c-4.7 4.7-4.7 12.3 0 17L138.7 256 20.2 375.7c-4.7 4.7-4.7 12.3 0 17L40 412.5c4.7 4.7 12.3 4.7 17 0l146.8-148c4.7-4.7 4.7-12.3 0-17z"></path></svg>
      </span>
    </a>
  </div>
</div>