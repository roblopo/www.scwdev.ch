<?php 
$q=$_GET["q"];
echo "<div id=\"rangliste_h\">";

// Saison 2012/2013
if ($q == "2012/2013") {
	echo "<p style=\"font-style: italic;\">Saison 2012/13 – 4. Liga – Gruppe 10</p>";
	
$datei = "http://www.scwipkingen.ch/05_tabelle/herren_gesamt.txt";
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
	echo "<p style=\"font-style: italic;\">Saison 2011/12 – 4. Liga – Gruppe 10</p>";
	
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
<td style=\"font-weight:bold;\"align=\"right\" width=\"25\">P </td>
</tr>
<tr> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"15\">1.</td> 
<td class=\"tableNIStdHLBL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"#\">FC Oberglatt 1</a></td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"20\">17</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">1</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">2</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"25\">(30)</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"20\">78</td> 
<td class=\"tableNIStdHLBL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">19</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHLBL\" align=\"right\" width=\"25\">52</td> 
</tr> 
<tr> 
<td class=\"tableNIStd\" align=\"right\" width=\"15\">2.</td> 
<td class=\"tableNIStd\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"#\">FC Oetwil am See 1a</a></td> 
<td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">14</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">2</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">4</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"25\">(40)</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">102</td> 
<td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">60</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">44</td> 
</tr> 
<tr> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">3.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"#\">FC Schwamendingen 2</a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">12</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">0</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">8</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(42)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">95</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">61</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">36</td> 
</tr> 
<tr id=\"wipking\"> 
<td class=\"tableNIStd\" align=\"right\" width=\"15\">4.</td> 
<td class=\"tableNIStd\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"#\">SC Wipkingen 1</a></td> 
<td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">10</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">4</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">6</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"25\">(37)</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">52</td> 
<td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">41</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">34</td> 
</tr> 
<tr> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">5.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"#\">FC Regensdorf 2a</a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">9</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">6</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">5</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(45)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">64</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">31</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">33</td> 
</tr> 
<tr> 
<td class=\"tableNIStd\" align=\"right\" width=\"15\">6.</td> 
<td class=\"tableNIStd\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"#\">FC Oerlikon/Polizei ZH 3</a></td> 
<td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">10</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">2</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">8</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"25\">(23)</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">50</td> 
<td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">65</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">32</td> 
</tr> 
<tr> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">7.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"#\">FC Oetwil-Geroldswil 2</a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">9</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">3</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">8</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(49)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">47</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">54</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">30</td> 
</tr> 
<tr> 
<td class=\"tableNIStd\" align=\"right\" width=\"15\">8.</td> 
<td class=\"tableNIStd\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"#\">FC Opfikon 2</a></td> 
<td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">5</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">5</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">10</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"25\">(56)</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">37</td> 
<td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">62</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">20</td> 
</tr> 
<tr> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">9.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"#\">BC Albisrieden 2</a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">6</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">0</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">14</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(71)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">29</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">52</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">18</td> 
</tr> 
<tr> 
<td class=\"tableNISBL\" align=\"right\" width=\"15\">10.</td> 
<td class=\"tableNISBL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"#\">FC Volketswil 2</a></td> 
<td class=\"tableNISBL\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"20\">5</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"10\">2</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"10\">13</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"25\">(21)</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"20\">37</td> 
<td class=\"tableNISBL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"10\">51</td> 
<td style=\"font-weight:bold;\" class=\"tableNISBL\" align=\"right\" width=\"25\">17</td> 
</tr> 
<tr> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">11.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"#\">SV Seebach ZH 2</a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">0</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">1</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">19</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(59)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">28</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">123</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">1</td> 
</tr> 
</table> ";
}

