<?php 
  $template='live';
  $page='live streaming';
  $search_page='search/'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='yes'; $back_link='home.php'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container">
  <section class="section-container section-tab">
    <a class="tab-link tab-curr" href="live/">Live Now</a>
    <a class="tab-link" href="live/schedule.php">Schedule</a>
  </section>

  <section class="section-container section-live">
    <div class="live-list">
      <?php for ($i=1; $i <= 2; $i++) { ?>
        <?php $video_type='subscriber'; require ($_SERVER['STRIMID'].'module/live-list.php')?>
      <?php } ?>
      <?php for ($i=1; $i <= 10; $i++) { ?>
        <?php $video_type='all'; require ($_SERVER['STRIMID'].'module/live-list.php')?>
      <?php } ?>
    </div>
    <?php require ($_SERVER['STRIMID'].'module/now-loading.php')?>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>