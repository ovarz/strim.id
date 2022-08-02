<?php 
  $template='live';
  $page='live streaming';
  $filter='yes'; 
  $search_page='search/'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php $back='yes'; $back_link='home.php'; require ($_SERVER['STRIMID'].'inc/header.php')?>
<?php require ($_SERVER['STRIMID'].'inc/menu.php')?>

<div class="site-container">
  <section class="section-container section-tab">
    <a class="tab-link tab-curr" href="live/">Live Now</a>
    <a class="tab-link" href="live/schedule.php">Schedule</a>
  </section>

  <section class="section-container section-live section-live-empty content_center">
    <span>
	  <div class="sle-icon content_center">
	    <svg class="svgicon svgicon-live-off" width="24" height="22" viewBox="0 0 24 22"><path d="M16.4415 17.4825C16.8693 17.0266 17.1432 16.4479 17.2245 15.828L21.8895 17.901C22.1178 18.0027 22.368 18.0458 22.6172 18.0263C22.8664 18.0067 23.1068 17.9252 23.3165 17.7892C23.5262 17.6531 23.6986 17.4668 23.8179 17.2471C23.9373 17.0275 23.9999 16.7815 24 16.5315V5.3385C23.9998 5.08871 23.9372 4.84294 23.8179 4.62347C23.6986 4.40401 23.5264 4.21781 23.3169 4.08178C23.1074 3.94574 22.8673 3.86417 22.6183 3.84448C22.3693 3.82478 22.1193 3.86759 21.891 3.969L17.2245 6.042C17.1292 5.32063 16.7749 4.65849 16.2277 4.17889C15.6805 3.69929 14.9776 3.43491 14.25 3.435H6.408L7.479 4.935H14.25C14.6478 4.935 15.0294 5.09304 15.3107 5.37434C15.592 5.65564 15.75 6.03717 15.75 6.435V15.435C15.7503 15.7089 15.6756 15.9776 15.534 16.212L16.4415 17.4825ZM2.142 5.205C1.94376 5.34308 1.78185 5.52705 1.67007 5.74122C1.55828 5.95539 1.49994 6.19341 1.5 6.435V15.435C1.5 15.8328 1.65804 16.2144 1.93934 16.4957C2.22064 16.777 2.60218 16.935 3 16.935H10.521L11.592 18.435H3C2.20435 18.435 1.44129 18.1189 0.87868 17.5563C0.316071 16.9937 0 16.2306 0 15.435V6.435C0 5.4225 0.501 4.527 1.2705 3.984L2.1405 5.205H2.142ZM22.5 16.53L17.25 14.1975V7.6725L22.5 5.3385V16.5315V16.53ZM15.8895 21.87L0.8895 0.87L2.1105 0L17.1105 21L15.8895 21.87Z"/></svg>
	  </div>
	  <div class="sle-label">Live Streaming Not Yet Available</div>
	</span>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>