<html> 
<head> 
    <title>Update Torschützenliste - Saison 2012/2013</title>     
   
</head> 

<body style="margin: 0 auto; font-family: verdana; font-size: 15px;"> 
<div style="padding-left: 10 px; padding-top: 10 px;"> 

    <h2>Update Torschützenliste - Saison 2012/2013</h2> 
    

<?php 

$db = "spieldatenbank_dev"; 

$link=mysql_connect("localhost", "root","root");


@ mysql_select_db($db) or die("Could not connect to the desired database."); 

    

$result = mysql_query("SELECT NAME, S_12_13  FROM TORSCHUETZEN_HERREN order by S_12_13 desc, NAME") or die('Es ist ein Fehler aufgetreten: '.mysql_error());
$maxdate = mysql_query("SELECT DATE_FORMAT(max(DATUM),'%d.%M %Y - %k:%i') DATUM FROM TORSCHUETZEN_HERREN") or die('Es ist ein Fehler aufgetreten: '.mysql_error());


?>
 <form name="input" action="ausgabe_torschuetzen.php" method="post"> 
 <table>
 <tr>
    <td style="font-weight:bold; text-align:right" width="30"></td>
    <td style="font-weight:bold" width="150">Spieler</td>
    <td style="font-weight:bold" width="70">Tore</td>
    <td style="font-weight:bold" width="70">Update</td>
  </tr>
<?php 
$rang = 1;
$tmptor = 0;

$date = mysql_fetch_array($maxdate);
echo "<a><i>letzter Update: ".$date['DATUM']."</i></a></br></br>";

 while($row = mysql_fetch_array($result)){ 
 
if ($row['S_12_13'] == $tmptor)
	echo "<tr><td></td>";
	else echo "<tr><td> ".$rang.".</td>"; 
 
     echo "<td>".$row['NAME']."</td>" ; 
	 
	 if ($row['S_12_13'] == 1)
	echo "<td> ".$row['S_12_13']." Tor</td>";
	else echo "<td> ".$row['S_12_13']." Tore</td>";
            
 echo "    <td> <select name=\"".str_replace(" ","_",$row['NAME'])."\">
            <option value=\"".$row['NAME']."+tN\">--</option>
            <option value=\"".$row['NAME']."+t1\">+1</option>
            <option value=\"".$row['NAME']."+t2\">+2</option>
            <option value=\"".$row['NAME']."+t3\">+3</option>
             <option value=\"".$row['NAME']."+t4\">+4</option>
             <option value=\"".$row['NAME']."+t0\">auf 0 setzen</option>
        </select> </td></tr>";
		
	$rang++;
	$tmptor = $row[1];
	} 
?> 
<tr><td></td><td><input name="neuername" type="text" size="30" maxlength="30" value="Sandro Calabro" onFocus="if(this.value && this.value==this.defaultValue)this.value=''" onBlur="if(this.value && this.value==this.defaultValue)this.value='Vorbelegung'""></td>
<td></td><td>
<select name="neuetore">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="0">auf 0 setzen</option>
</select>
</td></tr>

<tr><td></td><td></td><td></td><td>	
<input type="submit" value="--> Update!" name="submit"></td></tr>
</table>
</form>
</div>
</body> 
</html>