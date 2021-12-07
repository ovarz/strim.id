<?php 
  $template='profile-streamer';
  $page='streamer-detail';
  $search_page='search/'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='no'; $back_link='home.php'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container">
  <?php $follow='yes'; require ($_SERVER['STRIMID'].'module/profile-streamer.php')?>
  
  
  
  <section class="section-container section-package">
    <div class="section-title">Package</div>
    <div class="package-list">
      <?php for ($i=1; $i <= 2; $i++) { ?>
        <?php $package_origin='no'; $package_type='premium';  require ($_SERVER['STRIMID'].'module/package-list.php')?>
      <?php } ?>
      <?php for ($i=1; $i <= 3; $i++) { ?>
        <?php $package_origin='no'; $package_type='free'; require ($_SERVER['STRIMID'].'module/package-list.php')?>
      <?php } ?>
    </div>
    <a class="package-button btn" href="username/package/">
      <span>More Package</span>
      <svg class="svgicon svgicon-more" width="12" height="12" viewBox="0 0 10 10"><path d="M8.45,9,9.5,10l5-5-5-5L8.45,1.05l3.2,3.2H4.5v1.5h7.15Z" transform="translate(-4.5 0)"></path></svg>
    </a>
  </section>
  
  
  
  <section class="section-container section-package">
    <div class="section-title">Store</div>
    <div class="package-list">
      No Data
    </div>
    <a class="package-button btn" href="username/package/">
      <span>More Package</span>
      <svg class="svgicon svgicon-more" width="12" height="12" viewBox="0 0 10 10"><path d="M8.45,9,9.5,10l5-5-5-5L8.45,1.05l3.2,3.2H4.5v1.5h7.15Z" transform="translate(-4.5 0)"></path></svg>
    </a>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>