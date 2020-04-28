<?php  	global $uri; ///wp-content/themes/nikarineoexa"
  $img = $uri . '/images/';
  $tuwaimg = 'tuwa-muryo.png';
  // ユーザーエージェントの取得
 require_once('viewport.php');
?>
  


<body <?php body_class(); ?>>
  <div class="container">

    <div class="row pr">
 <!-- meta slider -->
      <div class="pr"> 
       <?php 
ob_start() ;  // アウトプットバッファリングの開始
ob_implicit_flush(0);  // バッファ上限を無効化
?>
<!-- meta slider -->     
    <header class="next-slider <?=$pa?>">
  <?php    require_once('siteinfo.php') ?> 
    </header>

<?php
    $header = ob_get_clean(); //バッファをクリアし変数に代入する   

        if($isSmartPhone){ //mobile
          echo ' <div class="mb-header">',$header,'</div>';
        }else{
          // slider on
          echo do_shortcode('[metaslider id="5"]'); 
          echo $header;
        }
        
      ?></div> <!--pr-->

  </div> 
</div> <!--container-->


<div class="container pd0">

