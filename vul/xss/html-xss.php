<?php
$url = $_GET['url'];
//$url = str_replace("<","00",$url);
//$url = str_replace(">","11",$url);
//$url = str_replace("\"","22",$url);
//$url = str_replace("'","22",$url);
echo "<img src='".$url."'>";
?>