// Saison 2010/2011
elseif ($q == "2010/2011") 
{
	echo "<p style=\"font-style: italic;\">Saison 2010/11 – 4. Liga – Gruppe 10</p>";
	
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
<td style=\"font-weight:bold;\"align=\"right\" width=\"25\">P </td>
</tr>
<tr> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"15\">1.</td> 
<td class=\"tableNIStdHLBL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1556\">SC Veltheim 1b</a></td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"20\">17</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">2</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">1</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"25\">(34)</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"20\">69</td> 
<td class=\"tableNIStdHLBL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">12</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHLBL\" align=\"right\" width=\"25\">53</td> 
</tr> 
<tr> 
<td class=\"tableNIStd\" align=\"right\" width=\"15\">2.</td> 
<td class=\"tableNIStd\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1495\">FC Oberglatt 1</a></td> 
<td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">14</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">1</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">5</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"25\">(23)</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">59</td> 
<td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">30</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">43</td> 
</tr> 
<tr> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">3.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1499\">FC Regensdorf 2a</a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">12</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">0</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">8</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(46)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">45</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">43</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">36</td> 
</tr> 
<tr> 
<td class=\"tableNIStd\" align=\"right\" width=\"15\">4.</td> 
<td class=\"tableNIStd\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1529\">FC Oetwil am See 1a</a></td> 
<td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">11</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">3</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">6</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"25\">(66)</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">64</td> 
<td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">40</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">36</td> 
</tr> 
<tr> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">5.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1589\">SV Seebach ZH 1b</a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">11</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">1</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">8</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(61)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">47</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">41</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">34</td> 
</tr> 
<tr> 
<td class=\"tableNIStd\" align=\"right\" width=\"15\">6.</td> 
<td class=\"tableNIStd\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1588\">FC Schwamendingen 2</a></td> 
<td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">10</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">2</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">8</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"25\">(85)</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">53</td> 
<td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">41</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">32</td> 
</tr> 
<tr> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">7.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1512\">FC Wallisellen 2</a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">8</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">3</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">9</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(37)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">47</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">49</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">27</td> 
</tr> 
<tr> 
<td class=\"tableNIStd\" align=\"right\" width=\"15\">8.</td> 
<td class=\"tableNIStd\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=577174\">BC Albisrieden 2a</a></td> 
<td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">6</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">1</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">13</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"25\">(57)</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"20\">27</td> 
<td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStd\" align=\"right\" width=\"10\">52</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">19</td> 
</tr> 
<tr id=\"wipking\"> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">9.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1596\">SC Wipkingen ZH</a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">5</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">3</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">12</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(34)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">41</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">57</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">18</td> 
</tr> 
<tr> 
<td class=\"tableNISBL\" align=\"right\" width=\"15\">10.</td> 
<td class=\"tableNISBL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1532\">FC Volketswil 2</a></td> 
<td class=\"tableNISBL\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"20\">6</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"10\">0</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"10\">14</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"25\">(38)</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"20\">29</td> 
<td class=\"tableNISBL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNISBL\" align=\"right\" width=\"10\">57</td> 
<td style=\"font-weight:bold;\" class=\"tableNISBL\" align=\"right\" width=\"25\">18</td> 
</tr> 
<tr> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">11.</td> 
<td class=\"tableNIStdHL\" nowrap=\"nowrap\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=543801\">FC Besiktas Zürich 1</a></td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">2</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">0</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">18</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(116)</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"20\">21</td> 
<td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td> 
<td class=\"tableNIStdHL\" align=\"right\" width=\"10\">80</td> 
<td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">6</td> 
</tr> 
</table> ";
}

