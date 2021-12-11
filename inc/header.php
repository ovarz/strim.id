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
    <div class="desktop-only">
      <?php require ($_SERVER['STRIMID'].'inc/menu.php')?>
    </div>
    <?php if($filter == 'yes') { ?>
    <div class="filter-container">
      <a class="sticky-button header-filter content_center" href="javascript:void(0)">
        <svg class="svgicon svgicon-filter" width="24" height="18" viewBox="0 0 32 24"><path d="M0.25 1.89474C0.25 1.39222 0.449624 0.910287 0.804956 0.554955C1.16029 0.199623 1.64222 0 2.14474 0H29.9342C30.4367 0 30.9187 0.199623 31.274 0.554955C31.6293 0.910287 31.8289 1.39222 31.8289 1.89474C31.8289 2.39725 31.6293 2.87919 31.274 3.23452C30.9187 3.58985 30.4367 3.78947 29.9342 3.78947H2.14474C1.64222 3.78947 1.16029 3.58985 0.804956 3.23452C0.449624 2.87919 0.25 2.39725 0.25 1.89474V1.89474ZM5.30263 12C5.30263 11.4975 5.50225 11.0156 5.85759 10.6602C6.21292 10.3049 6.69485 10.1053 7.19737 10.1053H24.8816C25.3841 10.1053 25.866 10.3049 26.2214 10.6602C26.5767 11.0156 26.7763 11.4975 26.7763 12C26.7763 12.5025 26.5767 12.9844 26.2214 13.3398C25.866 13.6951 25.3841 13.8947 24.8816 13.8947H7.19737C6.69485 13.8947 6.21292 13.6951 5.85759 13.3398C5.50225 12.9844 5.30263 12.5025 5.30263 12V12ZM10.3553 22.1053C10.3553 21.6027 10.5549 21.1208 10.9102 20.7655C11.2656 20.4101 11.7475 20.2105 12.25 20.2105H19.8289C20.3315 20.2105 20.8134 20.4101 21.1687 20.7655C21.5241 21.1208 21.7237 21.6027 21.7237 22.1053C21.7237 22.6078 21.5241 23.0897 21.1687 23.445C20.8134 23.8004 20.3315 24 19.8289 24H12.25C11.7475 24 11.2656 23.8004 10.9102 23.445C10.5549 23.0897 10.3553 22.6078 10.3553 22.1053V22.1053Z"/></svg>
      </a>
      
      <div class="filter-popup">
        <ul class="filter-box">
          <li>
            <div class="filter-title">Genre</div>
            <ul class="filter-list">
              <li>
                <input class="filter-check" id="genre-all" name="choice" type="checkbox" checked>
                <label  for="genre-all" class="filter-label">All Genre</label>
              </li>
              <li>
                <input class="filter-check" id="genre-action" name="choice" type="checkbox" checked>
                <label  for="genre-action" class="filter-label">Action</label >
              </li>
              <li>
                <input class="filter-check" id="genre-comedy" name="choice" type="checkbox" checked>
                <label  for="genre-comedy" class="filter-label">Comedy</label>
              </li>
              <li>
                <input class="filter-check" id="genre-anime" name="choice" type="checkbox" checked>
                <label  for="genre-anime" class="filter-label">Anime</label>
              </li>
              <li>
                <input class="filter-check" id="genre-drama" name="choice" type="checkbox" checked>
                <label  for="genre-drama" class="filter-label">Drama</label>
              </li>
              <li>
                <input class="filter-check" id="genre-horror" name="choice" type="checkbox" checked>
                <label  for="genre-horror" class="filter-label">Horror</label>
              </li>
            </ul>
          </li>
          <li>
            <div class="filter-title">Age Restriction</div>
            <ul class="filter-list">
              <li>
                <input class="filter-check" id="age-all" name="choice" type="radio" checked>
                <label  for="age-all" class="filter-label">All Ages</label>
              </li>
              <li>
                <input class="filter-check" id="age-6" name="choice" type="radio">
                <label  for="age-6" class="filter-label">6++</label>
              </li>
              <li>
                <input class="filter-check" id="age-17" name="choice" type="radio">
                <label  for="age-17" class="filter-label">17++</label>
              </li>
            </ul>
          </li>
          <li>
            <div class="filter-title">Language</div>
            <ul class="filter-list">
              <li>
                <input class="filter-check" id="lang-all" name="choice" type="checkbox" checked>
                <label  for="lang-all" class="filter-label">All Language</label>
              </li>
              <li>
                <input class="filter-check" id="lang-idn" name="choice" type="checkbox" checked>
                <label  for="lang-idn" class="filter-label">Indonesia</label>
              </li>
              <li>
                <input class="filter-check" id="lang-eng" name="choice" type="checkbox" checked>
                <label  for="lang-eng" class="filter-label">English</label>
              </li>
              <li>
                <input class="filter-check" id="lang-jap" name="choice" type="checkbox" checked>
                <label  for="lang-jap" class="filter-label">Japanese</label>
              </li>
              <li>
                <input class="filter-check" id="lang-kor" name="choice" type="checkbox" checked>
                <label  for="lang-kor" class="filter-label">Korean</label>
              </li>
            </ul>
          </li>
          <li class="filter-button">
            <button class="btn">Filter</button>
          </li>
        </ul>
      </div>
    </div>
    <?php } ?>
    <a class="sticky-button header-search <?php if($page == 'search') { ?>sticky-curr<?php } ?> content_center" href="search/">
      <svg class="svgicon svgicon-search" width="18" height="18" viewBox="0 0 18 18"><path d="M8,16a7.93,7.93,0,0,0,4.9-1.69l4.39,4.4,1.42-1.42-4.4-4.39A8,8,0,1,0,8,16ZM8,2A6,6,0,1,1,2,8,6,6,0,0,1,8,2Z"/></svg>
    </a>
    <a class="sticky-button header-notification <?php if($page == 'notification') { ?>sticky-curr<?php } ?> content_center" href="notification/">
      <svg class="svgicon svgicon-notification" width="18" height="22" viewBox="0 0 18 22"><path d="M9.72,4H8.26A6.23,6.23,0,0,0,2,10v3.79A3.88,3.88,0,0,1,1.45,16l-.28.44A1,1,0,0,0,2,18H16a1,1,0,0,0,.81-1.55L16.55,16A4,4,0,0,1,16,13.79V10a6.29,6.29,0,0,0-6.3-6Z" transform="translate(0)"/><path d="M12,18a3,3,0,0,1-6,0" transform="translate(0)"/><path d="M9,1a2,2,0,0,1,2,2V4H7V3A2,2,0,0,1,9,1Z" transform="translate(0)"/></svg>
    </a>
  </div>
</header>