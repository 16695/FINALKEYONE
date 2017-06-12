<?php 
session_start();

include('conexion.php');

$entrar="select ID_U,USUARIO,PASS,TIPO from usuarios where USUARIO='".$_POST['usuario']."' AND PASS='".$_POST['pass']."'";
  $respuesta = mysql_query($entrar,$con);
  $num = mysql_num_rows($respuesta);
  
if  ($num > 0)
{
$row=mysql_fetch_array($respuesta);
$n=$row['ID_U'];
$us= $row['USUARIO'];
$tip= $row['TIPO'];
$_SESSION['sesion']=$n;
$_SESSION['user']=$us;
$_SESSION['tipo']=$tip;

if ($tip=="admin")
{	
?> 
<script>
location.href="menuadmin.php";
$_SESSION["autenticado"]= "SI";

</script>
<?php
}

if ($tip=="Alumno")
{
?> 
<script>
location.href="menualumno.php";
</script>
<?php
}
if ($tip=="Docente")
{
?> 
<script>
location.href="menudocente.php";
</script>
<?php
}
}
else
{


?> 

<script>

location.href="index.html";

</script>
<?php
}
?>