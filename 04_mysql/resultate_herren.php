<style>
  tr { background-color: none}
  .normal {background-color: none }
  .highlight_link {background-color:none;opacity: 1;color:#E0DC23; cursor:pointer;}
  .highlight_nolink{color:gray;}
</style>

<?php 

$q=$_GET["q"];

$db = "db2438004"; 

$link=mysql_connect("mysql03.nexlink.ch", "user24380","scw8037");


@ mysql_select_db($db) or die("Could not connect to the desired database."); 
mysql_set_charset('UTF8',$link);
     


$result = mysql_query("SELECT DATE_FORMAT(SPIELDATUM,'%d.%m.%Y') SP_DATUM,TIME_FORMAT(SPIELDATUM, '%H:%i') ANSPIELZEIT,SPIELTYP, BEGEGNUNG,SPIELORT,RESULTAT,ARTIKEL FROM SPIELPLAN_HERREN WHERE SAISON = '".$q."' order by spieldatum ASC") or die('Es ist ein Fehler aufgetreten: '.mysql_error());




echo "<p style=\"font-style: italic;\">Saison ",$q," - 4. Liga - Gruppe 10</p>";


echo "<table border-bottom-style:solid >
 <tr>
    <td style=\"font-weight:bold\" width=\"100\">Datum</td>
	<td style=\"font-weight:bold\" width=\"100\">Zeit</td>
	<td style=\"font-weight:bold\" width=\"140\">Spieltyp</td>
    <td style=\"font-weight:bold\" width=\"200\">Heim</td>
	<td style=\"font-weight:bold\" width=\"200\">Gast</td>
	<td style=\"font-weight:bold\" width=\"300\">Spielort</td>
    <td style=\"font-weight:bold\" width=\"80\">Resultat</td>
  </tr>";

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
	$begegnung = explode(" - ", $row[3]);
	if ($row[6] == "")
	echo "<tr  \" onMouseOver=\"this.className='highlight_nolink'\" onMouseOut=\"this.className='normal'\">";
	else echo "<tr  \" onMouseOver=\"this.className='highlight_link'\" onMouseOut=\"this.className='normal'\" onclick=\"window.location='$row[6]'\";>";
	echo "<td> $row[0] </td>
		  <td> $row[1] </td>
		  <td> $row[2] </td>
	      <td> $begegnung[0] </td> 
		  <td> $begegnung[1]</td>
		  <td> $row[4] </td>
		  <td> $row[5] </td></tr>";
								}
				echo "</table>";

?>