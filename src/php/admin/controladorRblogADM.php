<?php

$previousTitulo = isset($_POST["titulo"]) ? $_POST["titulo"] : "";
$previousInfo = isset($_POST["informacion"]) ? $_POST["informacion"] : "";
$previousFuente = isset($_POST["fuente"]) ? $_POST["fuente"] : "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db = new DatabaseConnection();
    $conexion = $db->getConnection();

    try {
        $titulo = validarCampo($_POST["titulo"]);
        $informacion = validarCampo($_POST["informacion"]);
        $fuente = validarCampo($_POST["fuente"]);

        if (empty($titulo) || empty($fuente)|| empty($informacion) || empty($_FILES["foto"]["name"])) {
            echo '<div class="fixed top-0 left-0 z-10 w-full bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded" role="alert"">';
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
                $query = "INSERT INTO datoscuriosos (titulo, fuente, foto_path, informacion)
                      VALUES (:titulo, :fuente, :foto_path, :informacion)";
                $statement = $conexion->prepare($query);
                $statement->bindParam(":titulo", $titulo);
                $statement->bindParam(":fuente", $fuente);
                $statement->bindParam(":foto_path", $foto_path);
                $statement->bindParam(":informacion", $informacion);
                $statement->execute();

                echo '<div class="fixed top-0 left-0 z-10 w-full bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded" role="alert">';
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
        if ($_FILES["foto"]["size"] > 1000000) {
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