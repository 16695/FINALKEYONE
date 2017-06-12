
<?
//abrimos la sesión
session_start();
 
//Si la variable de sesión esta vacia no es usuario registrado y no permitira ver 
if (!isset($_SESSION['tipo'])) 
{ 
    //nos envía al inicio
    header("location:index.html"); 
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
<!--
body{background: url(Fondos/background-5.jpg) no-repeat center;
     background-size:1350px 1350px
	}
->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script src="includes/ice/ice.js" type="text/javascript"></script>
</head>




<body>
<center>
  <p><img src="imagen/top.png" width="960" height="150" alt="k" /></p>
 
</center>
<div class="col-lg-5"   style="background-color: #C60; height:35px; width:960px; margin-right:auto; margin-left:auto;   "></div>
<div class="col-lg-5"   style="background-color: #FFF; height:500px; width:960px; margin-right:auto; margin-left:auto;   ">

<div align="right">
                <input type="button" value="regresar" onClick="history.back(-1)" />
              </div>

</div>
<center>
<img src="imagen/Captura.PNG" width="957" height="75" alt="j" />
</center>
</body>
</html>