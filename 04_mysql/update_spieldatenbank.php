<html> 
<head> 
    <title>Update Spieldatenbank</title>     
    
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />


<script type="text/javascript">
function showTable(str1)
{
if (str1=="")
  {
  document.getElementById("txtTable").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtTable").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","gettable.php?q1="+str1,true);
xmlhttp.send();
}


function showGame(str2)
{
if (str2=="")
  {
  document.getElementById("txtGame").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtGame").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getgame.php?q2="+str2,true);
xmlhttp.send();
}
</script>

        
    
    
    
</head> 

<body style="font-family: verdana; font-size: 11px;"> 

    <h2>Update Spieldatenbank</h2> 
    

<form>
<select name="users" onChange="showTable(this.value)">
<option value="">Select table:</option>
<option value="SPIELPLAN_HERREN">Spielplan Herren</option>
<option value="SPIELPLAN_DAMEN">Spielplan Damen</option>
</select>
</form>
<div id="txtTable"></div>

<div id="txtGame"></div>

</body>
</html>


</body> 
</html>