<?php
include("controlador_login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css"
     rel="stylesheet">
     <link rel="icon" href="/dist/images/leaf.png">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/lib/index.min.css">
    <title>inicio de sesion</title>
</head>
 <body class="bg-no-repeat bg-cover" style="background-image: url(../../../../../dist/images/paisajenatural.jpeg);"  >
	<div class="flex justify-center items-center h-screen ">
        <div class="bg-white p-8 rounded-md shadow-md flex flex-col items-center space-y-6">
            
            <h2 class="text-xl font-semibold">Iniciar Sesión</h2>
            <form class="flex flex-col space-y-4 w-64" method="post" action="">
                <input type="text" name="firstName" placeholder="Nombre de usuario" required class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300">
                <input type="password" name="Contraseña" placeholder="Contraseña" required class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300">
                <button type="submit" class="bg-green-500 text-white py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring focus:border-blue-300">Iniciar Sesión</button>
            </form>
            <div class="flex justify-between mb-2">
                <center><a href="../../../pruebahome/index.php" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Regresar</a></center>
            </div>
        </div>
    </div>
 </body>
</html>

