<?php
header('Content-Type: text/html; charset=utf-8');

// damit der cronjob nicht nach 20s abgebrochen wird
set_time_limit(0);
ignore_user_abort(true);

// Datei öffnen
$url = "http://www.football.ch/fvrz/Fussballverband-Region-Zuerich/Vereine-FVRZ/Verein-FVRZ.aspx/v-1596/a-rr/";
list($error, $file ) = my_fopen($url);

// alle Zeilenumbrueche aus Datei entfernen
$file = ereg_replace("(\r\n|\n|\r)", "", $file);

// -----------------------------------------------------------------------------------------
// Tabellen auslesen
// -----------------------------------------------------------------------------------------

// relevante Zeichenfolge VOR
$startstringHerren = "4. Liga&nbsp;-&nbsp;Gruppe 10</h2></td>	</tr>";
$startstringDamen = "Frauen 4. Liga&nbsp;-&nbsp;Gruppe  1&nbsp;(Herbstrunde)</h2></td>	</tr>";

// relevante Zeichenfolge HINTEN
$endstringHerren = "</table>";
$endstringDamen = "</table>";

// Datei aufbereiten
$zeilenHerren = trimFile($startstringHerren, $endstringHerren, $file);
$zeilenDamen = trimFile($startstringDamen, $endstringDamen, $file);

// Ausgabe erstellen
$ausgabeHerren = createAusgabeKomplett($zeilenHerren);
$ausgabeKurzHerren = createAusgabeKurz($zeilenHerren);
$ausgabeDamen = createAusgabeKomplett($zeilenDamen);
$ausgabeKurzDamen = createAusgabeKurz($zeilenDamen);

// in Datei schreiben
$dateiHerren = "herren_gesamt.txt";
$dateiHerrenKurz = "herren_kurz.txt";
$dateiDamen = "damen_gesamt.txt";
$dateiDamenKurz = "damen_kurz.txt";
write2file($dateiHerren, $ausgabeHerren);
write2file($dateiHerrenKurz, $ausgabeKurzHerren);
write2file($dateiDamen, $ausgabeDamen);
write2file($dateiDamenKurz, $ausgabeKurzDamen);

echo "Ich habe fertig - und überhaupt: NUR DER FCSG!";

// -----------------------------------------------------------------------------------------
// FUNKTIONEN
// -----------------------------------------------------------------------------------------

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

// Funktion, um File aufzubereiten und in Zeilen zu speichern
function trimFile($sString, $eString, $f) {
	if ($string = strstr($f, $sString)) {
		$endstueck = strstr($string, $eString);
		$resultat = str_replace($endstueck, "", $string);
		$resultat = str_replace($eString, "", $resultat);
		$resultat = str_replace("<a href", "<a target=\"_blank\" href", $resultat);
		$resultat = str_replace(" nisRanSep", "", $resultat);
		$z = explode("<tr class=\"nisRanRowSP\">", $resultat);
	}
	return $z;
}

