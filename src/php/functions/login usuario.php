<?php
include("controlador_login.php");
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
  <title>inicio de sesion</title>
  <script type="text/javascript">
    function noRegresar() {
      window.history.forward()
    };
    setTimeout("noRegresar()", 0);
    window.onunload = function() {
      null
    };
  </script>
</head>

<body class="bg-no-repeat bg-cover" style="background-image: url(../../../../../dist/images/paisajenatural.jpeg);">
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

        <!--DIV DEL TRADUCTOR (Menú de idiomas)-->
        <div class="md:relative md:left-5-4 z-20 top-14 " id="google_translate_element"></div>
        <!--FIN DEL TRADUCTOR-->

	<div class="flex justify-center items-center h-screen ">
        <div class="bg-white p-8 rounded-md shadow-md flex flex-col items-center space-y-6">
            
            <h2 class="text-xl font-semibold">Iniciar Sesión</h2>
            <form class="flex flex-col space-y-4 w-64" method="post" action="">
                <input type="text" name="firstName" placeholder="Nombre de usuario" required class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300">
                <input type="password" name="Contraseña" placeholder="Contraseña" id="password" required class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300 ">
                <img src="../../../dist/images/ojito.png" alt="ojito" class="relative h-5 w-5 z-10 hover:opacity-50 left-56 bottom-12" id="Eye">
									<!--ojito-->
	                          <script>
								var eye = document.getElementById('Eye');
                                var input = document.getElementById('password')
                                eye.addEventListener("click", function() {
                                if(input.type == "password"){
                                    input.type = "text"
                                    eye.style.opacity=0.8
                                }else{
                                    input.type = "password"
                                    eye.style.opacity=0.5
                                }
                              })
                                </script>
        <button type="submit" class="bg-green-500 text-white py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring focus:border-blue-300">Iniciar Sesión</button>
      </form>
      <div class="flex justify-between mb-2">
        <center><a href="../../../pruebahome/index.php" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Regresar</a></center>
      </div>
    </div>
           <!--Script de la página de carga-->
           <script src="../../js/load.js"></script> 
  </div>
</body>

</html>