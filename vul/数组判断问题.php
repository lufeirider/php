<?php 
$a=array(0,1,2,'3');
var_dump(in_array('abc', $a));  //true
var_dump(in_array('1bc', $a));	//true


$a=array('test0'=>0,'test1'=>1);
var_dump(array_search("admin",$a)); // string(5) "test0"
var_dump(array_search("1admin",$a));  // string(5) "test1"

?>
