<?php
$callback = empty($_GET["callback"]) ? "jsCallback" : $_GET["callback"];

$data = array(
    "username" => "lightless",
    "avatar" => "http://cdn.lightless.me/images/01.jpg",
);

$data = json_encode($data);

echo "<script>";
echo $callback . "(" . $data . ")";
echo "</script>";
?>