<?php
	session_start();
	include_once "Conexión.php";

	$con=conectar();

    $idCliente=$_SESSION["id"];
    $nombre=$_POST['Nnombre'];
    $PrimerApellido=$_POST['NPApellido'];
    $SegundoApellido=$_POST['NSApellido'];
    $email=$_POST['Ncorreo'];
    $contrasena=$_POST['Ncontrasena'];
    
    $actualizar = "UPDATE Sospechoso SET nombreUsuario='$nombre', primerApellido='$PrimerApellido', segundoApellido='$SegundoApellido', email='$email', contraseña='$contrasena' WHERE idSospechoso='$idCliente'";
    $query = mysqli_query($con, $actualizar); 

	header('location:PaginaLista.php');
?>