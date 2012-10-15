<html> 
<head> 
    <title>Update Spielplan für Countdown</title>     
    <link rel="stylesheet" href="test.css" type="text/css" /> 
</head> 

<body style="font-family: verdana; font-size: 11px;"> 

<?php 
$tabelle = $_POST[tabelle];
$attribut = $_POST[attribut];


$db = "spieldatenbank_dev"; 

#$verbindung = mysql_connect("localhost", "pascal","admin");mysql_select_db("SCW");
$link=mysql_connect("localhost", "root","root");

#$link = mysql_connect(localhost,$username,$password); 
@ mysql_select_db($db) or die("Could not connect to the desired database."); 
     
$query = "SELECT begegnung FROM $tabelle where saison = '2012/2013' order by spieldatum";


$qresult = mysql_query($query) or die(mysql_error()); 



?> 

    <h2>Update Spielplan für Countdown (2/3)</h2> 
    

    <p>Wähle die Begegnung und gebe die entsprechenden Daten ein</p> 
    


    <form name="input" action="update_table_3.php" method="post"> 

        <p>Begegnung: <br>
            <select name="begegnung"> 
            <!-- Drop down --> 
            <?php 
            while($row = mysql_fetch_array($qresult)){ 
            echo '<option value="' .$row['begegnung']. '">'. $row['begegnung']. '</option>'  ; 
            } 
            ?> 
            <option value="begegnung">Begegnung</option> 
            </select> </p> 
            
            
         <p><?php echo "Attribut: $attribut <br>";
        
        if($attribut != "bild") {echo "<input size=\"30\"maxlength=\"100\" type=\"text\" name=\"eingabewert\" >";}
         else{
			$dir = "../01_bilder/countdown/"; 
			echo "<select name=\"eingabewert\">";
			
			foreach (glob($dir."*.png") as $filename){
			
			
			$filename = str_replace($dir,"",$filename);
			
 			echo '<option value="' .$filename. '">'. $filename. '</option>' ;  }
			echo "</select> </p> ";
		 }
			if($attribut == "spieldatum") {echo "[YYYY-MM-DD HH:MM:SS] <br>";}
			elseif($attribut == "resultat") {echo "[0:0 (0:0)] <br>";}
			else {echo "nur Filename eingeben";}

			if($attribut == "spieldatum") {echo "[YYYY-MM-DD HH:MM:SS] <br>";}
			      elseif($attribut == "resultat") {echo "[0:0 (0:0)] <br>";}
				  elseif($attribut == "spielort") {echo "[Platz, Ort] <br>";}
				  elseif($attribut == "bemerkung") {echo "[Google-Link] <br>";}

				  else {echo "";}
			?>
            
            
                   
            <input type="hidden" name="table" value="<?php echo "$tabelle";?>">
            <input type="hidden" name="attribut" value="<?php echo "$attribut";?>">
        <input type="submit" value="--> Update!" name="submit"><p>
        <a href="../04_mysql/update_table_1.php">zurück</a>
     
    </form> 

    

</body> 
</html>