<?php
include("controlador_register.php");
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
	<title>Registro de usuario</title>
</head>
<body class="bg-no-repeat bg-cover bg-fixed" style="background-image: url(../../../../../dist/images/ondas.jpg);">
  <!--INICIO DEL SCRIPT DEL TRADUCTOR DE GOOGLE-->
  <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script>
    function googleTranslateElementInit(){
      new google.translate.TranslateElement(
        {pageLanguage: "es"}, "google_translate_element"
      );
    }
  </script>
  <!--FIN DEL SCRIPT DEL TRADUCTOR DE GOOGLE-->

          <!--DIV DEL TRADUCTOR (Menú de idiomas)-->
          <div class="md:relative md:left-5-4" id="google_translate_element"></div>
        <!--FIN DEL TRADUCTOR-->
	<div class="container mx-auto">
		<div class="flex justify-center px-6 my-12">
			<div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
    style="background-image: url('../../../../../dist/images/jirafa.jpg')"
></div>
			<div class="w-full xl:w-3/4 lg:w-11/12 flex">
				<div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
					<h3 class="pt-4 text-2xl text-center">Crea una cuenta!</h3>
					<form method="post" action="" class="px-8 pt-6 pb-8 mb-4 bg-white rounded" enctype="multipart/form-data">
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="Escribe tu primer nombre">
									Primer nombre
								</label>
								<input name="firstName" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="text" placeholder="Escribe tu primer nombre" />
							</div>
							<div class="md:ml-2">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
									Apellido
								</label>
								<input name="lastName" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="lastName" type="text" placeholder="Escribe tu apellido" />
							</div>
						</div>
						<div class="mb-4">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="email">
								Correo electronico
							</label>
							<input name="email" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Escribe tu correo" />
						</div>
						<div class="mb-4">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="text">
								Ingresa datos de interes sobre ti
							</label>
							<input name="interests" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="text" type="text" placeholder="Escribe tus datos" />
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
									<div id="imagePreview"></div>
								</div>
							</div>
						</div>
						<!-- funcion de la foto -->
						<br><br>
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="password">
									Contraseña
								</label>
								<input name="password" class="w-full px-2 py-2 mb-3 text-sm leading-tight text-gray-700 border border-white-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************" />
							</div>
							<div class="md:ml-2">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
									Confirma tu contraseña
								</label>
								<input name="c_password" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="c_password" type="password" placeholder="******************" />
							</div>
						</div>
						<div class="mb-6 text-center">
							<button class="w-full px-4 py-2 font-bold text-white bg-green-500 rounded-full hover:bg-green-700 focus:outline-none focus:shadow-outline" type="submit">
								Registra tu cuenta
							</button>
						</div>
						<hr class="mb-6 border-t" />
						<div class="text-center">
							<a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="../../../src/php/functions/login usuario.php">
								Ya tienes una cuenta? Ingresa!
							</a>
						</div>
						<div class="flex justify-between mb-2">
							<center><a href="../../../pruebahome/index.php" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Regresar</a></center>
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
</body>

</html>