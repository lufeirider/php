<?php
$code = $_GET['c'];
$cc = $_GET['d'];
?>
<html>
<img src=x <?php echo $code?>onerror="alert('<?php echo $cc?>')">
</html>
