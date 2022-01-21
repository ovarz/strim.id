<?php 
  $template='tnc';
  $page='term & Condition';
  $filter='no'; 
  $search_page='search/'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='yes'; $back_link='home.php'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container">
  <style>
    .section-tnc{display:grid; grid-gap:var(--section-space-medium); line-height:140%;}
  </style>
  <section class="section-container section-tnc">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae tristique justo, at tempor sem.</p>
    <p>Quisque congue tristique vestibulum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>