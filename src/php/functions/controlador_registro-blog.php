<?php
include("conexion.php"); // Incluye la clase de conexión

session_start();

$usuario_id = $_SESSION["user_id"];

$previousTitulo = isset($_POST['titulo']) ? $_POST['titulo'] : "";
$previousDesc = isset($_POST['descripcion']) ? $_POST['descripcion'] : "";
$previousInfo = isset($_POST['informacion']) ? $_POST['informacion'] : "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db = new DatabaseConnection();
    $conexion = $db->getConnection();

    try {
        
        $titulo = validarCampo($_POST["titulo"]);
        $descripcion = validarCampo($_POST["descripcion"]);
        $informacion = validarCampo($_POST["informacion"]);

        if (empty($titulo) || empty($descripcion) || empty($informacion) || empty($_FILES["foto"]["name"])) {
            echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">';
            echo '<strong class="font-bold">¡Error!</strong>';
            echo '<span class="block sm:inline"> Por favor, completa todos los campos obligatorios.</span>';
            echo '</div>';
        } else {
            $foto_path = guardarImagen();

            if (empty($foto_path)) {
                echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">';
                echo '<strong class="font-bold">¡Error!</strong>';
                echo '<span class="block sm:inline"> Hubo un problema al subir la imagen.</span>';
                echo '</div>';
            } else {
                $query = "INSERT INTO registroinformacion1 (usuarioId, fecha_registro, titulo, descripcion, informacion, foto_path) VALUES (:usuarioId, CURRENT_TIMESTAMP, :titulo, :descripcion, :informacion, :foto_path)";

                $statement = $conexion->prepare($query);
                $statement->bindParam(":usuarioId", $usuario_id);
                $statement->bindParam(":titulo", $titulo);
                $statement->bindParam(":descripcion", $descripcion);
                $statement->bindParam(":informacion", $informacion);
                $statement->bindParam(":foto_path", $foto_path);
                $statement->execute();

                echo '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">';
                echo '<strong class="font-bold">¡Registro exitoso!</strong>';
                echo '<span class="block sm:inline">El registro se ha realizado correctamente.</span>';
                echo '</div>';
            }
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Función para validar un campo
function validarCampo($campo)
{
    // Eliminar espacios en blanco al inicio y final
    $campo = trim($campo);
    // Escapar caracteres especiales para prevenir ataques SQL
    $campo = htmlspecialchars($campo);
    return $campo;
}

// Función para guardar la imagen en el servidor y obtener la ruta
function guardarImagen()
{
    if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] === 0) {
        $target_dir = IMAGE_BASE_PATH ; // Ruta relativa al directorio de destino
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Comprobar si el archivo es una imagen válida
        $check = getimagesize($_FILES["foto"]["tmp_name"]);
        if ($check === false) {
            $uploadOk = 0;
        }

        // Comprobar si el archivo ya existe
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }

        // Comprobar el tamaño máximo del archivo (500 KB)
        if ($_FILES["foto"]["size"] > 10000000) {
            $uploadOk = 0;
        }

        // Permitir solo ciertos formatos de imagen
        if ($imageFileType !== "jpg" && $imageFileType !== "jpeg" && $imageFileType !== "png" && $imageFileType !== "gif") {
            $uploadOk = 0;
        }

        // Si no hubo errores, intentar subir el archivo
        if ($uploadOk === 1) {
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                return $target_file;
            } else {
                return "";
            }
        }
    }

    return "";
}
?>