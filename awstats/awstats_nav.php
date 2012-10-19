<?php

/**
* @copyright NexLink SA
* @url 		 www.nexlink.ch
* @date 	 01.05.2006
*/


$domain = str_replace("www.", "", $_SERVER["HTTP_HOST"]);
$year = strip_tags($_GET["year"]);
$month = strip_tags($_GET["month"]);
$html_select = "";
$html = "";


function rec_scandir($dir)
{
 global $folder;						   
 $files = array();
 if ( $handle = opendir($dir) ) {
	while ( ($file = readdir($handle)) !== false ) {
		if ( $file != ".." && $file != "." ) {
			if ( is_dir($dir . "/" . $file) ) {
				rec_scandir($dir . "/" . $file);
				$folder[] = $dir . "/" . $file;
			}
		}
	}
 closedir($handle);
 }
}


rec_scandir(".");
foreach($folder as $value){	
	list($null, $year_sel, $month_sel) = explode("/", $value);
	if(!$month_sel){continue;}
	if($year == $year_sel && $month == $month_sel){
		$html_select .= '<option value="index.php?year='.$year_sel.'&month='.$month_sel.'" selected>'.date("F", mktime(0, 0, 0, $month_sel, 1, $year_sel)).' '.$year_sel.'</option>'."\n";
	}
	else{
		$html_select .= '<option value="index.php?year='.$year_sel.'&month='.$month_sel.'">'.date("F", mktime(0, 0, 0, $month_sel, 1, $year_sel)).' '.$year_sel.'</option>'."\n";		
	}
}

$html .= '<p>';
$html .= '<select name="year" onchange="parent.location=this.options[this.selectedIndex].value;">'."\n";
$html .= '<option value="-1">---</option>'."\n";	
$html .= $html_select;
$html .= '</select>'."\n";
$html .= '</p>';


if(file_exists($year.'/'.$month.'/awstats.'.$domain.'.html')){
	$lastchanged = filectime($year.'/'.$month.'/awstats.'.$domain.'.html');
	$changeddate = date("d.m.Y H:i:s", $lastchanged);
	
	$handle = fopen($year.'/'.$month.'/awstats.'.$domain.'.html', "rb");
	$contents = '';
	while (!feof($handle)) {
  		$contents .= fread($handle, 8192);
  		if(ereg("lang='fr'", $contents)){
  			$lang = 'fr';
  			break;
  		}
  		else if(ereg("lang='de'", $contents)){
  			$lang = 'de';
  			break;
  		}
  		else{
  			$lang = 'fr';
  			break;
  		}
	}
	fclose($handle);
}



// Textes
$txt = array();
$txt[0]['fr'] = 'Statistiques de:';
$txt[1]['fr'] = 'Mise à jour:';
$txt[2]['fr'] = 'Quand:';
$txt[3]['fr'] = 'Historique mensuel';
$txt[4]['fr'] = 'Jours du mois';
$txt[5]['fr'] = 'Jours de la semaine';
$txt[6]['fr'] = 'Heures';

$txt[0]['de'] = 'Statistik für:';
$txt[1]['de'] = 'Zuletzt aktualisiert:';
$txt[2]['de'] = 'Wann:';
$txt[3]['de'] = 'Monatliche Historie';
$txt[4]['de'] = 'Tage im Monat';
$txt[5]['de'] = 'Wochentage';
$txt[6]['de'] = 'Stunden (Serverzeit)';


$txt[7]['fr'] = 'Qui:';
$txt[8]['fr'] = 'Pays';
$txt[9]['fr'] = 'Liste complète';
$txt[10]['fr'] = 'Hôtes';
$txt[11]['fr'] = 'Liste complète';
$txt[12]['fr'] = 'Dernière visite';
$txt[13]['fr'] = 'Adresses IP non résolues';
$txt[14]['fr'] = 'Visiteurs Robots/Spiders';
$txt[15]['fr'] = 'Liste complète';
$txt[16]['fr'] = 'Dernière visite';

$txt[7]['de'] = 'Wer:';
$txt[8]['de'] = 'Länder';
$txt[9]['de'] = 'Gesamte Liste';
$txt[10]['de'] = 'Rechner';
$txt[11]['de'] = 'Gesamte Liste';
$txt[12]['de'] = 'Letzter Zugriff';
$txt[13]['de'] = 'Unaufgelöste IP Adressen';
$txt[14]['de'] = 'Robots/Spiders (Suchmaschinen)';
$txt[15]['de'] = 'Gesamte Liste';
$txt[16]['de'] = 'Letzter Zugriff';


$txt[17]['fr'] = 'Navigation:';
$txt[18]['fr'] = 'Durée des visites';
$txt[19]['fr'] = 'Types de fichiers';
$txt[20]['fr'] = 'Pages vues';
$txt[21]['fr'] = 'Liste complète';
$txt[22]['fr'] = 'Entrée';
$txt[23]['fr'] = 'Sortie';
$txt[24]['fr'] = 'Systèmes exploitation';
$txt[25]['fr'] = 'Versions';
$txt[26]['fr'] = 'Inconnu';
$txt[27]['fr'] = 'Navigateurs';
$txt[28]['fr'] = 'Versions';
$txt[29]['fr'] = 'Inconnu';

