<?php
include("../functions/conexion.php");
include("../functions/adminClasses.php");

session_start();

// Crear una instancia de DatabaseConnection
$database = new DatabaseConnection();
$pdo = $database->getConnection();

// Consulta para obtener los datos de los usuarios
$query = "SELECT * FROM registrousuario";
$stmt = $pdo->prepare($query);
$stmt->execute();
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/dist/images/leaf.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="flex">
        <div class="flex">
            <!-- Sidebar -->
            <div class="bg-gray-800 text-white w-1/5 py-4 px-6 min-h-screen bg-sidebar-image">
                <div class="flex items-center mb-8">
                    <img src=<?php echo $_SESSION['foto_path'] ?> alt="Admin Profile" class="w-fit h-10 rounded-full mr-2">
                    <span class="text-lg font-semibold"><?php echo $_SESSION['firstName']; ?></span>
                </div>
                <ul class="space-y-2">
                    <li><a href="#" class="block py-2 px-4 hover:bg-gray-700">Usuarios</a></li>
                    <li><a href="/src/php/admin/Dashboard- Publicaciones.php" class="block py-2 px-4 hover:bg-gray-700">Publicaciones</a></li>
                    <li><a href="/src/php/admin/curiosidades1.php" class="block py-2 px-4 hover:bg-gray-700">Datos curiosos</a></li>
                    <li><a href="/src/php/functions/close_session.php" class="block py-2 px-4 hover:bg-gray-700">Cerrar sesion</a></li>
                    <!-- Sidebar -->
                </ul>

            </div>

            <!-- Main Content -->
            <div class="w-4/5 py-6 px-8">
                <h1 class="text-2xl font-semibold mb-6">Usuarios</h1>
                <table class="w-full bg-white border rounded">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="py-2 px-4">ID del Usuario</th>
                            <th class="py-2 px-4">Primer Nombre</th>
                            <th class="py-2 px-4">Apellido</th>
                            <th class="py-2 px-4">Correo</th>
                            <th class="py-2 px-4">Datos Interesantes</th>
                            <th class="py-2 px-4">Género</th>
                            <th class="py-2 px-4">Foto</th>
                            <th class="py-2 px-4">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $usuario) : ?>
                            <tr>
                                <td class="py-2 px-4"><?php echo $usuario['id']; ?></td>
                                <td class="py-2 px-4"><?php echo $usuario['firstName']; ?></td>
                                <td class="py-2 px-4"><?php echo $usuario['lastName']; ?></td>
                                <td class="py-2 px-4"><?php echo $usuario['email']; ?></td>
                                <td class="py-2 px-4"><?php echo $usuario['interests']; ?></td>
                                <td class="py-2 px-4"><?php echo $usuario['gender']; ?></td>
                                <td class="py-2 px-4"><img src="<?php echo IMAGE_BASE_PATH . $usuario['foto_path']; ?>" alt="User" class="w-8 h-8 rounded-full"></td><br>
                                <td class="py-2 px-4">
                                <td class="py-2 px-4">
                                    <a class="text-red-600 hover:text-red-800" href="../functions/deleteUser.php?id=<?php echo $usuario['id'] ?>">Eliminar</a>
                                    <a class="text-blue-600 hover:text-blue-800" href="/src/php/admin/reporte%20para%20usu.php?id=<?php echo $usuario['id']; ?>">Notificacion</a>
                                </td>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <!-- Agregar más filas de usuarios aquí -->
                    </tbody>
                </table>
            </div>
        </div>

</body>

</html>