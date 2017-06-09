<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>datos</title>
</head>

<body bgcolor="#DFDFDF"
<?php
$cp = 1; 
if (!is_numeric($cp)) { 
echo "No son numeros"; 
}  
else {
echo "Son numeros";
}

$tel = 1; 
if (!is_numeric($tel)) { 
echo "No son numeros"; 
}  
else {
echo "Son numeros";
}


?>


<?php



            
          
$dato1=$_POST['nombre'];   
$dato2=$_POST['ape'];
$dato3=$_POST['dire'];
$dato4=$_POST['cp'];
$dato5=$_POST['tel'];
$dato6=$_POST['SEXO'];
$dato7=$_POST['edad'];
$dato8=$_POST['comentario'];



echo "<tr>";
echo "<tr>";

echo "<center><table>";
echo'<tr><td>NOMBRE:'.$dato1."<td><tr>";
echo '<td>APELLIDOS  :'.$dato2."<td><tr>";
echo '<td>DIRECCION   :'.$dato3."<td><tr>";
echo '<td>CP  :'.$dato4."<td><tr>";
echo '<td>TEL :'.$dato5."<td><tr>";
echo'<tr><td> SEXO:'.$dato6."<td><tr>";
echo'<tr><td> edad:'.$dato7."<td><tr>";
echo'<tr><td> coementario  :'.$dato8."<td><tr>";
echo "<table>";

 echo "<p><a href='entrada.php'>Haz clic aquí para volver a la pagina principal</a></p>";




?>  


</body>
</html>