<?php  
  session_start();
  //echo $_SESSION["id"];
  include_once "Conexión.php";
?>
<html lang="en">
  <head>
    <title>PaginaPrincipal</title>
    <link rel="stylesheet" href="css/styleTable.css">
  </head>
  <body>

    <header>
      <a class="menu" href="Forma.php">REPORTAR CASO</a>
      <a class="menu"  href="cerrar sesion.php">CERRAR SESSION</a>
      <a class="menu"  href="Cambiar datos.php">CAMBIAR MIS DATOS</a>
    </header>
    
    <main class="tablas">

      <h1>REPORTES.</h1>
      <?php
      $idSospechoso=$_SESSION["id"];
      $con=conectar();
      $nombreCompleto = mysqli_query($con, "SELECT nombreUsuario, primerApellido, segundoApellido FROM Sospechoso WHERE idSospechoso='$idSospechoso'");
      $datos=mysqli_fetch_array($nombreCompleto);
      echo "USUARIO: " . $datos['nombreUsuario'] . " " .$datos['primerApellido'] . " " . $datos['segundoApellido'];
      ?>
      <div>
        <label><br></label>
      </div>
      <table>
      <tr>
        <th>MUNICIPIO</th>
        <th>CUIDAD</th>
        <th>DIRECCION</th>
        <th>FECHA</th>
        <th>ESTATUS</th>
        <th>DETALLE</th>
      </tr>
    <?php 
    $idSospechoso=$_SESSION["id"];
    $con=conectar();
    $resultUser=mysqli_query($con,"SELECT idReporte, municipio, ciudad, dirección, fechaDeCreación, statusReporte FROM Reporte WHERE idSospechoso=" . $idSospechoso);
      while($mostrar=mysqli_fetch_array($resultUser)){
    ?>

    <tr>
      <td><?php echo $mostrar['municipio']?></td>
      <td><?php echo $mostrar['ciudad']?></td>
      <td><?php echo $mostrar['dirección']?></td>
      <td><?php echo $mostrar['fechaDeCreación']?></td>
      <td><?php echo $mostrar['statusReporte']?></td>
      <td><a href="Detalle.php?Id_reporte=<?php echo $mostrar["idReporte"];?>">Ir</a></td>
    </tr>
    <?php
    }
    ?>

      </table>
  </main>
 
  </body>
</html>