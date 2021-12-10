<?php 
  $template='detail';
  $page='live streaming';
  $filter='no'; 
  $search_page='search/'; 
  require ('../../../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='yes'; $back_link='username/package/vod/'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container detail-container">
  <?php $detail_content='live'; require ($_SERVER['STRIMID'].'module/detail-content.php')?>
  
  
  
  <section class="section-container section-tab detail-section-tab">
    <a class="tab-link tab-curr" href="username/package/live/detail.php">Description</a>
    <a class="tab-link" href="username/package/live/chat.php">Chat</a>
  </section>
  
  
  
  <section class="section-container section-info-bottom">
    <div class="sib-desc"><?php echo $random_summary[array_rand($random_summary)]; ?></div>
    <?php $follow='yes'; require ($_SERVER['STRIMID'].'module/streamer-list.php')?>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>