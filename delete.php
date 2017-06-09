<?

include('conexion.php');



$control=$_POST['num'];

$con="delete from alumno where NCONTROL='{$control}'";
$p1=mysql_query($con);

echo "registro eliminado";
?>