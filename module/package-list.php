<a class="package-box" href="username/package/live.php">
  <div class="vbl-thumb flex_ori thumb-loading">
    <img class="lazyload" data-original="img/sample/sample-<?php echo rand(1,20); ?>.jpg" />
    <?php if($package_type == 'free') { ?><div class="vbl-label vbl-label-free">Free</div><?php } ?>
    <?php if($package_type == 'premium') { ?><div class="vbl-label vbl-label-premium">Premium</div><?php } ?>
  </div>
  <div class="package-info">
    <?php if($package_origin == 'yes') { ?>
      <div class="streamer-box">
        <div class="streamer-thumb">
          <div class="flex_ori thumb-loading">
            <img class="lazyload" data-original="img/sample/profile-<?php echo rand(1,20); ?>.jpg" />
          </div>
        </div>
        <div class="streamer-info">
          <div>
            <div class="streamer-link"><?php echo $random_name[array_rand($random_name)]; ?></div>
          </div>
        </div>
      </div>
    <?php } ?>
    <div class="package-title"><?php echo $random_package[array_rand($random_package)]; ?></div>
    <?php if($package_origin == 'no') { ?>
      <div class="package-desc"><?php echo $random_summary[array_rand($random_summary)]; ?></div>
    <?php } ?>
  </div>
</a>