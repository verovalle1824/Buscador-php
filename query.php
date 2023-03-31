<?php
  include 'db.php';

  if(isset($_GET['buscar']) && !empty($_GET['buscar'])) {
    $search = $_GET['buscar'];

    $consulta = "SELECT * FROM productos WHERE Nombre_producto LIKE '%$search%' OR Marca_producto LIKE '%$search%'";
    $sql = mysqli_query($conn, $consulta);

    if($sql) {
      $product = [];

      while ($row = mysqli_fetch_assoc($sql)) {
        $product[] = $row;
      }

      $json = json_encode($product);
      echo $json;
      
    } else {
      echo "Error en la consulta: " . mysqli_error($conn);
    }

    mysqli_close($conn);
  } else {
    echo 'algo';
  }
  
?>
