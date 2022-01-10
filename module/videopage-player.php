<section class="section-container section-video-player thumb-loading">
  <iframe width="560" height="315" 
  <?php if($content == 'vod') { ?>
    src="https://www.youtube.com/embed/THQRMc6Oc30?autoplay=1&loop=1" 
  <?php } ?>
  <?php if($content == 'live') { ?>
    src="https://www.youtube.com/embed/xIx9wBI9il0?autoplay=1&loop=1" 
  <?php } ?>
  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>