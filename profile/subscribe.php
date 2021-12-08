<?php 
  $template='profile';
  $page='profile';
  $search_page='search/'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='yes'; $back_link='profile/'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container">
  <section class="section-container section-profile">
    <div class="section-profile-thumb content_center">
      <div class="spt-cricle flex_ori thumb-loading">
        <img class="lazyload" data-original="img/sample/profile-<?php echo rand(1,20); ?>.jpg" />
      </div>
    </div>
    <div class="section-profile-name"><?php echo $random_name[array_rand($random_name)]; ?></div>
    <div class="section-profile-status section-profile-premium">Premium Member</div>
  </section>
  
  
  
  <section class="section-container section-package">
    <div class="section-title">Subscribe</div>
    <div class="package-list">
      <?php for ($i=1; $i <= 24; $i++) { ?>
        <?php $package_origin='no'; $package_type='premium'; require ($_SERVER['STRIMID'].'module/package-list.php')?>
      <?php } ?>
    </div>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>