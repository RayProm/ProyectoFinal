<?php
	session_start();
	include_once "Conexión.php";
	//$actualizar = "UPDATE Reporte SET statusReporte='$status' WHERE idReporte='$idReporte'";
  //$query = mysqli_query($con, $actualizar); 

?>
<html>
<head>
	<title>Reporte detallado</title>
	<link rel="stylesheet" type="text/css" href="css/styleForm.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
	
		<?php
      $con=conectar();
		  $idReporte=$_GET['Id_reporte'];
    	
      $resultUser=mysqli_query($con, "SELECT idSospechoso FROM Reporte WHERE idReporte='$idReporte'");
      $idUsuario=mysqli_fetch_array($resultUser);
      $identificador=$idUsuario['idSospechoso'];
      $resultName=mysqli_query($con, "SELECT nombreUsuario, primerApellido, segundoApellido FROM Sospechoso WHERE idSospechoso='$identificador'");
      $nameC=mysqli_fetch_array($resultName);
    	$resultReport=mysqli_query($con,"SELECT municipio, ciudad, dirección, fechaDeCreación, statusReporte, descripción FROM Reporte WHERE idReporte='$idReporte'");
      
      		while($mostrar=mysqli_fetch_array($resultReport)){
      
    	?>
    	<form  class="" action="AlmacenarStatus.php" method="post">
        <h2>REPORTE DETALLADO</h2>
        <input type="hidden" name="idReporte" value="<?php echo $_GET['Id_reporte'];?>">
        <div>
          <div class="sub" style="font-size: 25px; color: white;">Nombre del usuario</div>
          <input type="text" placeholder="<?php echo $nameC['nombreUsuario'] . " " . $nameC['primerApellido'] . " " . $nameC['segundoApellido']?>">
        </div>
        <div>
        	<div class="sub" style="font-size: 25px; color: white;">Municipio</div>
      		<input type="text" placeholder="<?php echo $mostrar['municipio']?>">
      	</div>
      	<div>
      		<div class="sub" style="font-size: 25px; color: white;">Ciudad</div>
        	<input type="text" placeholder="<?php echo $mostrar['ciudad']?>">
      	</div>
      	<div>
      		<div class="sub" style="font-size: 25px; color: white;">Dirección</div>
        	<input type="text" placeholder="<?php echo $mostrar['dirección']?>">
      	</div>
        <div>
        	<div class="sub" style="font-size: 25px; color: white;">Fecha de creación</div>
        	<input type="text" placeholder="<?php echo $mostrar['fechaDeCreación']?>">
        </div>
        <div>
          <div class="sub" style="font-size: 25px; color: white;">Status actual del reporte</div>
          <select name="status">
            <option><?php echo $mostrar['statusReporte']?></option>
            <option>CONFIRMADO</option>
            <option>RECHAZADO</option>
          </select>
        </div>
        <div>
        	<div class="sub" style="font-size: 25px; color: white;">Descripción</div>
        	<textarea placeholder="<?php echo $mostrar['descripción']?>"></textarea><br>
        </div>
        <div>
          <button style="border-radius: 15px; color: black; background-color: white; text-decoration: none;"><a href="PaginaAdmin.php">VOLVER</a></button>
          <button style="border-radius: 15px; color: black; background-color: white; text-decoration: none;"><a>Guardar</a></button>
        </div>
        
    </form>
    	
    <?php
    }
    ?>
	
</body>
</html>