<?php
$datei = "http://www.scwipkingen.ch/05_tabelle/damen_kurz.txt";
$fp = fopen($datei, "r"); 
if ($fp) { 
	while(!feof($fp)) { 
		$text = fgets($fp); 
		echo"$text"; 
	} 
	fclose($fp); 
} 
?>