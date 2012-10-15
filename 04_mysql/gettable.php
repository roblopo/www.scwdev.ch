<?php

$tabelle=$_GET["q1"];


$db = "db2438004"; 

$link=mysql_connect("mysql03.nexlink.ch", "user24380","scw8037");

@ mysql_select_db($db) or die("Could not connect to the desired database."); 

mysql_set_charset('UTF8',$link);

     
$query = "SELECT begegnung FROM $tabelle where saison = '2012/2013' order by spieldatum";


$result = mysql_query($query) or die(mysql_error()); 


?>
   <form name="input" action="xxx.php" method="post"> 

     
            <select name="users" onChange="showGame(this.value)"> 
            <option value="">Select game:</option>
            <!-- Drop down --> 
            <?php 
            while($row = mysql_fetch_array($result)){ 
            echo '<option value="'.$tabelle.'@'.$row['begegnung']. '">'. $row['begegnung']. '</option>'  ; 
            } 
            ?> 
 </select> </p> 
        </form>


