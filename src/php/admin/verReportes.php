<?php
include("../functions/conexion.php");
session_start();

$database = new DatabaseConnection();
$pdo = $database->getConnection();


if (isset($_GET['id'])) {
    $userId = $_GET['id'];
} else {
    echo "dato nulo";
}


$query = "SELECT * FROM notificaciones WHERE id_usuario = :userId";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
$stmt->execute();
$reportes = $stmt->fetchAll(PDO::FETCH_ASSOC);


$query2 = "SELECT * FROM feedreports where usuarioReport = :userId";
$stmt2 = $pdo->prepare($query2);
$stmt2->bindParam(':userId', $userId, PDO::PARAM_INT);
$stmt2->execute();
$notificaciones = $stmt2->fetchAll(PDO::FETCH_ASSOC);

$usuario_id = $userId;
$sql = "SELECT r.*, p.titulo AS titulo_publicacion
        FROM feedreports r
        INNER JOIN registroinformacion1 p ON r.postId = p.id
        WHERE r.usuarioReport = $usuario_id";
$result = $pdo->query($sql);


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/dist/images/leaf.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../src/css modo oscuro/estilos.css">
    <title>Formulario de Reporte</title>
</head>

<body class="flex items-center justify-center h-screen bg-red-100">
<div id="reportModal" class="modal bg-cover bg-center fixed inset-0 flex items-center justify-center z-50" style="background-image: url('/dist/images/fondoRepo.jpg');">
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

    <!--DIV DEL TRADUCTOR (Menú de idi+omas)-->
    <div class="md:relative md:left-5-4 left-10 bottom-60" id="google_translate_element"></div>
    <!--FIN DEL TRADUCTOR-->

    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-center text-2xl font-semibold mb-6">Reportes del usuario</h1>

    <ul>
        <?php foreach ($reportes as $reporte) : ?>
            <li class="mb-2"><?php echo $reporte['reporte'] ?></li>
        <?php endforeach; ?>
    </ul>

    <div class="mt-6 flex justify-center">
        <a href="/src/php/admin/Dasboard adm.php" class="text-sm text-blue-500 hover:underline">Regresar</a>
    </div>
</div>
<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-center text-2xl font-semibold mb-6">Reportes a publicaciones</h1>

    <ul>
        <?php foreach ($notificaciones as $noti) : ?>
            <?php
            // Consulta para obtener el nombre de usuario
            $publicacionId = $noti['postId'];
            $query_post = "SELECT titulo FROM registroinformacion1 WHERE id = :publicacionId";
            $stmt_post = $pdo->prepare($query_post);
            $stmt_post->bindParam(":publicacionId", $publicacionId, PDO::PARAM_INT);
            $stmt_post->execute();
            $post = $stmt_post->fetch(PDO::FETCH_ASSOC); ?>
            <p class="font-semibold text-lg mb-2"><?php echo $post['titulo'] ?></p>
            <li class="mb-2"><?php echo $noti['reporte'] ?></li>
        <?php endforeach; ?>
    </ul>

    <div class="mt-6 flex justify-center">
        <a href="/src/php/admin/Dasboard adm.php" class="text-sm text-blue-500 hover:underline">Regresar</a>
    </div>
</div>

</div>
</div>

</body>

</html>