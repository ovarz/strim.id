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
    <a class="tab-link" href="username/">Package</a>
    <a class="tab-link tab-curr" href="username/store.php">Store</a>
  </section>
  
  
  
  <section class="section-container section-store">
    <div class="store-list">
      <?php for ($i=1; $i <= 10; $i++) { ?>
        <?php require ($_SERVER['STRIMID'].'module/store-list.php')?>
      <?php } ?>
    </div>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>