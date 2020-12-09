<?php
    include_once "Conexión.php";
    session_start();

    $con=conectar();
    
    $nombre=$_POST['nombre'];
    $PrimerApellido=$_POST['PApellido'];
    $SegundoApellido=$_POST['SApellido'];
    $email=$_POST['correo'];
    $contrasena=$_POST['contrasena'];
    
    $insertar = "INSERT INTO Sospechoso VALUES(0,'$nombre','$PrimerApellido','$SegundoApellido','$email','$contrasena')";
    $query = mysqli_query($con, $insertar); 
    $consultaCliente ="SELECT idSospechoso FROM Sospechoso WHERE email= '$email' AND contraseña= '$contrasena'";
    $resultCliente=mysqli_query($con,$consultaCliente);
    if (mysqli_num_rows($resultCliente) > 0) {
        $row = mysqli_fetch_assoc($resultCliente);
        $_SESSION["id"]=$row["idSospechoso"];
        header('location:PaginaLista.php');     
    }else{
        header('registro:PaginaLista.php');
    }
      
?>