// Saison 2009/2010
elseif ($q == "2009/2010") 
{
	echo "<p style=\"font-style: italic;\">Saison 2009/2010 – 4. Liga – Gruppe 3</p>";
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
<td style=\"font-weight:bold;\"align=\"right\" width=\"25\">P </td>
</tr>
<tr>
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">1.</td>
<td class=\"tableNIStdHLBL\" style=\"white-space:nowrap;\"><a href=\"/fvrz/de/verein.aspx?v=1570\">FC Altstetten ZH 1b</a></td>
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"30\">20</td>
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"20\">17</td>
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">3</td>
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">0</td>
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"25\">(35)</td>
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"20\">72</td>
<td class=\"tableNIStdHLBL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td>
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">19</td>
<td class=\"tableNIStdHLBL\" align=\"right\" width=\"25\">54</td>
</tr>
<tr>
<td class=\"tableNIStd\" align=\"right\" width=\"15\">2.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1631\">FC Morava 1</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">17</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">1</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">2</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(62)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">70</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">32</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">52</td>
</tr>
<tr>
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">3.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1615\">AC Verona Club Zurigo 1</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">12</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">5</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(58)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">44</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">31</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">39</td>
</tr>
<tr>
<td class=\"tableNIStd\" align=\"right\" width=\"15\">4.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=543802\">FC Bosna Zürich 1</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">9</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">4</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">7</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(72)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">56</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">43</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">31</td>
</tr>
<tr>
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">5.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1604\">FC Italo Stauffacher 1</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">8</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">9</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(69)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">47</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">37</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">27</td>
</tr>
<tr>
<td class=\"tableNIStd\" align=\"right\" width=\"15\">6.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1504\">FC Schlieren 2</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">7</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">10</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(62)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">57</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">58</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">24</td>
</tr>
<tr>
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">7.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=478852\">CD Espanol Iberia 2</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">7</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">2</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">11</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(47)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">49</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">57</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">23</td>
</tr>
<tr>
<td class=\"tableNIStd\" align=\"right\" width=\"15\">8.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=478031\">FC Trinacria 1</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">7</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">2</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">11</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(68)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">48</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">57</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">23</td>
</tr>
<tr id=\"wipking\">
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">9.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1596\">SC Wipkingen ZH</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">6</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">4</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">10</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(36)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">42</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">44</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">22</td>
</tr>
<tr>
<td class=\"tableNISBL\" align=\"right\" width=\"15\">10.</td><td class=\"tableNISBL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1626\">FC Hellas 1</a></td><td class=\"tableNISBL\" align=\"right\" width=\"30\">20</td><td class=\"tableNISBL\" align=\"right\" width=\"20\">5</td><td class=\"tableNISBL\" align=\"right\" width=\"10\">2</td><td class=\"tableNISBL\" align=\"right\" width=\"10\">13</td><td class=\"tableNISBL\" align=\"right\" width=\"25\">(128)</td><td class=\"tableNISBL\" align=\"right\" width=\"20\">32</td><td class=\"tableNISBL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNISBL\" align=\"right\" width=\"10\">63</td><td style=\"font-weight:bold;\" class=\"tableNISBL\" align=\"right\" width=\"25\">17</td>
</tr>
<tr>
<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">11.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1632\">F.C. Stade Marocain 1</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">1</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">1</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">18</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(144)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">24</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">100</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">4</td>
</tr>
</table>
";

	
}

// Saison 2008/2009
elseif ($q == "2008/2009") 
{
	echo "<p style=\"font-style: italic;\">Saison 2008/2009 – 4. Liga – Gruppe 3</p>";
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
<td style=\"font-weight:bold;\"align=\"right\" width=\"25\">P </td>
</tr>
<tr>
		<td class=\"tableNIStdHLBL\" align=\"right\" width=\"15\">1.</td><td class=\"tableNIStdHLBL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1568\">FC Zürich-Affoltern 2</a></td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"20\">16</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">1</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"25\">(29)</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"20\">67</td><td class=\"tableNIStdHLBL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">14</td><td style=\"font-weight:bold;\" class=\"tableNIStdHLBL\" align=\"right\" width=\"25\">51</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">2.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1631\">FC Morava 1</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">13</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">4</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(75)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">72</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">34</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">42</td>
	</tr><tr id=\"wipking\">
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">3.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1596\">SC Wipkingen ZH</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">10</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">5</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">5</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(37)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">46</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">33</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">35</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">4.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=478852\">CD Espanol Iberia 1</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">10</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">7</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(79)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">51</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">37</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">33</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">5.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1570\">FC Altstetten ZH 1b</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">8</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">9</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(51)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">55</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">56</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">27</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">6.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1504\">FC Schlieren 2</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">7</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">4</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">9</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(46)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">39</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">46</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">25</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">7.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1604\">FC Italo Stauffacher 1</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">7</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">10</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(33)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">37</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">54</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">24</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">8.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=543802\">FC Bosna Zürich 1</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">6</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">11</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(51)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">43</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">62</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">21</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">9.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1615\">AC Verona Club Zurigo 1</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">4</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">8</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">8</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(84)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">29</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">38</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">20</td>
	</tr><tr>
		<td class=\"tableNISBL\" align=\"right\" width=\"15\">10.</td><td class=\"tableNISBL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=478031\">FC Trinacria 1</a></td><td class=\"tableNISBL\" align=\"right\" width=\"30\">20</td><td class=\"tableNISBL\" align=\"right\" width=\"20\">4</td><td class=\"tableNISBL\" align=\"right\" width=\"10\">7</td><td class=\"tableNISBL\" align=\"right\" width=\"10\">9</td><td class=\"tableNISBL\" align=\"right\" width=\"25\">(52)</td><td class=\"tableNISBL\" align=\"right\" width=\"20\">35</td><td class=\"tableNISBL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNISBL\" align=\"right\" width=\"10\">58</td><td style=\"font-weight:bold;\" class=\"tableNISBL\" align=\"right\" width=\"25\">19</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">11.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=653433\">FC Mezopotamya 1</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">3</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">2</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">15</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(32)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">35</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">77</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">11</td>
	</tr>

</table>";
}

