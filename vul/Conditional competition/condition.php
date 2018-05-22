<?php
//burp线程开启100
//购买次数200，其实账户有10000，只能购买100个
$con = mysql_connect("localhost","root","root");
mysql_select_db("jingzheng");

if($_GET['action'] == "reset")
{
	mysql_query("UPDATE `user` set money = 10000,good_number = 0 WHERE name='lufei'");
}

if($_GET['action'] == "createdb")
{
	$sql_array = preg_split("/;[\r\n]/", file_get_contents('./jingzheng.sql'));  
	foreach ($sql_array as $k => $v) {  
		mysql_query($v);  
		echo mysql_error().'<br>';  
	}  
}




$re = mysql_query("select * from user");
$row = mysql_fetch_assoc($re);

print_r("name:".$row['name']);
echo "<br/>";
print_r("money:".$row['money']);
echo "<br/>";
print_r("good_number:".$row['good_number']);
echo "<br/>";

if($_GET['action'] == "buy")
{
	if($row['money']>=100)
	{
		sleep(1);
		mysql_query("UPDATE `user` set money = money - 100 WHERE name='lufei'");
		mysql_query("UPDATE `user` set good_number = good_number + 1 WHERE name='lufei'");
	}

}

$re = mysql_query("select * from user");
$row = mysql_fetch_assoc($re);
print_r("付款中：####################");
echo "<br/>";
print_r("name:".$row['name']);
echo "<br/>";
print_r("money:".$row['money']);
echo "<br/>";
print_r("good_number:".$row['good_number']);

?>