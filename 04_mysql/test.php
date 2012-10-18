<?php

// URL der Seite
$url_herren = "http://www.football.ch/fvrz/de/verein.aspx?v=1596&t=39126&ls=10420&sg=31527&a=pt";
$url_damen = "http://www.football.ch/fvrz/de/verein.aspx?v=1596&t=41803&ls=10453&sg=31629&a=pt";

$startstring_h = "<table id=\"ctl02_sfvVereinTeamSpielbetrieb_sfvTeamSpielplan_tbResultate";
$startstring_d = "<table id=\"ctl02_sfvVereinTeamSpielbetrieb_sfvTeamSpielplan_tbResultate";


// relevante Zeichenfolge HINTEN
$endstring_h = "<span id=\"ctl02_sfvVereinTeamSpielbetrieb_sfvTeamSpielplan_lbPlanLegende";
$endstring_d = "<span id=\"ctl02_sfvVereinTeamSpielbetrieb_sfvTeamSpielplan_lbPlanLegende";

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
list($error_h, $file_h ) = my_fopen($url_herren);
list($error_d, $file_d ) = my_fopen($url_damen);

if ($string_h = strstr($file_h, $startstring_h)) {
	$endstueck_h = strstr($string_h, $endstring_h);
	$resultat_h .= str_replace($endstueck_h, "", $string_h);
}
if ($string_d = strstr($file_d, $startstring_d)) {
	$endstueck_d = strstr($string_d, $endstring_d);
	$resultat_d .= str_replace($endstueck_d, "", $string_d);
}

// Links zur FVRZ-Homepage einsetzen
$resultat_h = str_replace("href=\"/fvrz", "", $resultat_h);
$resultat_h = str_replace("<b>", "", $resultat_h);
$resultat_h = str_replace("</b>", "", $resultat_h);

$resultat_d = str_replace("href=\"/fvrz", "", $resultat_d);
$resultat_d = str_replace("<b>", "", $resultat_d);
$resultat_d = str_replace("</b>", "", $resultat_d);

// Ausgabe

$resultate_herren = array();
$resultate_damen = array();

$zeilen_h = explode("<tr>", $resultat_h);
$zeilen_d = explode("<tr>", $resultat_d);

for ($i = 2; $i < 100; $i++) {
	if (strpos($zeilen_h[$i],"Wipkingen")!==false) 
	{
		$spalten_h = explode("<td class=\"tableNIStd", $zeilen_h[$i]);
		$resultate_herren[ ]=array('SpielDatum' => strip_tags(str_replace("align=\"right\" nowrap=\"nowrap\">","", $spalten_h[1])));
		$resultate_herren[ ]=array('Anspielzeit' => str_replace("align=\"right\" nowrap=\"nowrap\">","", $spalten_h[2]));
		$resultate_herren[ ]=array('Heimteam' => str_replace("align=\"right\" nowrap=\"nowrap","", $spalten_h[3]));
		$resultate_herren[ ]=array('Auswaertsteam' => str_replace("align=\"right\" nowrap=\"nowrap","", $spalten_h[5]));
		$resultate_herren[ ]=array('Resultat1' => str_replace("NoBG NISsepT1\" align=\"right\" valign=\"top\" width=\"20\" nowrap=\"nowrap\">","",str_replace("NoBG\" align=\"right\" valign=\"top\" width=\"20\" nowrap=\"nowrap\">","", $spalten_h[6])));
		$resultate_herren[ ]=array('Resultat2' => str_replace("NoBG NISsepT1\" align=\"right\" valign=\"top\" width=\"6\" nowrap=\"nowrap\">","",str_replace("NoBG\" align=\"right\" valign=\"top\" width=\"6\" nowrap=\"nowrap\">","", $spalten_h[8])));
	}
	else {
		$spalten_h = explode("<td class=\"tableNIStdNoBG\"", $zeilen_h[$i]);
		 }
	if (strpos($zeilen_d[$i],"Wipkingen")!==false) {
		$spalten_d = explode("<td class=\"tableNIStd", $zeilen_d[$i]);
		
		
		$resultate_damen[ ]=array('SpielDatum' => strip_tags(str_replace("align=\"right\" nowrap=\"nowrap\">","", $spalten_d[1])));
		$resultate_damen[ ]=array('Anspielzeit' => str_replace("align=\"right\" nowrap=\"nowrap\">","", $spalten_d[2]));
		$resultate_damen[ ]=array('Heimteam' => str_replace("align=\"right\" nowrap=\"nowrap","", $spalten_d[3]));
		$resultate_damen[ ]=array('Auswaertsteam' => str_replace("align=\"right\" nowrap=\"nowrap","", $spalten_d[5]));
		$resultate_damen[ ]=array('Resultat1' => str_replace("NoBG NISsepT1\" align=\"right\" valign=\"top\" width=\"20\" nowrap=\"nowrap\">","",str_replace("NoBG\" align=\"right\" valign=\"top\" width=\"20\" nowrap=\"nowrap\">","", $spalten_d[6])));
		$resultate_damen[ ]=array('Resultat2' => str_replace("NoBG NISsepT1\" align=\"right\" valign=\"top\" width=\"6\" nowrap=\"nowrap\">","",str_replace("NoBG\" align=\"right\" valign=\"top\" width=\"6\" nowrap=\"nowrap\">","", $spalten_d[8])));
		}
else {
		$spalten_d = explode("<td class=\"tableNIStdNoBG\"", $zeilen_d[$i]);
        }
}

