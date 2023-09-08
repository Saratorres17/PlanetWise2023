<?php
include("../functions/conexion.php");
include("../functions/adminClasses.php");
session_start();

$db = new DatabaseConnection(); // Crea una instancia de la conexión
$conexion = $db->getConnection(); // Obtiene conexión

if (isset($_GET['id'])) {
  $publicacion_id = $_GET['id'];
} else {
  echo "<script>alert('Dato nulo!');  window.location.href = '../../php/admin/curiosidades1.php' </script>";
}

$query = "SELECT * FROM registroinformacion1 WHERE id = :publicacion_id";
$stmt = $conexion->prepare($query);
$stmt->bindParam(":publicacion_id", $publicacion_id, PDO::PARAM_INT);
$stmt->execute();
$publicacion = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../../src/css modo oscuro/estilos.css">
  <title>Document</title>
</head>

<body>

  <!--INICIO DEL SCRIPT DEL TRADUCTOR DE GOOGLE-->
  <script>
    // Crear un elemento <script> para cargar el script de traducción de Google
    const script = document.createElement('script');
    script.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
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
        new window.google.translate.TranslateElement({
            pageLanguage: 'es',
            includedLanguages: 'fr,en,es,pt,zh-CN,ru'
          },
          'google_translate_element'
        );
      }

      // Observar los cambios en el estilo del cuerpo 
      const observer = new MutationObserver(handleBodyChanges);
      observer.observe(document.body, {
        attributes: true,
        attributeFilter: ['style']
      });
    };
  </script>
  <!--FIN DEL SCRIPT DEL TRADUCTOR DE GOOGLE-->

  <div class="flex">
    <!-- Sidebar -->
    <div class="fixed bg-gray-800 text-white py-10 px-6 bg-sidebar-image z-50 w-max h-screen md:w-max">
      <div class="flex items-center relative left-5">
        <img src=<?php echo $_SESSION['foto_path'] ?> alt="Admin Profile" class="w-fit h-10 rounded-full mr-2">
        <span class="text-lg font-semibold"><?php echo $_SESSION['firstName']; ?></span>
      </div>
      <ul class="space-y-2">
        <li><a href="/src/php/admin/Dasboard adm.php" class="block py-2 px-4 hover:bg-gray-700 text-white">Usuarios</a></li>
        <li><a href="/src/php/admin/Dashboard- Publicaciones.php" class="block py-2 px-4 hover:bg-gray-700 text-white">Publicaciones</a></li>
        <li><a href="/src/php/admin/curiosidades1.php" class="block py-2 px-4 hover:bg-gray-700 text-white">Datos curiosos</a></li>
        <li><a href="/src/php/functions/close_session.php" class="block py-2 px-4 hover:bg-gray-700 text-white">Cerrar sesion</a></li>
        <!--DIV DEL TRADUCTOR (Menú de idi+omas)-->
        <div class="md:relative md:left-5-4" id="google_translate_element"></div>
        <!--FIN DEL TRADUCTOR-->
        <!-- Sidebar -->
      </ul>
    </div>
    <!-- PUBLICACIONES -->
    <div class="w-full md:w-2/5 mx-auto bg-white">
      <div class="w-full text-gray-800 text-4xl px-5 font-bold leading-none">
        <?php echo $publicacion['titulo']  ?>
      </div>

      <div class="w-full text-gray-500 px-5 pb-5 pt-2">
        <?php echo $publicacion['descripcion']  ?>
      </div>

      <div class="mx-5">
        <img src="<?php echo "http://localhost/src/php/functions/" . $publicacion['foto_path']  ?>">

      </div>

      <div class="px-5 w-full mx-auto">
        <p class="my-5"><?php echo $publicacion['informacion']  ?><br><br></p>
      </div>
    </div>

    <!-- PUBLICACIONES -->

</body>

</html>