<?php
include_once('../config/conexion.php');
$conexion = new Conexion();
$conn = $conexion->conectar();

class ProductoDAO {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function agregarProducto($nombre, $descripcion) {
        $conn = $this->conexion->conectar();
        $sql = "INSERT INTO producto (Nombre, Descripcion) VALUES ('$nombre', '$descripcion')";
        return mysqli_query($conn, $sql);
    }
}
?>
