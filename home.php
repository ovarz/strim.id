<?php 
  $template='home';
  $page='home';
  $search_page='search/'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='no'; $back_link='home.php'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container">
  <section class="section-container section-stories">
    <div class="stories-list">
      <div class="stories-list-container">
        <?php $stories='all'; $stories_live='no'; require ($_SERVER['STRIMID'].'module/stories-list.php')?>
        <?php for ($i=1; $i <= 2; $i++) { ?>
          <?php $stories='profile'; $stories_live='yes'; require ($_SERVER['STRIMID'].'module/stories-list.php')?>
        <?php } ?>
        <?php for ($i=1; $i <= 5; $i++) { ?>
          <?php $stories='profile'; $stories_live='no'; require ($_SERVER['STRIMID'].'module/stories-list.php')?>
        <?php } ?>
      </div>
    </div>
  </section>
  
  
  
  <section class="section-container section-trailer">
    <div class="trailer-list">
      <?php for ($i=1; $i <= 8; $i++) { ?>
        <?php require ($_SERVER['STRIMID'].'module/trailer-list.php')?>
      <?php } ?>
    </div>
    <?php require ($_SERVER['STRIMID'].'module/now-loading.php')?>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>