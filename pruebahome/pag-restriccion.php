<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css modo oscuro/estilos.css">
    <link rel="stylesheet" href="../src/pantallacarga.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <title>pag-restriccion</title>
</head>

<body class="flex items-center justify-center h-screen bg-gray-100 oculto">

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
      new google.translate.TranslateElement(
        {
          pageLanguage: "es",
          includedLanguages: "fr,en,es,pt,zh-CN,ru",
        },
        "google_translate_element"
      );
    }
  </script>
  <!--FIN DEL SCRIPT DEL TRADUCTOR DE GOOGLE-->

          <!--DIV DEL TRADUCTOR (Menú de idiomas)-->
          <div class="md:relative md:left-5-4 bottom-64  right-64" id="google_translate_element"></div>
        <!--FIN DEL TRADUCTOR-->

    <div class="w-full md:w-1/3">
      <div class="flex flex-col p-5 rounded-lg shadow bg-white">
        <div class="flex flex-col items-center text-center">
          <div class="inline-block p-4 bg-yellow-50 rounded-full">
            <svg class="w-12 h-12 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.99L19.53 19H4.47L12 5.99M12 2L1 21h22L12 2zm1 14h-2v2h2v-2zm0-6h-2v4h2v-4z"/></svg>
          </div>
          <h2 class="mt-2 font-semibold text-gray-800">Registrate para seguir leyendo</h2>
          <p class="mt-2 text-sm text-gray-600 leading-relaxed">¿Listo para unirte a nuestra comunidad comprometida con el cambio? Regístrate en nuestra página y sé parte activa en la construcción de un futuro más sostenible y consciente. ¡Esperamos contar contigo!</p>
        </div>
  
        <div class="flex items-center mt-3">
          <a href="../pruebahome/index.php" class="flex-1 px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium rounded-md">
          <center>Regresar</center>
          </a>
  
          <a href="../src/php/functions/registro usuario.php" class="flex-1 px-4 py-2 ml-2 bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-medium rounded-md">
          <center>Registrate</center>
          </a>
        </div>
      </div>
    </div>
     <!--Script de la página de carga-->  
     <script src="../src/js/load.js"></script>    
  </body>
</html>