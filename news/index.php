<?php 
  $template='news';
  $page='news';
  $filter='no'; 
  $search_page='search/'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='no'; $back_link='home.php'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container">
  <section class="section-container section-trailer-video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/-PxnHa328Gw?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </section>
  
  
  
  <section class="section-container section-trailer-detail">
    <style>.videopage-nav{margin-bottom:var(--section-space-big);}</style>
    <?php require ($_SERVER['STRIMID'].'module/videopage-nav.php')?>
    
    <?php $follow='no'; require ($_SERVER['STRIMID'].'module/streamer-list.php')?>
    
    <div class="tbi-detail">
      <a class="tbi-desc" href="news/">
        <?php echo $random_summary[array_rand($random_summary)]; ?>
      </a>
      <a class="tbi-button" href="username/package/vod/detail.php">
        <span>Watch Now</span>
      </a>
    </div>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>