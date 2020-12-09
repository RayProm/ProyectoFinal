<?php
	session_start();
	include_once "Conexión.php";

?>
<html>
<head>
	<title>Reporte detallado</title>
	<link rel="stylesheet" type="text/css" href="css/styleForm.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
	
		<?php

		  $idReporte=$_GET['Id_reporte'];
    	  $con=conectar();
    	  $resultUser=mysqli_query($con,"SELECT descripción, municipio, ciudad, dirección, fechaDeCreación, statusReporte FROM Reporte WHERE idReporte=" . $idReporte);
      		while($mostrar=mysqli_fetch_array($resultUser)){
    	?>
    	<form  class="" action="Enviar formulario.php" method="post">
        <h2>REPORTE DETALLADO</h2>
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
        	<input type="text" placeholder="<?php echo $mostrar['statusReporte']?>">
        </div>
        <div>
        	<div class="sub" style="font-size: 25px; color: white;">Descripción</div>
        	<textarea placeholder="<?php echo $mostrar['descripción']?>"></textarea><br>
        </div>
        
        <button style="border-radius: 15px; color: black; background-color: white; text-decoration: none;"><a href="PaginaLista.php">VOLVER</a></button>
    </form>
    	
    <?php
    }
    ?>
	
</body>
</html>