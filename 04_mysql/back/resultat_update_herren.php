<?php

// URL der Seite
$url_herren = "http://www.football.ch/fvrz/de/verein.aspx?v=1596&t=39126&ls=10420&sg=31527&a=pt";


// relevante Zeichenfolge VOR
$startstring = "<table id=\"ctl02_sfvVereinTeamSpielbetrieb_sfvTeamSpielplan_tbResultate";


// relevante Zeichenfolge HINTEN
$endstring = "<span id=\"ctl02_sfvVereinTeamSpielbetrieb_sfvTeamSpielplan_lbPlanLegende";

// Funktion, um URL zu öffnen und in String zu speichern
function my_fopen ($url) {
	$ch = curl_init ($url); 
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
	$content = curl_exec ($ch);
	$errno = curl_errno ($ch);
	curl_close ($ch);
	return (array ($errno, $content)); 
}

// Datei öffnen
list($error, $file ) = my_fopen($url_herren);

if ($string = strstr($file, $startstring)) {
	$endstueck = strstr($string, $endstring);
	$resultat .= str_replace($endstueck, "", $string);
	//$resultat = strip_tags($resultat);
}

// Links zur FVRZ-Homepage einsetzen
$resultat = str_replace("href=\"/fvrz", "", $resultat);
$resultat = str_replace("<b>", "", $resultat);
$resultat = str_replace("</b>", "", $resultat);

// Ausgabe



$resultate_herren = array();

$zeilen = explode("<tr>", $resultat);
//$resultate_herren[i][spieldatum] = 


/*echo "<table id=\"resultate_h\" width=\"683px\" border=\"1\" style=\"border-collapse:collapse; empty-cells:hide;\"";*/


for ($i = 2; $i < 100; $i++) {
	if (strpos($zeilen[$i],"Wipkingen")!==false) {
		$spalten = explode("<td class=\"tableNIStd", $zeilen[$i]);
		
		
		$resultate_herren[ ]=array('SpielDatum' => strip_tags(str_replace("align=\"right\" nowrap=\"nowrap\">","", $spalten[1])));
		$resultate_herren[ ]=array('Anspielzeit' => str_replace("align=\"right\" nowrap=\"nowrap\">","", $spalten[2]));
		$resultate_herren[ ]=array('Heimteam' => str_replace("align=\"right\" nowrap=\"nowrap","", $spalten[3]));
		$resultate_herren[ ]=array('Auswaertsteam' => str_replace("align=\"right\" nowrap=\"nowrap","", $spalten[5]));
		$resultate_herren[ ]=array('Resultat1' => str_replace("NoBG NISsepT1\" align=\"right\" valign=\"top\" width=\"20\" nowrap=\"nowrap\">","",str_replace("NoBG\" align=\"right\" valign=\"top\" width=\"20\" nowrap=\"nowrap\">","", $spalten[6])));
		
		
		$resultate_herren[ ]=array('Resultat2' => str_replace("NoBG NISsepT1\" align=\"right\" valign=\"top\" width=\"6\" nowrap=\"nowrap\">","",str_replace("NoBG\" align=\"right\" valign=\"top\" width=\"6\" nowrap=\"nowrap\">","", $spalten[8])));
		
		
		
	
	/*
	echo "<tr style=\"color:black;line-height:11px\">";
		echo "<td ".$spalten[1];
		echo "<td ".$spalten[2];
		echo "<td ".$spalten[3];
		echo "<td ".$spalten[4];
		echo "<td ".$spalten[5];
            if (strpos($spalten[6],"width")==true) {
           echo "<td align=\"right\" width=\"3%\"".$spalten[6];
                echo "<td align=\"center\" width=\"2%\"".$spalten[7];
		echo "<td align=\"left\" width=\"3%\"".$spalten[8];
	    }
           echo "</tr>";
		   */
	}


else {
		$spalten = explode("<td class=\"tableNIStdNoBG\"", $zeilen[$i]);
}

}
/*echo "</table>";*/
echo "Folgende Statements werden ausgeführt <br>";


$con = mysql_connect("mysql03.nexlink.ch", "user24380","scw8037");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("db2438004", $con);







for ($j = 0; $j <=100; $j=$j+6) {
	
$jahr = substr($resultate_herren[$j]['SpielDatum'], -4);$monat = substr($resultate_herren[$j]['SpielDatum'], -7,2);$tag = substr($resultate_herren[$j]['SpielDatum'], -10,2);
$res1=str_replace("</td>","",$resultate_herren[$j+4]['Resultat1']);
$res2=str_replace("</td>","",$resultate_herren[$j+5]['Resultat2']);
if (intval(date("Ymd")) >= intval($jahr.$monat.$tag))

{


$updates = mysql_query("update SPIELPLAN_HERREN set resultat = '$res1:$res2' where id = $jahr$monat$tag");

if (!$updates) {
    die('Ungültige Updates: ' . mysql_error());
}
else {
echo "update spielplan_herren set resultat = '",$res1,":",$res2,"' where id = " ,$jahr,$monat,$tag,";","<br>"; 


}
}}

mysql_close($con);
?>