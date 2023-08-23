<?php
include("conexion.php");


$db = new DatabaseConnection(); // Crea una instancia de la conexión
$conexion = $db->getConnection(); // Obtiene la conexión


if (isset($_GET['id'])) {
    $datocurioso_id = $_GET['id'];
} else {
    echo "<script>alert('Dato nulo!');  window.location.href = '../../php/admin/curiosidades1.php' </script>";
}

$query = "SELECT * FROM datoscuriosos WHERE id = :datocurioso_id";
$stmt = $conexion->prepare($query);
$stmt->bindParam(":datocurioso_id", $datocurioso_id, PDO::PARAM_INT);
$stmt->execute();
$datocurioso = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    try {
        $titulo = validarCampo($_POST["titulo"]);
        $informacion = validarCampo($_POST["informacion"]);
        $fuente = validarCampo($_POST["fuente"]);

        if (empty($titulo) || empty($informacion) || empty($fuente) || empty($_FILES["foto"]["name"])) {
            echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">';
            echo '<strong class="font-bold">¡Error!</strong>';
            echo '<span class="block sm:inline"> Por favor, completa todos los campos obligatorios.</span>';
            echo '</div>';
        } else {
            // Guardar la imagen en el servidor
            $foto_path = guardarImagen();
            // Insertar datos en la base de datos
            $update_query = "UPDATE datoscuriosos SET titulo = :titulo, informacion = :informacion, fuente = :fuente, foto_path = :foto_path WHERE id = :datocurioso_id";
            $update_stmt = $conexion->prepare($update_query);
            $update_stmt->bindParam(":titulo", $titulo);
            $update_stmt->bindParam(":informacion", $informacion);
            $update_stmt->bindParam(":fuente", $fuente);
            $update_stmt->bindParam(":foto_path", $foto_path);
            $update_stmt->bindParam(":datocurioso_id", $datocurioso_id, PDO::PARAM_INT);
            $update_stmt->execute();

            echo '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">';
            echo '<strong class="font-bold">¡Actualizacion exitosa!</strong>';
            echo '<span class="block sm:inline">La actualizacion se ha realizado correctamente.</span>';
            echo '</div>';
            header("Location: /src/php/admin/curiosidades1.php");
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
        $target_dir = IMAGE_BASE_PATH;
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["foto"]["tmp_name"]);
        if ($check === false) {
            $uploadOk = 0;
        }

        if ($_FILES["foto"]["size"] > 1000000) {
            $uploadOk = 0;
        }

        if ($imageFileType !== "jpg" && $imageFileType !== "jpeg" && $imageFileType !== "png" && $imageFileType !== "gif") {
            $uploadOk = 0;
        }

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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/dist/images/leaf.png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
    <title>Editar curiosidad</title>
</head>

<body>
    <div class="mt-8 flex justify-center content-center flex-row  transition-transform duration-300 ">
        <div class="flex-0">
            <div class="text-center">
                <br><br>
                <h2 class="text-4xl font-bold text-center text-gray-700 dark:text-white">Registra la informacion!</h2>
            </div>
            <form method="post" action="" enctype="multipart/form-data">
                <div>
                    <label for="text" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Titulo</label>

                    <input type="text" name="titulo" id="info" placeholder="Ingresa el titulo" value="<?php echo $datocurioso['titulo']; ?>" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" /> <br>
                </div>


                <div class="mt-6">
                    <div class="flex justify-between mb-2">
                        <label for="info" class="text-sm text-gray-600 dark:text-gray-200 ">Informacion</label>

                    </div>

                    <input type="text" name="informacion" placeholder="Ingresa tu informacion" value="<?php echo $datocurioso['informacion']; ?>" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" /><br>
                </div>
                <div>
                    <label for="text" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Fuente</label>
                    <input type="text" name="fuente" id="info" placeholder="Ingresa la fuente" value="<?php echo $datocurioso['fuente']; ?>" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>



                <!-- funcion de la foto -->
                <div class="p-4">
                    <div class="border-4 border-dashed border-gray-300 rounded-lg p-8">
                        <label for="foto" class=" text-sm font-bold text-gray-700">Arrastra y suelta una foto aquí:</label>
                        <input type="file" id="foto" name="foto" class="hidden" accept="image/*">
                        <div id="preview" class="mt-4">
                            <p class="text-gray-500">Vista previa de la foto</p>
                            <div id="imagePreview">
                                <?php if (!empty($datocurioso["foto_path"])) : ?>
                                    <img id="imageDisplay" src="<?= $datocurioso["foto_path"] ?>" class="max-w-full mt-4">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- funcion de la foto -->
                <div class="mt-6">
                    <button type="submit" class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-green-500 rounded-md hover:bg-green-300 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        Registrar
                    </button>
                    <div class="flex justify-between mb-2">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

<script>
    // Función para mostrar la vista previa de la imagen seleccionada
    function showImagePreview(input) {
        const preview = document.getElementById("imageDisplay");
        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
            };
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
        }
    }

    // Escuchar cambios en el input de imagen y mostrar la vista previa
    const inputFoto = document.getElementById("foto");
    inputFoto.addEventListener("change", function() {
        showImagePreview(this);
    });
</script>


</html>