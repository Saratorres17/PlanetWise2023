<?php
include("../functions/conexion.php");
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_usuario = $_POST['id_usuario'];
    $reporte = $_POST['reporte'];

    $database = new DatabaseConnection();
    $pdo = $database->getConnection();

    $query = "INSERT INTO `notificaciones` (`reporte`, `id_usuario`, `accept`) VALUES (:reporte, :id_usuario, 0)";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':reporte', $reporte, PDO::PARAM_STR);
    $stmt->bindValue(':id_usuario', $id_usuario, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: /src/php/admin/Dasboard adm.php");
        exit();
    } else {
        echo "Error al enviar el reporte.";
    }
}
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
    <form action="" method="post">
    <input type="hidden" name="id_usuario" value="<?php echo $_GET['id']; ?>">
      <label class="block mb-2 font-bold" for="reporte" name="reporte">Reporte:</label>
      <input class="w-full p-2 border rounded-md focus:outline-none focus:border-blue-500" type="text" id="reporte" name="reporte" required>
      <button class="mt-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600" type="submit">Enviar al usuario</button>
    </form>
    <br>
    <div class="flex justify-between mb-2">
      <a href="/src/php/admin/Dasboard adm.php" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Regresar</a>
    </div>
  </div>
</body>

</html>