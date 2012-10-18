<style>
  tr { background-color: none}
  .normal { background-color: none }
  .highlight { background-color:none;opacity: 1;color:#E0DC23; }
</style>

<?php 

$q=$_GET["q"];

require_once $_SERVER['DOCUMENT_ROOT']."/scw_db_connect.php";
     


$result = mysql_query("SELECT DATE_FORMAT(SPIELDATUM,'%d.%m.%Y') SP_DATUM,TIME_FORMAT(SPIELDATUM, '%H:%i') ANSPIELZEIT,SPIELTYP, BEGEGNUNG,SPIELORT,RESULTAT,ARTIKEL FROM SPIELPLAN_HERREN WHERE SAISON = '".$q."' order by spieldatum ASC") or die('Es ist ein Fehler aufgetreten: '.mysql_error());




echo "<p style=\"font-style: italic;\">Saison ",$q," - 4. Liga - Gruppe 10</p>";


echo "<table border-bottom-style:solid >
 <tr>
    <td style=\"font-weight:bold\" width=\"100\">Datum</td>
	<td style=\"font-weight:bold\" width=\"100\">Zeit</td>
	<td style=\"font-weight:bold\" width=\"140\">Spieltyp</td>
    <td style=\"font-weight:bold\" width=\"400\">Begegnung</td>
	<td style=\"font-weight:bold\" width=\"300\">Spielort</td>
    <td style=\"font-weight:bold\" width=\"80\">Resultat</td>
  </tr>";

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
	
    echo "<tr  \" onMouseOver=\"this.className='highlight'\" onMouseOut=\"this.className='normal'\" ><td> $row[0] </td>";
	echo "<td> $row[1] </td>";
	echo "<td style=\"color:gray\"> $row[2]  </td>";
	echo "<td> $row[3]  </td>";
	echo "<td charset=\"UTF-8\"> $row[4]  </td>";
	if ($row[6] == ""){echo "<td>$row[5]</td> ";}
	else {echo "<td><a style=\"color:#E0DC23\" href=\"$row[6]\">$row[5] -></a></tr>";}
	
}


echo "</table>";





?>



