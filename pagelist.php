<?php 
  $template='home';
  $page='home';
  $filter='no'; 
  $search_page='search/'; 
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
        <a class="pagelist-row" href=" ">Halaman Splash Sceen</a>
      </li>
      <li>
        <a class="pagelist-row" href="login.php">Halaman Login / Register</a>
      </li>
      <li>
        <a class="pagelist-row" href="home.php">Halaman Utama</a>
      </li>
      <li>
        <div class="pagelist-row">Halaman Pencarian</div>  
        <ul>
          <li><a class="pagelist-row" href="search/">Halaman Pencarian Kosong</a></li>
          <li><a class="pagelist-row" href="search/result.php">Halaman Hasil Pencarian</a></li>
        </ul>
      </li>
      <li>
        <a class="pagelist-row" href="notification/">Halaman Notifikasi</a>
      </li>
      <li>
        <a class="pagelist-row" href="news/">Halaman News</a>
      </li>
      <li>
        <a class="pagelist-row" href="package/">Halaman Semua Package</a>
      </li>
      <li>
        <div class="pagelist-row">Halaman Daftar Streamer</div>  
        <ul>
          <li><a class="pagelist-row" href="streamer/">Halaman Daftar Streamer Terbaru</a></li>
          <li><a class="pagelist-row" href="streamer/favorites.php">Halaman Daftar Streamer Favorit</a></li>
        </ul>
      </li>
      <li>
        <div class="pagelist-row">Halaman Live Streaming</div>  
        <ul>
          <li><a class="pagelist-row" href="live/">Halaman Live Streaming Terbaru</a></li>
          <li><a class="pagelist-row" href="live/schedule.php">Halaman Jadwal Live Streaming</a></li>
        </ul>
      </li>
      <li>
        <div class="pagelist-row">Halaman Profil Streamer</div>  
        <ul>
          <li><a class="pagelist-row" href="username/">Halaman Detail Profil Streamer</a></li>
          <li><a class="pagelist-row" href="username/package/">Halaman Daftar Paket per Streamer</a></li>
          <li><a class="pagelist-row" href="username/package/vod/">Halaman Daftar video dari Free Package</a></li>
          <li><a class="pagelist-row" href="username/package/vod/premium.php">Halaman Daftar video dari Premium Package</a></li>
          <li><a class="pagelist-row" href="username/package/vod/premium-bought.php">Halaman Daftar video dari Subscription Package</a></li>
          <li><a class="pagelist-row" href="username/package/vod/premium-bought.php">Halaman Daftar video dari Expried Package</a></li>
          <li><a class="pagelist-row" href="username/store.php">Halaman Daftar Barang Yang Dijual per Streamer</a></li>
        </ul>
      </li>
      <li>
        <div class="pagelist-row">Halaman Detail</div>  
        <ul>
          <li><a class="pagelist-row" href="username/package/live/detail.php">Halaman Detail Live Streaming</a></li>
          <li><a class="pagelist-row" href="username/package/live/chat.php">Halaman Chat Live Streaming</a></li>
          <li><a class="pagelist-row" href="username/package/vod/detail.php">Halaman Detail VOD</a></li>
          <li><a class="pagelist-row" href="username/package/vod/comment.php">Halaman Comment VOD</a></li>
        </ul>
      </li>
      <li>
        <div class="pagelist-row">Halaman Store</div>  
        <ul>
          <li><a class="pagelist-row" href="store/">Halaman Daftar Barang Yang Dijual</a></li>
          <li><a class="pagelist-row" href="store/detail.php">Halaman Detail Barang Yang Dijual</a></li>
        </ul>
      </li>
      <li>
        <div class="pagelist-row">Halaman Profil User</div>  
        <ul>
          <li><a class="pagelist-row" href="profile/">Halaman Detail Profil User</a></li>
          <li><a class="pagelist-row" href="profile/edit.php">Halaman Edit Profil User</a></li>
          <li><a class="pagelist-row" href="profile/subscribe.php">Halaman Daftar Subscribe per User</a></li>
        </ul>
      </li>
      <li>
        <div class="pagelist-row">Halaman Kosong</div>  
        <ul>
          <li><a class="pagelist-row" href="empty.php">Halaman Utama Kosong</a></li>
          <li><a class="pagelist-row" href="package/empty.php">Halaman My Package Kosong</a></li>
          <li><a class="pagelist-row" href="username/package/empty.php">Halaman Daftar Paket Kosong</a></li>
          <li><a class="pagelist-row" href="live/empty.php">Halaman Live Kosong</a></li>
          <li><a class="pagelist-row" href="live/schedule-empty.php">Halaman Jadwal Live Kosong</a></li>
        </ul>
      </li>
    </ul>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>