<?php
if(!empty($_POST)){
  $error=array();
  define("FILE_DIR", "/var/www/html/wp/wp-content/uploads/");
  $header .= "From: 宣伝館ＷＥＢ管理部 <goiken@sendenkan.com>\n";
  $test_file = date("YmdHis")."-".$_FILES['attachment_file']['name'];
  $upload_res = move_uploaded_file($_FILES['attachment_file']['tmp_name'], FILE_DIR.$test_file);
  var_dump( $upload_res,FILE_DIR.$test_file);
  var_dump('<p>' ,file_exists(FILE_DIR.$test_file));
 
      if($upload_res !== true) {
        echo 'ファイルのアップロードに失敗しました。';
      } else{
        $attachments = array(FILE_DIR . $test_file);
      }
   $success=wp_mail($_POST['example3'] ,'サブジェクト',$_POST['example2'],$header, $attachments);
    
  }
    
    

?>
<form method="post"  enctype="multipart/form-data">

<p>デフォルト<br>
<input type="file" name="attachment_file"></p>

<p>幅を指定<br>
<input type="name" name="example2" size="30"></p>

<p>部品を無効化する<br>
<input type="email" name="example3" size="30" ></p>

<p><input type="submit" value="送信する"></p>

</form>