<?php
// damit der cronjob nicht nach 20s abgebrochen wird
set_time_limit(0);
ignore_user_abort(true); 

// URL der Seite
$url_herren = "http://www.football.ch/fvrz/de/verein.aspx?v=1596&t=39126&ls=10420&sg=31527&a=rr";
$url_damen = "http://www.football.ch/fvrz/de/verein.aspx?v=1596&t=41803&ls=10453&sg=31629&a=rr";

// relevante Zeichenfolge VOR
$startstring = "<table id=\"ctl02_sfvVereinTeamSpielbetrieb_sfvRangliste_tbRangliste";

// relevante Zeichenfolge HINTEN
$endstring = "<span id=\"ctl02_sfvVereinTeamSpielbetrieb_sfvRangliste_lbHinweis";

// Funktion, um URL zu öffnen und in String zu speichern
function my_fopen ($url) {
	$ch = curl_init ($url); 
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
	$content = curl_exec ($ch);
	$errno = curl_errno ($ch);
	curl_close ($ch);
	return (array ($errno, $content)); 
}

// Funktion, um in eine Datei zu schreiben
function write2file($file, $content) {
	
	$tempHandle = fopen("php://temp", "r+");
	fwrite($tempHandle, $content);
	rewind($tempHandle);
	
	$ftpstream = ftp_connect("ftp.scwipkingen.ch");
	
	$login_result = ftp_login($ftpstream, "tabelle@scwipkingen.ch", "fcsg1879");
	
	ftp_fput($ftpstream, $file, $tempHandle, FTP_ASCII);
	ftp_close($ftpstream);
	fclose($tempHandle);
}

// --> HERREN GESAMT

// Datei öffnen
list($error, $file ) = my_fopen($url_herren);

if ($string = strstr($file, $startstring)) {
	$endstueck = strstr($string, $endstring);
	$resultat .= str_replace($endstueck, "", $string);
	//$resultat = strip_tags($resultat);
}

// Links zur FVRZ-Homepage einsetzen
$resultat = str_replace("href=\"/fvrz", "target=\"_blank\" href=\"http://www.football.ch/fvrz", $resultat);
$zeilen = explode("<tr>", $resultat);


// Ausgabe in Datei
$datei = "herren_gesamt.txt";

$ausgabe = "<table width=\"100%\">";

// fake zeile in tabelle um spaltenbreite zu regulieren
$ausgabe = $ausgabe."<tr><td align=\"left\" width=\"20\"></td><td nowrap=\"nowrap\"></td><td align=\"right\" width=\"40\"></td><td align=\"right\" width=\"30\"></td><td align=\"right\" width=\"20\"></td><td align=\"right\" width=\"20\"></td><td align=\"right\" width=\"40\"></td><td align=\"right\" width=\"40\"></td><td align=\"right\" width=\"20\"></td><td align=\"center\" width=\"10\"></td><td align=\"right\" width=\"40\"></td><td align=\"right\" width=\"40\"></td></tr>";
// ende fake zeile

$ausgabe = $ausgabe."<tr style=\"color:gray;\"><td align=\"left\" width=\"15\"></td><td nowrap=\"nowrap\"></td><td align=\"right\" width=\"30\">Sp</td><td align=\"right\" width=\"20\">S</td><td align=\"right\" width=\"10\">U</td><td align=\"right\" width=\"10\">N</td><td align=\"right\" width=\"25\">StrP</td><td align=\"right\" width=\"20\">T+</td><td align=\"center\" width=\"10\"></td><td align=\"right\" width=\"10\">T-</td><td style=\"font-weight:bold;\"align=\"right\" width=\"25\">P </td></tr>";
for ($i = 2; $i < 13; $i++) {
	if (strpos($zeilen[$i],"Wipkingen")!==false) {
		$spalten = explode("<td", $zeilen[$i]);
		$ausgabe = $ausgabe."<tr id=\"wipking\">";
		$ausgabe = $ausgabe."<td".$spalten[1];
		$ausgabe = $ausgabe."<td".$spalten[2];
		$ausgabe = $ausgabe."<td".$spalten[3];
		$ausgabe = $ausgabe."<td".$spalten[4];
		$ausgabe = $ausgabe."<td".$spalten[5];
		$ausgabe = $ausgabe."<td".$spalten[6];
		$ausgabe = $ausgabe."<td".$spalten[7];
		$ausgabe = $ausgabe."<td".$spalten[8];
		$ausgabe = $ausgabe."<td".$spalten[9];
		$ausgabe = $ausgabe."<td".$spalten[10];
		$ausgabe = $ausgabe."<td style=\"font-weight:bold;\"".$spalten[11];
		$ausgabe = $ausgabe."</tr>";
	}
	else {
		$spalten = explode("<td", $zeilen[$i]);
		$ausgabe = $ausgabe."<tr>";
		$ausgabe = $ausgabe."<td".$spalten[1];
		$ausgabe = $ausgabe."<td".$spalten[2];
		$ausgabe = $ausgabe."<td".$spalten[3];
		$ausgabe = $ausgabe."<td".$spalten[4];
		$ausgabe = $ausgabe."<td".$spalten[5];
		$ausgabe = $ausgabe."<td".$spalten[6];
		$ausgabe = $ausgabe."<td".$spalten[7];
		$ausgabe = $ausgabe."<td".$spalten[8];
		$ausgabe = $ausgabe."<td".$spalten[9];
		$ausgabe = $ausgabe."<td".$spalten[10];
		$ausgabe = $ausgabe."<td style=\"font-weight:bold;\"".$spalten[11];
		$ausgabe = $ausgabe."</tr>";
	}
}
$ausgabe = $ausgabe."</table>";

