<article class="video-box">
  <a class="video-box-link" href="username/package/detail.php">
    <div class="vbl-thumb flex_ori thumb-loading">
      <img class="lazyload" data-original="img/sample/sample-<?php echo rand(1,20); ?>.jpg" />
      <?php if($video_type == 'live') { ?><div class="vbl-label vbl-label-live">Live</div><?php } ?>
      <?php if($video_type == 'vod') { ?><div class="vbl-label vbl-label-vod">VOD</div><?php } ?>
    </div>
    <div class="vbl-info">
      <div class="vbl-title">
        <?php echo $random_title[array_rand($random_title)]; ?>
      </div>
      <?php require ($_SERVER['STRIMID'].'module/video-data-mini.php')?>
    </div>
  </a>
  
</article>