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
    <link rel="stylesheet" href="../../../src/css modo oscuro/estilos.css">
    <title>Formulario de Reporte</title>
</head>

<body class="flex items-center justify-center h-screen bg-red-100">

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
