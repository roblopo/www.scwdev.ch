<html>

<?php
mysql_connect("localhost", "root","root");
mysql_select_db("spieldatenbank_dev");
$ergebnis_h = mysql_query("select BEGEGNUNG,DATE_FORMAT(spieldatum,'%e.%c.%Y - %H:%i') DATUM,DATE_FORMAT(spieldatum,'%a %b %d %Y %H:%i:%s GMT+0200') SPIELDATUM,BILD,SPIELORT,resultat,BEMERKUNG,
datediff(spieldatum,sysdate()) TAGDIFF,hour(timediff(spieldatum,sysdate()))*60+MINUTE(timediff(spieldatum,sysdate())) mindiff  from SPIELPLAN_HERREN 
where datediff(spieldatum,sysdate()) = (select min(datediff(a.spieldatum,sysdate()))datedifferenz from SPIELPLAN_HERREN a where datediff(a.spieldatum,sysdate())>=0)");
$row_h = mysql_fetch_object($ergebnis_h);
$MANNSCHAFT_h=  $row_h->BEGEGNUNG;
$SPIELORT_h=  $row_h->SPIELORT;
$resultat=  $row_h->resultat;
$BILD_h=  $row_h->BILD;
$SPIELDATUM_h = $row_h->SPIELDATUM;
$DATUM_h = $row_h->DATUM;
$BILD_h = $row_h->BILD;
$BEMERKUNG_h = $row_h->BEMERKUNG;

?>
<script type="text/javascript"language="javascript" src="/04_mysql/countdown/countdown_herren.js"></script>
<body onLoad="getTime_h('<?php echo $SPIELDATUM_h;?>');getTime_d('<?php echo $SPIELDATUM_d;?>')">

<div align="center">
<div id="countdown" style="color:white;font-size: 10px;line-height:16px;"> 
 <img style="display: block;margin-left: auto;margin-right: auto;" src="<?php echo $BILD_h;?>" height="86" alt="/01_bilder/countdown/unbekannt.png"></img>
<center>
<table>
<tr><td bgcolor="" valign="bottom">
<img height=15 src="http://www.scwipkingen.ch/http://www.scwipkingen.ch/04_mysql/countdown/image/0c.gif" width=10 name=ah>
<img height=15 src="http://www.scwipkingen.ch/04_mysql/countdown/image/0c.gif" width=10 name=bh>
<img height=15 src="http://www.scwipkingen.ch/04_mysql/countdown/image/Cc.gif" width=6 name=ch>
<img height=15 src="http://www.scwipkingen.ch/04_mysql/countdown/image/0c.gif" width=10 name=yh>
<img height=15 src="http://www.scwipkingen.ch/04_mysql/countdown/image/0c.gif" width=10 name=zh>
<img height=15 src="http://www.scwipkingen.ch/04_mysql/countdown/image/Cc.gif" width=6 name=cz>
<img height=15 src="http://www.scwipkingen.ch/04_mysql/countdown/image/0c.gif" width=10 name=dh>
<img height=15 src="http://www.scwipkingen.ch/04_mysql/countdown/image/0c.gif" width=10 name=eh>
<img height=15 src="http://www.scwipkingen.ch/04_mysql/countdown/image/Cc.gif" width=6 name=fh>
<img height=15 src="http://www.scwipkingen.ch/04_mysql/countdown/image/0c.gif" width=10 name=gh>
<img height=15 src="http://www.scwipkingen.ch/04_mysql/countdown/image/0c.gif" width=10 name=hh>
</td></tr></table>
</center>
 
 
<ul style="-webkit-text-size-adjust: none;margin-left:0; text-align:center;background:transparent; -webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;"><?php echo $MANNSCHAFT_h;?><br><a href="http://maps.google.de/maps?f=q&hl=de&q=<?php if ($BEMERKUNG_h !== "") {echo $BEMERKUNG_h;} else {echo $SPIELORT_h;};?>"target="_blank" ><?php echo $SPIELORT_h;?></a><br><?php echo $DATUM_h;?></ul></br>

<!-- AUSGABE TABELLE HERREN --> 
<?php
$datei = "http://www.scwipkingen.ch/05_tabelle/herren_kurz.txt";
$fp = fopen($datei, "r"); 
if ($fp) { 
	while(!feof($fp)) { 
		$text = fgets($fp); 
		echo"$text"; 
	} 
	fclose($fp); 
} 
?>
<!-- ENDE AUSGABE TABELLE HERREN -->



</body></html>
 



</div>	
  </body>

</html>