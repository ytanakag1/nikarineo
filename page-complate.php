<?php  	global $uri; ///wp-content/themes/nikarineoexa"
	$img = $uri . '/images/';
  $tuwaimg = 'tuwa-muryop.png';
  // ユーザーエージェントの取得
 require_once('viewport.php');
?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="container pd0">

      <header class="inquiry">
<?php    require_once('siteinfo.php') ?> 


      </header>

    <h2 class="mt30 tc">
      <img class="confirm_non" src="<?=$img?>h2-soshinkanryo.png" alt="送信されました">
    </h2>

		<div class="col-10 mauto bd odr">

    <?php 
    if(have_posts()): while(have_posts()): 
       the_post(); 
        the_content(); 
     endwhile; endif; 
    ?>


    </div> <!--bd-->



    <?php get_footer(); ?>
