<?php 
  $template='streamer';
  $page='streamer';
  $filter='yes'; 
  $search_page='search/'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='yes'; $back_link='home.php'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container">
  <section class="section-container section-tab">
    <a class="tab-link tab-curr" href="streamer/">Explore</a>
    <a class="tab-link" href="streamer/favorites.php">Following</a>
  </section>

  <section class="section-container section-streamer">
    <div class="streamer-list">
      <?php $follow='yes'; require ($_SERVER['STRIMID'].'module/streamer-list.php')?>
      <?php for ($i=1; $i <= 10; $i++) { ?>
        <?php $follow='no'; require ($_SERVER['STRIMID'].'module/streamer-list.php')?>
      <?php } ?>
      <?php $follow='yes'; require ($_SERVER['STRIMID'].'module/streamer-list.php')?>
    </div>
    <?php require ($_SERVER['STRIMID'].'module/now-loading.php')?>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>