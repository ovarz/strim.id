
  <a class="store-box-link" href="store/detail.php">
    <div class="sbl-thumb flex_ori thumb-loading">
      <img class="lazyload" data-original="img/sample/item-<?php echo rand(1,10); ?>.webp" />
    </div>
    <div class="sbl-title">
      <?php echo $random_store[array_rand($random_store)]; ?>
    </div>
    <div class="sbl-price">
      <b>Rp. 000.000,-</b>
    </div>
    <div class="sbl-button">
      <div class="btn">Detail</div>
    </div>
    <?php if($store_source == 'yes') { ?>
      <?php require ($_SERVER['STRIMID'].'module/streamer-box.php')?>
    <?php } ?>
  </a>