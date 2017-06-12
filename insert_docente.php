
<?php


include('conexion.php');

     $cp=$_POST['ced'];
$foto='foto';
     $nomb=$_POST['nombr'];
      $app=$_POST['apel'];
       $coorr=$_POST['maiil'];
	   $tele=$_POST['telf'];
	   $domi=$_POST['dom'];
   


$registrar="insert into docente value('$cp','$foto','$nomb','$app','$coorr','$tele','$domi')";
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
	alert("Docente Registrado");
    </script>
	<script>
	location.href="nuevo docente.php";
	</script>
				<?php }else{ ?>
						<script type="text/javascript">
	alert("Docente registrado ");
    </script>
	<script>
	location.href="nuevo docente.php";
	</script>		
			<?php	} ?>		
			
			
		</center>
	</body>
	</html>	
