<?php 	global $uri; 
  global $isSmartPhone;
  $img = $uri . '/images/';
 ?>
<footer>
  <nav>
    <div id="fnav-content"> 
      <?php wp_nav_menu( 'theme_location=navigation' ); ?>
    </div>
  </nav>

  <div class="row siteinfo mauto mt30">
<?php  
 if( !$isSmartPhone){ //pc ?>  
    <div class="col-sm tc">
      <span class="free-call"><img src="<?=$img?>tuwa-muryop.png" alt="tel:03-6868-8577"><strong>03-6868-8577</strong></span>
    </div>
    <div class="col-sm tc">
      <a class="pdf-download moushikomi-btn" href=""><span>光ネオEXAお客様専用ページ</span><strong class="fa fa-angle-right" aria-hidden="true" style="float: right;"></strong></a>
    </div>
<?php }else{ ?>
  <div class="col-12 tc">
      <a class="pdf-download moushikomi-btn" style="margin: auto;" href=""><span>光ネオEXAお客様専用ページ</span><strong class="fa fa-angle-right" aria-hidden="true" style="float: right;"></strong></a>
    </div>

<?php } ?>
    <section class="col-12 eee mt30">
      <ul class="privacy fl col-10 mauto bold mb60">
        <li><a href="http://create-inc.jp/#about">会社概要</a></li>
        <!-- <li><a href="http://create-inc.jp/#about">特定商取引法に基づく表記について</a></li> -->
        <li><a href="http://create-inc.jp/privacy/">プライバシーポリシー</a></li>
      </ul>
      <h2 class="tc">
        <img src="<?=$img?>with-ntt-west.png" alt="NTT西日本">
        <img src="<?=$img?>hikari-neo.png" alt="光ネオEXA">
        <img src="<?=$img?>with-ntt-east.png" alt="NTT東日本">
      </h2>

    <small class="bold tc copy mt30">Copyright &copy; 1999-2019 NIPPON TELEGRAPH AND TELEPHONE WEST CORPORATION. All rights reserved.
</small>
    </section>
  </div> <!--row-->


  <div class="container">
    <div class="footer-wegget">
      <?php dynamic_sidebar('footer-1'); ?>
    </div>
    <small><a href="<?php bloginfo( 'rss2_url' ); ?>"><i class="fa fa-rss-square"></i> RSS</a></small>
  </div>
</footer>

</div> <!-- container -->
<?php  
 if( $isSmartPhone){ // mobile ?>  
  <div class="container flowbottom">
    <div class="row siteinfo">
      <div class="col-5">
          <p>お問い合わせはこちらからどうぞ</p>
      </div>
      <div class="col-7"><a href="tel:03-6868-8577">
        <span class="free-call"><img src="<?=$img?>tuwa-muryop.png" alt="tel:03-6868-8577"><strong>03-6868-8577</strong></span></a>
        </div>
    </div>
  </div>
<?php } ?>

<?php wp_footer(); ?>
</body>
</html>
