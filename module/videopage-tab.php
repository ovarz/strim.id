<section class="videopage-tab">
  <a class="vpt-link <?php if($videopage == 'info') { ?>vpt-curr<?php } ?>" href="username/package/vod/detail.php">
    Info
  </a>
  <?php if($content == 'vod') { ?>
    <a class="vpt-link <?php if($videopage == 'comment') { ?>vpt-curr<?php } ?>" href="username/package/vod/comment.php">
      Comment
    </a>
  <?php } ?>
  <?php if($content == 'live') { ?>
    <a class="vpt-link <?php if($videopage == 'chat') { ?>vpt-curr<?php } ?>" href="username/package/vod/chat.php">
      Chat
    </a>
  <?php } ?>
  <a class="vpt-link <?php if($videopage == 'related') { ?>vpt-curr<?php } ?>" href="username/package/vod/related.php">
    Related
  </a>
</section>