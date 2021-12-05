<a class="notification-box" 
  <?php if($notification == 'newcontent') { ?>
    href="username/package/detail.php"
  <?php } ?>
  <?php if($notification == 'reply' || $notification == 'mention') { ?>
    href="username/package/detail-comment.php"
  <?php } ?>
  <?php if($notification == 'newstreamer') { ?>
    href="username/"
  <?php } ?>
>
  <div class="notification-thumb">
    <div class="flex_ori thumb-loading">
      <img class="lazyload" data-original="img/sample/profile-<?php echo rand(1,20); ?>.jpg" />
    </div>
  </div>
  <div class="notification-info">
    <div>
      <b><?php echo $random_name[array_rand($random_name)]; ?></b>
      <span>
        <?php if($notification == 'newcontent') { ?>upload new content<?php } ?>
        <?php if($notification == 'reply') { ?>reply your comment<?php } ?>
        <?php if($notification == 'newstreamer') { ?>who you might know, is on strim.id<?php } ?>
        <?php if($notification == 'mention') { ?>mentioned you in comment<?php } ?>
      </span>
    </div>
  </div>
  <div class="notification-button">
    <div class="btn">
      <?php if($notification == 'newcontent') { ?>Watch<?php } ?>
      <?php if($notification == 'reply') { ?>Reply<?php } ?>
      <?php if($notification == 'newstreamer') { ?>Profile<?php } ?>
      <?php if($notification == 'mention') { ?>Detail<?php } ?>
    </div>
  </div>
</a>