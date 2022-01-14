 <?php 
  $template='package';
  $page='package';
  $filter='yes'; 
  $search_page='search/'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='yes'; $back_link='home.php'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container site-container-package-slider">
  <section class="section-container section-trailer">
    <div class="trailer-list">
      <?php require ($_SERVER['STRIMID'].'module/trailer-list.php')?>
    </div>
  </section>
  
  
  
  <section class="section-container section-package-slider">
    <div class="section-title">My Package</div>
    <div class="sps-container">
      <?php $package_origin='yes'; $package_type='premium';  require ($_SERVER['STRIMID'].'module/package-list.php')?>
      <?php for ($i=1; $i <= 7; $i++) { ?>
        <?php $package_origin='yes'; $package_type='free';  require ($_SERVER['STRIMID'].'module/package-list.php')?>
      <?php } ?>
    </div>
  </section>
  
  
  
  <section class="section-container section-package-slider">
    <div class="section-title">Recomended</div>
    <div class="sps-container">
      <?php $package_origin='yes'; $package_type='premium';  require ($_SERVER['STRIMID'].'module/package-list.php')?>
      <?php for ($i=1; $i <= 7; $i++) { ?>
        <?php $package_origin='yes'; $package_type='free';  require ($_SERVER['STRIMID'].'module/package-list.php')?>
      <?php } ?>
    </div>
  </section>
  
  
  
  <section class="section-container section-package-slider">
    <div class="section-title">New Release</div>
    <div class="sps-container">
      <?php $package_origin='yes'; $package_type='premium';  require ($_SERVER['STRIMID'].'module/package-list.php')?>
      <?php for ($i=1; $i <= 7; $i++) { ?>
        <?php $package_origin='yes'; $package_type='free';  require ($_SERVER['STRIMID'].'module/package-list.php')?>
      <?php } ?>
    </div>
  </section>
  
  
  
  <section class="section-container section-package-slider">
    <div class="section-title">Anime Series</div>
    <div class="sps-container">
      <?php $package_origin='yes'; $package_type='premium';  require ($_SERVER['STRIMID'].'module/package-list.php')?>
      <?php for ($i=1; $i <= 7; $i++) { ?>
        <?php $package_origin='yes'; $package_type='free';  require ($_SERVER['STRIMID'].'module/package-list.php')?>
      <?php } ?>
    </div>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>