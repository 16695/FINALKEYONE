
<?php


include('conexion.php');

$control=$_POST['num'];
$foto='foto';
$nom=$_POST['nombre'];
$apellidos=$_POST['ape'];
       $email=$_POST['mail'];
     $semestre=$_POST['sem'];
       $gene=$_POST['gen'];
 $clu=$_POST['club'];

$registrar="insert into alumnos value('$control','$foto','$nom','$apellidos','$email','$semestre','$gene')";
$ro=mysql_query($registrar,$con);

$registrar="insert into inscriptos value('$id','$control','$clu')";
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
	location.href="registro alumno.php";
	</script>
				<?php }else{ ?>
						<script type="text/javascript">
	alert("Alumno registrado ");
    </script>
	<script>
	location.href="registro alumno.php";
	</script>		
			<?php	} ?>		
			
			
		</center>
	</body>
	</html>	
