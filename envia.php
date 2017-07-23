<html> 
<head> 
<script>
	var xmlhttp;
function load(str, url, cfunc)
{

if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp.onreadystatechange=cfunc;
	xmlhttp.open("POST",url,true); // AQUÍ LE DECIMOS QUE VAMOS A ENVIAR LOS DATOS POR POST
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send(str);
}

function metodoAjax(datos, ruta) //METODO AJAX QUE RECIBE 2 PARAMETROS, LOS DATOS A ENVIAR Y EL ARCHIVO QUE LOS RECIBE
{

 load(datos, ruta, function()
 { 
   if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	document.getElementById("cuerpo").innerHTML=xmlhttp.responseText; //MOSTRAMOS LOS DATOS EN EL DIV CON ID CUERPO
    }
 });
}
//------------------------------------------------------------------
function recibe(){		//FUNCION QUE SE EJECUTA CUANDO PRESIONAMOS EL BOTON ENVIAR
		var dato = document.getElementById('datos').value;//OBTENEMOS LOS DATOS DEL CAMPO DE TEXTO
		metodoAjax("valor="+dato+"&valor2=hola","recibe.php"); //EJECUTAMOS EL METODO AJAX Y LE PSASMOS LOS DATOS, Y LE DECIMOS QUE ARCHIVO ES EL QUE RECIBE LOS DATOS		
	}
</script>
</head> 
<body style="font-family:Verdana, Geneva, sans-serif; font-size:24px; text-align:center;"> 
<form method="post"> 
<fieldset style="width:60%;">
<h2>Enviar datos por post a un archivo. AJAX - PHP - Javascript - HTML</h2>
<input type="text" id="datos" size="45" name="datos" > 
<input type="button" onClick="recibe();" value="Enviar Datos" > 
<div id="cuerpo"></div> 
<div style="color:#039;">
<h3>Visita: http://codigoweblibre.tk</h3>
<h3>Canal en youtube: codigoweblibre</h3>
</div>
</fieldset>
</form> 
</body> 
</html> 