<section class="section-package-cover">
  <div class="spc-image-loading flex_ori thumb-loading">
    <img class="lazyload" data-original="img/sample/sample-<?php echo rand(1,20); ?>.jpg" />
  </div>
</section>



<section class="section-container section-package-page">
  <div class="ppb-info">
    <h1 class="ppb-title">Full Title Package</h2>
    <div class="ppb-misc">
      <span>2021</span>
      <span>Comedy</span>
      <span>Anime</span>
    </div>
    <div class="ppb-misc" style="margin-top:var(--section-space-tiny);">
      <span>by <a href="username/"><?php echo $random_name[array_rand($random_name)]; ?></a></span>
      <span>000K Views</span>
    </div>
  </div>
</section>


<?php if($package_cover != 'free') { ?>
<section class="section-container section-package-action">
  <?php if($package_cover == 'premium') { ?>
  <a class="spa-button btn" href="javascript:void(0)">
    IDR 0.000.000
  </a>
  <?php } ?>
  
  <?php if($package_cover == 'premium-bought') { ?>
  <div class="spa-button btn">
    Expiry in 00 days
  </div>
  <?php } ?>
  
  <?php if($package_cover == 'premium-expired') { ?>
  <div class="spa-note">Your Subsciption Expired</div>
  <a class="spa-button btn" href="javascript:void(0)">
    IDR 0.000.000
  </a>
  <?php } ?>
</section>
<?php } ?>



<section class="section-container section-profile-page section-package-desc">
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia neque sed augue dignissim elementum. Curabitur ut lorem justo. Morbi commodo orci in nisl gravida malesuada. Duis efficitur magna vitae finibus dignissim. Suspendisse consequat massa at pulvinar iaculis. Nulla ac massa sed risus pulvinar fermentum.</p>
</section>



<script>
$(window).on('load',function(){
  $('.section-package-cover').html("<video autoplay=\"\" loop muted><source src=\"img/sample/trailer.mp4\" type=\"video/mp4\"></video>");
});
</script>