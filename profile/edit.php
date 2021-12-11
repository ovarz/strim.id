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
    <div class="spd-list spd-fullwidth">
      <ul>
        <li class="spd-left">Email</li>
        <li class="spd-right"><input type="text" class="spd-field" placeholder="yourfullname@gmail.com"></li>
      </ul>
      <ul>
        <li class="spd-left">Phone</li>
        <li class="spd-right"><input type="text" class="spd-field" placeholder="+62 000 0000 0000"></li>
      </ul>
      <ul>
        <li class="spd-left">Birthday</li>
        <li class="spd-right" id="pilihtanggal"><input type="text" class="spd-field choosedate" placeholder="Sunday, 00 January 0000" autocomplete="off"></li>
      </ul>
      <ul>
        <li class="spd-left">Gender</li>
        <li class="spd-right">
          <select class="spd-field">
            <option value="1">Male</option>
            <option value="2">Female</option>
          </select>
        </li>
      </ul>
      <ul>
        <li class="spd-left">Password</li>
        <li class="spd-right"><input type="password" class="spd-field" placeholder="ignore if there is no change"></li>
      </ul>
      <ul>
        <li class="spd-left">Confirm Password</li>
        <li class="spd-right"><input type="password" class="spd-field" placeholder="ignore if there is no change"></li>
      </ul>
    </div>
    <a class="submitedit-button btn" href="profile/">Submit</a>
  </section>
</div>

<link rel="stylesheet" type="text/css" href="css/calendar.css">
<script defer src="js/calendar.js"></script>
<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>