
<?php


include('conexion.php');

     $clave=$_POST['cv'];

     $club=$_POST['clu'];
      $rama=$_POST['ram'];
       $docente=$_POST['doc'];
   


$registrar="insert into club value('$clave','$club','$rama','$docente')";
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
	alert("Club Registrado");
    </script>
	<script>
	location.href="nuevo club.php";
	</script>
				<?php }else{ ?>
						<script type="text/javascript">
	alert("Club registrado ");
    </script>
	<script>
	location.href="nuevo club.php";
	</script>		
			<?php	} ?>		
			
			
		</center>
	</body>
	</html>	
