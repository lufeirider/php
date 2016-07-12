<?php
$urlhex = array('0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f');
echo $urlhex;
$i=0;
$ii=0;
for ($i=0; $i < 16 ; $i++) { 
	for ($ii=0; $ii < 16; $ii++) { 
		$hex = $urlhex[$i] . $urlhex[$ii];
		$realhex = '%' .$urlhex[$i] . $urlhex[$ii];
		echo "<iframe src='http://localhost/fuzz.php?c=".$realhex."&d=".$hex."''></iframe>";

	}
}
?>