// Funktion, um komplette Tabellen-Ausgabe zu erstellen
function createAusgabeKomplett($zeilen) {
	$ausgabe = "<table width=\"100%\">";
	
	// fake zeile in tabelle um spaltenbreite zu regulieren
	$ausgabe = $ausgabe."<tr><td align=\"left\" width=\"20\"></td><td nowrap=\"nowrap\"></td><td align=\"right\" width=\"40\"></td><td align=\"right\" width=\"30\"></td><td align=\"right\" width=\"20\"></td><td align=\"right\" width=\"20\"></td><td align=\"right\" width=\"40\"></td><td align=\"right\" width=\"40\"></td><td align=\"right\" width=\"20\"></td><td align=\"center\" width=\"10\"></td><td align=\"right\" width=\"40\"></td><td align=\"right\" width=\"40\"></td></tr>";
	// ende fake zeile
	
	$ausgabe = $ausgabe."<tr style=\"color:gray;\"><td align=\"left\" width=\"15\"></td><td nowrap=\"nowrap\"></td><td align=\"right\" width=\"30\">Sp</td><td align=\"right\" width=\"20\">S</td><td align=\"right\" width=\"10\">U</td><td align=\"right\" width=\"10\">N</td><td align=\"right\" width=\"25\">StrP</td><td align=\"right\" width=\"20\">T+</td><td align=\"center\" width=\"10\"></td><td align=\"right\" width=\"10\">T-</td><td style=\"font-weight:bold;\"align=\"right\" width=\"25\">P </td></tr>";
	
	for ($i = 0; $i < count($zeilen); $i++) {
		if (strpos($zeilen[$i],"Wipkingen")!==false) {
			$spalten = explode("<td", $zeilen[$i]);
			$ausgabe = $ausgabe."<tr id=\"wipking\">";
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" align=\"left\" width=\"15\"".$spalten[1];
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" nowrap=\"nowrap\"".$spalten[2];
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" align=\"right\" width=\"30\"".$spalten[3];
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" align=\"right\" width=\"20\"".$spalten[4];
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" align=\"right\" width=\"10\"".$spalten[5];
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" align=\"right\" width=\"10\"".$spalten[6];
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" align=\"right\" width=\"25\"".$spalten[7];
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" align=\"right\" width=\"20\"".$spalten[8];
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" align=\"center\" width=\"10\"".$spalten[9];
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" align=\"right\" width=\"10\"".$spalten[10];
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" style=\"font-weight:bold;\" align=\"right\" width=\"25\"".$spalten[11];
			$ausgabe = $ausgabe."</tr>";
		}
		else {
			$spalten = explode("<td", $zeilen[$i]);
			$ausgabe = $ausgabe."<tr>";
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" align=\"left\" width=\"15\"".$spalten[1];
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" nowrap=\"nowrap\"".$spalten[2];
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" align=\"right\" width=\"30\"".$spalten[3];
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" align=\"right\" width=\"20\"".$spalten[4];
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" align=\"right\" width=\"10\"".$spalten[5];
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" align=\"right\" width=\"10\"".$spalten[6];
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" align=\"right\" width=\"25\"".$spalten[7];
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" align=\"right\" width=\"20\"".$spalten[8];
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" align=\"center\" width=\"10\"".$spalten[9];
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" align=\"right\" width=\"10\"".$spalten[10];
			$ausgabe = $ausgabe."<td class=\"tableNIStd\" style=\"font-weight:bold;\" align=\"right\" width=\"25\"".$spalten[11];
			$ausgabe = $ausgabe."</tr>";
		}
	}
	$ausgabe = $ausgabe."</table>";
	return $ausgabe;
}

// Funktion, um kurze Tabellen-Ausgabe zu erstellen
function createAusgabeKurz($zeilen) {
	$ausgabe = "<table style=\"-webkit-text-size-adjust: none;\" width=\"100%\">";
	
	for ($i = 1; $i < count($zeilen); $i++) {
		if (strpos($zeilen[$i],"Wipkingen")!==false) {
		$spalten = explode("<td", $zeilen[$i]);
		$ausgabe = $ausgabe."<tr id=\"wipking\">";
		$ausgabe = $ausgabe."<td class=\"tableNIStd\" ".$spalten[1];
		$ausgabe = $ausgabe."<td class=\"tableNIStd\" ".$spalten[2];
		$ausgabe = $ausgabe."<td class=\"tableNIStd\" ".$spalten[11];
		$ausgabe = $ausgabe."</tr>";
	}
	else {
		$spalten = explode("<td", $zeilen[$i]);
		$ausgabe = $ausgabe."<tr>";
		$ausgabe = $ausgabe."<td class=\"tableNIStd\"  style=\"color:gray;\"".$spalten[1];
		$ausgabe = $ausgabe."<td class=\"tableNIStd\" ".$spalten[2];
		$ausgabe = $ausgabe."<td class=\"tableNIStd\" ".$spalten[11];
		$ausgabe = $ausgabe."</tr>";
	}
	}
	$ausgabe = $ausgabe."</table>";
	return $ausgabe;
}
?>