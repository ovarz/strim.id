  <section class="section-container section-player-dummy mobile-only"></section>
  <section class="section-container section-player">
    <?php if($detail_content == 'live') { ?>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/36YnV9STBqc?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php } ?>
    <?php if($detail_content == 'vod') { ?>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/qlGLsIJxy_4?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php } ?>
  </section>
  
  
  
  <section class="section-container detail-info">
    <div class="detail-info-navigation">
      <div class="din-left">
        <button class="din-button content_center">
          <svg class="svgicon svgicon-like" width="18" height="18" viewBox="0 0 512 512"><path d="M466.27 286.69C475.04 271.84 480 256 480 236.85c0-44.015-37.218-85.58-85.82-85.58H357.7c4.92-12.81 8.85-28.13 8.85-46.54C366.55 31.936 328.86 0 271.28 0c-61.607 0-58.093 94.933-71.76 108.6-22.747 22.747-49.615 66.447-68.76 83.4H32c-17.673 0-32 14.327-32 32v240c0 17.673 14.327 32 32 32h64c14.893 0 27.408-10.174 30.978-23.95 44.509 1.001 75.06 39.94 177.802 39.94 7.22 0 15.22.01 22.22.01 77.117 0 111.986-39.423 112.94-95.33 13.319-18.425 20.299-43.122 17.34-66.99 9.854-18.452 13.664-40.343 8.99-62.99zm-61.75 53.83c12.56 21.13 1.26 49.41-13.94 57.57 7.7 48.78-17.608 65.9-53.12 65.9h-37.82c-71.639 0-118.029-37.82-171.64-37.82V240h10.92c28.36 0 67.98-70.89 94.54-97.46 28.36-28.36 18.91-75.63 37.82-94.54 47.27 0 47.27 32.98 47.27 56.73 0 39.17-28.36 56.72-28.36 94.54h103.99c21.11 0 37.73 18.91 37.82 37.82.09 18.9-12.82 37.81-22.27 37.81 13.489 14.555 16.371 45.236-5.21 65.62zM88 432c0 13.255-10.745 24-24 24s-24-10.745-24-24 10.745-24 24-24 24 10.745 24 24z"></path></svg>
        </button>
        <?php if($detail_content == 'vod') { ?>
        <button class="din-button content_center">
          <svg class="svgicon svgicon-like" width="18" height="18" viewBox="0 0 20 20"><path class="abac4c2b-c64e-46df-9d8a-3c3d9e0283d3" d="M10,0A10,10,0,1,0,20,10,10,10,0,0,0,10,0Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,10,18Zm.5-13H9v6l5.2,3.2.8-1.3-4.5-2.7Z" transform="translate(0 0)"/></svg>
        </button>
        <?php } ?>
        <button class="din-button content_center">
          <svg class="svgicon svgicon-share" width="18" height="20" viewBox="0 0 448 512"><path d="M352 320c-25.6 0-48.9 10-66.1 26.4l-98.3-61.5c5.9-18.8 5.9-39.1 0-57.8l98.3-61.5C303.1 182 326.4 192 352 192c53 0 96-43 96-96S405 0 352 0s-96 43-96 96c0 9.8 1.5 19.6 4.4 28.9l-98.3 61.5C144.9 170 121.6 160 96 160c-53 0-96 43-96 96s43 96 96 96c25.6 0 48.9-10 66.1-26.4l98.3 61.5c-2.9 9.4-4.4 19.1-4.4 28.9 0 53 43 96 96 96s96-43 96-96-43-96-96-96zm0-272c26.5 0 48 21.5 48 48s-21.5 48-48 48-48-21.5-48-48 21.5-48 48-48zM96 304c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm256 160c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48z"></path></svg>
        </button>
      </div>
      
      <?php if($detail_content == 'vod') { ?>
      <div class="din-right">
        <button class="din-button content_center">
          <svg class="svgicon svgicon-back" width="18" height="18" viewBox="0 0 10 10"><path d="M8.45,9,9.5,10l5-5-5-5L8.45,1.05l3.2,3.2H4.5v1.5h7.15Z" transform="translate(-4.5 0)"></path></svg>
        </button>
        <button class="din-button content_center">
          <svg class="svgicon svgicon-more" width="18" height="18" viewBox="0 0 10 10"><path d="M8.45,9,9.5,10l5-5-5-5L8.45,1.05l3.2,3.2H4.5v1.5h7.15Z" transform="translate(-4.5 0)"></path></svg>
        </button>
      </div>
      <?php } ?>
    </div>
    <div class="detail-info-title">
      <?php if($detail_content == 'live') { ?>The Good Life Radio • 24/7 Live Radio | Best Relax House, Chillout, Study, Running, Gym, Happy Music<?php } ?>
      <?php if($detail_content == 'vod') { ?>KotM Tournament 4 Round 1 Group 2 - Modified Diecast Car Racing<?php } ?>
    </div>
    <div class="detail-info-other">
      <span>Senin, 00 Januari 0000</span>
      <span>000K Views</span>
      <span>000K Likes</span>
    </div>
  </section>