<?php 
  $template='profile-streamer';
  $page='package';
  $filter='no'; 
  $search_page='search/'; 
  require ('../../../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='yes'; $back_link='username/package/'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container">
  <?php $show_follow='no'; $show_price='no'; $follow='no'; require ($_SERVER['STRIMID'].'module/profile-streamer.php')?>
  
  
  
  <section class="section-container section-profile-page">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia neque sed augue dignissim elementum. Curabitur ut lorem justo. Morbi commodo orci in nisl gravida malesuada. Duis efficitur magna vitae finibus dignissim. Suspendisse consequat massa at pulvinar iaculis. Nulla ac massa sed risus pulvinar fermentum.</p>
  </section>
  
  
  
  <section class="section-container section-package-info">
    <div class="spi-title">3Dbotmaker Diecast Racing</div>
    <div class="spi-desc"><?php echo $random_summary[array_rand($random_summary)]; ?></div>
  </section>
  
  
  
  <section class="section-container section-video">
    <div class="video-list">
      <?php for ($i=1; $i <= 2; $i++) { ?>
        <?php $video_type='live'; require ($_SERVER['STRIMID'].'module/video-list.php')?>
      <?php } ?>
    </div>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>