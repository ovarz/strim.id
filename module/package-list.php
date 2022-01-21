<a class="package-box <?php if($package_type == 'free' || $package_type == 'premium') { ?>package-popup<?php } ?>" 
  <?php if($package_type == 'free') { ?>title="free"<?php } ?>
  <?php if($package_type == 'premium') { ?>title="premium"<?php } ?>
  <?php if($package_type == 'free' || $package_type == 'premium') { ?>
    href="javascript:void(0)"
  <?php } ?>
  <?php if($package_type == 'premium-bought') { ?>
    href="username/package/vod/premium-bought.php"
  <?php } ?>
>
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