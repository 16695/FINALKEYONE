
<?php


include('conexion.php');

$control=$_POST['num'];

$nom=$_POST['nombre'];

$apellido=$_POST['ape'];

$club=$_POST['clu'];


$con="insert into alumno value('$control','$nom','$apellido','$club')";

$ro=mysql_query($con);



?>
