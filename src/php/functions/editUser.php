<?php
include("conexion.php");


session_start();

$db = new DatabaseConnection(); // Crea una instancia de la conexión
$conexion = $db->getConnection(); // Obtiene la conexión

// obtener el id dentro de una variable
$usuario_id = $_SESSION["user_id"];

$data_usuarios = $conexion->prepare("SELECT * FROM registrousuario WHERE id = :usuario_id");
$data_usuarios->bindParam(":usuario_id", $usuario_id, PDO::PARAM_INT);
$data_usuarios->execute();
$data_usuarios = $data_usuarios->fetch(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {

        $firstName = validarCampo($_POST["firstName"]);
        $lastName = validarCampo($_POST["lastName"]);
        $email = validarCampo($_POST["email"]);
        $interests = validarCampo($_POST["interests"]);
        $gender = validarCampo($_POST["gender"]);

        $password = $_POST["old-password"];
        
        $newpassword = validarCampo($_POST["new-password"]);

        if (!empty($password)) {
           
            $samePassword = password_verify($password, $data_usuarios["contraseña"]);
             
            if ($samePassword) {
               
                $hashedPassword = password_hash($newpassword, PASSWORD_DEFAULT);
            }

        };


        if ($_FILES["foto"]["error"] !== 4) {  // 4 = UPLOAD_ERR_NO_FILE
            // Eliminar la foto existente antes de guardar la nueva
            if (!empty($data_usuarios['foto_path']) && file_exists($data_usuarios['foto_path'])) {
                unlink($data_usuarios['foto_path']);
            }

            // Guardar la imagen en el servidor y obtener la ruta
            $foto_path = guardarImagen();
    
        } else {
            // Mantener la ruta de la foto existente en la base de datos
            $foto_path = $data_usuarios['foto_path'];
        }

        // empty($firstName) || empty($lastName) || empty($email) || empty($interests) || empty($gender) || empty($hashedPassword)
        if (empty($firstName) || empty($lastName) || empty($email) || empty($interests) || empty($gender)) {
            echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">';
            echo '<strong class="font-bold">¡Error!</strong>';
            echo '<span class="block sm:inline"> Por favor, completa todos los campos obligatorios.</span>';
            echo '</div>';
        } 
        
        else if(!$samePassword){
            echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">';
            echo '<strong class="font-bold">¡Error!</strong>';
            echo '<span class="block sm:inline"> Antigua contraseña invalida</span>';
            echo '</div>';
        }
        
        else {

            $queryNormal = "UPDATE registrousuario SET firstName = :firstName, lastName = :lastName, email = :email, interests = :interests, gender = :gender ";

            $camposActualizar = [
                ":firstName" => $firstName,
                ":lastName" => $lastName,
                ":email" => $email,
                ":interests" => $interests,
                ":gender" => $gender,
                ":usuario_id" => $usuario_id
            ];

            $nuevaPasswordSQL = ",contraseña = :password";
            $imagenSQL = ",foto_path = :foto_path";

            if (isset($hashedPassword)) {
                $queryNormal = $queryNormal . $nuevaPasswordSQL;
                $camposActualizar = [
                    ...$camposActualizar,
                    ":password" => $hashedPassword
                ];
            }

            if($foto_path){
                $queryNormal = $queryNormal . $imagenSQL;
                $camposActualizar = [
                    ...$camposActualizar,
                    ":foto_path" => $foto_path
                ];
            }

            $queryNormal =  $queryNormal . " WHERE id = :usuario_id";

            // echo $queryNormal;
            // echo "<pre>";
            // var_dump($camposActualizar);
            // echo "</pre>";
                    
            // die();
            $statement = $conexion->prepare($queryNormal);
            $statement->execute($camposActualizar);

            echo '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">';
            echo '<strong class="font-bold">¡Actualizacion exitosa!</strong>';
            echo '<span class="block sm:inline">La actualizacion se ha realizado correctamente.</span>';
            echo '</div>';
            session_destroy();
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

// Función para guardar la imagen en el servidor y obtener la ruta
function guardarImagen()
{
    if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] === 0) {
        
        $target_dir = IMAGE_BASE_PATH; // Ruta relativa al directorio de destino
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Comprobar si el archivo es una imagen válida
        // $check = getimagesize($_FILES["foto"]["tmp_name"]);
        
        // if ($check === false) {
        //     $uploadOk = 0;
        // }

        // // Comprobar si el archivo ya existe
        // if (file_exists($target_file)) {
        //     $uploadOk = 0;
        // }

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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="/dist/images/leaf.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/lib/index.min.css">
    <link rel="stylesheet" href="../../../src/css modo oscuro/estilos.css">
    <link rel="stylesheet" href="../../../src/pantallacarga.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Registro de usuario</title>
</head>

<body class="bg-no-repeat oculto bg-cover bg-fixed" style="background-image: url(../../../../../dist/images/ondas.jpg);">

    <!--Pantalla de carga-->
    <div class=" flex justify-center items-center h-screen z-10" id="onload">
        <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

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

    <!--DIV DEL TRADUCTOR (Menú de idiomas)-->
    <div class="md:relative md:left-5-4 z-20 top-12 " id="google_translate_element"></div>
    <!--FIN DEL TRADUCTOR-->

    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">
            <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg" style="background-image: url('../../../../../dist/images/jirafa.jpg')"></div>
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Actualiza tu informacion!</h3>
                    <form method="post" action="" class="px-8 pt-6 pb-8 mb-4 bg-white rounded" enctype="multipart/form-data">
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="Escribe tu primer nombre">
                                    Primer nombre
                                </label>
                                <input name="firstName" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="text" placeholder="Escribe tu primer nombre" value="<?= $data_usuarios["firstName"] ?>" />
                            </div>
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                                    Apellido
                                </label>
                                <input name="lastName" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="lastName" type="text" placeholder="Escribe tu apellido" value="<?= $data_usuarios["lastName"] ?>" />
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                Correo electronico
                            </label>
                            <input name="email" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Escribe tu correo" value="<?= $data_usuarios["email"] ?>" />
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="text">
                                Ingresa datos de interes sobre ti
                            </label>
                            <input name="interests" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="text" type="text" placeholder="Escribe tus datos" value="<?= $data_usuarios["interests"] ?>" />
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="genero">Selecciona tu género</label>
                            <select name="gender" id="opciones" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                                <option value="Femenino">Femenino</option>
                                <option value="Masculino">Masculino</option>
                            </select>
                        </div><br>

                        <!-- funcion de la foto -->
                        <div class="p-4">
                            <div class="border-4 border-dashed border-gray-300 rounded-lg p-8">
                                <label for="foto" class=" text-sm font-bold text-gray-700">Arrastra y suelta una foto aquí:</label>
                                <input type="file" id="foto" name="foto" class="hidden" accept="image/*">
                                <div id="preview" class="mt-4">
                                    <p class="text-gray-500">Vista previa de la foto</p>
                                    <div id="imagePreview">
                                        <?php if (!empty($data_usuarios["foto_path"])) : ?>
                                            <img src="<?= $data_usuarios["foto_path"] ?>" class="max-w-full mt-4">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- funcion de la foto -->
                        <br><br>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2  text-sm font-bold text-gray-700" for="password">
                                    Antigua Contraseña
                                </label>
                                <input name="old-password" class=" w-96 px- py-2 mb-3 text-sm leading-tight text-gray-700 border border-white-500 rounded shadow appearance-none focus:outline-none   focus:shadow-outline" id="old" type="password" placeholder="******************" />
                            </div>
                            <img src="../../../dist/images/ojito2.png" alt="ojito" class="absolute h-5 w-5 ml-96 mt-9 z-10 hover:opacity-50" id="eyen">
                            <!--ojito-->
                            <script>
                                var eye = document.getElementById('eyen');
                                var input = document.getElementById('old')
                                eye.addEventListener("click", function() {
                                    if (input.type == "password") {
                                        input.type = "text"
                                        eye.style.opacity = 0.8
                                    } else {
                                        input.type = "password"
                                        eye.style.opacity = 0.2
                                    }

                                });
                            </script>
                            <div class="md:ml-2">

                            </div>
                        </div>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2  text-sm font-bold text-gray-700" for="password">
                                    Nueva Contraseña
                                </label>
                                <input name="new-password" class=" w-96 px- py-2 mb-3 text-sm leading-tight text-gray-700 border border-white-500 rounded shadow appearance-none focus:outline-none   focus:shadow-outline" id="new" type="password" placeholder="******************"/>
                            </div>
                            <img src=" ../../../dist/images/ojito.png" alt="ojito" class="absolute h-5 w-5 ml-96 mt-9 z-10 hover:opacity-50" id="ojite">
                                <!--ojito-->
                                <script>
                                    var eye1 = document.getElementById('ojite');
                                    var input1 = document.getElementById('new')
                                    eye1.addEventListener("click", function() {
                                        if (input1.type == "password") {
                                            input1.type = "text"
                                            eye1.style.opacity = 0.8
                                        } else {
                                            input1.type = "password"
                                            eye1.style.opacity = 0.2
                                        }

                                    });
                                </script>
                                <div class="md:ml-2">

                                </div>
                            </div>
                            <div class="mb-6 text-center">

                                <a href="/src/php/functions/logout.php"><button class="w-full px-4 py-2 font-bold text-white bg-green-500 rounded-full hover:bg-green-700 focus:outline-none focus:shadow-outline" type="submit">
                                        Registra tus cambios
                                    </button></a>

                            </div>
                            <hr class="mb-6 border-t" />
                            <div class="text-center">
                                <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="../../../src/php/functions/login usuario.php">
                                    Ya tienes una cuenta? Ingresa!
                                </a>
                            </div>
                            <div class="flex justify-between mb-2">
                                <a href="/pruebahome/perfil de usuario.php" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Regresar</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
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
    <!--Script de la página de carga-->
    <script src="../../js/load.js"></script>
</body>

</html>