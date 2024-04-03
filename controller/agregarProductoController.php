<?php
include_once('../modelo/productoDAO.php'); 

$nombre = $_POST['nombre']; 
$descripcion = $_POST['descripcion']; 

$productoDAO = new ProductoDAO(); 
if ($productoDAO->agregarProducto($nombre, $descripcion)) {
    header("Location: ../index.php");
    exit(); 
} else {
    echo "Error al agregar el producto.";
}
?>
