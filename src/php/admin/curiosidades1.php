<?php
include("../functions/conexion.php");
include("../functions/adminClasses.php");
include("../admin/controladorRblogADM.php");
session_start();

// Crear una instancia de DatabaseConnection
$database = new DatabaseConnection();
$pdo = $database->getConnection();

// Consulta para obtener los datos de los usuarios
$query = "SELECT * FROM datoscuriosos";
$stmt = $pdo->prepare($query);
$stmt->execute();
$datoscuriosos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" href="/dist/images/leaf.png">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../src/css modo oscuro/estilos.css">
  <title>Curiosidades adm</title>
</head>

<body class="flex">

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

  <div class="flex">
    <!-- Sidebar -->
    <div class="fixed bg-gray-800 text-white py-10 px-6 bg-sidebar-image w-max h-screen md:w-max">
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

    <div class="relative transition-transform duration-300 transform translate-x-72 md:translate-x-96">
      <div>
        <?php foreach ($datoscuriosos as $datos) : ?>
          <div class="w-full max-w-md mx-4 my-4">
            <!-- Card 2 -->
            <div class="md:shadow-xl rounded-lg">
              <div class="h-56 md:flex-shrink-0">
                <img src="<?php echo $datos['foto_path'] ?>" alt="botellas" class="object-cover h-full w-full rounded-lg rounded-b-none">
              </div>
              <div class="p-4 bg-white bg-opacity-50 rounded-b-lg">
                <p class="font-normal text-lg">
                  <b class="font-serif"><?php echo $datos['titulo'] ?></b> <br>
                  <?php echo $datos['informacion'] ?>
                </p>
                <div class="flex">
                  <br>
                  <a href="../functions/editCuriosidad.php?id=<?php echo $datos['id'] ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="60px" viewBox="0 -0.5 21 21" version="1.1" class="__web-inspector-hide-shortcut__">
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Dribbble-Light-Preview" transform="translate(-59.000000, -400.000000)" fill="#000000">
                          <g id="icons" transform="translate(56.000000, 160.000000)">
                            <path d="M3,260 L24,260 L24,258.010742 L3,258.010742 L3,260 Z M13.3341,254.032226 L9.3,254.032226 L9.3,249.950269 L19.63095,240 L24,244.115775 L13.3341,254.032226 Z" id="edit_fill-[#1480]">
                            </path>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </a>

                  <a href="../functions/deleteItem.php?id=<?php echo $datos['id'] ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="60px" viewBox="0 0 76 76" version="1.1" baseProfile="full" enable-background="new 0 0 76.00 76.00" xml:space="preserve">
                      <path fill="#000000" fill-opacity="1" stroke-width="0.2" stroke-linejoin="round" d="M 25.3333,23.75L 50.6667,23.75C 51.5411,23.75 51.8541,27.3125 51.8541,27.3125L 24.1458,27.3125C 24.1458,27.3125 24.4589,23.75 25.3333,23.75 Z M 35.625,19.7917L 40.375,19.7917C 40.8122,19.7917 41.9583,20.9378 41.9583,21.375C 41.9583,21.8122 40.8122,22.9584 40.375,22.9584L 35.625,22.9584C 35.1878,22.9584 34.0416,21.8122 34.0416,21.375C 34.0416,20.9378 35.1878,19.7917 35.625,19.7917 Z M 27.7083,28.5L 48.2916,28.5C 49.1661,28.5 49.875,29.2089 49.875,30.0834L 48.2916,53.8334C 48.2916,54.7078 47.5828,55.4167 46.7083,55.4167L 29.2917,55.4167C 28.4172,55.4167 27.7083,54.7078 27.7083,53.8334L 26.125,30.0834C 26.125,29.2089 26.8339,28.5 27.7083,28.5 Z M 30.0833,31.6667L 30.4792,52.25L 33.25,52.25L 32.8542,31.6667L 30.0833,31.6667 Z M 36.4167,31.6667L 36.4167,52.25L 39.5833,52.25L 39.5833,31.6667L 36.4167,31.6667 Z M 43.1458,31.6667L 42.75,52.25L 45.5208,52.25L 45.9167,31.6667L 43.1458,31.6667 Z " />
                    </svg></a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>

    <!-- form -->
    <div class="mt-8  ml-18 transition-transform duration-300 transform translate-x-96 w-max md:translate-x-96">
      <div class="flex-1">
        <div class="text-center">
          <br><br>
          <h2 class="text-4xl font-bold text-center text-gray-700 dark:text-white">Registra la información!</h2>
        </div>
        <form method="post" action="" enctype="multipart/form-data">
          <div>
            <label for="text" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Titulo</label>

            <input type="text" name="titulo" id="info" placeholder="Ingresa el titulo" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" value="<?php echo $previousTitulo ?>" /> <br>
          </div>


          <div class="mt-6">
            <div class="flex justify-between mb-2">
              <label for="info" class="text-sm text-gray-600 dark:text-gray-200 ">Informacion</label>

            </div>
            <textarea name="informacion" placeholder="Ingresa tu info" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40  overflow-y-scroll resize-none" value="<?php echo $previousInfo ?>" id=""></textarea><br>
          </div>
          <div>
            <label for="text" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Fuente</label>
            <input type="text" name="fuente" id="info" placeholder="Ingresa la fuente" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" value="<?php echo $previousFuente ?>" />
          </div>



          <!-- funcion de la foto -->
          <div class="p-4">
            <div class="border-4 border-dashed border-gray-300 rounded-lg p-8 cursor-pointer w-3/4 h-1/3">
              <label for="foto" class=" text-sm font-bold text-gray-700">Arrastra y suelta una foto aquí:
                <input type="file" id="foto" name="foto" class="hidden" accept="image/*">
                <div id="preview" class="mt-4">
                  <p class="text-gray-500">Vista previa de la foto</p>
                  <div id="imagePreview" class="w-56"></div>
                </div>
            </div>
            </label>
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
</body>

</html>