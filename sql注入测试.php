<?php
	$uid = $_GET['uid'];
	$conn=mysql_connect("localhost","root","");
	mysql_select_db("guest");
	$re=mysql_query("select * from admin where id=$uid");
	$row=mysql_fetch_array($re);
	echo $row["user"];
?>


CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL,
  `user` varchar(10000) NOT NULL,
  `pass` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'lufei', '123456'),
(2, 'hack', '123456');
