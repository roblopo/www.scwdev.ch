<?php 
$q=$_GET["q"];
echo "<table border-bottom-style:solid >
  <tr>
    <td style=\"font-weight:bold\" width=\"30\"></td>
    <td style=\"font-weight:bold\" width=\"150\">Spieler</td>
    <td style=\"font-weight:bold\" width=\"70\">Tore</td>
  </tr>";









// Saison 2011/2012
if ($q == "2011/2012") {
	echo "<tr>
    <td>1.</td>
    <td>Alessio Donno</td>
    <td>11 Tore</td>
   </tr>
<tr>
    <td>2.</td>
    <td>Pascal Wirz</td>
    <td>9 Tore</td>
   </tr>
<tr>
    <td>3. </td>
    <td>Claudio Henseler</td>
    <td>8 Tore</td>
    </tr>
<tr>
<td>4. </td>
 <td>Luigi Fortunato</td>
    <td>7 Tore</td>
      </tr>
 <td>5.</td>
 <td>Paolo Di Giorgi</td>
    <td>6 Tore</td>
      </tr>
<tr>
    <td>6.</td>
    <td>Samuel Währy</td>
    <td>3 Tore</td>
     </tr>
<tr>
    <td></td>
    <td>Gianni Maraia</td>
    <td>3 Tore</td>
     </tr>
<tr>
<tr>
    <td>8.</td>
    <td>Marc Caduff</td>
    <td>2 Tore</td>
     </tr>
<tr>
    <td>9.</td>
    <td>David Gubelmann</td>
    <td>1 Tor</td>
     </tr>
<tr>
    <td></td>
    <td>Oliver Friedli</td>
    <td>1 Tor</td>
     </tr>
<tr>
    <td></td>
    <td>Muhamed Kamberi</td>
    <td>1 Tor</td>
     </tr>";

}

// Saison 2012/2013
elseif ($q == "2012/2013") 
{
	
	
}




echo "</table>";
?>