7
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
!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
		<title>Guardar registro</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
	<script type="text/javascript">
	alert("Alumno Registrado");
    </script>
	<script>
	location.href="nuevo event.php";
	</script>
				<?php }else{ ?>
						<script type="text/javascript">
	alert("Alumno registrado ");
    </script>
	<script>
	location.href="nuevo event.php";
	</script>		
			<?php	} ?>		
			
			
		</center>
	</body>
	</html>	

