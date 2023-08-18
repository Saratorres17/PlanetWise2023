<?php
include("conexion.php"); // Incluye la clase de conexión

$db = new DatabaseConnection();
$conexion = $db->getConnection();

if ($_GET) {
    $id = $_GET['id'];
    $sql = "DELETE FROM datoscuriosos WHERE id=:id";
    $consulta = $conexion->prepare($sql);
    $consulta->bindParam(':id', $id);
    $consulta->execute();
    echo "<script>alert('Dato eliminado!');  window.location.href = '../../php/admin/curiosidades1.php' </script>";
}
?>
