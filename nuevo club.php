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
.x {
	color: #FFF;
}
.col-lg-5 #form1 p {
	color: #FFF;
}
.f {
	color: #FFF;
}
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
        <li><a href="banda de guerra.php">BANDA</a></li>
        <li><a href="danza.php">DANZA</a></li>
        <li><a href="pintura.php">PINTURA</a></li>
        <li><a href="fut-bol.php">FUTBOL</a></li>
        <li><a href="robotica.php">ROBOTICA</a></li>
        <li><a href="basket-ball.php">BASQUET</a></li>
      </ul>
</li>
    <li><a href="alumno/index.php" class="MenuBarItemSubmenu">CONSULTAS</a>
      <ul>
        <li><a href="alumno/index.php">ALUMNO</a></li>
        <li><a href="club/index.php">CLUB</a></li>
        <li><a href="evento/index.php">EVENTOS</a></li>
        <li><a href="docente/index.php">DOCENTE</a></li>
      </ul>
    </li>
    <li><a href="#">NOTIFICACION</a></li>
    <li><a href="salidasprog.php">SALIDAS</a></li>
<li><a href="validar.php">CERRAR </a></li>
  </ul>
  </td> </td> </td> </td> </td> </td>
  </table>
</center>
<div class="col-lg-5"   style="background-color: #C60; height: 35px; width: 1200px; margin-right: auto; margin-left: auto; font-weight: bold; font-style: italic; font-size: 24px; color: #000; font-family: 

'Comic Sans MS', cursive;"><MARQUEE BEHAVIOR=alternate class="L">
  <span style="text-align: left; color: #000;">NUEVO CLUB </span>
</MARQUEE> 
</div>
<div class="col-lg-5"   style="background-color: #FFF; height: 500px; width: 1200px; margin-right: auto; margin-left: auto; color: #000;">

<form id="form1" name="form1" method="post" action="insert_club.php">
<div align="right"></div>

<p>&nbsp;</p>
<table align='left' width='22%' border='3' cellspacing='3' cellpadding='1'>
                <tr>
<th width="19%" bgcolor='#0066FF'>CV_C</th><td width="81%"><input type="number" name="cv" ></td>	
</tr>
<tr>
<th width="19%" bgcolor= "#0066FF">CLUB  </th><td><input type="text" name="clu" ></td> 
</tr>
<tr>
<th width="19%" bgcolor='#0066FF'>RAMA</th><td><input type="text" name ="ram" ></td>
</tr>
<tr>
<th width="19%" bgcolor="#0066FF">DOCENTE</th><td>
<?php
$link = mysql_connect('localhost','root','12345678');
mysql_select_db ('extraescolar', $link) OR die ("No se puede conectar");

$consulta= mysql_query("SELECT *FROM docente " , $link); 

echo '<select name="doc">'; 

while ($row=mysql_fetch_array($consulta))
{echo $row['CEDULAP'].'<option>'.$row['NOMBRE'] ;
}

echo "</select>";

?>
</td>


</tr>







		
	


</tr> 


</table>
<div align="center">
              </p>
  <p>&nbsp;</p>
              <p>&nbsp;</p>
    <p>&nbsp;</p>
                <span class="f">ssxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxd</span><img src="imagen/b_3.jpg" width="287" height="219" alt="k" />
                <p>
                   sssssssssss<span class="x">ssssssssssss</span>ssssssssssssssssssssssssssssssssssssssfhfhhfhfhfhhfsdddddddddddd
<input type="submit" name="guardar " value="GUARDAR DATOS " />
                
    <INPUT TYPE="reset" VALUE="BORRAR DATOS ">              
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>

<center>
  <img src="imagen/Captura.PNG" width="1200" height="75" alt="k" />
</center>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>