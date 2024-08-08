<!DOCTYPE html>
<?php
require 'config.php';
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
table, th, td {
  border:1px solid black;
}
</style>
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
//echo phpinfo();
echo "<br><h3>Database Connection: </h3><br>";
?>
<?php
function createTable($rows){
	$html_table = '<table style="width:100%">';

	$html_table.="<tr>";
        foreach ($rows[0] as $type => $data){
           $html_table.="<th>".$type."</th>";
        }
	$html_table.="</tr>";

	foreach($rows as $row){
           $html_table.="<tr>";
           foreach($row as $type => $data){
              $html_table.="<td>".$data."</td>";
           }
           $html_table.="</tr>";
        }

	$html_table.="</table>";

	return $html_table;
}
?>
<?php

$dsn = "mysql:host=localhost;dbname=honeypot;charset=UTF8";
try{
        $pdo = new PDO($dsn, $user, $password);

        if($pdo) {
                echo "succesfully connected to the $db database! :)<br>";
		echo "<h4><code>HoneyLog</code> from <code>$db</code> Database</h4>";
		$sql = 'SELECT * FROM HoneyLog';
		$statement = $pdo->query($sql);
		$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        }
} catch (PDOException $e){
        echo $e->getMessage();
}

$table = createTable($rows);
echo $table;

?>
</body>
</html>
