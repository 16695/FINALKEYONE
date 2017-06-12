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
.FGDF {
	color: #FFF;
}
.RE {
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
    <li><a href="registro alumno.php">ALUMNO</a>      </li>
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
    <li><a href="#" class="MenuBarItemSubmenu">CONSULTAS</a>
      <ul>
        <li><a href="alumno/index.php">ALUMNO</a></li>
        <li><a href="club/index.php">CLUB</a></li>
        <li><a href="evento/index.php">EVENTOS</a></li>
        <li><a href="evento/index.php">DOCENTE</a></li>
      </ul>
    </li>
    <li><a href="#">NOTIFICACION</a></li>
    <li><a href="salidasprog.php">SALIDAS</a></li>
    <li><a href="validar.php">CERRAR </a></li>
  </ul>
  </td> </td> </td> </td> </td> </td>
  </table>
</center>

<div class="col-lg-5"   style="background-color: #C60; height: 35px; width: 1200px; margin-right: auto; margin-left: auto; font-size: 24px; font-weight: bold; font-style: italic; color: #333; font-family: 'Comic Sans MS', cursive;"><MARQUEE BEHAVIOR=alternate class="L">
  <span style="text-align: left; color: #000;">NUEVO ALUMNO </span>
</MARQUEE> 
</div>
<div class="col-lg-5"   style="background-color: #FFF; height:500px; width:1200px; margin-right:auto; margin-left:auto;   ">



<form id="form1" name="form1" method="post" action="insert.php">
              

              <center>
              <p>&nbsp;</p>
              <table width='22%' height="257" border='3' align='left' cellpadding='1' cellspacing='5'>
                <tr>
<th width="11%" bgcolor="#0066FF">NUM DE CONTROL</th><td><input type="number" name="num" ></td>
</tr>
<tr>
<th width="11%" bgcolor= "#0066FF">NOMBRE</th><td><input type="text" name="nombre" ></td>
</tr> 
<tr>
<th width="11%" bgcolor='#0066FF'>APELLIDOS </th><td><input type="text" name ="ape" ></td>
</tr>
<tr>
<th width="11%" bgcolor="#0066FF">EMAIL </th><td><input type="text" name="mail" id="mail" ></td>
</tr>
<tr>
<th width="11%" bgcolor="#0066FF">SEMESTRE</th><td><input type="text" name="sem" ></td>
</tr>
<tr>
<th width="11%" bgcolor="#0066FF">GENERO</th><td><input type="text" name="gen" ></td>
</tr>
<tr>
<th width="11%" bgcolor="#0066FF">CLUB</th>

<td>
<?php
$link = mysql_connect('localhost','root','12345678');
mysql_select_db ('extraescolar', $link) OR die ("No se puede conectar");

$consulta= mysql_query("SELECT *FROM club " , $link); 

echo '<select name="club">'; 

while ($row=mysql_fetch_array($consulta))
{echo '<option>'.$row['CLUB'] ;
}

echo "</select>";

?>
</td>
</tr>

</table>
    <center>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p><img src="imagen/usuarioRegistradoIcon.png" width="200" height="200" alt="g" /></p>
    </center>
    <p>    
    <p>
    <p>
    <p>.<span class="FGDF">.<span class="RE">XCXVCVXCVXCVXCVXCVXCVVVSDFSD</span></span>
      <input type="submit" name="guardar " value="GUARDAR DATOS " />
                
                <INPUT TYPE="reset" VALUE="BORRAR DATOS ">
                
  </form>	  
        </form>
</center>
</div>
<center>
<img src="imagen/Captura.PNG" width="1200" height="75" alt="j" />
</center>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>