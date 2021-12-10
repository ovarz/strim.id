<?php 
  $template='notification';
  $page='notification';
  $filter='no'; 
  $search_page='search/'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='yes'; $back_link='home.php'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container">
  <section class="section-container section-notification">
    <div class="streamer-list">
      <?php for ($i=1; $i <= 3; $i++) { ?>
        <?php $notification='newcontent'; require ($_SERVER['STRIMID'].'module/notification-list.php')?>
        <?php $notification='reply'; require ($_SERVER['STRIMID'].'module/notification-list.php')?>
        <?php $notification='newstreamer'; require ($_SERVER['STRIMID'].'module/notification-list.php')?>
        <?php $notification='mention'; require ($_SERVER['STRIMID'].'module/notification-list.php')?>
      <?php } ?>
    </div>
    <?php require ($_SERVER['STRIMID'].'module/now-loading.php')?>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>