<header>
  <div class="header-left">
    <?php if($back == 'no') { ?>
    <a class="sticky-button header-logo content_center" href="<?php echo $back_link; ?>">
      <img src="img/asset/logo.svg" />
    </a>
    <?php } ?>
    <?php if($back == 'yes') { ?>
    <a class="sticky-button back-button content_center" href="<?php echo $back_link; ?>">
      <svg class="svgicon svgicon-back" width="14" height="14" viewBox="0 0 10 10"><path d="M8.45,9,9.5,10l5-5-5-5L8.45,1.05l3.2,3.2H4.5v1.5h7.15Z" transform="translate(-4.5 0)"></path></svg>
    </a>
    <div class="current-page content_center">
      <span><?php echo $page; ?></span>
    </div>
    <?php } ?>
  </div>
  
  <div class="header-right">
    <?php if($template == 'streamer') { ?>
    <a class="sticky-button header-filter content_center" href="javascript:void(0)">
      <svg class="svgicon svgicon-search" width="21.6" height="18" viewBox="0 0 19.2 16"><path d="M2,1.6A1.6,1.6,0,0,1,3.6,0h16a1.6,1.6,0,0,1,0,3.2H3.6A1.6,1.6,0,0,1,2,1.6Z" transform="translate(-2)"/><path d="M5.2,8A1.6,1.6,0,0,1,6.8,6.4h9.6a1.6,1.6,0,0,1,0,3.2H6.8A1.6,1.6,0,0,1,5.2,8Z" transform="translate(-2)"/><path d="M10,12.8A1.6,1.6,0,0,0,10,16h3.2a1.6,1.6,0,0,0,0-3.2Z" transform="translate(-2)"/></svg>
    </a>
    <?php } ?>
    <a class="sticky-button header-search <?php if($page == 'search') { ?>sticky-curr<?php } ?> content_center" href="search/">
      <svg class="svgicon svgicon-search" width="18" height="18" viewBox="0 0 18 18"><path d="M8,16a7.93,7.93,0,0,0,4.9-1.69l4.39,4.4,1.42-1.42-4.4-4.39A8,8,0,1,0,8,16ZM8,2A6,6,0,1,1,2,8,6,6,0,0,1,8,2Z"/></svg>
    </a>
    <a class="sticky-button header-notification <?php if($page == 'notification') { ?>sticky-curr<?php } ?> content_center" href="notification/">
      <svg class="svgicon svgicon-notification" width="18" height="22" viewBox="0 0 18 22"><path d="M9.72,4H8.26A6.23,6.23,0,0,0,2,10v3.79A3.88,3.88,0,0,1,1.45,16l-.28.44A1,1,0,0,0,2,18H16a1,1,0,0,0,.81-1.55L16.55,16A4,4,0,0,1,16,13.79V10a6.29,6.29,0,0,0-6.3-6Z" transform="translate(0)"/><path d="M12,18a3,3,0,0,1-6,0" transform="translate(0)"/><path d="M9,1a2,2,0,0,1,2,2V4H7V3A2,2,0,0,1,9,1Z" transform="translate(0)"/></svg>
    </a>
  </div>
</header>