<?php 
  $template='store';
  $page='store';
  $filter='no'; 
  $search_page='search/'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='yes'; $back_link='username/store.php'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container">
  <section class="section-container section-store-detail">
    <div class="ssd-thumb flex_ori thumb-loading">
      <img class="lazyload" data-original="img/sample/item-<?php echo rand(1,10); ?>.webp" />
    </div>
    <div class="ssd-info">
      <div class="ssd-title"><?php echo $random_store[array_rand($random_store)]; ?></div>
      <div class="ssd-stock">Stock : 999++</div>
      <div class="ssd-price">Rp 0.000.000,-</div>
      <div class="ssd-desc"><?php echo $random_summary[array_rand($random_summary)]; ?></div>
      <a class="ssd-origin" href="username/store.php">
        <?php require ($_SERVER['STRIMID'].'module/streamer-box.php')?>
      </a>
    </div>
    <div class="ssd-action">
      <div class="ssd-totalitem">
        <button class="ssd-totalitem-box content_center">-</button>
        <input class="ssd-totalitem-box" type="text" placeholder="1" />
        <button class="ssd-totalitem-box content_center">+</button>
      </div>
      <div class="ssd-button">
        <button class="ssd-button-cart btn">Add to Cart</button>
        <button class="ssd-button-buy btn">Buy Now</button>
      </div>
    </div>
  </section>
  
  
  
  <section class="section-container section-store">
    <div class="section-title">More products</div>
    <div class="store-list">
      <?php for ($i=1; $i <= 7; $i++) { ?>
        <?php $store_source='no'; require ($_SERVER['STRIMID'].'module/store-list.php')?>
      <?php } ?>
    </div>
  </section>
  
  
  
  <section class="section-container section-store">
    <div class="section-title">More items for you</div>
    <div class="store-list">
      <?php for ($i=1; $i <= 7; $i++) { ?>
        <?php $store_source='yes'; require ($_SERVER['STRIMID'].'module/store-list.php')?>
      <?php } ?>
    </div>
    <?php require ($_SERVER['STRIMID'].'module/now-loading.php')?>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>