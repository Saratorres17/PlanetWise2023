<?php
include("../functions/conexion.php");

session_start();

$db = new DatabaseConnection();
$conexion = $db->getConnection();

if (isset($_GET['id'])) {
    $blog_id = $_GET['id'];
} else {
    echo "<script>alert('Dato nulo!');  window.location.href = '/src/php/admin/Dashboard- Publicaciones.php' </script>";
}

$query = "SELECT * FROM registroinformacion1 WHERE id = :blog_id";
$stmt = $conexion->prepare($query);
$stmt->bindParam(":blog_id", $blog_id, PDO::PARAM_INT);
$stmt->execute();
$blog = $stmt->fetch(PDO::FETCH_ASSOC);


if ($_SERVER["REQUEST_METHOD"] === "POST") {
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

            $update_query = "UPDATE registroinformacion1 SET titulo = :titulo, descripcion = :descripcion,  informacion = :informacion, foto_path = :foto_path WHERE id = :blog_id";
            $update_stmt = $conexion->prepare($update_query);
            $update_stmt->bindParam(":titulo", $titulo);
            $update_stmt->bindParam(":descripcion", $descripcion);
            $update_stmt->bindParam(":informacion", $informacion);
            $update_stmt->bindParam(":foto_path", $foto_path);
            $update_stmt->bindParam(":blog_id", $blog_id, PDO::PARAM_INT);
            $update_stmt->execute();

            echo '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">';
            echo '<strong class="font-bold">¡Actualizacion exitosa!</strong>';
            echo '<span class="block sm:inline">La actualizacion se ha realizado correctamente.</span>';
            echo '</div>';
            header("Location: /src/php/admin/Dashboard- Publicaciones.php");
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

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/dist/images/leaf.png">
    <title>editar informacion del blog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="bg-white dark:bg-gray-900">
        <div class="flex justify-center h-screen">
            <div class="hidden bg-cover lg:block lg:w-2/3" style="background-image: url(https://img.freepik.com/foto-gratis/hombre-recogiendo-botellas-plastico-esparcidas-suelo_1268-20033.jpg?w=1380&t=st=1691730428~exp=1691731028~hmac=98be64395d149abaad489f52b751e9e7b7449b55fd1ad634fbc4b86b11a5267e)">
                <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                    <div>
                        <p class="max-w-xl mt-3 text-gray-300 text-2xl">Juntar materiales plásticos para ser recliados ayudaria tanto al medio ambiente como a los animales abandonados. ¿Quieres enseñarnos que acciones haces para ayudar al medio ambiente?</p> <br>
                    </div>
                </div>
            </div>

            <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
                <div class="flex-1">
                    <div class="text-center">
                        <h2 class="text-4xl font-bold text-center text-gray-700 dark:text-white">Edita la informacion!</h2>
                    </div>
                    <div class="mt-8">
                        <form>
                            <div>
                                <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Titulo</label>
                                <input type="text" name="info" id="info" placeholder="Ingresa el titulo" value="<?php echo $blog['titulo'] ?>" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" /> <br>
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Descripcion</label>
                                <input type="text" name="info" id="info" placeholder="Ingresa la descripcion" value="<?php echo $blog['descripcion'] ?>" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div class="mt-6">
                                <div class="flex justify-between mb-2">
                                    <label for="info" class="text-sm text-gray-600 dark:text-gray-200">Informacion</label>

                                </div>

                                <input type="text" name="password" id="" placeholder="Ingresa tu informacion" value="<?php echo $blog['informacion'] ?>" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" /><br>
                            </div>

                            <div class="mb-4">


                                <!-- funcion de la foto -->
                                <div class="p-4">
                                    <form>
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
                                    </form>
                                </div>

                                <script>
                                    const fotoInput = document.getElementById('foto');
                                    const previewDiv = document.getElementById('preview');
                                    const imagePreviewDiv = document.getElementById('imagePreview');

                                    fotoInput.addEventListener('change', handleFileSelect, false);

                                    previewDiv.addEventListener('dragover', handleDragOver, false);
                                    previewDiv.addEventListener('dragleave', handleDragLeave, false);
                                    previewDiv.addEventListener('drop', handleFileSelect, false);

                                    function handleDragOver(event) {
                                        event.preventDefault();
                                        previewDiv.classList.add('border-blue-500');
                                    }

                                    function handleDragLeave(event) {
                                        event.preventDefault();
                                        previewDiv.classList.remove('border-blue-500');
                                    }

                                    function handleFileSelect(event) {
                                        event.preventDefault();
                                        previewDiv.classList.remove('border-blue-500');

                                        const file = event.type === 'drop' ? event.dataTransfer.files[0] : fotoInput.files[0];
                                        if (!file || !file.type.startsWith('image/')) {
                                            alert('Por favor, selecciona un archivo de imagen válido.');
                                            return;
                                        }

                                        const reader = new FileReader();
                                        reader.onload = function(e) {
                                            const img = document.createElement('img');
                                            img.src = e.target.result;
                                            img.classList.add('max-w-full', 'mt-4');
                                            imagePreviewDiv.innerHTML = '';
                                            imagePreviewDiv.appendChild(img);

                                            const deleteBtn = document.createElement('button');
                                            deleteBtn.innerText = 'Eliminar Foto';
                                            deleteBtn.classList.add('mt-2', 'px-2', 'py-1', 'bg-red-500', 'text-white', 'rounded');
                                            deleteBtn.addEventListener('click', function() {
                                                imagePreviewDiv.innerHTML = '';
                                            });
                                            imagePreviewDiv.appendChild(deleteBtn);
                                        }
                                        reader.readAsDataURL(file);
                                    }
                                </script>
                                <!-- funcion de la foto -->

                                <div class="mt-6">
                                    <button class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-green-500 rounded-md hover:bg-green-300 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                        Cambiar
                                    </button>
                                    <div class="flex justify-between mb-2">

                                        <center><a href="/src/php/admin/Dasboard adm.php" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Regresar</a></center>
                                    </div>
                                </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>