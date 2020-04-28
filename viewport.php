<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<?php
$ua = $_SERVER["HTTP_USER_AGENT"];
if (stripos($ua, 'iphone') !== false || // iphone
  stripos($ua, 'ipod') !== false || // ipod
  stripos($ua, 'mobile') !== false || // android
  stripos($ua, 'mobile') !== false || // windows phone
  stripos($ua, 'mobile') !== false || // firefox phone
  stripos($ua, 'mobile') !== false || // blackberry 10
  stripos($ua, 'blackberry') !== false   // blackberry
) {  //mobile
  $isSmartPhone = true;
  echo '<meta name="viewport" content="width=640" />  ';
  $pa='';
} else {  //pc
  $isSmartPhone = false;
  echo ' <meta name="viewport" content="width=device-width, initial-scale=1.0">';
  $pa='pa';
}