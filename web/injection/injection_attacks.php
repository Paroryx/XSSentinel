<!DOCTYPE html>
<html>
<head>
<title>Injection Attacks</title>
</head>
<body>
<?php
$text = "World";
echo "My first PHP script!";
echo "<h1>Hello $text!</h1>";
echo "<br>";
$default_consts = "directory:  ".__DIR__."\nfile: ".__FILE__."\nLine nr: ".__line__."\nThe default constants are case insensitive! :)";
echo nl2br($default_consts);
echo "The time is " . date("h:i:sa");
?>
</body>
</html>

