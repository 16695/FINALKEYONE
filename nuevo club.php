<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script src="includes/ice/ice.js" type="text/javascript"></script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>




<body background="imagen/240_F_70655085_kAsIx4P17hhaD1aYyg9C13L0Q95ml0NM.jpg">
<center>
  <p><img src="imagen/top.png" width="1200" height="150" alt="k" /></p>
  <table>
  
  <td><td><td><td><td><td>
  <td align="center">
  <ul id="MenuBar1" class="MenuBarHorizontal">
    <li><a href="menuadmin.php">INICIO</a></li>
    <li><a href="#" class="MenuBarItemSubmenu">REGISTRO</a>
      <ul>
        <li><a href="#" class="MenuBarItemSubmenu">NUEVO</a>
          <ul>
            <li><a href="#">ALUMNO</a></li>
            <li><a href="#">CLUB</a></li>
            <li><a href="#">EVENTO</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#" class="MenuBarItemSubmenu">CLUBS</a>
      <ul>
        <li><a href="#">BANDA</a></li>
        <li><a href="#">DANZA</a></li>
        <li><a href="#">PINTURA</a></li>
        <li><a href="#">ROBOTICA</a></li>
        <li><a href="#">FUTBOL</a></li>
      </ul>
    </li>
    <li><a href="#">BUSQUEDA </a></li>
    <li><a href="#">NOTIFICACION</a></li>
    <li><a href="#">SALIDAS</a></li>
    <li><a href="#">EXPORTAR</a></li>
    <li><a href="#">CERRAR SESION</a></li>
  </ul>
  </td> </td> </td> </td> </td> </td>
  </table>
</center>
<div class="col-lg-5"   style="background-color: #C60; height:35px; width:1200px; margin-right:auto; margin-left:auto;   "></div>
<div class="col-lg-5"   style="background-color: #FFF; height:500px; width:1200px; margin-right:auto; margin-left:auto;   ">

<form id="form1" name="form1" method="post" action="insert_club.php">
<div align="right"></div>

<table align='center' width='58%' border='0' cellspacing='3' cellpadding='1'>
                <tr>
<th width="25%" bgcolor='#66FFCC'>CV_C</th>
<th width="17%" bgcolor= "#66FFCC">CLUB  </th>
<th width="19%" bgcolor='#66FFCC'>RAMA</th>
<th width="39%" bgcolor="#66FFCC">DOCENTE</th>


</tr>
<tr>

<td><input type="text" name="cv" ></td>	
<td><input type="text" name="clu" ></td> 
<td><input type="text" name ="ram" ></td>
<td><input type="text" name="doc" ></td>
		
	


</tr> 


</table>
<div align="center">
              </p>
  <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>
                <input type="submit" name="guardar " value="GUARDAR DATOS " />
                
                <INPUT TYPE="reset" VALUE="BORRAR DATOS ">          
 </form>	
</div>

<center>
  <img src="imagen/Captura.PNG" width="1200" height="75" alt="k" />
</center>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>