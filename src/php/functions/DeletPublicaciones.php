<?php
include("conexion.php"); // Incluye la clase de conexión

$db = new DatabaseConnection();
$conexion = $db->getConnection();

if ($_GET) {
    $id = $_GET['id'];
    $sql = "DELETE FROM registroinformacion1 WHERE id=:id";
    $consulta = $conexion->prepare($sql);
    $consulta->bindParam(':id', $id);
    $consulta->execute();
    echo '<div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded-md shadow-md" role="alert">
    <span class="block mt-1">La publicación ha sido eliminada exitosamteen.</span>
</div>'; header('location: /pruebahome/perfil de usuario.php');
            
           
}
?>