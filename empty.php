<?php 
  $template='home';
  $page='home';
  $filter='no'; 
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
        <?php $stories='strimid'; $stories_live='no'; require ($_SERVER['STRIMID'].'module/stories-list.php')?>
      </div>
    </div>
  </section>
  
  
  
  <section class="section-container section-trailer">
    <div class="trailer-list">
      <?php for ($i=1; $i <= 6; $i++) { ?>
        <?php require ($_SERVER['STRIMID'].'module/trailer-list-strimid.php')?>
      <?php } ?>
    </div>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>