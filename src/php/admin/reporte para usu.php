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
  <link rel="stylesheet" href="../../../src/css modo oscuro/estilos.css">
  <title>Formulario de Reporte</title>
</head>

<body class="flex items-center justify-center h-screen">
<div id="reportModal" class="modal bg-cover bg-center fixed inset-0 flex items-center justify-center z-50" style="background-image: url('/dist/images/fondoReportar.jpg');">
                        <!--INICIO DEL SCRIPT DEL TRADUCTOR DE GOOGLE-->
                        <script>
                        // Crear un elemento <script> para cargar el script de traducción de Google
                    const script = document.createElement('script');script.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
                    script.async = true;
                    document.body.appendChild(script);
                    // Función para manejar los cambios en el estilo del cuerpo
                    const handleBodyChanges = () => {
                    const currentTop = parseInt(document.body.style.top) || 0;
                    if (currentTop > 0) {
                     document.body.style.top = '0px';
                      }
                      };
                      // Definir la función global googleTranslateElementInit
                      window.googleTranslateElementInit = () => {
                         if (!document.querySelector('.goog-te-combo')) {
                             new window.google.translate.TranslateElement(
                                 { pageLanguage: 'es', includedLanguages: 'fr,en,es,pt,zh-CN,ru' },
                                  'google_translate_element'
                                   );
                                 }
                                 
                                 // Observar los cambios en el estilo del cuerpo 
                                  const observer = new MutationObserver(handleBodyChanges);
                                   observer.observe(document.body, { attributes: true, attributeFilter: ['style'] });};
                                    </script>
                    <!--FIN DEL SCRIPT DEL TRADUCTOR DE GOOGLE-->

        <!--DIV DEL TRADUCTOR (Menú de idi+omas)-->    
        <div class="md:relative md:left-5-4 left-10 bottom-60" id="google_translate_element"></div>
        <!--FIN DEL TRADUCTOR-->

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
  </div>
</body>

</html>