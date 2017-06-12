
<?php


include('conexion.php');

$control=$_POST['num'];
$foto='foto';
$nom=$_POST['nombre'];
$apellidos=$_POST['ape'];
       $email=$_POST['mail'];
     $semestre=$_POST['sem'];
       $gene=$_POST['gen'];


$registrar="insert into alumnos value('$control','$foto','$nom','$apellidos','$email','$semestre','$gene')";
$ro=mysql_query($registrar,$con);



?>
