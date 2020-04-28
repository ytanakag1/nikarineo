<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<?php 
  global $isSmartPhone;

if ($isSmartPhone) {  //mobile
  echo '<meta name="viewport" content="width=768" />  ';
  $pa='';
} else {  //pc
  echo ' <meta name="viewport" content="width=device-width, initial-scale=1.0">';
  $pa='pa';
}
 wp_head(); ?>
</head>