<?php  
  include_once "Conexión.php";
?>
<html lang="en">
  <head>
    <title>PaginaPrincipal</title>
    <link rel="stylesheet" href="css/styleTable.css">
  </head>
  <body>

    <header>
       
      <a class="menu" href="cerrar sesion.php">CERRAR SESSION</a>
        
    </header>
    
    <main class="tablas">

      <h1>REPORTES.</h1>
      <h2>Usa estos filtros para buscar los reportes:</h2>

      <div class="select-complete">
        <div class="select">
        <p>Municipio:</p>
        <select>
          <option>La Paz</option>
        </select>
      </div>
      <div class="select">
        <p>Ciudad:</p>
        <select>
          <option>La Paz</option>
        </select>
      </div>
      <div class="select">
        <p>Status:</p>
        <select>
          <option>La Paz</option>
        </select>
      </div>
      <div class="select">
        Usuario:
       <input type="" name="usuario"> 
      </div>
      <button>Buscar</button>
      </div>


      <table>
      <tr>
        <th>NOMBRE</th>
        <th>PRIMER APELLIDO</th>
        <th>SEGUNDO APELLIDO</th>
        <th>MUNICIPIO</th>
        <th>CUIDAD</th>
        <th>DIRECCION</th>
        <th>FECHA</th>
        <th>ESTATUS</th>
        <th>DETALLE</th>
      </tr>
    <?php 
    
    $con=conectar();
    $resultAll=mysqli_query($con,"SELECT s.nombreUsuario, s.primerApellido, s.segundoApellido, r.municipio, r.ciudad, r.dirección, r.fechaDeCreación, r.statusReporte, r.idReporte FROM Reporte r INNER JOIN Sospechoso s WHERE r.idSospechoso=s.idSospechoso");
      while($mostrar=mysqli_fetch_array($resultAll)){
    ?>

    <tr>
      <td><?php echo $mostrar['nombreUsuario']?></td>
      <td><?php echo $mostrar['primerApellido']?></td>
      <td><?php echo $mostrar['segundoApellido']?></td>
      <td><?php echo $mostrar['municipio']?></td>
      <td><?php echo $mostrar['ciudad']?></td>
      <td><?php echo $mostrar['dirección']?></td>
      <td><?php echo $mostrar['fechaDeCreación']?></td>
      <td><?php echo $mostrar['statusReporte']?></td>
      <td><a href="DetalleAdmin.php? Id_reporte=<?php echo $mostrar["idReporte"];?>">Ir</a></td>
    </tr>
    <?php
    }
    ?>

      </table>
  </main>
 
  </body>
</html>