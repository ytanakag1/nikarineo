<?php  global $uri ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  .page-seperate { background-image: url(<?=$uri?>/images/page-shadow.png) ; }
  #custom_html-2  .textwidget{ background-image: url(<?=$uri?>/images/list-left.png),url(<?=$uri?>/images/mail-icon.png) ; }
  .side-nav li li {background:url(<?=$uri?>/images/list-left.png) no-repeat;}
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <div class="siteinfo">
    <div class="container">
      
      <div class="usermenu">
        <?php if(empty($_SESSION['loggdin'])){ ?>
          <span class="login">あなたはログインしていません。 (<a href="/klant-login/">ログイン</a>)</span>
          <?php }else{ 
            $user = $_SESSION['loggdin']['name'];
            //ニックネーム  
            ?>
        <span class="login"> ようこそ<?=$user?> さん (<a href="/klant-logout/">ログアウト</a>)</span>
        <?php } ?>
        
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    </div>
      <p><?php bloginfo( 'description' ); ?></p>
    </div>
    <div class="archive-title">
      <h2>メンバーズサイト</h2>
      <div class="page-seperate"></div>
    </div>

  </div>

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

  <?php
  if ( !is_home() && !is_front_page() ){

    if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb( '<p class="breadcrumbs">','</p>' );
    }
  }
?>

</header>