write2file($datei, $ausgabe);


// --> HERREN KURZ

// Datei öffnen
list($error, $file ) = my_fopen($url_herren);
unset($resultat);
if ($string = strstr($file, $startstring)) {
	$endstueck = strstr($string, $endstring);
	$resultat .= str_replace($endstueck, "", $string);
	//$resultat = strip_tags($resultat);
}

// Links zur FVRZ-Homepage einsetzen
$resultat = str_replace("href=\"/fvrz", "target=\"_blank\" href=\"http://www.football.ch/fvrz", $resultat);
$zeilen = explode("<tr>", $resultat);


// Ausgabe in Datei
$datei = "herren_kurz.txt";

// Nur Platzierung, Club und Punkte anzeigen
$zeilen = explode("<tr>", $resultat);

$ausgabe = "<table style=\"-webkit-text-size-adjust: none;\" width=\"100%\">";
for ($i = 2; $i < 13; $i++) {
	if (strpos($zeilen[$i],"Wipkingen")!==false) {
		$spalten = explode("<td", $zeilen[$i]);
		$ausgabe = $ausgabe."<tr id=\"wipking\">";
		$ausgabe = $ausgabe."<td".$spalten[1];
		$ausgabe = $ausgabe."<td".$spalten[2];
		$ausgabe = $ausgabe."<td".$spalten[11];
		$ausgabe = $ausgabe."</tr>";
	}
	else {
		$spalten = explode("<td", $zeilen[$i]);
		$ausgabe = $ausgabe."<tr>";
		$ausgabe = $ausgabe."<td style=\"color:gray;\"".$spalten[1];
		$ausgabe = $ausgabe."<td".$spalten[2];
		$ausgabe = $ausgabe."<td".$spalten[11];
		$ausgabe = $ausgabe."</tr>";
	}
}
$ausgabe = $ausgabe."</table>";

write2file($datei, $ausgabe);



// --> DAMEN GESAMT

// Datei öffnen
list($error, $file ) = my_fopen($url_damen);
unset($resultat);
if ($string = strstr($file, $startstring)) {
	$endstueck = strstr($string, $endstring);
	$resultat .= str_replace($endstueck, "", $string);
	//$resultat = strip_tags($resultat);
}

// Links zur FVRZ-Homepage einsetzen
$resultat = str_replace("href=\"/fvrz", "target=\"_blank\" href=\"http://www.football.ch/fvrz", $resultat);
$zeilen = explode("<tr>", $resultat);


// Ausgabe in Datei
$datei = "damen_gesamt.txt";

$ausgabe = "<table width=\"100%\">";

// fake zeile in tabelle um spaltenbreite zu regulieren
$ausgabe = $ausgabe."<tr><td align=\"left\" width=\"20\"></td><td nowrap=\"nowrap\"></td><td align=\"right\" width=\"40\"></td><td align=\"right\" width=\"30\"></td><td align=\"right\" width=\"20\"></td><td align=\"right\" width=\"20\"></td><td align=\"right\" width=\"40\"></td><td align=\"right\" width=\"40\"></td><td align=\"right\" width=\"20\"></td><td align=\"center\" width=\"10\"></td><td align=\"right\" width=\"40\"></td><td align=\"right\" width=\"40\"></td></tr>";
// ende fake zeile

