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
    <li><a href="menuadmin.php">  INICIO   </a>    </li>
    <li><a href="#" class="MenuBarItemSubmenu">REGISTRO </a></li>
    <li>
      <ul>
        <li><a href="#" class="MenuBarItemSubmenu">NUEVO</a>
          <ul>
            <li><a href="#">ALUMNO</a></li>
            <li><a href="#">CLUB</a></li>
            <li><a href="#">EVENTO</a></li>
            </ul>
          </li>
        <li><a href="#" class="MenuBarItemSubmenu">EDITAR</a>
          <ul>
            <li><a href="#">ALUMNO</a></li>
            <li><a href="#">CLUB</a></li>
            <li><a href="#">EVENTO</a></li>
            </ul>
          </li>
        <li><a href="#" class="MenuBarItemSubmenu">ELIMINAR</a>
          <ul>
            <li><a href="#">ALUMNO</a></li>
            <li><a href="#">CLUB</a></li>
            <li><a href="#">EVENTO</a></li>
            </ul>
          </li>
      </ul>
    </li>
    <li><a class="MenuBarItemSubmenu" href="#">CLUBS </a></li>
    <li></li>
    <li>
      <ul>
        <li><a class="MenuBarItemSubmenu" href="#">Elemento 3.1</a>
          <ul>
            <li><a href="#">Elemento 3.1.1</a></li>
            <li><a href="#">Elemento 3.1.2</a></li>
            </ul>
          </li>
        <li><a href="#">Elemento 3.2</a></li>
        <li><a href="#">Elemento 3.3</a></li>
      </ul>
    </li>
    <li><a href="#">BUSQUEDA</a></li>
    <li></li>
    <li><a href="#">NOTIFICACION</a></li>
    <li></li>
    <li><a href="#">SALIDAS</a></li>
    <li></li>
    <li><a href="#">EXPORTAR</a></li>
    <li></li>
    <li><a href="#">IMPRIMIR </a></li>
    <li></li>
    <li></li>
    <li></li>
    <li><a href="#">CERRAR SESION</a></li>
    <li></li>
  </ul>
   </td> 
  </td> </td> </td> </td> </td>
  </table>
</center>
<div class="col-lg-5"   style="background-color: #C60; height:35px; width:1200px; margin-right:auto; margin-left:auto;   "></div>
<div class="col-lg-5"   style="background-color: #FFF; height:500px; width:1200px; margin-right:auto; margin-left:auto;   ">

<form id="form1" name="form1" method="post" action="insert_evento.php">
<div align="right"></div>
    <table align='center' width='88%' border='0' cellspacing='3' cellpadding='1'>
                <tr>
<th width="16%" bgcolor='#66FFCC'>CLAVE</th>
<th width="19%" bgcolor= "#66FFCC">NOMBRE DE EVENTO  </th>
<th width="17%" bgcolor='#66FFCC'>FECHADE SALIDA </th>
<th width="16%" bgcolor="#66FFCC">DURACION</th>
<th width="16%" bgcolor="#66FFCC">ESTATUS</th>
<th width="16%" bgcolor="#66FFCC">TRANSPORTE</th>
<th width="16%" bgcolor="#66FFCC">DESTINO</th>

</tr>
<tr>

<td><input type="text" name="cve" ></td>	
<td><input type="text" name="nomb" ></td> 
<td><input type="text" name ="fs" ></td>
<td><input type="text" name="dur" ></td>	
<td><input type="text" name="stu" ></td>
<td><input type="text" name="transp" ></td>
<td><input type="text" name="dest" ></td>
	


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
              <p>
                <input type="submit" name="guardar " value="GUARDAR DATOS " />
                
      <INPUT TYPE="reset" VALUE="BORRAR DATOS ">
   </form>
</div>
s
<center>
  <img src="imagen/Captura.PNG" width="1202" height="75" alt="j" />
</center>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>