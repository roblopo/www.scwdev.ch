<?php
$string=$_GET["q2"];
$teile = explode("@", $string);
$table= $teile[0];
$game=utf8_encode($teile[1]);

require_once $_SERVER['DOCUMENT_ROOT']."/scw_db_connect.php";

@ mysql_select_db($db) or die("Could not connect to the desired database."); 
mysql_set_charset('UTF8',$link);
     
$query = "SELECT * FROM $table where saison = '2012/2013' and BEGEGNUNG = '$game'";

$result = mysql_query($query) or die(mysql_error()); 

$row = mysql_fetch_array($result);

echo "<form name=\"input\" action=\"update_game.php\" method=\"post\"> ";
echo "<table><tr><td>";



echo "ID: </td><td>".$row['ID']."</td><td></td></tr>";
echo "<input name=\"id\" type=\"hidden\" value='".$row['ID']."'>";
echo "<input name=\"table\" type=\"hidden\" value='".$table."'>";
echo "<tr><td>Begegnung: </td><td><input name=\"begegnung\" type=\"text\" size=\"60\" maxlength=\"60\" value='".$row['BEGEGNUNG']."'></td><td></td></tr>";
echo "<tr><td>Spielort: </td><td><input name=\"spielort\" type=\"text\" size=\"60\" maxlength=\"60\" value='".$row['SPIELORT']."'><td></td></td></tr>";
echo "<tr><td>Spieldatum: </td><td><input name=\"spieldatum\" style=\"width:300px\" type=\"text\" size=\"60\" maxlength=\"60\" value='".$row['SPIELDATUM']."'></td><td>[YYYY-MM-DD HH:MM:SS]</td></tr>";


echo "<tr><td>Bemerkung: </td><td><input name=\"bemerkung\" type=\"text\" size=\"60\" maxlength=\"60\" value='".$row['BEMERKUNG']."'></td><td></td></tr>";
echo "<tr><td>Bild: </td><td><input name=\"bild\" type=\"text\" size=\"60\" maxlength=\"60\" value='".$row['BILD']."'></td><td></td></tr>";
echo "<tr><td>Resultat: </td><td><input name=\"resultat\" type=\"text\" size=\"60\" maxlength=\"60\" value='".$row['resultat']."'></td><td></td></tr>";
echo "<tr><td>Artikel: </td><td><input name=\"artikel\" type=\"text\" size=\"60\" maxlength=\"200\" value='".$row['ARTIKEL']."'></td><td></td></tr>";
echo "<tr><td>Saison: </td><td>".$row['SAISON']."</td></tr>";
echo "</table>";
?>

<input type="submit" value="--> Update!" name="submit"><p>