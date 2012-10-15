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
    echo nggShowAlbum(24,'');
	
}

// Saison 2011/2012
else if ($q == "2011/2012") {

include("nggfunctions.php"); 
include("ngg-config.php");

echo nggShowAlbum(20,'');
echo nggShowAlbum(19,'');
echo nggShowAlbum(18,'');
echo nggShowAlbum(17,'');
echo nggShowAlbum(15,'');




}


// Saison 2010/2011
else if ($q == "2010/2011") {

include("nggfunctions.php"); 
include("ngg-config.php");

echo nggShowAlbum(14,'');
echo nggShowAlbum(13,'');
echo nggShowAlbum(12,'');
echo nggShowAlbum(11,'');
echo nggShowAlbum(9,'');
echo nggShowAlbum(8,'');
echo nggShowAlbum(7,'');
echo nggShowAlbum(6,'');
echo nggShowAlbum(5,'');




}

?>



