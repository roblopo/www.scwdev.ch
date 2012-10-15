<?php 
$q=$_GET["q"];
echo "<div id=\"rangliste_h\">";

// Saison 2012/2013
if ($q == "2012/2013") {
	echo "<p style=\"font-style: italic;\">Saison 2012/13 – 4. Liga – Gruppe 1 (Herbstrunde)</p>";

$datei = "http://www.scwipkingen.ch/05_tabelle/damen_gesamt.txt";
$fp = fopen($datei, "r"); 
if ($fp) { 
	while(!feof($fp)) { 
		$text = fgets($fp); 
		echo"$text"; 
	} 
	fclose($fp); 
}

}
// Saison 2011/2012
elseif ($q == "2011/2012") 
{
	echo "<p style=\"font-style: italic;\">Saison 2011/12 – 3. Liga – Gruppe 2</p>";
	echo "<table width=\"100%\">
<tr>
<td align=\"left\" width=\"20\"></td>
<td nowrap=\"nowrap\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"30\"></td>
<td align=\"right\" width=\"20\"></td>
<td align=\"right\" width=\"20\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"20\"></td>
<td align=\"center\" width=\"10\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"40\"></td>
</tr>
<tr style=\"color:gray;\">
<td align=\"left\" width=\"15\"></td>
<td nowrap=\"nowrap\"></td>
<td align=\"right\" width=\"30\">Sp</td>
<td align=\"right\" width=\"20\">S</td>
<td align=\"right\" width=\"10\">U</td>
<td align=\"right\" width=\"10\">N</td>
<td align=\"right\" width=\"25\">StrP</td>
<td align=\"right\" width=\"20\">T+</td>
<td align=\"center\" width=\"10\"></td>
<td align=\"right\" width=\"10\">T-</td>
<td style=\"font-weight:bold;\" align=\"right\" width=\"25\">P </td>
</tr>
<tr> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"15\">1.</td> 
<td class=\"tableNIStdHLBL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"#\">FC Rüti 1</a></td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"30\">18</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"20\">15</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">1</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">2</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"25\">(7)</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"20\">88</td> 
<td class=\"tableNIStdHLBL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">44</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHLBL\" align=\"right\" width=\"25\">46</td> 
</tr> 
<tr> 
<td class=\"tableNIStd\" align=\"right\" width=\"15\">2.</td> 
<td class=\"tableNIStd\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"#\">FC Freienbach</a></td> 
<td class=\"tableNIStd\" align=\"right\" width=\"30\">18</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">12</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">2</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">4</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"25\">(1)</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">55</td> 
<td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">29</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">38</td> 
</tr> 
<tr> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">3.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"#\">FC Pfäffikon 1</a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\">18</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">10</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">2</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">6</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(7)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">41</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">23</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">32</td> 
</tr> 
<tr> 
<td class=\"tableNIStd\" align=\"right\" width=\"15\">4.</td> 
<td class=\"tableNIStd\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"#\">Team Küsnacht/Zollikon 1</a></td> 
<td class=\"tableNIStd\" align=\"right\" width=\"30\">18</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">8</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">6</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">4</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"25\">(3)</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">40</td> 
<td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">27</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">30</td> 
</tr> 
<tr> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">5.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"#\">Team Egg-Mönchaltorf 1</a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\">18</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">7</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">1</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">10</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(2)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">33</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">49</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">22</td> 
</tr> 
<tr> 
<td class=\"tableNIStd\" align=\"right\" width=\"15\">6.</td> 
<td class=\"tableNIStd\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"#\">Zürisee United 2</a></td> 
<td class=\"tableNIStd\" align=\"right\" width=\"30\">18</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">6</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">4</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">8</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"25\">(12)</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">39</td> 
<td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">48</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">22</td> 
</tr> 
<tr> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">7.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"#\">FC Blue Stars ZH 3</a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\">18</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">6</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">1</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">11</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(11)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">31</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">46</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">19</td> 
</tr> 
<tr> 
<td class=\"tableNIStd\" align=\"right\" width=\"15\">8.</td> 
<td class=\"tableNIStd\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"#\">FC Thalwil 1</a></td> 
<td class=\"tableNIStd\" align=\"right\" width=\"30\">18</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">5</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">3</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">10</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"25\">(2)</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">28</td> 
<td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">39</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">18</td> 
</tr> 
<tr id=\"wipking\"> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">9.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"#\">SC Wipkingen ZH 1</a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\">18</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">5</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">1</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">12</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(16)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">27</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">65</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">16</td> 
</tr> 
<tr> 
<td class=\"tableNISBL\" align=\"right\" width=\"15\">10.</td> 
<td class=\"tableNISBL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"#\">FC Bauma 1</a></td> 
<td class=\"tableNISBL\" align=\"right\" width=\"30\">18</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"20\">4</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"10\">3</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"10\">11</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"25\">(6)</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"20\">32</td> 
<td class=\"tableNISBL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"10\">44</td> 
<td style=\"font-weight:bold;\" class=\"tableNISBL\" align=\"right\" width=\"25\">15</td> 
</tr>
</table>";
}

