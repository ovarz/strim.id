<?php 
  $template='home';
  $page='home';
  $search_page='cari/'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<link rel="stylesheet" type="text/css" href="css/intro.css?<?php echo $anticache; ?>"/>

<div class="site-container content_center">
  <span>
    <div class="intro-logo content_center">
      <img src="img/asset/logo.svg" />
    </div>
    
    <div class="intro-login">
      <a class="intro-button" href="home.php">
        <div class="intro-button-icon content_center">
          <svg class="svgicon svgicon-google" width="17.63" height="18" viewBox="0 0 17.63 18"><path d="M14.5,8.4l-9-5.19" transform="translate(0 0)"/><path class="e4cd8f7f-58c9-46f8-bb56-0d6851bbdba0" d="M17.47,7.36H9v3.48h4.84A4.11,4.11,0,0,1,12,13.56a5.43,5.43,0,0,1-3,.86,5.36,5.36,0,0,1-5-3.71A5.36,5.36,0,0,1,4,7.29,5.36,5.36,0,0,1,9,3.58a4.87,4.87,0,0,1,3.44,1.35L15,2.35A8.61,8.61,0,0,0,9,0,9,9,0,0,0,9,18a8.62,8.62,0,0,0,6-2.18A8.8,8.8,0,0,0,17.63,9.2,11,11,0,0,0,17.47,7.36Z"/></svg>
        </div>
        <div class="intro-button-label content_center">
          <span>Login / Register with Google</span>
        </div>
      </a>
      
      <a class="intro-button" href="home.php">
        <div class="intro-button-icon content_center">
          <svg class="svgicon svgicon-google" width="15.12" height="18" viewBox="0 0 16.38 19.5"><path d="M13.7,10.31a4.07,4.07,0,0,1,2.17-3.7,4.67,4.67,0,0,0-3.68-1.94c-1.55-.12-3.24.9-3.86.9S6.19,4.72,5,4.72c-2.43,0-5,1.93-5,5.79a10.81,10.81,0,0,0,.63,3.54c.55,1.6,2.56,5.51,4.66,5.45,1.1,0,1.87-.78,3.3-.78s2.1.78,3.33.78c2.11,0,3.93-3.59,4.46-5.19A4.3,4.3,0,0,1,13.7,10.31ZM11.23,3.16a4.13,4.13,0,0,0,1-3.16,4.59,4.59,0,0,0-3,1.52A4.15,4.15,0,0,0,8.21,4.65,3.66,3.66,0,0,0,11.23,3.16Z"/></svg>
        </div>
        <div class="intro-button-label content_center">
          <span>Login / Register with Apple</span>
        </div>
      </a>
    </div>
  </span>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>