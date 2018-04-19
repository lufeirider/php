<?php

header("Content-Security-Policy: default-src 'self';style-src 'unsafe-inline';");

?>

<script>
alert(2);
</script>

<script src="x.js"></script>
