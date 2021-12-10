<?php 
  $template='profile-streamer';
  $page='streamer-detail';
  $filter='no'; 
  $search_page='search/'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='no'; $back_link='home.php'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container">
  <?php $follow='yes'; require ($_SERVER['STRIMID'].'module/profile-streamer.php')?>
  
  
  
  <section class="section-container section-tab">
    <a class="tab-link tab-curr" href="username/">Package</a>
    <a class="tab-link" href="username/store.php">Store</a>
  </section>
  
  
  
  <section class="section-container section-package">
    <div class="package-list">
      <?php for ($i=1; $i <= 2; $i++) { ?>
        <?php $package_origin='no'; $package_type='premium';  require ($_SERVER['STRIMID'].'module/package-list.php')?>
      <?php } ?>
      <?php for ($i=1; $i <= 8; $i++) { ?>
        <?php $package_origin='no'; $package_type='free'; require ($_SERVER['STRIMID'].'module/package-list.php')?>
      <?php } ?>
    </div>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>