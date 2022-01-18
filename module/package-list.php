<a class="package-box" href="username/package/vod/">
  <div class="vbl-thumb flex_ori thumb-loading">
    <img class="lazyload" data-original="img/sample/sample-<?php echo rand(1,20); ?>.jpg" />
    <!--<?php if($package_type == 'free') { ?><div class="vbl-label vbl-label-free">Free</div><?php } ?>-->
    <?php if($package_type == 'premium') { ?><div class="vbl-label vbl-label-premium">IDR 00.000</div><?php } ?>
  </div>
  <div class="package-info">
    <div class="package-title"><?php echo $random_package[array_rand($random_package)]; ?></div>
    <?php if($package_origin == 'yes') { ?>
      <?php require ($_SERVER['STRIMID'].'module/streamer-box.php')?>
    <?php } ?>
    <?php if($package_origin == 'no') { ?>
      <div class="package-desc"><?php echo $random_summary[array_rand($random_summary)]; ?></div>
    <?php } ?>
  </div>
</a>