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
  <?php $show_follow='no'; $show_price='yes'; $follow='no'; require ($_SERVER['STRIMID'].'module/profile-streamer.php')?>
  
  
  
  <section class="section-container section-profile-page">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia neque sed augue dignissim elementum. Curabitur ut lorem justo. Morbi commodo orci in nisl gravida malesuada. Duis efficitur magna vitae finibus dignissim. Suspendisse consequat massa at pulvinar iaculis. Nulla ac massa sed risus pulvinar fermentum.</p>
  </section>
  
  
  
  <section class="section-container section-trailer-video section-trailer-premium">
    <?php $content='vod'; require ($_SERVER['STRIMID'].'module/videopage-player.php')?>
  </section>
  
  
  
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