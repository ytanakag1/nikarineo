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
<?php  require_once('siteinfo.php') ?> 
    </header>

    <h2 class="mt30 tc">
      <img class="confirm_non" src="<?=$img?>h2-otoiawase.png" alt="お問い合わせ">
    </h2>

		<div class="col-10 mauto bd odr">
      <?php 
      if(have_posts()): while(have_posts()): 
        the_post(); 
          the_content(); 
      endwhile; endif; 
      ?>
    </div> <!--bd-->



<script>
jQuery(function($){
 
  if($('.mw_wp_form_confirm').length){
    //確認画面
    $('.w700').each(function(i,e){
     var em_length = $(e).children('em').text().length;
     var w700_length = $(e).text().replace(/[\n\s　]/g, "").length ;//- em_length ;
   
       if(w700_length == em_length){
 	       $(e).addClass('confirm_non');
       }
    });
    //
    var nick_maisu = $('.nick-maisu').text().replace(/[\n\s　]/g, "").length ;
    if(nick_maisu < 1 ) $('.nick-maisu').addClass('confirm_non');
    // 光プランの選択肢
    $('#chplan .f2f p.radio').each(function(i,e){
      var str_count = $(e).text().length;
      if(str_count < 6){
        $(e).parent('.f2f').addClass('confirm_non');
      }else{
        // 選択があった場合
        $('#denwa-plan').removeClass('confirm_non');
      }
    });
   

  } else {
     // 入力フォーム
      $('.error').each(function(i,e){
      if(i == 0){
        var off = $(e).offset();
        $(window).scrollTop( off.top -32 );
            return;
        }
      });
    /*ロード時にループ radio*/
      $('input[type="radio"]').each(function(i,e){
        //ボタンをオンにする
        var className = $(e).attr("class");
        rdbclik($(e), className );
      });

      $('input[type="checkbox"]').each(function(i,e){
         //チェックをオンにする
        var className = $(e).attr("class");
        chkclik( $(e));
      });

      phnechDisabled();
      $('.phone-plan').each(function(i,e){
        if ($(this).prop('checked')) {
          $(this).parents('.f2f').find('[name="phone-allch"]').removeAttr('disabled');
          $(this).parents('.f2f').find('[name="phone-number"]').removeAttr('disabled');
        }
      });
  } 

  //"phone-plan"選択でactiveに
  function phnechDisabled(){
  	$('[name="phone-allch"]').attr('disabled',true).val('');
      $('[name="phone-number"]').attr('disabled',true).val('');
   }   
      
      //"phone-plan"選択でactiveに
  $('[name="phone-plan"]').change(function(){
  	phnechDisabled();
     $(this).parents('.f2f').find('[name="phone-allch"]').removeAttr('disabled');
    $(this).parents('.f2f').find('[name="phone-number"]').removeAttr('disabled');
   });



  // radio className.not(this) で他の要素
  $('.hinmoku').change(function(){  rdbclik($(this),'.hinmoku');  });
  $('.moushikomi-sha').change(function(){  rdbclik($(this),'.moushikomi-sha');  });
  $('.moushikomi-area').change(function(){  rdbclik($(this),'.moushikomi-area');  });
  $('.kaisen-id').change(function(){  rdbclik($(this),'.kaisen-id');  });
  $('.exa-plan').change(function(){  rdbclik($(this),'.exa-plan');  });
  $('.ninen-wari').change(function(){  rdbclik($(this),'.ninen-wari');  });
  $('.cnst-pay').change(function(){  rdbclik($(this),'.cnst-pay');  });
  $('.cnst-bldtype').change(function(){  rdbclik($(this),'.cnst-bldtype');  });
  $('.ct-ampm').change(function(){  rdbclik($(this),'.ct-ampm');  });
  $('.tachiai').change(function(){  rdbclik($(this),'.tachiai');  });
  $('.ct-renraku').change(function(){  rdbclik($(this),'.ct-renraku');  });
  $('.tenyo-henko').change(function(){  rdbclik($(this),'.tenyo-henko');  });
  $('.confirmation').change(function(){  rdbclik($(this),'.confirmation');  });

  $('.phone-plan').change(function(){  
    //id = chplan
    if ($(this).prop('checked')) {
      $('#chplan label').removeClass('checked-after');
       $(this).parent('label').addClass('checked-after');
    } 
  });

  /* "checkbox  */
  $('.doui-yakkan').click(function(){  chkclik($(this)); });
  $('.doui-setsumei').click(function(){  chkclik($(this)); });
  $('.kiki-rental').click(function(){  chkclik($(this)); });
  $('.sechibasho').click(function(){  chkclik($(this)); });
  $('.sofubasho').click(function(){  chkclik($(this)); });

  

/* radio on*/
  function rdbclik(e,sn){
    if (e.prop('checked')) {
      e.parent('label').addClass('checked-after');
        $(sn).not(e).parent('label').removeClass('checked-after');
    } 
  }

/* check on*/
  function chkclik(e){
    if (e.prop('checked')) {
      e.parent('label').addClass('checked-after');
    } else{
      e.parent('label').removeClass('checked-after');
    }
  }


/* 設置場所のコピー*/  
  $('.sechibasho').change(function(){  
      if ($(this).prop('checked')) {
        $('input[name="sechi-zip[data][0]"]').val( $('input[name="zip-code[data][0]"]').val());
        $('input[name="sechi-zip[data][1]"]').val( $('input[name="zip-code[data][1]"]').val());
        $('#sechi-pref').val( $('#pref').val());
        $('#sechi-address').val( $('#address').val());
      }else{
        $('input[name="sechi-zip[data][0]"]').val('');
        $('input[name="sechi-zip[data][1]"]').val('');
        $('#sechi-pref').val('');
        $('#sechi-address').val('');
      }
  });
// nick 枚数
    $('.kiki-rental').eq(1).change(function(){  
      if ($(this).prop('checked')) {
        $('[name="nick-maisu"]').attr('required',true);
      }else{
        $('[name="nick-maisu"]').val('').attr('required',false);
      }
    });

    $('.sofubasho').change(function(){  
      if ($(this).prop('checked')) {
        $('input[name="sofu-zip[data][0]"]').val( $('input[name="zip-code[data][0]"]').val());
        $('input[name="sofu-zip[data][1]"]').val( $('input[name="zip-code[data][1]"]').val());
        $('#sofu-pref').val( $('#pref').val());
        $('#sofu-address').val( $('#address').val());
      }else{
        $('input[name="sofu-zip[data][0]"]').val('');
        $('input[name="sofu-zip[data][1]"]').val('');
        $('#sofu-pref').val('');
        $('#sofu-address').val('');
      }
  });
}); //$ is not function
</script>








<?php get_footer(); ?>
