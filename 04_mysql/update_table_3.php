<html> 
<head> 
    <title>Update Spielplan für Countdown</title>     
    <link rel="stylesheet" href="test.css" type="text/css" /> 
</head> 

<body style="font-family: verdana; font-size: 11px;"> 
<h2>Update Spielplan für Countdown (3/3)</h2>
<?PHP

$db = "db2438004"; 

#$verbindung = mysql_connect("localhost", "pascal","admin");mysql_select_db("SCW");
$link=mysql_connect("mysql03.nexlink.ch", "user24380","scw8037");

#$link = mysql_connect(localhost,$username,$password); 
@ mysql_select_db($db) or die("Could not connect to the desired database."); 

$wert = $_POST[eingabewert];
$table = $_POST[table];
$attribut = $_POST[attribut];
$begegnung = $_POST[begegnung];

if($attribut == "bild") {$wert = "/01_bilder/countdown/$wert" ;} 

echo "Folgendes Statement wird ausgeführt:<br> ";
echo "UPDATE $table SET $attribut='$wert' WHERE begegnung='$begegnung'<br><br>";

#$verbindung = mysql_connect("localhost", "pascal","admin");mysql_select_db("SCW");

mysql_query("UPDATE $table SET $attribut='$wert' WHERE begegnung='$begegnung' and saison = '2012/2013'");

printf ("Veränderte Datensätze: %d\n", mysql_affected_rows());
mysql_query("COMMIT");
mysql_close();
?>


<a href="../04_mysql/update_table_1.php">neue Eingabe</a>


</body> 
</html>

