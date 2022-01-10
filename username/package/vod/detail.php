<?php 
  $template='detail';
  $page='package';
  $filter='no'; 
  $search_page='search/'; 
  $content='vod'; 
  $videopage='info';
  require ('../../../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='yes'; $back_link='username/package/vod/'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container videopage">
  <div class="videopage-player">
    <?php require ($_SERVER['STRIMID'].'module/videopage-player.php')?>
  </div>
  <div class="videopage-detail">
    <?php require ($_SERVER['STRIMID'].'module/videopage-tab.php')?>
    <div class="videopage-content">
      <?php require ($_SERVER['STRIMID'].'module/videopage-nav.php')?>
      <?php require ($_SERVER['STRIMID'].'module/videopage-info.php')?>
    </div>
  </div>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>