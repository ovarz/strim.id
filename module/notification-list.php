<a class="streamer-box" 
  <?php if($notification == 'expiry') { ?>
    href="username/package/vod/premium-bought.php"
  <?php } ?>
  <?php if($notification == 'expired') { ?>
    href="username/package/vod/premium-expired.php"
  <?php } ?>
  <?php if($notification == 'newcontent') { ?>
    href="username/package/vod/detail.php"
  <?php } ?>
  <?php if($notification == 'reply' || $notification == 'mention') { ?>
    href="username/package/vod/comment.php"
  <?php } ?>
  <?php if($notification == 'newstreamer') { ?>
    href="username/"
  <?php } ?>
>
  <div class="streamer-thumb">
    <div class="flex_ori thumb-loading">
      <img class="lazyload" data-original="img/sample/profile-<?php echo rand(1,20); ?>.jpg" />
    </div>
  </div>
  <div class="streamer-info">
    <div>
      <?php if($notification != 'expiry' && $notification != 'expired') { ?>
        <b><?php echo $random_name[array_rand($random_name)]; ?></b>
      <?php } ?>
      <span>
        <?php if($notification == 'expiry') { ?>your <b>[PACKAGE_TITLE]</b> expiry in 28 days<?php } ?>
        <?php if($notification == 'expired') { ?>your <b>[PACKAGE_TITLE]</b> expired<?php } ?>
        <?php if($notification == 'newcontent') { ?>upload new content<?php } ?>
        <?php if($notification == 'reply') { ?>reply your comment<?php } ?>
        <?php if($notification == 'newstreamer') { ?>who you might know, is on strim.id<?php } ?>
        <?php if($notification == 'mention') { ?>mentioned you in comment<?php } ?>
      </span>
    </div>
  </div>
  <div class="streamer-button">
    <div class="btn">
      <?php if($notification == 'newcontent') { ?>Watch<?php } ?>
      <?php if($notification == 'reply') { ?>Reply<?php } ?>
      <?php if($notification == 'newstreamer') { ?>Profile<?php } ?>
      <?php if($notification == 'mention' || $notification == 'expiry' || $notification == 'expired') { ?>Detail<?php } ?>
    </div>
  </div>
</a>