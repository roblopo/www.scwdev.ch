<?PHP
header( 'content-type: text/html; charset=utf-8' );

$id = $_POST[id];
$table = $_POST[table];
$begegnung = $_POST[begegnung];
$spielort = $_POST[spielort];

$spieldatum = $_POST[spieldatum];
$bemerkung = $_POST[bemerkung];
$bild = $_POST[bild];
$resultat = $_POST[resultat];
$artikel = $_POST[artikel];


$db = "db2438004"; 

$link=mysql_connect("mysql03.nexlink.ch", "user24380","scw8037");

@ mysql_select_db($db) or die("Could not connect to the desired database."); 
mysql_set_charset('UTF8',$link);
     
$query = "UPDATE $table SET BEGEGNUNG = '$begegnung',SPIELORT = '$spielort',SPIELDATUM = '$spieldatum',BEMERKUNG = '$bemerkung',BILD = '$bild',RESULTAT = '$resultat',ARTIKEL = '$artikel' where saison = '2012/2013' and ID = $id";


$result = mysql_query($query) or die(mysql_error()); 

$row = mysql_fetch_array($result);

$queryneu = "select * from $table where ID = $id";

$resultneu = mysql_query($queryneu) or die(mysql_error()); 

$rowneu = mysql_fetch_array($resultneu);

/*Ausgabe des mutierten Datensatzes*/


echo "<table><tr><td>";



echo "ID: </td><td>".$rowneu['ID']."</td><td></td></tr>";
echo "<tr><td>Begegnung: </td><td>".$rowneu['BEGEGNUNG']."</td></tr>";
echo "<tr><td>Spielort: </td><td>".$rowneu['SPIELORT']."</td></tr>";
echo "<tr><td>Spieldatum:</td><td>".$rowneu['SPIELDATUM']."</td></tr>";
echo "<tr><td>Bemerkung:</td><td>".$rowneu['BEMERKUNG']."</td></tr>";
echo "<tr><td>Bild: </td><td>".$rowneu['BILD']."</td></tr>";
echo "<tr><td>Resultat: </td><td>".$rowneu['resultat']."</td></tr>";
echo "<tr><td>Artikel: </td><td>".$rowneu['ARTIKEL']."</td></tr>";
echo "<tr><td>Saison:  </td><td>".$rowneu['SAISON']."</td></tr>";
echo "</table>";










?>


<a href="../04_mysql/update_spieldatenbank.php">neue Eingabe</a>

</body> 
</html>