// Saison 2010/2011
elseif ($q == "2010/2011") 
{
	echo "<p style=\"font-style: italic;\">Saison 2010/11 – 3. Liga – Gruppe 2</p>";
	echo "<table width=\"100%\">
<tr>
<td align=\"left\" width=\"20\"></td>
<td nowrap=\"nowrap\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"30\"></td>
<td align=\"right\" width=\"20\"></td>
<td align=\"right\" width=\"20\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"20\"></td>
<td align=\"center\" width=\"10\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"40\"></td>
</tr>
<tr style=\"color:gray;\">
<td align=\"left\" width=\"15\"></td>
<td nowrap=\"nowrap\"></td>
<td align=\"right\" width=\"30\">Sp</td>
<td align=\"right\" width=\"20\">S</td>
<td align=\"right\" width=\"10\">U</td>
<td align=\"right\" width=\"10\">N</td>
<td align=\"right\" width=\"25\">StrP</td>
<td align=\"right\" width=\"20\">T+</td>
<td align=\"center\" width=\"10\"></td>
<td align=\"right\" width=\"10\">T-</td>
<td style=\"font-weight:bold;\" align=\"right\" width=\"25\">P </td>
</tr>
<tr> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"15\">1.</td> 
<td class=\"tableNIStdHLBL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1573\">FC Blue Stars ZH 2</a></td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"30\">9</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"20\">9</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">0</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">0</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"25\">(1)</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"20\">31</td> 
<td class=\"tableNIStdHLBL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">7</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHLBL\" align=\"right\" width=\"25\">27</td> 
</tr> 
<tr> 
<td class=\"tableNIStd\" align=\"right\" width=\"15\">2.</td> 
<td class=\"tableNIStd\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1489\">Team Küsnacht/Zollikon 1</a></td> 
<td class=\"tableNIStd\" align=\"right\" width=\"30\">9</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">7</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">0</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">2</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"25\">(1)</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">27</td> 
<td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">12</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">21</td> 
</tr> 
<tr> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">3.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1477\">FC Fehraltorf </a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\">9</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">6</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">2</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">1</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(4)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">32</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">5</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">20</td> 
</tr> 
<tr> 
<td class=\"tableNIStd\" align=\"right\" width=\"15\">4.</td> 
<td class=\"tableNIStd\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1496\">FC Pfäffikon 1</a></td> 
<td class=\"tableNIStd\" align=\"right\" width=\"30\">9</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">4</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">2</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">3</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"25\">(1)</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">20</td> 
<td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">13</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">14</td> 
</tr> 
<tr> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">5.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1516\">Zürisee United 2</a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\">9</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">4</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">1</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">4</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(2)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">19</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">29</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">13</td> 
</tr> 
<tr> 
<td class=\"tableNIStd\" align=\"right\" width=\"15\">6.</td> 
<td class=\"tableNIStd\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1507\">FC Thalwil 1</a></td> 
<td class=\"tableNIStd\" align=\"right\" width=\"30\">9</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">3</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">1</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">4</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"25\">(1)</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">11</td> 
<td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">15</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">10</td> 
</tr> 
<tr> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">7.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1462\">FC Affoltern a/A 1b</a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\">9</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">2</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">2</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">5</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(5)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">17</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">31</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">8</td> 
</tr> 
<tr> 
<td class=\"tableNIStd\" align=\"right\" width=\"15\">8.</td> 
<td class=\"tableNIStd\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1534\">FC Schwerzenbach 1</a></td> 
<td class=\"tableNIStd\" align=\"right\" width=\"30\">9</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">2</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">1</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">6</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"25\">(52)</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">17</td> 
<td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">25</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">7</td> 
</tr> 
<tr> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">9.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1471\">FC Egg 1</a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\">9</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">1</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">1</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">6</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(1)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">8</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">23</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">4</td> 
</tr> 
<tr id=\"wipking\"> 
<td class=\"tableNISBL\" align=\"right\" width=\"15\">10.</td> 
<td class=\"tableNISBL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1596\">SC Wipkingen ZH 1</a></td> 
<td class=\"tableNISBL\" align=\"right\" width=\"30\">9</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"20\">0</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"10\">2</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"10\">7</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"25\">(2)</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"20\">11</td> 
<td class=\"tableNISBL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"10\">33</td> 
<td style=\"font-weight:bold;\" class=\"tableNISBL\" align=\"right\" width=\"25\">2</td> 
</tr> 
<tr> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">11.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1588\">FC Schwamendingen 1</a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\"><b>R</b>&nbsp;0</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">0</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">0</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">0</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(0)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">0</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">0</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">0</td> 
</tr> 
</table><br/><br/><br/><br/><br/> ";
echo "<p style=\"font-style: italic;\">Saison 2010/2011 – 4. Liga (Herbstrunde) - Gruppe 3</p>";
echo "<table width=\"100%\">
<tr>
<td align=\"left\" width=\"20\"></td>
<td nowrap=\"nowrap\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"30\"></td>
<td align=\"right\" width=\"20\"></td>
<td align=\"right\" width=\"20\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"20\"></td>
<td align=\"center\" width=\"10\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"40\"></td>
</tr>
<tr style=\"color:gray;\">
<td align=\"left\" width=\"15\"></td>
<td nowrap=\"nowrap\"></td>
<td align=\"right\" width=\"30\">Sp</td>
<td align=\"right\" width=\"20\">S</td>
<td align=\"right\" width=\"10\">U</td>
<td align=\"right\" width=\"10\">N</td>
<td align=\"right\" width=\"25\">StrP</td>
<td align=\"right\" width=\"20\">T+</td>
<td align=\"center\" width=\"10\"></td>
<td align=\"right\" width=\"10\">T-</td>
<td style=\"font-weight:bold;\" align=\"right\" width=\"25\">P </td>
</tr>
<tr id=\"wipking\"> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"15\">1.</td> 
<td class=\"tableNIStdHLBL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1596\">SC Wipkingen ZH 1</a></td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"30\">7</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"20\">7</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">0</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">0</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"25\">(4)</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"20\">34</td> 
<td class=\"tableNIStdHLBL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">5</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHLBL\" align=\"right\" width=\"25\">21</td> 
</tr> 
<tr> 
<td class=\"tableNIStd\" align=\"right\" width=\"15\">2.</td> 
<td class=\"tableNIStd\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1500\">FC Richterswil 2</a></td> 
<td class=\"tableNIStd\" align=\"right\" width=\"30\">7</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">6</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">0</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">1</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"25\">(3)</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">26</td> 
<td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">10</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">18</td> 
</tr> 
<tr> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">3.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1499\">FC Regensdorf/ZH Affoltern 2</a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\">7</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">4</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">1</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">2</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(1)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">21</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">12</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">13</td> 
</tr> 
<tr> 
<td class=\"tableNIStd\" align=\"right\" width=\"15\">4.</td> 
<td class=\"tableNIStd\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=576949\">FC Hausen a/A</a></td> 
<td class=\"tableNIStd\" align=\"right\" width=\"30\">7</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">3</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">2</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">2</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"25\">(0)</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">18</td> 
<td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">17</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">11</td> 
</tr> 
<tr> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">5.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1461\">FC Adliswil </a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\">7</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">3</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">1</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">3</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(0)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">27</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">22</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">10</td> 
</tr> 
<tr> 
<td class=\"tableNIStd\" align=\"right\" width=\"15\">6.</td> 
<td class=\"tableNIStd\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1590\">FFC Südost Zürich 2*</a></td> 
<td class=\"tableNIStd\" align=\"right\" width=\"30\">7</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">2</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">0</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">5</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"25\">(0)</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">6</td> 
<td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">15</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">6</td> 
</tr> 
<tr> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">7.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=613858\">FC Oerlikon/Polizei ZH 2</a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\">7</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">1</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">0</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">6</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(0)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">5</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">26</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">3</td> 
</tr> 
<tr> 
<td class=\"tableNIStd\" align=\"right\" width=\"15\">8.</td> 
<td class=\"tableNIStd\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1505\">FC Kosova</a></td> 
<td class=\"tableNIStd\" align=\"right\" width=\"30\">7</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">0</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">0</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">7</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"25\">(23)</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">6</td> 
<td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">36</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">0</td> 
</tr> 
<tr> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">9.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=822598\">FC Zürich-Nord 2</a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\"><b>R</b>&nbsp;0</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">0</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">0</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">0</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(0)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">0</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">0</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">0</td> 
</tr> 
</table>";

}

