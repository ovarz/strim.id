<?php 
  $template='detail';
  $page='package';
  $search_page='search/'; 
  require ('../../../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='yes'; $back_link='username/package/vod/'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container detail-container">
  <?php $detail_content='vod'; require ($_SERVER['STRIMID'].'module/detail-content.php')?>
  
  
  
  <section class="section-container section-tab detail-section-tab">
    <a class="tab-link" href="username/package/vod/detail.php">Description</a>
    <a class="tab-link tab-curr" href="username/package/vod/comment.php">Comment</a>
  </section>
  
  
  
  <?php $detail_content='vod'; require ($_SERVER['STRIMID'].'module/comment.php')?>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>