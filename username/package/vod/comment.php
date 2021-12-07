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
  
  
  
  <section class="section-container section-tab">
    <a class="tab-link" href="username/package/vod/detail.php">Description</a>
    <a class="tab-link tab-curr" href="username/package/vod/comment.php">Comment</a>
  </section>
  
  
  
  <section class="section-container section-info-bottom">
    <iframe style="width:100%; height:480px; margin-top:0px;" width="300" height="480" src="https://www.youtube.com/live_chat?v=-5KAN9_CzSA&amp;embed_domain=www.ov4rz.com&dark_theme=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>