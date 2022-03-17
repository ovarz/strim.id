<article class="video-box">
  <?php if($template != 'addcontent') { ?>
  <a class="video-box-link" 
    <?php if($video_type == 'live') { ?>href="username/package/live/detail.php"<?php } ?>
    <?php if($video_type == 'vod') { ?>href="username/package/vod/detail.php"<?php } ?>
  >
  <?php } ?>
  <?php if($template == 'addcontent') { ?>
  <div class="video-box-link">
  <?php } ?>
    <div class="vbl-thumb flex_ori thumb-loading">
      <img class="lazyload" data-original="img/sample/sample-<?php echo rand(1,20); ?>.jpg" />
      <?php if($video_type == 'live') { ?><div class="vbl-label vbl-label-live">Live</div><?php } ?>
      <?php if($video_type == 'vod') { ?><div class="vbl-label vbl-label-vod">VOD</div><?php } ?>
    </div>
    <div class="vbl-info">
      <div class="vbl-title">
        <?php echo $random_title[array_rand($random_title)]; ?>
      </div>
	  <?php if($template != 'addcontent') { ?>
        <?php require ($_SERVER['STRIMID'].'module/video-data-mini.php')?>
	  <?php } ?>
	  <?php if($template == 'addcontent') { ?>
        <button class="btn addcontent-btn" onclick="location.href='addcontent/afterchoose.php'">Choose This Video</button>
	  <?php } ?>
    </div>
  <?php if($template != 'addcontent') { ?>
  </a>
  <?php } ?>
  <?php if($template == 'addcontent') { ?>
  </div>
  <?php } ?>
  
</article>