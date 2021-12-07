<?php 
  $template='package-streamer';
  $page='package';
  $search_page='search/'; 
  require ('../../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='yes'; $back_link='username/'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>
<style>
  .site-container{grid-template-rows:auto auto 1fr;}
</style>

<div class="site-container">
  <?php $follow='yes'; require ($_SERVER['STRIMID'].'module/profile-streamer.php')?>
  
  
  
  <div class="package-empty content_center">
    <span>
      <div class="package-empty-icon content_center">
        <img src="img/asset/empty-package.png" />
      </div>
      <div class="package-empty-label">Package not available</div>
    </span>
  </div>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>