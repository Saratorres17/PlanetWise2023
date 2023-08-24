<?php
include("../functions/conexion.php");

$db = new DatabaseConnection();
$conexion = $db->getConnection();

if ($_GET) {
    $id = $_GET['id'];
    $sql = "DELETE FROM registroinformacion1 WHERE id = :id";
    $consulta = $conexion->prepare($sql);
    $consulta->bindParam(':id', $id);
    $consulta->execute();
    echo "<script>alert('Dato eliminado!');  window.location.href = '../../php/admin/Dashboard- Publicaciones.php'</script>";
}

?>