// Saison 2007/2008
elseif ($q == "2007/2008") 
{
	echo "<p style=\"font-style: italic;\">Saison 2007/2008 – 4. Liga – Gruppe 2</p>";
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
		<td class=\"tableNIStdHLBL\" align=\"right\" width=\"15\">1.</td><td class=\"tableNIStdHLBL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1632\">F.C. Stade Marocain 1</a></td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"20\">17</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">2</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">1</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"25\">(73)</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"20\">64</td><td class=\"tableNIStdHLBL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">26</td><td style=\"font-weight:bold;\" class=\"tableNIStdHLBL\" align=\"right\" width=\"25\">53</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">2.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=543802\">FC Bosna Zürich 1</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">16</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">1</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(69)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">66</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">30</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">51</td>
	</tr><tr id=\"wipking\">
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">3.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1596\">SC Wipkingen ZH</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">9</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">8</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(35)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">45</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">29</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">30</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">4.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1504\">FC Schlieren 2</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">8</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">9</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(125)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">54</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">50</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">27</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">5.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1570\">FC Altstetten ZH 2</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">8</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">2</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">10</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(46)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">60</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">57</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">26</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">6.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1616\">FC Srbija ZH 2</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">7</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">10</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(63)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">42</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">62</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">24</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">7.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1615\">AC Verona Club Zurigo 1</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">7</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">2</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">11</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(29)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">36</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">44</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">23</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">8.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1883\">AC Palermo 1</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">6</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">5</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">9</td><td class=\"tableNIStd\" align=\"right\" width=\"25\">(63)</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">41</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">48</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">23</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">9.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1604\">FC Italo Stauffacher 1</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">6</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">4</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">10</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(51)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">38</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">52</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">22</td>
	</tr><tr>
		<td class=\"tableNISBL\" align=\"right\" width=\"15\">10.</td><td class=\"tableNISBL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1568\">FC Zürich-Affoltern 2</a></td><td class=\"tableNISBL\" align=\"right\" width=\"30\">20</td><td class=\"tableNISBL\" align=\"right\" width=\"20\">6</td><td class=\"tableNISBL\" align=\"right\" width=\"10\">2</td><td class=\"tableNISBL\" align=\"right\" width=\"10\">12</td><td class=\"tableNISBL\" align=\"right\" width=\"25\">(101)</td><td class=\"tableNISBL\" align=\"right\" width=\"20\">52</td><td class=\"tableNISBL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNISBL\" align=\"right\" width=\"10\">75</td><td style=\"font-weight:bold;\" class=\"tableNISBL\" align=\"right\" width=\"25\">20</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">11.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=478845\">FC Ergenekon 2b</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">4</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">13</td><td class=\"tableNIStdHL\" align=\"right\" width=\"25\">(105)</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">35</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">60</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">15</td>
	</tr>

</table>";
}

