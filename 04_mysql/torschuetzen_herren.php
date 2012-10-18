
<?php 

$q=$_GET["q"];

if ($q == "2012/2013") {
	$a = "S_12_13";
}
	
elseif ($q == "2011/2012") {
	$a = "S_11_12";
	}
	

require_once $_SERVER['DOCUMENT_ROOT']."/scw_db_connect.php";
mysql_set_charset('UTF8',$link);
     


$result = mysql_query("SELECT NAME,$a  FROM TORSCHUETZEN_HERREN WHERE $a > 0 order by $a desc, NAME") or die('Es ist ein Fehler aufgetreten: '.mysql_error());

echo "<table border-bottom-style:solid >
  <tr>
    <td style=\"font-weight:bold\" width=\"30\"></td>
    <td style=\"font-weight:bold\" width=\"150\">Spieler</td>
    <td style=\"font-weight:bold\" width=\"70\">Tore</td>
  </tr>";
  
  
  
$rang = 1;
$tmptor = 0;

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
	
	echo "<tr>";
	if ($row[1] == $tmptor)
	echo "<td> </td>";
	else echo "<td> ".$rang.".</td>";
	echo "<td> ".$row[0]."</td>";
	if ($row[1] == 1)
	echo "<td> ".$row[1]." Tor</td>";
	else echo "<td> ".$row[1]." Tore</td>";
	
	echo "</tr>";
	$rang++;
	$tmptor = $row[1];
	
}

echo "</table>";

?>