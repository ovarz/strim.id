<?php 
  $template='package';
  $page='package';
  $filter='no'; 
  $search_page='search/'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='yes'; $back_link='home.php'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container">
  <section class="section-container section-package">
    <div class="package-list">
      <?php for ($i=1; $i <= 2; $i++) { ?>
        <?php $package_origin='yes'; $package_type='premium';  require ($_SERVER['STRIMID'].'module/package-list.php')?>
      <?php } ?>
      <?php for ($i=1; $i <= 10; $i++) { ?>
        <?php $package_origin='yes'; $package_type='free'; require ($_SERVER['STRIMID'].'module/package-list.php')?>
      <?php } ?>
    </div>
    <?php require ($_SERVER['STRIMID'].'module/now-loading.php')?>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>