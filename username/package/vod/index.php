<?php 
  $template='profile-streamer';
  $page='package';
  $search_page='search/'; 
  require ('../../../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='yes'; $back_link='username/package/'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container">
  <?php $follow='no'; require ($_SERVER['STRIMID'].'module/profile-streamer.php')?>
  
  
  
  <section class="section-container section-package-info">
    <div class="spi-title">3Dbotmaker Diecast Racing</div>
    <div class="spi-desc"><?php echo $random_summary[array_rand($random_summary)]; ?></div>
  </section>
  
  
  
  <section class="section-container section-tab">
    <a class="tab-link" href="username/package/live/">Live</a>
    <a class="tab-link tab-curr" href="username/package/vod/">VOD</a>
  </section>
  
  
  
  <section class="section-container section-video">
    <div class="video-list">
      <?php for ($i=1; $i <= 24; $i++) { ?>
        <?php $video_type='vod'; require ($_SERVER['STRIMID'].'module/video-list.php')?>
      <?php } ?>
    </div>
    <?php require ($_SERVER['STRIMID'].'module/now-loading.php')?>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>