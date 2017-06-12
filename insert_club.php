
<?php


include('conexion.php');

     $clave=$_POST['cv'];

     $club=$_POST['clu'];
      $rama=$_POST['ram'];
       $docente=$_POST['doc'];
   


$registrar="insert into club value('$clave','$club','$rama','$docente')";
$ro=mysql_query($registrar,$con);



?>
