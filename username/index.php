<?php 
  $template='profile-streamer';
  $page='streamer-profile';
  $filter='yes'; 
  $search_page='search/'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='no'; $back_link='home.php'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container">
  <?php $show_follow='yes'; $show_price='no'; $follow='yes'; require ($_SERVER['STRIMID'].'module/profile-streamer.php')?>
  
  
  
  <?php $streamer_tab='profile'; require ($_SERVER['STRIMID'].'module/streamer-tab.php')?>
  
  
  
  <section class="section-container section-profile-page">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia neque sed augue dignissim elementum. Curabitur ut lorem justo. Morbi commodo orci in nisl gravida malesuada. Duis efficitur magna vitae finibus dignissim. Suspendisse consequat massa at pulvinar iaculis. Nulla ac massa sed risus pulvinar fermentum.</p>
    <p>Nunc erat arcu, mattis et nibh at, condimentum consectetur massa. Vestibulum ut metus nec turpis aliquet facilisis.</p>
    <p>In hac habitasse platea dictumst. Donec enim ligula, aliquet ac vehicula vel, lobortis et orci. Nam eleifend quam ante, in vulputate lacus rhoncus a. Sed vitae ornare felis, nec feugiat mi. Etiam mattis magna turpis, non aliquam purus sollicitudin at.</p>
  </section>
  
  
  
  <section class="section-container section-trailer">
    <div class="trailer-list">
      <?php for ($i=1; $i <= 6; $i++) { ?>
        <?php require ($_SERVER['STRIMID'].'module/trailer-list.php')?>
      <?php } ?>
    </div>
    <?php require ($_SERVER['STRIMID'].'module/now-loading.php')?>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>