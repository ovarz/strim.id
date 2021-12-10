<div class="streamer-box">
  <div class="streamer-thumb">
    <a class="flex_ori thumb-loading" href="username/">
      <img class="lazyload" data-original="img/sample/profile-<?php echo rand(1,20); ?>.jpg" />
    </a>
  </div>
  <div class="streamer-info">
    <div>
      <a class="streamer-link" href="username/"><?php echo $random_name[array_rand($random_name)]; ?></a>
      <div class="streamer-subscriber">000K subscriber</div>
    </div>
  </div>
  <?php if($page != 'streamer-follow') { ?>
  <div class="streamer-button">
    <button class="btn <?php if($follow == 'yes') { ?>btn-followed<?php } ?>">
      Follow<?php if($follow == 'yes') { ?>ed<?php } ?>
    </button>
  </div>
  <?php } ?>
</div>