
function showCustomer(provincia)
{
var xmlhttp;    

// SI NO HAY VALOR

if (provincia=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }

 // CREA EL OBJETO XML SEGUN EL NAVEGADOR

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

// onreadystatechange

xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText; 
    }
  }
xmlhttp.open("GET","getcustomer.asp?q="+provincia,true);
xmlhttp.send();
}
