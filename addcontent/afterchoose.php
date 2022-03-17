<?php 
  $template='addcontent';
  $page='image';
  $filter='no'; 
  $search_page='search/'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='no'; $back_link='home.php'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container">
  <?php $afterchoose='yes'; require ($_SERVER['STRIMID'].'module/addcontent.php')?>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>