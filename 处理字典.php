<?php 
$rule = " 
%username% 
%username%1 
%username%12 
%username%123 
%username%1234 
%username%12345 
%username%123456 
%username%654321 
%username%54321 
%username%4321 
%username%321 
%username%21 
%username%111 
%username%222 
%username%333 
%username%444 
%username%555 
%username%666 
%username%777 
%username%888 
%username%999 
%username%000 
%username%126 
%username%@126.com 
%username%@163 
%username%@163.com 
%username%163 
%username%8 
%username%88 
%username%2008 
%username%2009 
%username%2010 
%username%2011 
%username%2012 
%username%2013 
%username%@2008 
%username%@2009 
%username%@2010 
%username%@2011 
%username%@2012 
%username%@2013 
%username%@2014 
%username%!@# 
"; 
$pass = " 
123456789 
a123456 
123456
"; 
if ($argc < 2) 
{ 
  print_r(' 
========================================= 
author: Chora 
example: php '.$argv[0].' file 
========================================= 
'); 
  exit(); 
} 
$pass = ltrim($pass); 
$file = $argv[1]; 
$user = file($file); 
$user = array_map('trim',$user); 
foreach($user as $username) 
{ 
  $pass .= ltrim(str_replace('%username%',$username,$rule)); 
} 
$pass = rtrim($pass); 
$fp = fopen('pass.txt','a+'); 
fwrite($fp,$pass); 
echo 'Done!'; 
fclose($fp); 
?>
