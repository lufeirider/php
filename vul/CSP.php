<?php

header("Content-Security-Policy: default-src 'self';style-src 'unsafe-inline';");

?>

<script>
alert(2);
</script>

<script src="x.js"></script>

https://www.jianshu.com/p/f1de775bc43e
<?php
header("Content-Security-Policy: default-src 'self';img-src 'self' www.baidu.com");
?>

<script src="1.js">
</script>
<script>
alert(2);
</script>
<img src="https://www.baidu.com/img/bd_logo1.png?where=super">
<img src="1" onerror=alert(3)>
