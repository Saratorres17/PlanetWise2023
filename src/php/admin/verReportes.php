<?php
include("../functions/conexion.php");
session_start();

$database = new DatabaseConnection();
$pdo = $database->getConnection();


if (isset($_GET['id'])) {
    $userId = $_GET['id'];
}
else{
    echo "dato nulo";
}
 // Asegúrate de ajustar esto según cómo obtengas el ID del usuario en tu sesión

$query = "SELECT * FROM notificaciones WHERE id_usuario = :userId";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
$stmt->execute();
$reportes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/dist/images/leaf.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace a los estilos de Tailwind CSS (asegúrate de ajustar la URL al archivo de Tailwind en tu proyecto) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <title>Formulario de Reporte</title>
</head>

<body class="flex items-center justify-center h-screen bg-red-100">
    <div class="max-w-md mx-auto bg-white p-6 rounded shadow-md">
        <h1>Reportes del usuario</h1>
        
        <?php foreach ($reportes as $reporte) : ?>
            <li class="mt-4"><?php echo $reporte['reporte'] ?></li>
        <?php endforeach; ?>
        <br>
        <div class="flex justify-between mb-2">
            <a href="/src/php/admin/Dasboard adm.php" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Regresar</a>
        </div>
    </div>
</body>

</html>
