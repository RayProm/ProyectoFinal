<?php
	session_start();
	include_once "Conexión.php";

	$con=conectar();
	$idReporte=$_POST['idReporte'];
	$status=$_POST['status'];

	$actualizar = "UPDATE Reporte SET statusReporte='$status' WHERE idReporte='$idReporte'";
    $query = mysqli_query($con, $actualizar); 
    header('location:PaginaAdmin.php');
?>