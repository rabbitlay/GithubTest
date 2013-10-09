<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$fname=fopen("product.xml","w+");
fwrite($fname,"<product>Nivea</product>");
?>
</body>
</html>
