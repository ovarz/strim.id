<?php 
  $template='profile-streamer';
  $page='streamer-detail';
  $filter='yes'; 
  $search_page='search/'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='no'; $back_link='home.php'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container">
  <?php $show_follow='yes'; $show_price='no'; $follow='yes'; require ($_SERVER['STRIMID'].'module/profile-streamer.php')?>
  
  
  
  <?php $streamer_tab='store'; require ($_SERVER['STRIMID'].'module/streamer-tab.php')?>
  
  
  
  <section class="section-container section-store">
    <div class="store-list">
      <?php for ($i=1; $i <= 10; $i++) { ?>
        <?php $store_source='no'; require ($_SERVER['STRIMID'].'module/store-list.php')?>
      <?php } ?>
    </div>
    <?php require ($_SERVER['STRIMID'].'module/now-loading.php')?>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>