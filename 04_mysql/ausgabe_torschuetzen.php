<html> 
<head> 
    <title>Update Torschützenliste - Saison 2012/2013</title>     
    <link rel="stylesheet" href="test.css" type="text/css" /> 
</head> 

<body style="margin: 0 auto;font-family: verdana; font-size: 11px;"> 
<div style="padding-left: 10 px; padding-top: 10 px;"> 

    <h2>Update Torschützenliste - Saison 2012/2013</h2> 


<?php 

$db = "db2438004"; 

$link=mysql_connect("mysql03.nexlink.ch", "user24380","scw8037");


@ mysql_select_db($db) or die("Could not connect to the desired database."); 

$result = mysql_query("SELECT NAME, S_12_13  FROM TORSCHUETZEN_HERREN order by S_12_13 desc, NAME") or die('Es ist ein Fehler aufgetreten: '.mysql_error());

$neuername = $_POST[neuername];
$neuetore = $_POST[neuetore];

if($neuername == "" || $neuername == "Sandro Calabro" )
{
	}
else
{
	mysql_query("INSERT INTO TORSCHUETZEN_HERREN (NAME,S_12_13) VALUES('$neuername',$neuetore)");
  echo "INSERT INTO TORSCHUETZEN_HERREN (NAME,S_12_13) VALUES('$neuername',$neuetore);</br>";
}


while($row = mysql_fetch_array($result)){ 
 
 
 $var = $_POST[str_replace(" ","_",$row['NAME'])];
 $name = substr($var, 0, -3);
 $tore = substr($var, -3, 3);
 
 
if($tore == "+tN")
{

}


elseif($tore == "+t1")
{
	mysql_query("UPDATE TORSCHUETZEN_HERREN SET S_12_13=IFNULL(S_12_13,0) + 1 WHERE NAME='$name'");
  echo "UPDATE TORSCHUETZEN_HERREN SET S_12_13=IFNULL(S_12_13,0) + 1 WHERE NAME='$name';</br>";
}

elseif($tore == "+t2")
{
	mysql_query("UPDATE TORSCHUETZEN_HERREN SET S_12_13=IFNULL(S_12_13,0) + 2 WHERE NAME='$name'");
  echo "UPDATE TORSCHUETZEN_HERREN SET S_12_13=IFNULL(S_12_13,0) + 2 WHERE NAME='$name';</br>";
}

elseif($tore == "+t3")
{
 mysql_query("UPDATE TORSCHUETZEN_HERREN SET S_12_13=IFNULL(S_12_13,0) + 3 WHERE NAME='$name'");
  echo "UPDATE TORSCHUETZEN_HERREN SET S_12_13=IFNULL(S_12_13,0) + 3 WHERE NAME='$name';</br>";
}

elseif($tore == "+t4")
{
	mysql_query("UPDATE TORSCHUETZEN_HERREN SET S_12_13=IFNULL(S_12_13,0) + 4 WHERE NAME='$name'");
  echo "UPDATE TORSCHUETZEN_HERREN SET S_12_13=IFNULL(S_12_13,0) + 4 WHERE NAME='$name';</br>";
}

else
{
	mysql_query("UPDATE TORSCHUETZEN_HERREN SET S_12_13=0 WHERE NAME='$name'");
  echo "UPDATE TORSCHUETZEN_HERREN SET S_12_13=0 WHERE NAME='$name'</br>";
}

}


echo "</br></br></br>

 <table>
 <tr>
    <td style=\"font-weight:bold; text-align:right\" width=\"30\"></td>
    <td style=\"font-weight:bold\" width=\"150\">Spieler</td>
    <td style=\"font-weight:bold\" width=\"70\">Tore</td>
  </tr>";

$resultneu = mysql_query("SELECT NAME, S_12_13  FROM TORSCHUETZEN_HERREN order by S_12_13 desc, NAME") or die('Es ist ein Fehler aufgetreten: '.mysql_error());

$rang = 1;
$tmptor = 0;

 while($row = mysql_fetch_array($resultneu)){ 
 
if ($row['S_12_13'] == $tmptor)
	echo "<tr><td></td>";
	else echo "<tr><td> ".$rang.".</td>"; 
 
     echo "<td>".$row['NAME']."</td>" ; 
	 
	 if ($row['S_12_13'] == 1)
	echo "<td> ".$row['S_12_13']." Tor</td>";
	else echo "<td> ".$row['S_12_13']." Tore</td>";
		
	$rang++;
	$tmptor = $row[1];
	} 
?> 
</tr></table></br>
<a href="http://www.scwipkingen.ch/04_mysql/update_torschuetzen.php"><button>neue Eingabe</a>



</div>
</body> 
</html>