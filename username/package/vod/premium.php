<?php 
  $template='profile-streamer';
  $page='package';
  $filter='yes'; 
  $search_page='search/'; 
  require ('../../../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='yes'; $back_link='username/package/'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container">
  <?php $package_cover='premium'; require ($_SERVER['STRIMID'].'module/package-cover.php')?>
  
  
  
  <section class="section-container section-video">
    <div class="video-list">
      <?php for ($i=1; $i <= 3; $i++) { ?>
        <?php $video_type='live'; require ($_SERVER['STRIMID'].'module/video-list.php')?>
      <?php } ?>
      <?php for ($i=1; $i <= 21; $i++) { ?>
        <?php $video_type='vod'; require ($_SERVER['STRIMID'].'module/video-list.php')?>
      <?php } ?>
    </div>
    <?php require ($_SERVER['STRIMID'].'module/now-loading.php')?>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>