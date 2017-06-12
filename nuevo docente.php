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
.t {
	color: #FFF;
}
.col-lg-5 #form1 p {
	color: #FFF;
}
.I {
	font-size: 24px;
}
.I {
	font-family: "Comic Sans MS", cursive;
}
.VFD {
	font-weight: bold;
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
        <li><a href="fut-bol.php">FUT BOL</a></li>
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
</ul>
  </td> </td> </td> </td> </td> </td>
  </table>
</center>
<div class="I"   style="background-color: #C60; height: 35px; width: 1200px; margin-right: auto; margin-left: auto; color: #000; font-family: 'Comic Sans MS', cursive;"><MARQUEE BEHAVIOR=alternate class="L">
  <span class="VFD" style="text-align: left; color: #000; font-family: 'Comic Sans MS', cursive; font-style: italic;">NUEVO DOCENTE</span><span class="VFD" style="text-align: left; color: #000;"></span> 
  </MARQUEE> 
</div>
<div class="col-lg-5"   style="background-color: #FFF; height:500px; width:1200px; margin-right:auto; margin-left:auto;   ">
<form id="form1" name="form1" method="post" action="insert_docente.php">
<div align="right"></div>
    <p>&nbsp;</p>
    <table width='21%' height="168" border='3' align='left' cellpadding='1' cellspacing='3'>
                <tr>
<th width="13%" bgcolor='#0066FF'>CEDULA</th><td width="87%"><input type="text" name="ced" ></td>	
</tr>
<tr>
<th width="13%" bgcolor= "#0066FF">NOMBRE  </th><td><input type="text" name="nombr" ></td> 
</tr>
<tr>
<th width="13%" bgcolor='#0066FF'>APELLIDOS </th><td><input type="text" name ="apel" ></td>
</tr>
<tr>
<th width="13%" bgcolor="#0066FF">EMAIL</th><td><input type="text" name="maiil" ></td>
</tr>
<tr>
<th width="13%" bgcolor="#0066FF">TELEFONO</th><td><input type="number" name="telf" ></td>
</tr>
<tr>
<th width="13%" bgcolor="#0066FF">DOMICILIO</th><td><input type="text" name="dom" ></td>

</tr>
<tr>



	


	


</tr> 


</table>         
              
    <div align="center">
              </p>
    <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>.dscsdcsdcsdsdcsdcdfsdfsdfsdfsdfsdfsdfs<img src="imagen/images.jpg" width="204" height="204" alt="u" /></p>
              <p>&nbsp;</p>
              <p>
                .<span class="t">dfsdfsdfsdfsdfsdfsdfsdfsfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdsdsdfsddfsdfsdfsdfsdfsdfsdfsdf</span>
                <input type="submit" name="guardar " value="GUARDAR DATOS " />
                
      <INPUT TYPE="reset" VALUE="BORRAR DATOS ">
  </form>

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