<?php

  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'search';

  
  try {
    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn) {
      throw new Exception("Error al conectar a la base de datos: ", mysqli_connect_error());
    }

  } catch (Exception $e) {
    echo 'Error' . $e->getMesagge();
  }

?>