$txt[17]['de'] = 'Navigation:';
$txt[18]['de'] = 'Aufenthaltsdauer';
$txt[19]['de'] = 'Datei-Typen';
$txt[20]['de'] = 'Zugriffe';
$txt[21]['de'] = 'Gesamte Liste';
$txt[22]['de'] = 'Einstiegsseiten';
$txt[23]['de'] = 'Exit Seiten';
$txt[24]['de'] = 'Betriebssysteme';
$txt[25]['de'] = 'Versionen';
$txt[26]['de'] = 'Unbekannt';
$txt[27]['de'] = 'Browser';
$txt[28]['de'] = 'Versionen';
$txt[29]['de'] = 'Unbekannt';



$txt[30]['fr'] = 'Origine/Referer:';
$txt[31]['fr'] = 'Origine de la connexion';
$txt[32]['fr'] = 'Moteurs de recherche';
$txt[33]['fr'] = 'Sites référenceurs';
$txt[34]['fr'] = 'Recherche';
$txt[35]['fr'] = 'Phrases clés';
$txt[36]['fr'] = 'Mots clés';

$txt[30]['de'] = 'Verweise:';
$txt[31]['de'] = 'Herkunft';
$txt[32]['de'] = 'Suchmaschinen';
$txt[33]['de'] = 'Websites';
$txt[34]['de'] = 'Häufigkeit';
$txt[35]['de'] = 'Suchausdrücke';
$txt[36]['de'] = 'Suchbegriffe';


$txt[37]['fr'] = 'Autres:';
$txt[38]['fr'] = 'Divers';
$txt[39]['fr'] = 'Codes Status HTTP';
$txt[40]['fr'] = 'Pages non trouvées';

$txt[37]['de'] = 'Sonstige:';
$txt[38]['de'] = 'Verschiedene';
$txt[39]['de'] = 'HTTP Fehlercodes';
$txt[40]['de'] = 'Nicht gefundene Seiten';


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Stats nav</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body { font-family: verdana,arial,helvetica,sans-serif;font-size:11px}
table {font-size:11px}
a { font: 11px verdana, arial, helvetica, sans-serif; }
a:link    { color: #0011BB; text-decoration: none; }
a:visited { color: #0011BB; text-decoration: none; }
a:hover   { color: #605040; text-decoration: underline; }
-->
</style>
</head>
<body>
<?php echo $txt[0][$lang] ?><br><b>www.<?php echo $domain ?></b>
<!--<br><?php echo $txt[1][$lang] ?><br><b><?php echo $changeddate ?></b>-->
<table cellpadding="1" cellspacing="0">
<tr><td><?php echo $html ?></td></tr>
<tr><td valign="bottom"><b><?php echo $txt[2][$lang] ?></b></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.html#month" target="stats"><?php echo $txt[3][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.html#daysofmonth" target="stats"><?php echo $txt[4][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.html#daysofweek" target="stats"><?php echo $txt[5][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.html#hours" target="stats"><?php echo $txt[6][$lang] ?></a></td></tr>
<tr><td valign="bottom" height="15"><b><?php echo $txt[7][$lang] ?></b></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.html#countries" target="stats"><?php echo $txt[8][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.alldomains.html" target="stats"><?php echo $txt[9][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.html#visitors" target="stats"><?php echo $txt[10][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.allhosts.html" target="stats"><?php echo $txt[11][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.lasthosts.html" target="stats"><?php echo $txt[12][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.unknownip.html" target="stats"><?php echo $txt[13][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.html#robots" target="stats"><?php echo $txt[14][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.allrobots.html" target="stats"><?php echo $txt[15][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.lastrobots.html" target="stats"><?php echo $txt[16][$lang] ?></a></td></tr>
<tr><td valign="bottom" height="15"><b><?php echo $txt[17][$lang] ?></b></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.html#sessions" target="stats"><?php echo $txt[18][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.html#filetypes" target="stats"><?php echo $txt[19][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.html#urls" target="stats"><?php echo $txt[20][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.urldetail.html" target="stats"><?php echo $txt[21][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.urlentry.html" target="stats"><?php echo $txt[22][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.urlexit.html" target="stats"><?php echo $txt[23][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.html#os" target="stats"><?php echo $txt[24][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.osdetail.html" target="stats"><?php echo $txt[25][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.unknownos.html" target="stats"><?php echo $txt[26][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.html#browsers" target="stats"><?php echo $txt[27][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.browserdetail.html" target="stats"><?php echo $txt[28][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.unknownbrowser.html" target="stats"><?php echo $txt[29][$lang] ?></a></td></tr>
<tr><td valign="bottom" height="15"><b><?php echo $txt[30][$lang] ?></b></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.html#referer" target="stats"><?php echo $txt[31][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.refererse.html" target="stats"><?php echo $txt[32][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.refererpages.html" target="stats"><?php echo $txt[33][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.html#keys" target="stats"><?php echo $txt[34][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.keyphrases.html" target="stats"><?php echo $txt[35][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.keywords.html" target="stats"><?php echo $txt[36][$lang] ?></a></td></tr>
<tr><td valign="bottom" height="15"><b><?php echo $txt[37][$lang] ?></b></td>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.html#misc" target="stats"><?php echo $txt[38][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.html#errors" target="stats"><?php echo $txt[39][$lang] ?></a></td></tr>
<tr><td><a href="<?php echo $year.'/'.$month ?>/awstats.<?php echo $domain ?>.errors404.html" target="stats"><?php echo $txt[40][$lang] ?></a></td></tr>
</table>
<p><a href="http://www.nexlink.ch" target="_blank"><img src="/awstatsicons/other/nexlink_logo.gif" border="0"></a></p>
</body>
</html>
