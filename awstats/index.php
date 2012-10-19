<?php

/**
* @copyright NexLink SA
* @url 		 www.nexlink.ch
* @date 	 01.05.2006
*/

$year = strip_tags($_GET["year"]);
$month = strip_tags($_GET["month"]);
$domain = str_replace("www.", "", $_SERVER["HTTP_HOST"]);

if(!$year || !$month || !$domain){	
	if(date("d") == "01"){
		list($year_red, $month_red, $day_red) = explode("-", date("Y-m-d", mktime(0, 0, 0, date("m"), date("d")-1, date("Y"))));
		header('location: index.php?year='.$year_red.'&month='.$month_red);
		exit;
	}	
	else{
		header('location: index.php?year='.date("Y").'&month='.date("m"));
		exit;
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Statistics - <?php echo $domain ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<frameset>
    <frameset cols="15%,*">
      <frame src="/awstats/awstats_nav.php?year=<?php echo $year ?>&month=<?php echo $month ?>" name="menu">
      <frame src="/awstats/<?php echo $year ?>/<?php echo $month ?>/awstats.<?php echo $domain ?>.html" name="stats">
   </frameset>
<noframes>NOFRAMES</noframes>
</frameset>
</head>
<body>
</body>
</html>