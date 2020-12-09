<?php 
    session_start();    
    include_once "Conexión.php";

    function inicioDeSesion(){
        
        $email=$_POST['email'];
        $contrasena=$_POST['password'];
        //$inicio=$_POST['inicio'];
        //echo "$email" . " $contrasena";
        $con=conectar();
        $consultaCliente ="SELECT idSospechoso FROM Sospechoso WHERE email= '$email' AND contraseña= '$contrasena'";
        $resultCliente=mysqli_query($con,$consultaCliente);
        

        if (mysqli_num_rows($resultCliente) > 0) {
          // output data of each row
          $row = mysqli_fetch_assoc($resultCliente); 
            $_SESSION["id"]=$row["idSospechoso"];
             header('location:PaginaLista.php');
        }
        else {
             $consultaAdministrador ="SELECT idAdministrador FROM Administrador WHERE email= '$email' AND contraseña= '$contrasena'";
            $resultAdmin=mysqli_query($con,$consultaAdministrador);
            if (mysqli_num_rows($resultAdmin) > 0){
                $row = mysqli_fetch_assoc($resultAdmin); 
                $_SESSION["id"]=$row["idAdministrador"];
                header('location:PaginaAdmin.php');
            }else{
                 header('location:index.php');
            }
        }
    }
    inicioDeSesion();
?>