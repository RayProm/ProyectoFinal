<?php
    include_once "Conexión.php";
    session_start();
    $con=conectar();
    
    $idCliente=$_SESSION["id"];
    $municipio=$_POST['municipio'];
    $ciudad=$_POST['city'];
    $dirección=$_POST['direccion'];
    $descripcion=$_POST['mensaje'];
    
    $insertar = "INSERT INTO Reporte VALUES(0, '$idCliente','$descripcion','$municipio','$ciudad','$dirección', CURDATE(), 'EN PROCESO')";
    $query = mysqli_query($con, $insertar);
    header('location:PaginaLista.php');       
?>