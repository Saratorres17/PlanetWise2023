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
					<h3 class="pt-4 text-2xl text-center">Crea una cuenta!</h3>
					<form method="post" name="registro" class="px-8 pt-6 pb-8 mb-4 bg-white rounded" enctype="multipart/form-data" onsubmit="return validarPassword();">
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="Escribe tu primer nombre">
									Primer nombre
								</label>
								<input name="firstName" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="text" value="<?php echo $previousFirstName; ?>" placeholder="Escribe tu primer nombre" />
							</div>
							<div class="md:ml-2">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
									Apellido
								</label>
								<input name="lastName" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="lastName" type="text" placeholder="Escribe tu apellido" value="<?php echo $previousLastName; ?>" />
							</div>
						</div>
						<div class="mb-4">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="email">
								Correo electronico
							</label>
							<input name="email" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Escribe tu correo" value="<?php echo $previousEmail; ?>" />
						</div>
						<div class="mb-4">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="text">
								Ingresa datos de interes sobre ti
							</label>
							<input name="interests" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="text" type="text" placeholder="Escribe tus datos" value="<?php echo $previousInterests; ?>" />
						</div>
						<div class="mb-4">
							<label class="block mb-2 text-sm font-bold text-gray-700" for="genero">Selecciona tu género</label>
							<select name="gender" id="opciones" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline ">
								<option value="Femenino" <?php if ($previousGender === "Femenino") echo "selected"; ?>>Femenino</option>
								<option value="Masculino" <?php if ($previousGender === "Masculino") echo "selected"; ?>>Masculino</option>
							</select>
						</div><br>

						<!-- funcion de la foto -->
						<div class="p-4">
							<div class="border-4 border-dashed border-gray-300 rounded-lg p-8 cursor-pointer">
								<label for="foto" class=" text-sm font-bold text-gray-700">Arrastra y suelta una foto aquí:
									<input type="file" id="foto" name="foto" class="hidden" accept="image/*">
									<div id="preview" class="mt-4">
										<p class="text-gray-500">Vista previa de la foto</p>
										<div id="imagePreview">
											<?php
											if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] !== 4) {
												echo '<input type="hidden" name="foto_previous" value="' . $previousFoto . '">';
											}
											?>
										</div>
									</div>
							</div>
							</label>
						</div>
						<!-- funcion de la foto -->
						<br><br>
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								<label class="block mb-2  text-sm font-bold text-gray-700" for="password">
									Contraseña
								</label>
								<input name="password" class="w-80 px- py-2 mb-3 text-sm leading-tight text-gray-700 border border-white-500 rounded shadow appearance-none focus:outline-none md:w-96 focus:shadow-outline" id="password" type="password" placeholder="******************" value="<?php echo $previousPaswword; ?>" />
							</div>
							<img src="../../../dist/images/ojito.png" alt="ojito" class="relative h-5 w-5 left-72 bottom-14 z-10 hover:opacity-50 md:left-0 md:top-8" id="Eye">
							<!--ojito-->
							<script>
								var eye = document.getElementById('Eye');
								var input = document.getElementById('password')
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

						<div class="flex items-center">
    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
        <a href="/pruebahome/termino y condiciones.php"> Acepto los términos y condiciones.</a>
    </label>
</div>
<br><br>
						<div class="mb-6 text-center">
							<button class="w-full px-4 py-2 font-bold text-white bg-green-500 rounded-full hover:bg-green-700 focus:outline-none focus:shadow-outline" type="submit" onclick="validarPassword()">
								Registra tu cuenta
							</button>
							<script>
    function validarPassword() {
        const password = document.registro.password.value;
        const decimal = /^.{8,20}$/;

        if (!password.match(decimal)) {
            alert("Su contraseña debe tener entre 8 y 20 caracteres.");
            return false; // Evita que el formulario se envíe
        } else {
            // La contraseña es válida, permite que el formulario se envíe
            return true;
        }
    }
	</script>
						</div>
						<hr class="mb-6 border-t" />
						<div class="text-center">
							<a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="../../../src/php/functions/login usuario.php">
								Ya tienes una cuenta? Ingresa!
							</a>
						</div>
						<div class="flex justify-between mb-2">
							<a href="../../../pruebahome/index.php" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Regresar</a>
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