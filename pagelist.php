<?php 
  $template='home';
  $page='home';
  $search_page='cari/'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<style>
  body{padding:0;}
  .site-container{min-height:100vh;}
  .pagelist ul{padding-left:18px;}
  .pagelist > ul{list-style:disc;}
  .pagelist > ul > li > ul{list-style:circle;}
  .pagelist-row{padding:7px 0; display:block;}
</style>

<div class="site-container content_center">
  <section class="section-container pagelist">
    <ul>
      <li>
        <a class="pagelist-row" href=" ">Halaman Login / Register</a>
      </li>
      <li>
        <a class="pagelist-row" href="home.php">Halaman Utama</a>
      </li>
      <li>
        <div class="pagelist-row">Halaman Channel</div>  
        <ul>
          <li><a class="pagelist-row" href="3dbotmaker/">Halaman Daftar Video Di Channel</a></li>
          <li><a class="pagelist-row" href="3dbotmaker/detail.php">Halaman Detail Channel</a></li>
          <li><a class="pagelist-row" href="3dbotmaker/live.php">Halaman Detail Live Streaming</a></li>
        </ul>
      </li>
    </ul>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>