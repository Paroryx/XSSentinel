<!DOCTYPE html>
<html>
<body>
 
<?php
$text = "World";
echo "My first PHP script!";
echo "<h1>Hello $text!</h1>";
echo "<br>";
$default_consts = "directory:  ".__DIR__."\nfile: ".__FILE__."\nLine nr: ".__line__."\nThe default constants are case sensitive! :)";
echo nl2br($default_consts);
?>
</body>
</html>

