<div class="siteinfo">
          <h1><a href="<?php echo home_url(); ?>" alt="<?php bloginfo( 'name' ); ?>">
            <img src="<?=$img?>with-ntt-west.png" alt="NTT西日本">
            <img src="<?=$img?>hikari-neo.png" alt="光ネオEXA">
            <img src="<?=$img?>with-ntt-east.png" alt="NTT東日本"></a>
          </h1>
           <span class="free-call"><img src="<?=$img.$tuwaimg?>" alt="tel:03-6868-8577"><strong><?php bloginfo( 'description' ); ?></strong></span>

           <a class="pdf-download" href="<?=$img?>hikari-neo-order.pdf">
           <strong class="fa fa-angle-double-right" aria-hidden="true"></strong>
           <span>お申込み書面ダウンロード</span></a>
        </div> <!--siteinfo-->

        <nav>
          <div class="container">
              <input id="nav-input" type="checkbox" class="nav-unshown">
              <label id="nav-open" for="nav-input"><span></span></label>
              <label class="nav-unshown" id="nav-close" for="nav-input"></label>
              <div id="nav-content"> 
                <?php wp_nav_menu( 'theme_location=navigation' ); ?>
              </div>
          </div>
        </nav>