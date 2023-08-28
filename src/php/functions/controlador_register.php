<?php
include("conexion.php"); // Incluye la clase de conexión


$previousFirstName = isset($_POST["firstName"]) ? $_POST["firstName"] : "";
$previousLastName = isset($_POST["lastName"]) ? $_POST["lastName"] : "";
$previousEmail = isset($_POST["email"]) ? $_POST["email"] : "";
$previousInterests = isset($_POST["interests"]) ? $_POST["interests"] : "";
$previousGender = isset($_POST["gender"]) ? $_POST["gender"] : "";
$previousFoto = isset($_POST["password"]) ? $_POST["password"] : "";
$previousPaswword = isset($_POST["password"]) ? $_POST["password"] : "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db = new DatabaseConnection(); // Crea una instancia de la conexión
    $conexion = $db->getConnection(); // Obtiene la conexión

    try {
        // Recuperar datos del formulario y realizar la validación
        $firstName = validarCampo($_POST["firstName"]);
        $lastName = validarCampo($_POST["lastName"]);
        $email = validarEmail($_POST["email"]);
        $interests = validarCampo($_POST["interests"]);
        $gender = validarCampo($_POST["gender"]);
        $password = validarCampo($_POST["password"]);

        if (empty($firstName) || empty($lastName) || empty($email) || empty($interests) || empty($gender) || empty($password) || empty($_FILES["foto"]["name"])) {
            echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">';
            echo '<strong class="font-bold">¡Error!</strong>';
            echo '<span class="block sm:inline"> Por favor, completa todos los campos obligatorios.</span>';
            echo '</div>';
        } else {
            // Guardar la imagen en el servidor
            $foto_path = guardarImagen();
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insertar datos en la base de datos
            $query = "INSERT INTO registrousuario (firstName, lastName, email, interests, gender, foto_path, contraseña)
                      VALUES (:firstName, :lastName, :email, :interests, :gender, :foto_path, :password)";
            $statement = $conexion->prepare($query);
            $statement->bindParam(":firstName", $firstName);
            $statement->bindParam(":lastName", $lastName);
            $statement->bindParam(":email", $email);
            $statement->bindParam(":interests", $interests);
            $statement->bindParam(":gender", $gender);
            $statement->bindParam(":foto_path", $foto_path);
            $statement->bindParam(":password", $hashedPassword);
            $statement->execute();

            echo '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">';
            echo '<strong class="font-bold">¡Registro exitoso!</strong>';
            echo '<span class="block sm:inline">El registro se ha realizado correctamente.</span>';
            echo '</div>';
            header("Location: login usuario.php");
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

function validarEmail($email)
{
    $email = trim($email);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">';
        echo '<strong class="font-bold">¡Error!</strong>';
        echo '<span class="block sm:inline">El formato es incorrecto, intentalo de nuevo</span>';
        echo '</div>';
    }
    return $email;
}


// Función para guardar la imagen en el servidor y obtener la ruta
function guardarImagen()
{
    if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] === 0) {
        $target_dir = IMAGE_BASE_PATH; // Ruta relativa al directorio de destino
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
                echo "No se pudo subir";
                return "";
            }
        } else {
            echo "Error en la validación del archivo.";
            return "";
        }
    }

    return "";
}
?>