﻿<?
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
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>




<body>

<center>
  <p><img src="imagen/top.png" width="1200" height="150" alt="k" /></p>
  <table>
  <td><td><td><td><td><td>
  <td align="center">
  <ul id="MenuBar1" class="MenuBarHorizontal">
    <li><a href="menuadmin.php">INICIO</a></li>
    <li><a href="registro alumno.php">ALUMNO</a></li>
    <li><a href="nuevo club.php">CLUB</a></li>
    <li><a href="nuevo event.php">EVENTOS</a></li>
    <li><a href="nuevo docente.php">DOCENTE</a></li>
    <li><a href="#" class="MenuBarItemSubmenu">INFORMACION CLUBS</a>
      <ul>
        <li><a href="banda de guerra.php">BANDA </a></li>
        <li><a href="danza.php">DANZA</a></li>
        <li><a href="pintura.php">PINTURA</a></li>
        <li><a href="fut-bol.php">FUTBOL</a></li>
        <li><a href="robotica.php">ROBOTICA</a></li>
        <li><a href="basket-ball.php">BASQUET</a></li>
      </ul>
</li>
    <li><a href="#" class="MenuBarItemSubmenu">CONSULTAS</a>
      <ul>
        <li><a href="alumno/index.php">ALUMNO</a></li>
        <li><a href="club/index.php">CLUB</a></li>
        <li><a href="evento/index.php">EVENTOS</a></li>
        <li><a href="docente/index.php">DOCENTE</a></li>
      </ul>
    </li>
    <li><a href="#">NOTIFICACION</a></li>
    <li><a href="salidasprog.php">SALIDAS</a></li>
    <li><a href="validar.php">CERRAR</a></li>
</ul>
  </td> </td> </td> </td> </td> </td>
  </table>
</center>
<div class="col-lg-5"   style="background-color: #C60; height:35px; width:1200px; margin-right:auto; margin-left:auto;   "></div>
<div class="col-lg-5"   style="background-color: #FFF; height:500px; width:1200px; margin-right:auto; margin-left:auto;   ">

<div align="right"></div>

</div>
<center>
<img src="imagen/Captura.PNG" width="1200" height="75" alt="j" />
</center>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>