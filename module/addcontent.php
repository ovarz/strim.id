<section class="section-container section-addcontent content_center">
  <link rel="stylesheet" type="text/css" href="css/addcontent.css?<?php echo $anticache; ?>"/>
  <div class="addcontent-form">
    <div class="addcontent-form-column">
	  <div class="addcontent-form-label">Upload <?php echo $page; ?></div>
	  <input class="addcontent-form-field" type="file"/>
	</div>
    <div class="addcontent-form-column">
	  <div class="addcontent-form-label">Title</div>
	  <input class="addcontent-form-field" type="text"
	    <?php if($afterchoose == 'yes') { ?>value="<?php echo $random_title[array_rand($random_title)]; ?>"<?php } ?>
	  />
	</div>
    <div class="addcontent-form-column addcontent-form-fullwidth">
	  <div class="addcontent-form-label">Summary</div>
	  <input class="addcontent-form-field" type="text"
	    <?php if($afterchoose == 'yes') { ?>value="<?php echo $random_summary[array_rand($random_summary)]; ?>"<?php } ?>
	  />
	</div>
    <div class="addcontent-form-column addcontent-form-fullwidth">
	  <div class="addcontent-form-label">Description</div>
	  <textarea class="addcontent-form-field"><?php if($afterchoose == 'yes') { ?><?php echo $random_summary[array_rand($random_summary)]; ?><?php } ?></textarea>
	</div>
	<?php if($afterchoose == 'yes') { ?>
    <div class="addcontent-form-column addcontent-form-fullwidth">
	  <div class="addcontent-form-label">Video</div>
	  <?php $video_type='live'; require ($_SERVER['STRIMID'].'module/video-list.php')?>
	</div>
	<?php } ?>
    <button class="btn addcontent-btn addcontent-browse addcontent-form-fullwidth">Browse Video</button>
    <button class="btn addcontent-btn addcontent-form-fullwidth" onclick="location.href='news/'">Submit</button>
  </div>
  <script defer src="js/addcontent.js?<?php echo $anticache; ?>"></script>
</section>



<div class="addcontent-choose">
  <input class="addcontent-form-search" type="text" placeholder="Search Video....."/>
  <div class="addcontent-choose-box">
	<?php $video_type='live'; require ($_SERVER['STRIMID'].'module/video-list.php')?>
    <?php for ($i=1; $i <= 23; $i++) { ?>
      <?php $video_type='vod'; require ($_SERVER['STRIMID'].'module/video-list.php')?>
    <?php } ?>
  </div>
</div>