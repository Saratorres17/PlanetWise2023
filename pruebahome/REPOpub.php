<?php
include('../src\php\functions\conexion.php');
include('../src\php\functions\userClasses.php');
session_start();

$database = new DatabaseConnection();
$pdo = $database->getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reporte'])) {
    $postID = $_GET['id'];
    $usuarioReportante =  $_SESSION['user_id'];
    $reporte = $_POST['reporte'];

    $sql = "INSERT INTO feedreports (postId, reporte, usuarioReport) VALUES (:postID, :reporte, :usuarioReportante)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':postID', $postID, PDO::PARAM_INT);
    $stmt->bindParam(':reporte', $reporte, PDO::PARAM_STR);
    $stmt->bindParam(':usuarioReportante', $usuarioReportante, PDO::PARAM_INT);
    $stmt->execute();
    

    if (!$stmt) {
        header('Location: ../pruebahome/404.php');
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal de Reporte</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../src/css modo oscuro/estilos.css">
</head>

<body>
       <!--INICIO DEL SCRIPT DEL TRADUCTOR DE GOOGLE-->
   <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script>
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
          pageLanguage: "es",
          includedLanguages: "fr,en,es,pt,zh-CN,ru",
        },
        "google_translate_element"
      );
    }
  </script>
  <!--FIN DEL SCRIPT DEL TRADUCTOR DE GOOGLE-->
  	<!--DIV DEL TRADUCTOR (Menú de idiomas)-->
	<div class="" id="google_translate_element"></div>
	<!--FIN DEL TRADUCTOR-->
    <!-- Modal -->
    <div id="reportModal" class="modal bg-cover bg-center fixed inset-0 flex items-center justify-center z-50" style="background-image: url('/dist/images/fondoRepo.jpg');">
        <form action="" method="post" class="modal-content bg-white w-1/3 p-4 rounded shadow-lg">
            <input type="hidden" name="id" value="<?php echo $postID ?>">
            <h2 class="text-2xl font-semibold mb-4">Reportar publicación: </h2>
            <textarea id="reportReason" name="reporte" class="w-full h-32 border rounded p-2 focus:outline-none focus:ring focus:border-blue-500" placeholder="Indique el motivo de su reporte:"></textarea>
            <div class="mt-4">
                <button type="submit" id="submitReportBtn" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Enviar Reporte</button>
            </div>
            <div class="flex justify-between mb-2">
      <a href="/pruebahome/blog.php" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Regresar</a>
    </div>
        </form>
    </div>

    <script>
 
        const reportModal = document.getElementById("reportModal");


        reportModal.classList.remove("hidden");

        closeModalBtn.addEventListener("click", () => {
            reportModal.classList.add("hidden");
        });


        const submitReportBtn = document.getElementById("submitReportBtn");
        const reportReason = document.getElementById("reportReason");

        submitReportBtn.addEventListener("click", () => {
            const reason = reportReason.value;
            reportModal.classList.add("hidden");
        });
    </script>
</body>

</html>