// Saison 2009/2010
elseif ($q == "2009/2010") 
{
	echo "<p style=\"font-style: italic;\">Saison 2009/2010 – 3. Liga (Stärkeklasse 2 - Frühjahrsrunde) - Gruppe 2</p>";
	echo "<table width=\"100%\">
<tr>
<td align=\"left\" width=\"20\"></td>
<td nowrap=\"nowrap\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"30\"></td>
<td align=\"right\" width=\"20\"></td>
<td align=\"right\" width=\"20\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"20\"></td>
<td align=\"center\" width=\"10\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"40\"></td>
</tr>
<tr style=\"color:gray;\">
<td align=\"left\" width=\"15\"></td>
<td nowrap=\"nowrap\"></td>
<td align=\"right\" width=\"30\">Sp</td>
<td align=\"right\" width=\"20\">S</td>
<td align=\"right\" width=\"10\">U</td>
<td align=\"right\" width=\"10\">N</td>
<td align=\"right\" width=\"25\">StrP</td>
<td align=\"right\" width=\"20\">T+</td>
<td align=\"center\" width=\"10\"></td>
<td align=\"right\" width=\"10\">T-</td>
<td style=\"font-weight:bold;\" align=\"right\" width=\"25\">P </td>
</tr>
<tr>
		<td class=\"tableNIStdHLBL\" align=\"right\" width=\"15p\">1.</td><td class=\"tableNIStdHLBL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1507\">FC Thalwil 1</a></td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"30p\">9</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"20p\">8</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"10p\">0</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"10p\">1</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"25p\">(0)</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"20p\">54</td><td class=\"tableNIStdHLBL\" align=\"center\" width=\"10p\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"10p\">7</td><td style=\"font-weight:bold;\" class=\"tableNIStdHLBL\" align=\"right\" width=\"25p\">24</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15p\">2.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1514\">FC Wetzikon 1</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30p\">9</td><td class=\"tableNIStd\" align=\"right\" width=\"20p\">8</td><td class=\"tableNIStd\" align=\"right\" width=\"10p\">0</td><td class=\"tableNIStd\" align=\"right\" width=\"10p\">1</td><td class=\"tableNIStd\" align=\"right\" width=\"25p\">(10)</td><td class=\"tableNIStd\" align=\"right\" width=\"20p\">43</td><td class=\"tableNIStd\" align=\"center\" width=\"10p\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10p\">9</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25p\">24</td>
	</tr><tr id=\"wipking\">
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15p\">3.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1596\">SC Wipkingen ZH 1</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30p\">9</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20p\">6</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10p\">1</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10p\">2</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25p\">(0)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20p\">31</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10p\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10p\">9</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25p\">19</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15p\">4.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1461\">FC Adliswil</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30p\">9</td><td class=\"tableNIStd\" align=\"right\" width=\"20p\">4</td><td class=\"tableNIStd\" align=\"right\" width=\"10p\">2</td><td class=\"tableNIStd\" align=\"right\" width=\"10p\">3</td><td class=\"tableNIStd\" align=\"right\" width=\"25p\">(11)</td><td class=\"tableNIStd\" align=\"right\" width=\"20p\">22</td><td class=\"tableNIStd\" align=\"center\" width=\"10p\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10p\">18</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25p\">14</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15p\">5.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1603\">FC Effretikon 1</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30p\">9</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20p\">4</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10p\">1</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10p\">4</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25p\">(2)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20p\">18</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10p\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10p\">26</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25p\">13</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15p\">6.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1505\">FC Kosova</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30p\">9</td><td class=\"tableNIStd\" align=\"right\" width=\"20p\">2</td><td class=\"tableNIStd\" align=\"right\" width=\"10p\">3</td><td class=\"tableNIStd\" align=\"right\" width=\"10p\">4</td><td class=\"tableNIStd\" align=\"right\" width=\"25p\">(22)</td><td class=\"tableNIStd\" align=\"right\" width=\"20p\">15</td><td class=\"tableNIStd\" align=\"center\" width=\"10p\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10p\">45</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25p\">9</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15p\">7.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1482\">FC Hinwil</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30p\">9</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20p\">2</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10p\">2</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10p\">5</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25p\">(2)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20p\">12</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10p\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10p\">24</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25p\">8</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15p\">8.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1480\">FC Glattbrugg </a></td><td class=\"tableNIStd\" align=\"right\" width=\"30p\">9</td><td class=\"tableNIStd\" align=\"right\" width=\"20p\">2</td><td class=\"tableNIStd\" align=\"right\" width=\"10p\">1</td><td class=\"tableNIStd\" align=\"right\" width=\"10p\">6</td><td class=\"tableNIStd\" align=\"right\" width=\"25p\">(11)</td><td class=\"tableNIStd\" align=\"right\" width=\"20p\">10</td><td class=\"tableNIStd\" align=\"center\" width=\"10p\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10p\">32</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25p\">7</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15p\">9.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1492\">FC Männedorf/Oetwil am See</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30p\">9</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20p\">1</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10p\">3</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10p\">5</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25p\">(4)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20p\">10</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10p\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10p\">22</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25p\">6</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15p\">10.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1509\">FC Uster</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30p\">9</td><td class=\"tableNIStd\" align=\"right\" width=\"20p\">1</td><td class=\"tableNIStd\" align=\"right\" width=\"10p\">1</td><td class=\"tableNIStd\" align=\"right\" width=\"10p\">7</td><td class=\"tableNIStd\" align=\"right\" width=\"25p\">(4)</td><td class=\"tableNIStd\" align=\"right\" width=\"20p\">12</td><td class=\"tableNIStd\" align=\"center\" width=\"10p\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10p\">35</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25p\">4</td>
	</tr>

</table><br/><br/><br/><br/><br/> ";
echo "<p style=\"font-style: italic;\">Saison 2010/2011 – 3. Liga (Herbstrunde) - Gruppe 4</p>";
echo "<table width=\"100%\">
<tr>
<td align=\"left\" width=\"20\"></td>
<td nowrap=\"nowrap\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"30\"></td>
<td align=\"right\" width=\"20\"></td>
<td align=\"right\" width=\"20\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"20\"></td>
<td align=\"center\" width=\"10\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"40\"></td>
</tr>
<tr style=\"color:gray;\">
<td align=\"left\" width=\"15\"></td>
<td nowrap=\"nowrap\"></td>
<td align=\"right\" width=\"30\">Sp</td>
<td align=\"right\" width=\"20\">S</td>
<td align=\"right\" width=\"10\">U</td>
<td align=\"right\" width=\"10\">N</td>
<td align=\"right\" width=\"25\">StrP</td>
<td align=\"right\" width=\"20\">T+</td>
<td align=\"center\" width=\"10\"></td>
<td align=\"right\" width=\"10\">T-</td>
<td style=\"font-weight:bold;\" align=\"right\" width=\"25\">P </td>
</tr>
<tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">1.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1635\">FC Einsiedeln 1</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">9</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">7</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">1</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">1</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(1)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">46</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">7</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">22</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">2.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1599\">SC YF Juventus 2</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">9</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">7</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">1</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">1</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(13)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">24</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">9</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">22</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">3.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=822598\">FC Zürich-Nord 1</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">9</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">7</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">0</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">2</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(16)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">35</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">8</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">21</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">4.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1573\">FC Blue Stars ZH 2b</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">9</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">5</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">1</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(0)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">41</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">15</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">16</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">5.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1462\">FC Affoltern a/A 1b</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">9</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">5</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">1</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(0)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">29</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">17</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">16</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">6.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1507\">FC Thalwil 1</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">9</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">5</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">1</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(12)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">30</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">12</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">16</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">7.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1461\">FC Adliswil</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">9</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">2</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">0</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">7</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(16)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">14</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">49</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">6</td>
	</tr><tr id=\"wipking\">
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">8.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1596\">SC Wipkingen ZH 1</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">9</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">0</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">2</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">7</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(0)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">5</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">31</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">2</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">9.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1505\">FC Kosova</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">9</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">0</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">1</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">8</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(8)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">3</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">81</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">1</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">10.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1483\">FC Horgen 1</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\"><b>R</b>&nbsp;9</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">3</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">0</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">6</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(10)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">24</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">22</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">9</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">11.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=613858\">FC Oerlikon/Polizei ZH 2</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\"><b>R</b>&nbsp;0</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">0</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">0</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">0</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(0)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">0</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"10\">0</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">0</td>
	</tr>
</table>";



	
}

