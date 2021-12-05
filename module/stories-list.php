<a
  <?php if($stories == 'all') { ?>
    class="stories-box stories-all" href="streamer/"
  <?php } ?>
  <?php if($stories == 'profile') { ?>
    class="stories-box" href="username/"
  <?php } ?>
>
  <div class="stories-thumb <?php if($stories_live == 'yes') { ?>stories-live<?php } ?> content_center">
    <div class="stories-thumb-circle 
    <?php if($stories == 'all') { ?>stories-thumb-icon<?php } ?>
    <?php if($stories == 'profile') { ?>stories-thumb-image flex_ori thumb-loading<?php } ?>
    content_center">
       <?php if($stories == 'all') { ?>
         <svg class="svgicon svgicon-browseall" width="24" height="21.33" viewBox="0 0 24 21.33"><path d="M10.67.33H24V3H10.67Zm0,5.34h8V8.33h-8Zm0,8H24v2.66H10.67Zm0,5.33h8v2.67h-8ZM0,.33H8v8H0ZM2.67,3V5.67H5.33V3ZM0,13.67H8v8H0Zm2.67,2.66V19H5.33V16.33Z" transform="translate(0 -0.33)"/></svg>
       <?php } ?>
       <?php if($stories == 'profile') { ?>
         <img class="lazyload" data-original="img/sample/profile-<?php echo rand(1,20); ?>.jpg" />
       <?php } ?>
    </div>
  </div>
  <div class="stories-name">
    <?php if($stories == 'all') { ?>Browse All<?php } ?>
    <?php if($stories == 'profile') { ?><?php echo $random_name[array_rand($random_name)]; ?><?php } ?>
  </div>
</a>