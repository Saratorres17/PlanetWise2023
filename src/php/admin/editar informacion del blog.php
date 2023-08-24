<?php



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
                                <input type="text" name="info" id="info" placeholder="Ingresa el titulo" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" /> <br>
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Descripcion</label>
                                <input type="text" name="info" id="info" placeholder="Ingresa la descripcion" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div class="mt-6">
                                <div class="flex justify-between mb-2">
                                    <label for="info" class="text-sm text-gray-600 dark:text-gray-200">Informacion</label>

                                </div>

                                <input type="password" name="password" id="password" placeholder="Ingresa tu informacion" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" /><br>
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
                                                <div id="imagePreview"></div>
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