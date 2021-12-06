<article class="live-box">
  <div class="streamer-box">
    <div class="streamer-thumb">
      <a class="flex_ori thumb-loading" href="username/">
        <img class="lazyload" data-original="img/sample/profile-<?php echo rand(1,20); ?>.jpg" />
      </a>
    </div>
    <div class="streamer-info">
      <div>
        <a class="streamer-link" href="username/"><?php echo $random_name[array_rand($random_name)]; ?></a>
        <div class="streamer-subscriber">Start streaming from 00:00 WIB</div>
      </div>
    </div>
  </div>
  <div class="live-box-desc"><?php echo $random_summary[array_rand($random_summary)]; ?></div>
  <a class="live-box-link flex_ori thumb-loading" href="username/package/detail.php">
    <img class="lazyload" data-original="img/sample/sample-<?php echo rand(1,20); ?>.jpg" />
    <?php if($video_type == 'subscriber') { ?><div class="vbl-label vbl-label-subscriber">Subscriber Only</div><?php } ?>
  </a>
  <?php require ($_SERVER['STRIMID'].'module/video-data-mini.php')?>
</article>