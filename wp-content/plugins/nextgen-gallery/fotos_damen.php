<style>
  tr { background-color: none}
  .normal { background-color: none }
  .highlight { background-color:none;opacity: 1;color:#E0DC23; }
</style>

<?php 
$q=$_GET["q"];

// Saison 2012/2013
if ($q == "2012/2013") {
include("nggfunctions.php"); 
include("ngg-config.php");
    echo "<p><em>noch keine Fotos vorhanden</em></p>";
	
}

// Saison 2010/2011
else if ($q == "2011/2012") {

include("nggfunctions.php"); 
include("ngg-config.php");

echo nggShowAlbum(23,'');
echo nggShowAlbum(21,'');
echo nggShowAlbum(16,'');



}

?>



