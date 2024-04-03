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
    
    public function obtenerProductos() {
        $conn = $this->conexion->conectar();
        $sql = "SELECT * FROM producto";
        $query = mysqli_query($conn, $sql);
        $productos = [];
        while ($row = mysqli_fetch_array($query)) {
            $productos[] = $row;
        }
        return $productos;
    }

    public function actualizarProducto($conn, $id, $nombre, $descripcion) {
        $sql = "UPDATE producto SET Nombre=?, descripcion=? WHERE ID=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $nombre, $descripcion, $id);
    
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    public function eliminarProducto($id) {
        $conn = $this->conexion->conectar();
        $sql = "DELETE FROM producto WHERE ID='$id'";
        return mysqli_query($conn, $sql);
    }
}
?>
