<?php 

// Diese Datei baut die Verbindung zur Spieldatenbank auf

require_once 'scw_db_conf.php';

// Oeffne DB-Verbindung
$link = mysql_connect( DB_HOST, DB_USER, DB_PASS )
	or die( 'Konnte keine Verbindung herstellen : ' . mysql_error() );

// Charset setzen
mysql_set_charset('UTF8',$link);

// Datenbank waehlen
mysql_select_db( DB_NAME )
	or die ( 'Kann Datenbank "' . DB_NAME . '" nicht auswÃ¤hlen : ' . mysql_error() );

?>