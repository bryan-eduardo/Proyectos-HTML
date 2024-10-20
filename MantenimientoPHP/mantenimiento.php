<?php

include("conexion.php");

$cod= $_POST["txtcod"];

$nom= $_POST["txtnomvac"];
$num= $_POST["txtnum"];
$poeco = $_POST["txtpoeco"];
$sex = $_POST["txtsex"];
$hor = $_POST["txtlabor"];
$con = $_POST["txtconper"];
$act = $_POST["txtrealizar"];
$pre = $_POST["txtprest"];


	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiardatos']))
	{
		header("Location: principal.php");
	}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatos']))
	
	{
	$sqlgrabar = "INSERT INTO vacantes(id, nombre_vacante, numero_vacantes, propuesta_economica, genero_requerido, horario_laboral, conocimientos_perfil, actividades_realizar, prestaciones_ofrecen) values ('$cod','$nom','$num','$poeco','$sex','$hor','$con','$act','$pre')";

if(mysqli_query($conn,$sqlgrabar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['modificardatos']))
	
	{
			$sqlmodificar = "UPDATE vacantes SET codigo = '$cod', nombre_vacante = '$nom', numero_vacantes= '$num', genero_requerido = '$sex', propuesta_economica = '$poeco', horario_laboral = '$hor', conocimientos_perfil = '$con', actividades_realizar = '$act', prestaciones_ofrecen = '$pre' WHERE codigo=$cod";

if(mysqli_query($conn,$sqlmodificar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminardatos']))
	
	{
			$sqleliminar = "DELETE FROM clientes WHERE codigo=$cod";

if(mysqli_query($conn,$sqleliminar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}

?>