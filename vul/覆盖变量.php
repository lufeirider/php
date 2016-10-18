<?php 
/* echo $code;
if(isset($code)){
	echo "yes";
}else{
	echo "no";
} */
//http://127.0.0.1/test.php?code=1


foreach(array('_GET','_POST') as $request){
	foreach($$request as $_k => $_v){
		var_dump($$_k=$_v);
	}
}
?>
