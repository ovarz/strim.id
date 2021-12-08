<div class="comment-content">
  <div class="comment-thumb">
    <a aria-label="Link Title" title="Link Title" class="comment-thumb-box flex_ori thumb-loading" href="../vivasso/profile.php" target="_blank">
      <img alt="img_title" class="lazyload" data-original="img/sample/profile-<?php echo rand(1,20); ?>.jpg" />
    </a>
  </div>
  <div class="comment-info">
    <span>
      <a aria-label="Link Title" title="Link Title" class="comment-name" href="../vivasso/profile.php" target="_blank">
        <?php echo $random_name[array_rand($random_name)]; ?>
      </a>
      <div class="comment-date">00/00/0000</div>
      <div class="comment-detail"><?php echo $random_summary[array_rand($random_summary)]; ?></div>
      <a aria-label="Link Title" title="Link Title" class="comment-list-button comment-button-reply" href="javascript:void(0)">
        <div>Balas</div>
        <svg class="svgicon svgicon-dropdown" width="10" height="6" viewBox="0 0 10 6">
          <path d="M9.62907 0H0.334185C0.0553948 0 -0.100275 0.294357 0.0723769 0.495312L4.71982 5.88431C4.85285 6.03856 5.10899 6.03856 5.24344 5.88431L9.89088 0.495312C10.0635 0.294357 9.90786 0 9.62907 0Z"/>
        </svg>
      </a>
      <?php if($comment_parent == 'yes') { ?>
      <a aria-label="Link Title" title="Link Title" class="comment-list-button comment-button-toggle" href="javascript:void(0)">
        <div>
          <div>000K</div>
          Balasan
        </div>
        <svg class="svgicon svgicon-dropdown" width="10" height="6" viewBox="0 0 10 6">
          <path d="M9.62907 0H0.334185C0.0553948 0 -0.100275 0.294357 0.0723769 0.495312L4.71982 5.88431C4.85285 6.03856 5.10899 6.03856 5.24344 5.88431L9.89088 0.495312C10.0635 0.294357 9.90786 0 9.62907 0Z"/>
        </svg>
      </a>
      <?php } ?>
      <div class="comment-form-inside"><?php require ($_SERVER['STRIMID'].'module/comment-form.php')?></div>
    </span>
  </div>
</div>