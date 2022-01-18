<?php 
  $template='profile-streamer';
  $page='streamer-profile';
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
  
  
  
  <?php $streamer_tab='package'; require ($_SERVER['STRIMID'].'module/streamer-tab.php')?>
  
  
  
  <section class="section-container section-package-slider">
    <div class="section-title">Free Package</div>
    <div class="sps-container">
      <?php for ($i=1; $i <= 8; $i++) { ?>
        <?php $package_origin='no'; $package_type='free';  require ($_SERVER['STRIMID'].'module/package-list.php')?>
      <?php } ?>
    </div>
  </section>
  
  
  
  <section class="section-container section-package-slider">
    <div class="section-title">Premium Package</div>
    <div class="sps-container">
      <?php for ($i=1; $i <= 8; $i++) { ?>
        <?php $package_origin='no'; $package_type='premium';  require ($_SERVER['STRIMID'].'module/package-list.php')?>
      <?php } ?>
    </div>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>