<?php 
  $template='search';
  $page='search';
  $filter='yes'; 
  $search_page='search/'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='no'; $back_link='home.php'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container">
  <?php require ($_SERVER['STRIMID'].'module/search-box.php')?>
  

  
  <section class="section-container section-video">
    <?php $follow='yes'; require ($_SERVER['STRIMID'].'module/streamer-list.php')?>
    <div class="section-title">Latest from <?php echo $random_name[array_rand($random_name)]; ?></div>
    <div class="video-list">
      <?php for ($i=1; $i <= 5; $i++) { ?>
        <?php $video_type='vod'; require ($_SERVER['STRIMID'].'module/video-list.php')?>
      <?php } ?>
    </div>
    <a class="profilepage-button btn" href="username/">
      <span>More Video</span>
    </a>
  </section>
  
  
  
  <section class="section-container section-video">
    <div class="section-title">Lorem Ipsum</div>
    <div class="video-list">
      <?php $video_type='vod'; require ($_SERVER['STRIMID'].'module/video-list.php')?>
      <?php $video_type='live'; require ($_SERVER['STRIMID'].'module/video-list.php')?>
      <?php for ($i=1; $i <= 22; $i++) { ?>
        <?php $video_type='vod'; require ($_SERVER['STRIMID'].'module/video-list.php')?>
      <?php } ?>
    </div>
    <?php require ($_SERVER['STRIMID'].'module/now-loading.php')?>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>