<html> 
<head> 
    <title>Update Spielplan f�r Countdown (1/3)</title>     
    <link rel="stylesheet" href="test.css" type="text/css" /> 
</head> 

<body style="font-family: verdana; font-size: 11px;"> 

    <h2>Update Spielplan f�r Countdown (1/3)</h2> 
    

    <p>W�hle die entsprechende Tabelle in der Datenbank aus</p> 
    

<form name="input" action="update_table_2.php" method="post"> 
  <p>W�hle die Tabelle aus:</p>
  <p>
    <input type="radio" name="tabelle" value="SPIELPLAN_HERREN" checked>spielplan_herren<br>
    <input type="radio" name="tabelle" value="SPIELPLAN_DAMEN">spielplan_damen<br>
  </p>
 
 <p>W�hle das entsprechende Attribut aus aus:</p>
  <p>
    <input type="radio" name="attribut" value="bild"checked>bild<br>
    <input type="radio" name="attribut" value="spieldatum">spieldatum<br>
    <input type="radio" name="attribut" value="bemerkung">bemerkung<br>
    <input type="radio" name="attribut" value="spielort">spielort<br>
     <input type="radio" name="attribut" value="resultat">resultat<br>
     <input type="radio" name="attribut" value="artikel">artikel<br>
  </p>
 <p><input type="submit" value="weiter" name="Submit"><p>   
 
 
   
</form>

</body> 
</html>