<?php  
  include_once "Conexión.php";
  session_start();
?>
<html lang="en">
  <head>
    <title>Secretaria de salud</title>
    <link rel="stylesheet" type="text/css" href="css/styleForm.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>
     
     
      <form  class="" action="Enviar formulario.php" method="post">
        <h2>FORMULARIO REGISTRO DE REPORTE</h2>
      
        <select name="municipio">
          <option>COMONDÚ</option>
          <option>MULEGÉ</option>
          <option>LA PAZ</option>
          <option>LORETO</option>
          <option>LOS CABOS</option>
        </select>
        <input type="text" name="city" placeholder="CIUDAD">
        <input type="text" name="direccion" placeholder="DIRECCION">
        <textarea name="mensaje" placeholder="Escriba aqui su descripcion"></textarea><br>
        <button class="btn"> ENVIAR </button>
    </form>
</html>