// Saison 2008/2009
elseif ($q == "2008/2009") 
{
	echo "<p style=\"font-style: italic;\">Saison 2008/2009 – 3. Liga (Stärkeklasse 2 - Frühjahrsrunde) - Gruppe 2</p>";
	echo "<table width=\"100%\">
<tr>
<td align=\"left\" width=\"20\"></td>
<td nowrap=\"nowrap\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"30\"></td>
<td align=\"right\" width=\"20\"></td>
<td align=\"right\" width=\"20\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"20\"></td>
<td align=\"center\" width=\"10\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"40\"></td>
</tr>
<tr style=\"color:gray;\">
<td align=\"left\" width=\"15\"></td>
<td nowrap=\"nowrap\"></td>
<td align=\"right\" width=\"30\">Sp</td>
<td align=\"right\" width=\"20\">S</td>
<td align=\"right\" width=\"10\">U</td>
<td align=\"right\" width=\"10\">N</td>
<td align=\"right\" width=\"25\">StrP</td>
<td align=\"right\" width=\"20\">T+</td>
<td align=\"center\" width=\"10\"></td>
<td align=\"right\" width=\"10\">T-</td>
<td style=\"font-weight:bold;\" align=\"right\" width=\"25\">P </td>
</tr>
<tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">1.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1635\">FC Einsiedeln 1</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">10</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">7</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">2</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">1</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(1)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">32</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">4</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">23</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">2.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1462\">FC Affoltern a/A 1b</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">10</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">6</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">2</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">2</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(0)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">24</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">7</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">20</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">3.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1507\">FC Thalwil 1</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">10</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">6</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">2</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">2</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(2)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">23</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">10</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">20</td>
	</tr><tr id=\"wipking\">
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">4.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1596\">SC Wipkingen ZH 1</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">10</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">3</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">4</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(1)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">12</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">20</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">12</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">5.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=613858\">FC Oerlikon/Polizei ZH 2</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">10</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">3</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">0</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">7</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(13)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">8</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">28</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">9</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">6.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1461\">FC Adliswil</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">10</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">0</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">1</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">9</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(15)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">7</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">37</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">1</td>
	</tr>
</table><br/><br/><br/><br/><br/> ";
echo "<p style=\"font-style: italic;\">Saison 2008/09 - 3. Liga (Vorrunde) - Gruppe 1</p>";
echo "<table width=\"100%\">
<tr>
<td align=\"left\" width=\"20\"></td>
<td nowrap=\"nowrap\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"30\"></td>
<td align=\"right\" width=\"20\"></td>
<td align=\"right\" width=\"20\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"20\"></td>
<td align=\"center\" width=\"10\"></td>
<td align=\"right\" width=\"40\"></td>
<td align=\"right\" width=\"40\"></td>
</tr>
<tr style=\"color:gray;\">
<td align=\"left\" width=\"15\"></td>
<td nowrap=\"nowrap\"></td>
<td align=\"right\" width=\"30\">Sp</td>
<td align=\"right\" width=\"20\">S</td>
<td align=\"right\" width=\"10\">U</td>
<td align=\"right\" width=\"10\">N</td>
<td align=\"right\" width=\"25\">StrP</td>
<td align=\"right\" width=\"20\">T+</td>
<td align=\"center\" width=\"10\"></td>
<td align=\"right\" width=\"10\">T-</td>
<td style=\"font-weight:bold;\" align=\"right\" width=\"25\">P </td>
</tr>
<tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">1.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1590\">FFC Südost Zürich 1</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">10</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">8</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">2</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">0</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(2)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">49</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">14</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">26</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">2.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1483\">FC Horgen 1</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">10</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">7</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">1</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">2</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(1)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">38</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">12</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">22</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">3.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1573\">FC Blue Stars ZH 2a</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">10</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">6</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">1</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(5)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">25</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">13</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">21</td>
	</tr><tr>
		<td class=\"tableNISBL\" align=\"right\" width=\"15\">4.</td><td class=\"tableNISBL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1599\">SC YF Juventus 2</a></td><td class=\"tableNISBL\" align=\"right\" width=\"30\">10</td><td class=\"tableNISBL\" align=\"right\" width=\"20\">5</td><td class=\"tableNISBL\" align=\"right\" width=\"10\">4</td><td class=\"tableNISBL\" align=\"right\" width=\"10\">1</td><td class=\"tableNISBL\" align=\"right\" width=\"25\">(2)</td><td class=\"tableNISBL\" align=\"right\" width=\"20\">24</td><td class=\"tableNISBL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNISBL\" align=\"right\" width=\"10\">12</td><td style=\"font-weight:bold;\" class=\"tableNISBL\" align=\"right\" width=\"25\">19</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">5.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1635\">FC Einsiedeln 1</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">10</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">5</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">1</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">4</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(1)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">23</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">12</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">16</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">6.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=822598\">FC Zürich-Nord 1</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">10</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">4</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">2</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">4</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(1)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">34</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">35</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">14</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">7.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1507\">FC Thalwil 1</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">10</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">3</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">2</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">5</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(14)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">14</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">18</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">11</td>
	</tr><tr id=\"wipking\">
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">8.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1596\">SC Wipkingen ZH 1</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">10</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">2</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">5</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(2)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">12</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">26</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">9</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">9.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1462\">FC Affoltern a/A 1b</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">10</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">3</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">0</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">7</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(6)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">17</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">24</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">9</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">10.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=613858\">FC Oerlikon/Polizei ZH 2</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">10</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">1</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">6</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(0)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">12</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">32</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">6</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">11.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1461\">FC Adliswil</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">10</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">0</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">1</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">9</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(23)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">10</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">60</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">1</td>
	</tr>
</table>";

}




echo "</div>";
?>