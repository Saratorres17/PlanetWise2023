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
      <form action="/procesar_reporte" method="post">
        <label class="block mb-2 font-bold" for="reporte">Reporte:</label>
        <input class="w-full p-2 border rounded-md focus:outline-none focus:border-blue-500" type="text" id="reporte" name="reporte" required>
        <button class="mt-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600" type="submit">Enviar al usuario</button>
      </form><br>
      <div class="flex justify-between mb-2">
       <a href="/src/php/admin/Dasboard adm.php" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Regresar</a>
    </div>
    </div>
  </body>

</html>