// Saison 2006/2007
elseif ($q == "2006/2007") 
{
	echo "<p style=\"font-style: italic;\">Saison 2006/2007 – 4. Liga – Gruppe 5</p>";
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
<td align=\"right\" width=\"25\"></td>
<td align=\"right\" width=\"20\">T+</td>
<td align=\"center\" width=\"10\"></td>
<td align=\"right\" width=\"10\">T-</td>
<td style=\"font-weight:bold;\" align=\"right\" width=\"25\">P </td>
</tr>
<tr>
		<td class=\"tableNIStdHLBL\" align=\"right\" width=\"15\">1.</td><td class=\"tableNIStdHLBL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1470\">FC Dübendorf 1</a></td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"20\">19</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">0</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">1</td><td/><td class=\"tableNIStdHLBL\" align=\"right\" width=\"20\">96</td><td class=\"tableNIStdHLBL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHLBL\" align=\"right\" width=\"10\">15</td><td style=\"font-weight:bold;\" class=\"tableNIStdHLBL\" align=\"right\" width=\"25\">57</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">2.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=514432\">FC Republika Srpska 1</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">16</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">1</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">3</td><td/><td class=\"tableNIStd\" align=\"right\" width=\"20\">82</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">30</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">49</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">3.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1485\">FC Kempttal 1</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">14</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">0</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">6</td><td/><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">68</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">38</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">42</td>
	</tr><tr id=\"wipking\">
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">4.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1596\">SC Wipkingen ZH</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">9</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">4</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">7</td><td/><td class=\"tableNIStd\" align=\"right\" width=\"20\">41</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">49</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">31</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">5.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=691581\">FK Crvena Zvezda 1</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">7</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">10</td><td/><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">42</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">56</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">24</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">6.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1603\">FC Effretikon 2</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">6</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">5</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">9</td><td/><td class=\"tableNIStd\" align=\"right\" width=\"20\">41</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">61</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">23</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">7.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1522\">FC Cosenza U.D. 1</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">5</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">7</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">8</td><td/><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">43</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">53</td><td style=\"font-weight:bold;\" style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">22</td>
	</tr><tr>
		<td class=\"tableNIStd\" align=\"right\" width=\"15\">8.</td><td class=\"tableNIStd\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1532\">FC Volketswil 2</a></td><td class=\"tableNIStd\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStd\" align=\"right\" width=\"20\">5</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">5</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">10</td><td/><td class=\"tableNIStd\" align=\"right\" width=\"20\">45</td><td class=\"tableNIStd\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStd\" align=\"right\" width=\"10\">71</td><td style=\"font-weight:bold;\" class=\"tableNIStd\" align=\"right\" width=\"25\">20</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">9.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1499\">FC Regensdorf 2b</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">5</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">4</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">11</td><td/><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">38</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">60</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">19</td>
	</tr><tr>
		<td class=\"tableNISBL\" align=\"right\" width=\"15\">10.</td><td class=\"tableNISBL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=1528\">FC Bassersdorf 2</a></td><td class=\"tableNISBL\" align=\"right\" width=\"30\">20</td><td class=\"tableNISBL\" align=\"right\" width=\"20\">4</td><td class=\"tableNISBL\" align=\"right\" width=\"10\">6</td><td class=\"tableNISBL\" align=\"right\" width=\"10\">10</td><td/><td class=\"tableNISBL\" align=\"right\" width=\"20\">47</td><td class=\"tableNISBL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNISBL\" align=\"right\" width=\"10\">62</td><td style=\"font-weight:bold;\" class=\"tableNISBL\" align=\"right\" width=\"25\">18</td>
	</tr><tr>
		<td class=\"tableNIStdHL\" align=\"right\" width=\"15\">11.</td><td class=\"tableNIStdHL\" style=\"white-space:nowrap;\"><a target=\"_blank\" href=\"http://www.football.ch/fvrz/de/verein.aspx?v=577183\">FC Libanon 1</a></td><td class=\"tableNIStdHL\" align=\"right\" width=\"30\">20</td><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">1</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">3</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">16</td><td/><td class=\"tableNIStdHL\" align=\"right\" width=\"20\">34</td><td class=\"tableNIStdHL\" align=\"center\" width=\"10\">&nbsp;:&nbsp;</td><td class=\"tableNIStdHL\" align=\"right\" width=\"10\">82</td><td style=\"font-weight:bold;\" class=\"tableNIStdHL\" align=\"right\" width=\"25\">6</td>
	</tr>

</table>
";
}



echo "</div>";
?>