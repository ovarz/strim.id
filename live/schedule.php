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
    <a class="tab-link" href="live/">Live Now</a>
    <a class="tab-link tab-curr" href="live/schedule.php">Schedule</a>
  </section>
  
  <section class="section-container section-live-date">
    <a class="sld-link sld-curr" href="live/schedule.php">
      <div class="sld-day">SUN</div>
      <div class="sld-label">00 Jan</div>
    </a>
    <?php for ($i=1; $i <= 3; $i++) { ?>
    <a class="sld-link" href="live/schedule.php">
      <div class="sld-day">MON</div>
      <div class="sld-label">00 Jan</div>
    </a>
    <?php } ?>
    <?php for ($i=1; $i <= 6; $i++) { ?>
    <a class="sld-link desktop-only" href="live/schedule.php">
      <div class="sld-day">MON</div>
      <div class="sld-label">00 Jan</div>
    </a>
    <?php } ?>
    <a class="sld-link" href="javascript:void(0)">
      <svg class="svgicon svgicon-calendar" width="36" height="36" viewBox="0 0 24 24"><path d="M16.5,9.75A.75.75,0,0,1,17.25,9h1.5a.75.75,0,0,1,.75.75v1.5a.75.75,0,0,1-.75.75h-1.5a.75.75,0,0,1-.75-.75Zm-4.5,0A.75.75,0,0,1,12.75,9h1.5a.75.75,0,0,1,.75.75v1.5a.75.75,0,0,1-.75.75h-1.5a.75.75,0,0,1-.75-.75Zm-7.5,4.5a.75.75,0,0,1,.75-.75h1.5a.75.75,0,0,1,.75.75v1.5a.75.75,0,0,1-.75.75H5.25a.75.75,0,0,1-.75-.75Zm4.5,0a.75.75,0,0,1,.75-.75h1.5a.75.75,0,0,1,.75.75v1.5a.75.75,0,0,1-.75.75H9.75A.75.75,0,0,1,9,15.75Z"/><path d="M5.25,0A.75.75,0,0,1,6,.75V1.5H18V.75a.75.75,0,0,1,1.5,0V1.5H21a3,3,0,0,1,3,3V21a3,3,0,0,1-3,3H3a3,3,0,0,1-3-3V4.5a3,3,0,0,1,3-3H4.5V.75A.75.75,0,0,1,5.25,0ZM1.5,6V21A1.5,1.5,0,0,0,3,22.5H21A1.5,1.5,0,0,0,22.5,21V6Z"/></svg>
    </a>
  </section>

  <section class="section-container section-live">
    <div class="live-list">
      <?php $video_type='all'; require ($_SERVER['STRIMID'].'module/live-list.php')?>
      <?php $video_type='subscriber'; require ($_SERVER['STRIMID'].'module/live-list.php')?>
      <?php for ($i=1; $i <= 10; $i++) { ?>
        <?php $video_type='all'; require ($_SERVER['STRIMID'].'module/live-list.php')?>
      <?php } ?>
    </div>
    <?php require ($_SERVER['STRIMID'].'module/now-loading.php')?>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>