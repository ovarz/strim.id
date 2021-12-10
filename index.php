<?php 
  $template='home';
  $page='home';
  $filter='no'; 
  $search_page='search/'; 
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
  </span>
</div>

<script>
window.setTimeout(function() {
    window.location.href = 'login.php';
},3000);
</script>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>