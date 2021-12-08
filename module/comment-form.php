<div class="comment-form">
  <textarea class="comment-form-field" rows="1" placeholder="Masukkan komentar anda ....."></textarea>
  <div class="comment-form-user content_center">
    <span>
      <div class="comment-form-thumb flex_ori thumb-loading">
        <img alt="img_title" class="lazyload" data-original="img/sample/profile-<?php echo rand(1,20); ?>.jpg" />
      </div>
      <div class="comment-form-name content_center">
        <span>
          Kirim Sebagai <?php echo $random_name[array_rand($random_name)]; ?>
        </span>
      </div>
    </span>
  </div>
  <div class="comment-form-submit">
    <button class="btn">Kirim</button>
  </div>
</div>