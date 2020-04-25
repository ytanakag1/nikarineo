<?php  	global $uri; ///wp-content/themes/nikarineoexa"
	$img = $uri . '/images/';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="container">

    <div class="row pr">
 <!-- meta slider -->
      <div class="pa">  <?php echo do_shortcode('[metaslider id="5"]'); ?></div>
<!-- meta slider -->     
      <header class="next-slider">
        <div class="siteinfo">
          <h1><a href="<?php echo home_url(); ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
            <img src="<?=$img?>with-ntt-west.png" alt="NTT西日本">
            <img src="<?=$img?>hikari-neo.png" alt="光ネオEXA">
            <img src="<?=$img?>with-ntt-east.png" alt="NTT東日本">
          </h1>
           <span class="free-call"><img src="<?=$img?>tuwa-muryo.png" alt="tel:03-6868-8577"><strong><?php bloginfo( 'description' ); ?></strong></span>

           <a class="pdf-download" href=""><strong class="fa fa-angle-double-right" aria-hidden="true"></strong><span>お申込み書面ダウンロード</span></a>
        </div>

        <nav>
          <div id="nav-content"> 
            <?php wp_nav_menu( 'theme_location=navigation' ); ?>
          </div>
        </nav>

  <?php
  if ( !is_home() && !is_front_page() ){
    
    if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb( '<p class="breadcrumbs">','</p>' );
    }
  }
  ?>

      </header>
  </div> 
</div> <!--container-->

