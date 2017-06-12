
<?php


include('conexion.php');

     $clavee=$_POST['cve'];

     $nombreE=$_POST['nomb'];
	  $fechaS=$_POST['fs'];
	 
      $durac=$_POST['dur'];
       $status=$_POST['stu'];
	   $transporte=$_POST['transp'];
	   $desti=$_POST['dest'];
   


$registrar="insert into eventos value('$clavee','$nombreE', '$fechaS','$durac','$status','$transporte','$desti')";
$ro=mysql_query($registrar,$con);



?>
