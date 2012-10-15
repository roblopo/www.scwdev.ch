function showSaison_fotos_herren(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");alert("4");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  
//xmlhttp.open("GET","/04_mysql/fotos_herren.php?q="+str,true);
xmlhttp.open("GET","/wp-content/plugins/nextgen-gallery/fotos_herren.php?q="+str,true);
xmlhttp.send();
}