echo "Folgende Statements werden ausgefuehrt <br>";
require_once $_SERVER['DOCUMENT_ROOT']."/scw_db_connect.php";

for ($j = 0; $j <=100; $j=$j+6) {
	
$jahr_h = substr($resultate_herren[$j]['SpielDatum'], -4);$monat_h = substr($resultate_herren[$j]['SpielDatum'], -7,2);$tag_h = substr($resultate_herren[$j]['SpielDatum'], -10,2);
$res1_h=str_replace("</td>","",$resultate_herren[$j+4]['Resultat1']);
$res2_h=str_replace("</td>","",$resultate_herren[$j+5]['Resultat2']);

$jahr_d = substr($resultate_damen[$j]['SpielDatum'], -4);$monat_d = substr($resultate_damen[$j]['SpielDatum'], -7,2);$tag_d = substr($resultate_damen[$j]['SpielDatum'], -10,2);
$res1_d=str_replace("</td>","",$resultate_damen[$j+4]['Resultat1']);
$res2_d=str_replace("</td>","",$resultate_damen[$j+5]['Resultat2']);


if (intval(date("Ymd")) >= intval($jahr_h.$monat_h.$tag_h))
{
$updates_h = mysql_query("update SPIELPLAN_HERREN set resultat = '$res1_h:$res2_h' where id = $jahr_h$monat_h$tag_h");

if (!$updates_h) 
         {
    die('Ungueltige Updates: ' . mysql_error());
				 }
else 		{
echo "update spielplan_herren set resultat = '",$res1_h,":",$res2_h,"' where id = " ,$jahr_h,$monat_h,$tag_h,";","<br>"; 
			}
         }
if (intval(date("Ymd")) >= intval($jahr_d.$monat_d.$tag_d))

{

$updates_d = mysql_query("update SPIELPLAN_DAMEN set resultat = '$res1_d:$res2_d' where id = $jahr_d$monat_d$tag_d");

if (!$updates_d) {
    die('Ungültige Updates: ' . mysql_error());
                 }
else    {
echo "update spielplan_damen set resultat = '",$res1_d,":",$res2_d,"' where id = " ,$jahr_d,$monat_d,$tag_d,";","<br>"; 
		}
}


}

mysql_close($con);



?>