$ausgabe = $ausgabe."<tr style=\"color:gray;\"><td align=\"left\" width=\"15\"></td><td nowrap=\"nowrap\"></td><td align=\"right\" width=\"30\">Sp</td><td align=\"right\" width=\"20\">S</td><td align=\"right\" width=\"10\">U</td><td align=\"right\" width=\"10\">N</td><td align=\"right\" width=\"25\">StrP</td><td align=\"right\" width=\"20\">T+</td><td align=\"center\" width=\"10\"></td><td align=\"right\" width=\"10\">T-</td><td style=\"font-weight:bold;\"align=\"right\" width=\"25\">P </td></tr>";
for ($i = 2; $i < 13; $i++) {
	if (strpos($zeilen[$i],"Wipkingen")!==false) {
		$spalten = explode("<td", $zeilen[$i]);
		$ausgabe = $ausgabe."<tr id=\"wipking\">";
		$ausgabe = $ausgabe."<td".$spalten[1];
		$ausgabe = $ausgabe."<td".$spalten[2];
		$ausgabe = $ausgabe."<td".$spalten[3];
		$ausgabe = $ausgabe."<td".$spalten[4];
		$ausgabe = $ausgabe."<td".$spalten[5];
		$ausgabe = $ausgabe."<td".$spalten[6];
		$ausgabe = $ausgabe."<td".$spalten[7];
		$ausgabe = $ausgabe."<td".$spalten[8];
		$ausgabe = $ausgabe."<td".$spalten[9];
		$ausgabe = $ausgabe."<td".$spalten[10];
		$ausgabe = $ausgabe."<td style=\"font-weight:bold;\"".$spalten[11];
		$ausgabe = $ausgabe."</tr>";
	}
	else {
		$spalten = explode("<td", $zeilen[$i]);
		$ausgabe = $ausgabe."<tr>";
		$ausgabe = $ausgabe."<td".$spalten[1];
		$ausgabe = $ausgabe."<td".$spalten[2];
		$ausgabe = $ausgabe."<td".$spalten[3];
		$ausgabe = $ausgabe."<td".$spalten[4];
		$ausgabe = $ausgabe."<td".$spalten[5];
		$ausgabe = $ausgabe."<td".$spalten[6];
		$ausgabe = $ausgabe."<td".$spalten[7];
		$ausgabe = $ausgabe."<td".$spalten[8];
		$ausgabe = $ausgabe."<td".$spalten[9];
		$ausgabe = $ausgabe."<td".$spalten[10];
		$ausgabe = $ausgabe."<td style=\"font-weight:bold;\"".$spalten[11];
		$ausgabe = $ausgabe."</tr>";
	}
}
$ausgabe = $ausgabe."</table>";

write2file($datei, $ausgabe);



// --> DAMEN KURZ

// Datei öffnen
list($error, $file ) = my_fopen($url_damen);
unset($resultat);
if ($string = strstr($file, $startstring)) {
	$endstueck = strstr($string, $endstring);
	$resultat .= str_replace($endstueck, "", $string);
	//$resultat = strip_tags($resultat);
}

// Links zur FVRZ-Homepage einsetzen
$resultat = str_replace("href=\"/fvrz", "target=\"_blank\" href=\"http://www.football.ch/fvrz", $resultat);
$zeilen = explode("<tr>", $resultat);


// Ausgabe in Datei
$datei = "damen_kurz.txt";

// Nur Platzierung, Club und Punkte anzeigen
$zeilen = explode("<tr>", $resultat);

$ausgabe = "<table style=\"-webkit-text-size-adjust: none;\" width=\"100%\">";
for ($i = 2; $i < 13; $i++) {
	if (strpos($zeilen[$i],"Wipkingen")!==false) {
		$spalten = explode("<td", $zeilen[$i]);
		$ausgabe = $ausgabe."<tr id=\"wipking\">";
		$ausgabe = $ausgabe."<td".$spalten[1];
		$ausgabe = $ausgabe."<td".$spalten[2];
		$ausgabe = $ausgabe."<td".$spalten[11];
		$ausgabe = $ausgabe."</tr>";
	}
	else {
		$spalten = explode("<td", $zeilen[$i]);
		$ausgabe = $ausgabe."<tr>";
		$ausgabe = $ausgabe."<td style=\"color:gray;\"".$spalten[1];
		$ausgabe = $ausgabe."<td".$spalten[2];
		$ausgabe = $ausgabe."<td".$spalten[11];
		$ausgabe = $ausgabe."</tr>";
	}
}
$ausgabe = $ausgabe."</table>";

write2file($datei, $ausgabe);

echo "<h1>Tabellen wurden aktualisiert!</h1>";

?>