<?php 
  $template='profile';
  $page='profile';
  $filter='no'; 
  $search_page='search/'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='yes'; $back_link='home.php'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container">
  <section class="section-container section-profile">
    <div class="section-profile-thumb content_center">
      <div class="spt-cricle flex_ori thumb-loading">
        <img class="lazyload" data-original="img/sample/profile-<?php echo rand(1,20); ?>.jpg" />
      </div>
    </div>
    <div class="section-profile-name"><?php echo $random_name[array_rand($random_name)]; ?></div>
    <div class="section-profile-status section-profile-premium">Premium Member</div>
  </section>
  
  
  
  <section class="section-container section-profile-data">
    <div class="spd-list">
      <ul>
        <li class="spd-left">Email</li>
        <li class="spd-right">: yourfullname@gmail.com</li>
      </ul>
      <ul>
        <li class="spd-left">Phone</li>
        <li class="spd-right">: +62 000 0000 0000</li>
      </ul>
      <ul>
        <li class="spd-left">Birthday</li>
        <li class="spd-right">: Sunday, 00 January 0000</li>
      </ul>
      <ul>
        <li class="spd-left">Gender</li>
        <li class="spd-right">: Male</li>
      </ul>
    </div>
    <a class="profilepage-button btn" href="profile/edit.php">
      <span>Edit Profile</span>
      <svg class="svgicon svgicon-more" width="12" height="12" viewBox="0 0 10 10"><path d="M8.45,9,9.5,10l5-5-5-5L8.45,1.05l3.2,3.2H4.5v1.5h7.15Z" transform="translate(-4.5 0)"></path></svg>
    </a>
  </section>
  
  
  
  <section class="section-container section-package">
    <div class="section-title">Subscriptions</div>
    <div class="package-list">
      <?php for ($i=1; $i <= 6; $i++) { ?>
        <?php $package_origin='no'; $package_type='premium-bought'; require ($_SERVER['STRIMID'].'module/package-list.php')?>
      <?php } ?>
    </div>
    <a class="profilepage-button btn" href="profile/subscribe.php">
      <span>More Subscribe</span>
      <svg class="svgicon svgicon-more" width="12" height="12" viewBox="0 0 10 10"><path d="M8.45,9,9.5,10l5-5-5-5L8.45,1.05l3.2,3.2H4.5v1.5h7.15Z" transform="translate(-4.5 0)"></path></svg>
    </a>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>