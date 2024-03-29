  <section class="section-container section-cover flex_ori thumb-loading">
    <img class="lazyload" data-original="img/sample/sample-<?php echo rand(1,20); ?>.jpg" />
  </section>
  
  <section class="section-container section-profile-streamer <?php if($show_price == 'yes' || $show_price == 'bought') { ?>ssp-premium<?php } ?>">
    <div class="ssp-thumb">
      <div class="flex_ori thumb-loading">
        <img class="lazyload" data-original="img/sample/profile-<?php echo rand(1,20); ?>.jpg" />
      </div>
    </div>
    <div class="ssp-info">
      <a class="ssp-name" href="username/"><?php echo $random_name[array_rand($random_name)]; ?></a>
      <div class="ssp-followers">000K Followers</div>
    </div>
    <?php if($show_follow == 'yes') { ?>
    <div class="ssp-button streamer-button">
      <button class="btn <?php if($follow == 'yes') { ?>btn-followed<?php } ?>">
        Follow<?php if($follow == 'yes') { ?>ed<?php } ?>
      </button>
    </div>
    <?php } ?>
    <?php if($show_price == 'yes') { ?>
    <div class="ssp-button streamer-button">
      <a class="btn" href="javascript:void(0)">
        IDR 0.000.000
      </a>
    </div>
    <?php } ?>
    <?php if($show_price == 'bought') { ?>
    <div class="ssp-button ssp-expired">
      Expired in 00 days
    </div>
    <?php } ?>
  </section>