<?php
// Inclusión de 'conexion.php'
include("../../conexion.php");

// Inclusión de 'userClasses.php' en una ruta con espacios
include('../..\..\functions\userClasses.php');
session_start();

if(!isset($_SESSION["firstName"])){
  header("location: ../pruebahome\pag-restriccion.php");  
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/dist/images/leaf.png">
    <link rel="stylesheet" href="/src/scroll.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
    <title>Instituciones y leyes que respaldan el cuido del medio ambiente en El Salvador</title>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	  <link rel="stylesheet" href="/src/css modo oscuro/estilos.css">
    <link rel="stylesheet" href="../../../../pantallacarga.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="cursor-default oculto h-screen">
      <!--Pantalla de carga-->
      <div class=" flex justify-center items-center h-full z-10" id="onload">
    <div class="lds-ring">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!--Inicio header con sesion y sin sesion-->
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
  <!--FIN DEL SCRIPT DEL TRADUCTOR DE GOOGLE-->


  <!-- Navbar -->
  <?php
  if (isset($_SESSION['firstName'])) { ?>
    <nav class="justify-around py-4 shadow-md w-full fixed top-0 left-0 right-0 z-10">
      <!--DIV DEL TRADUCTOR (Menú de idi+omas)-->
      <div id="google_translate_element"></div>
      <!--FIN DEL TRADUCTOR-->

      <!-- Logo Container -->
      <div class="flex items-center">
        <!-- Logo -->
      
        <a href="/pruebahome/index.php" id="PlanetWise" class="text-2xl cursor-pointer text-gray-600 relative left-7">
          PlanetWise
        </a>
      </div>
      <ul class="flex xsm:hidden md:items-center md:static space-x-8"><!--No se si borrarlo-->

        <!-- Links Section -->

        <li><a href="../../../../../pruebahome/Curiosidades.php" class="hidden md:flex text-gray-600 hover:text-white cursor-pointer transition-colors duration-300">
            Datos curiosos
          </a></li>

        <li><a href="../../../../../pruebahome/blog.php" class="hidden md:flex text-gray-600 hover:text-white cursor-pointer transition-colors duration-300">
            Blog
          </a></li>

        <li><a href="../../../../../pruebahome/sobre nosotros.php" class="hidden md:flex text-gray-600 relative hover:text-white cursor-pointer transition-colors duration-300">
            Sobre nosotros
          </a></li>

        <!-- Icon Menu Section -->
        <div class="flex items-center   space-x-12">

          <a class="relative hidden md:flex left-5 text-gray-600 hover:text-white cursor-pointer transition-colors duration-300 font-semibold " href="/pruebahome/perfil de usuario.php"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="25px" viewBox="0 0 80 120" aria-hidden="true" role="img" class="iconify iconify--noto" preserveAspectRatio="xMidYMid meet">
              <path d="M57.1 71.88c-1.2.28-8.02.92-8.02.92s-.06 10.21 0 15.98c.07 6.9.56 11.83.49 16.12c-.08 4.58-.77 9.36-1.06 10.21s-1.55 3.45-1.34 3.94c.21.49 1.2.79 3.73.84c3.59.07 4.29-.49 4.5-1.27c.09-.34.35-17.18.63-19.92c.31-3.02.42-14.15.42-14.15l.65-12.67z" fill="#fa821b" />
              <path d="M92.36 80.68l-5.7 6.55l1.83 8.94s2.67 3.94 2.67 5.77c0 1.83-.28 6.6-.35 7.25c-.14 1.34-1.2 5.21-1.48 6.62c-.28 1.41-.63 2.82-.21 3.31s2.61.39 3.59.35c1.62-.07 2.39-.42 2.89-.7c.6-.34.63-6.9.77-10.35c.13-3.12.56-7.74.56-8.8s-1.97-3.24-2.96-5.21c-.7-1.41-1.41-3.45-1.41-4.72s-.2-9.01-.2-9.01z" fill="#fa821b" />
              <path fill="#fa821b" d="M35.04 11.67l-.23-4.83l3.19-.1l.89 4.27z" />
              <path d="M102.57 83.14s2.53-.4 4.22.63s3.16 3.07 3.14 6.45c-.01 2.66-.96 5.06-2.02 6.57c-.82 1.17-1.83 1.78-2.16 1.6s-.23-3.28-.8-5.44s-2.11-7.37-2.25-7.98c-.13-.61-.13-1.83-.13-1.83z" fill="#d57657" />
              <path d="M41.45 11.72s-2.78-1.54-5.92-.55s-4.82 3.27-6.04 5.48s-2.49 3.68-3.61 4.46c-2.37 1.65-8.02 3.61-6.57 8.17c1.09 3.44 6.8 1.97 10 1.74c3.19-.23 8.45-.09 8.45-.09l7.7-12.34l-4.01-6.87z" fill="#d57657" />
              <path d="M49.7 17.63l8.24-1.29l1.65 1.27s-2.46 4.79-4.96 6.03c-2.17 1.08-5.96.8-5.96.8s1.78 5.49 3.66 9.06c1.88 3.57 5.63 9.48 6.76 10.65s7.56 5.4 8.4 6.15c.84.75 3.94 7.23 3.94 7.23l-12.11.27l-17.45-33.65l7.83-6.52z" fill="#d57657" />
              <path d="M47.03 7.21l-3.89-1.13s-.8 3.1-1.22 3.89c-.42.8-2.58 1.92-2.82 3.1c-.23 1.17-.09 1.83-.09 1.83s-7.09-.66-7.88 5.49c-.39 2.98.36 4.93 1.27 6.34c1.2 1.86 2.94 2.56 3.1 2.96c.28.7 4.74 11.64 5.58 13.84c.84 2.21 6.99 15.63 7.09 16.61c.09.99-.42 2.53-.66 4.13c-.23 1.6-.75 6.29 1.03 9.85s5.73 7.04 6.1 8.31c.38 1.27 2.16 5.63 2.72 8.82c.56 3.19 1.41 10.04 1.78 12.67c.38 2.63 1.45 7.04 1.41 10.32c-.05 3.28-1.36 7.04-1.13 7.88c.23.84 1.97 1.6 3.94 1.5c1.97-.09 3.94-.99 4.04-1.5c.09-.52-.7-10.51-.89-12.62c-.19-2.11-.75-8.54-.38-13.84c.38-5.3 1.22-12.76 1.22-12.76s3.24-.33 4.6-.56s5.77-1.6 5.77-1.6s.66 3.57 1.69 8.92c1.03 5.35 1.83 10.65 1.41 12.62s-1.13 6.05-2.53 9.9s-3.52 9.76-3.24 10.37c.28.61 2.16 1.31 4.13 1.13c1.97-.19 3.28-.94 3.52-1.5s.8-6.29.99-6.95c.19-.66 4.65-13.37 5.07-16.47c.42-3.1 1.17-11.45 1.45-12.34c.28-.89 2.39-2.3 3.47-5.16c1.08-2.86 1.55-5.91 1.55-5.91s1.64 3.19 3.28 5.16s4.83 4.81 5.21 5.26c.65.75 2.06.14 1.03-1.22c-1.03-1.36-3.52-3.61-4.6-5.4c-1.08-1.78-3-6.19-3.33-7.32c-.33-1.13-1.54-3.27-1.99-4c-.73-1.17-4.85-8.07-7.29-8.73c-2.44-.66-5.98-1.44-10.01-1.4c-2.39.03-7.65-1.5-8.4-1.83c-.75-.33-2.67-1.27-2.67-1.27s-1.6-2.72-2.91-3.99s-4.55-2.58-5.35-3.38s-4.88-6.9-7.04-11.31s-4.32-8.02-4.79-9.85c-.47-1.83-.89-4.18-.89-4.18s4.27.23 6.85-.56s6.05-4.65 6.05-4.65s-2.72-2.58-6.71-2.49c-3.99.09-5.14.97-5.14.97s-.07-2.24.02-3.27c.1-1.02.48-4.68.48-4.68z" fill="#ffb305" />
              <path d="M23.16 25.59c-.75.69-1.27 1.63-.71 2.26c.66.74 1.62.3 2.32-.3c.71-.59 1.47-1.67.91-2.36c-.5-.62-1.56-.49-2.52.4z" fill="#2e2a32" />
              <path d="M42.43 21.24c0 2.41-1.98 4.5-4.46 4.5s-4.51-1.86-4.51-4.27s2.01-4.36 4.49-4.36s4.48 1.72 4.48 4.13z" fill="#fee2b2" />
              <path d="M35.39 21.27c.23-.55.41-1.17.96-1.64c.99-.84 2.73-.86 3.54.4c.94 1.45.31 2.96-.84 3.5c-1.04.49-2.58-.02-2.58-.02s-1.29.61-2.44.45c-.49-.07-1.25-.5-1.27-.92c-.02-.54.17-.73 1.36-.84c1.01-.11 1.15-.65 1.27-.93z" fill="#2e2a32" />
              <path d="M36.47 4.09c-2-.15-2.57.74-2.6 1.79c-.04 1.06.6 2.08 2.29 2.08s2.46-.6 2.46-2.11c0-1.34-1.23-1.69-2.15-1.76z" fill="#4d4d4d" />
              <path d="M42.6 5.39c-.7 1.58.14 2.86 1.87 3.48c1.76.63 3.24.28 3.63-1.51c.39-1.79-.56-2.6-1.55-3.06c-.98-.45-3.06-.92-3.95 1.09z" fill="#4d4d4d" />
              <path d="M43.26 26.83c.82.41.77 1.76.49 2.53c-.17.46-1.27 1.13-2.11.28c-.84-.84.36-3.45 1.62-2.81z" fill="#d57657" />
              <path d="M39.36 33.9c-.03.81.95 3.38 2.11 3.45c1.16.07 2.71-.6 2.6-1.44c-.11-.84-1.09-3.41-1.97-3.45c-.88-.04-2.71.39-2.74 1.44z" fill="#d57657" />
              <path d="M45.34 31.61c-1.26.65-.42 1.87.07 2.5c.49.63 1.55 1.51 2.29.95s.46-1.56.32-2.22c-.5-2.32-1.24-1.96-2.68-1.23z" fill="#d57657" />
              <path d="M48.33 36.61c-.68.43-1.48.67-.56 2.46c.92 1.79 2.6 6.19 4.5 5.24s.14-3.48-.56-4.82c-.7-1.33-1.58-4-3.38-2.88z" fill="#d57657" />
              <path d="M41.96 41.29c-.25 1.1 1.65 5.38 3.38 5.56c1.72.18 2.89-.88 2.89-1.79c0-.92-1.87-5.6-3.31-5.56s-2.78 1.02-2.96 1.79z" fill="#d57657" />
              <path d="M46.71 51.25c-.06.78 1.9 4.5 3.52 4.65s4.4-1.06 4.54-2.46c.14-1.41-1.48-5.07-3.31-5.24c-1.83-.18-4.68 2.07-4.75 3.05z" fill="#d57657" />
              <path d="M53.82 46.64c-.87.99-.39 1.13 1.55 3.48c.65.79 2.01 2.85 3.2 1.34c1.01-1.27.88-1.23-1.62-3.52c-.92-.84-2.39-2.14-3.13-1.3z" fill="#d57657" />
              <path d="M59.77 53.82c0 1.02 3.38 3.2 4.08 2.32s-1.02-3.7-1.97-3.94c-.95-.24-2.11.95-2.11 1.62z" fill="#d57657" />
              <path d="M52.63 60.83c1.9 2.36 3.1 1.76 4.19 2.29c1.09.53 3.13 1.96 3.91 1.94c1.23-.04 3.87-1.62 3.98-3.45c.11-1.83-3.41-5.6-5.77-6.02c-2.37-.43-8.04 3.09-6.31 5.24z" fill="#d57657" />
              <path d="M51.01 64.13c.06.38-.81 1.65-1.2 2.96c-.39 1.3-.42 3.13-.7 3.41c-.28.28-1.65.04-1.65.04s-.48-2-.32-4.75c.11-1.83.88-3.94.88-3.94s2.88 1.62 2.99 2.28z" fill="#d57657" />
              <path d="M53.51 65.05c-.56.21-1.69 1.48-2.15 2.89s-.88 3.91-.6 4.26c.28.35 7.85 3.91 9.12 3.73c1.27-.18 5.81-3.7 5.91-4.93c.11-1.23-.7-4.72-2.29-4.89c-1.58-.18-4.08 2.25-4.75 2.39c-.67.14-4.29-3.8-5.24-3.45z" fill="#d57657" />
              <path d="M66.14 57.66c.04.56 1.37 1.65 1.51 3.41c.14 1.76-1.27 3.27-1.27 3.91s1.76 4.24 2.39 4.15c1.34-.18 3.84-4.22 4.01-7.71c.11-2.11-.6-4.29-1.16-4.65c-.56-.35-2.15-.99-3.24-.67c-1.08.33-2.31.64-2.24 1.56z" fill="#d57657" />
              <path d="M76 59.35c-1.03.23-2.99 6.19-2.36 7.29c.63 1.09 5.14 2.64 6.26 1.58c1.13-1.06.35-3.87-.32-5.21c-.66-1.34-2.49-3.91-3.58-3.66z" fill="#d57657" />
              <path d="M70.4 70.26c-.49.63 2.78 4.93 4.01 6.34c.82.93 4.79-4.47 4.61-5.53c-.17-1.06-6.6-3.4-8.62-.81z" fill="#d57657" />
              <path d="M68.6 72.62c-1.51-.2-5.38 3.17-5.49 3.8c-.11.63 1.48 4.12 3.48 3.98c2.01-.14 5.17-1.94 5.1-2.67c-.06-.75-1.75-4.94-3.09-5.11z" fill="#d57657" />
              <path d="M56.04 77.23c-1.21.7.35 3.77 2.53 5.81c2.12 1.98 3.17 3.2 4.05 2.46c.88-.74 1.44-4.89.7-5.56c-.73-.67-5.45-3.77-7.28-2.71z" fill="#d57657" />
              <path d="M61.92 88.7c-.15.9 1.16 2.11 1.87 1.83c.7-.28 1.9-2.36 1.09-3.06c-.82-.71-2.79.17-2.96 1.23z" fill="#d57657" />
              <path d="M59.24 92.01c-.33.92.81 2.15 1.94 2.15s1.27-1.72.25-2.39c-1.03-.68-1.98-.36-2.19.24z" fill="#d57657" />
              <path d="M86.1 67.44c-1.38-.3-4.47 2.15-5.14 4.26c-.67 2.11.04 9.19 1.58 9.61s5.24-3.73 5.46-4.89c.21-1.16-.78-8.73-1.9-8.98z" fill="#d57657" />
              <path d="M88.31 67.86c.77 2.46 1.44 6.05 2.29 7.32c1.22 1.83 4.15-2.11 3.84-4.36c-.32-2.25-2.32-4.68-3.45-4.79c-1.13-.1-3.06.62-2.68 1.83z" fill="#d57657" />
              <path d="M87.75 81.24c-.82-.37-4.43 2.89-4.61 4.08c-.18 1.2 1.97 4.19 3.38 3.55c1.41-.63 1.93-7.31 1.23-7.63z" fill="#d57657" />
              <path d="M89.69 80.99c.47.93 2.22.49 2.82-.32s.6-3.55.18-3.66c-.42-.11-2.15 1.3-2.32 1.58c-.19.29-.82 2.12-.68 2.4z" fill="#d57657" />
              <path d="M83.81 92.61c-.04.35 1.33 3.58 2.04 3.55c.99-.04 1.41-2.75 1.51-3.31c.08-.43-.67-1.83-1.51-1.79s-1.97.98-2.04 1.55z" fill="#d57657" />
              <path d="M82.82 66.67c.44 1.24 3.06-1.44 3.27-1.9c.21-.46.99-2.96 0-3.59c-.99-.63-4.43-.11-4.61.53c-.17.63 1.13 4.36 1.34 4.96z" fill="#d57657" />
              <path d="M88.49 64.31c.36.45 2.15.74 2.92.53c.77-.21 1.13-.42 1.13-.42s-1.65-2.46-2.08-2.99c-.42-.53-1.9-1.9-2.29-2.08c-.38-.18-.74 3.66.32 4.96z" fill="#d57657" />
              <path d="M80.96 60.33c1.48 0 3.03-2.08 3.03-2.08s-2.11-.35-2.6-.42c-.49-.07-3.03-.14-3.03-.14s1.44 2.64 2.6 2.64z" fill="#d57657" />
            </svg>Bienvenido <?php echo $_SESSION['firstName'] ?></a>

          <li><a href="../../../../../src/php/functions/logout.php" class="relative hidden md:flex left-5 text-gray-600 hover:text-white cursor-pointer transition-colors duration-300 font-semibold  "><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="30px" width="30px" version="1.1" id="Layer_1" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                <g id="Exit_1_">
                  <path d="M52.4501991,28.7678509l-5-4.9990005c-0.3768997-0.3770008-0.9902-0.3770008-1.3671989,0   c-0.3778992,0.3778992-0.3778992,0.9902,0,1.3671989l3.3171997,3.3164005H35.2666016v2h14.1320992l-3.3157005,3.3163986   c-0.3778992,0.377903-0.3778992,0.9902,0,1.3672028c0.1884995,0.1884995,0.4365997,0.2831993,0.6835976,0.2831993   c0.2471008,0,0.4951019-0.0946999,0.6836014-0.2831993l5-5.0010014c0.1817017-0.1816006,0.2831993-0.4277,0.2831993-0.6835995   C52.7333984,29.1946507,52.6319008,28.9495506,52.4501991,28.7678509z" />
                  <path d="M40.2666016,39.4524498c-0.5527,0-1,0.4473-1,1v10.7900009c0,1.0429993-0.8310013,2.2099991-1.9433022,2.2099991   h-6.0566998V11.2394505V9.8677502L30.0191994,9.33395L14.0765009,2.56445l-0.2606955-0.112h23.507494   c1.2168007,0,1.9433022,0.9921999,1.9433022,1.9511998v15.0487995c0,0.5527,0.4473,1,1,1c0.5527992,0,1-0.4473,1-1V4.4036498   c0-2.1786997-1.7685013-3.9511998-3.9433022-3.9511998H12.2666006c-0.5215998,0-0.9358997,0.4029-0.9822998,0.9124   L11.2666006,1.35725V1.45245V55.03405l17.1855011,7.3064003l2.8144989,1.2070999v-3.0951004v-5h6.0566998   c2.3584023,0,3.9433022-2.1767998,3.9433022-4.2099991V40.4524498   C41.2666016,39.8997498,40.8194008,39.4524498,40.2666016,39.4524498z M29.2665997,11.2394505v49.2129974l-15.999999-6.7766991   V4.4524498l15.9906988,6.7728004l0.0093002,0.0038996V11.2394505z" />
                </g>
              </svg></a></li>

        </div>
      </ul>
      <!--Memú desplegable responsive-->
      <div class="relative flex">
        <!--Botón de menú desplegable responsive-->
        <button type="button" class="flex bg-slate-500 relative right-10 top-1 cursor-pointer transition-colors duration-300" aria-expanded="false">
          <svg class="h-5 w-5 lg:hidden md:hidden flex" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
        </button>
        <!-- Menú desplegable-->
        <div class="absolute hidden z-10 mt-5 -translate-x-1/2 px-4 h-80 top-8 right-1 ">
          <div class="w-44 rounded-xl lg:hidden md:hidden flex flex-auto overflow-hidden rounded-3x text-sm leading-6 shadow-lg ring-1 ring-gray-900/5">
            <div class="lg:hidden md:hidden flex p-4 bg-gray-200 rounded-xl">
              <div class="group relative rounded-xl p-4 lg:hidden md:hidden flex ">
                <ul class="space-x-8">

                  <!-- Links Section -->

                  <li class="text-black"><a href="../../../../../pruebahome/Curiosidades.php" class=" left-2 relative text-gray-600 hover:text-white
                       cursor-pointer transition-colors duration-300">
                      Datos curiosos
                    </a></li>
                  <br>
                  <li><a href="../../../../../pruebahome/blog.php" class="right-6 relative text-gray-600 hover:text-white
                       cursor-pointer transition-colors duration-300">
                      Blog
                    </a></li>
                  <br>
                  <li><a href="../../../../../pruebahome/sobre nosotros.php" class="right-6 text-gray-600 relative hover:text-white cursor-pointer transition-colors duration-300">
                      Sobre nosotros
                    </a></li>
                  <br>
                  <!-- Icon Menu Section -->
                  <div class="items-center space-x-5">
                    <!-- Register -->
                    <li><a class="relative right-10 flex text-gray-600 hover:text-white cursor-pointer transition-colors duration-300 font-semibold " href="/pruebahome/perfil de usuario.php"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="25px" viewBox="0 0 80 120" aria-hidden="true" role="img" class="iconify iconify--noto" preserveAspectRatio="xMidYMid meet">
              <path d="M57.1 71.88c-1.2.28-8.02.92-8.02.92s-.06 10.21 0 15.98c.07 6.9.56 11.83.49 16.12c-.08 4.58-.77 9.36-1.06 10.21s-1.55 3.45-1.34 3.94c.21.49 1.2.79 3.73.84c3.59.07 4.29-.49 4.5-1.27c.09-.34.35-17.18.63-19.92c.31-3.02.42-14.15.42-14.15l.65-12.67z" fill="#fa821b" />
              <path d="M92.36 80.68l-5.7 6.55l1.83 8.94s2.67 3.94 2.67 5.77c0 1.83-.28 6.6-.35 7.25c-.14 1.34-1.2 5.21-1.48 6.62c-.28 1.41-.63 2.82-.21 3.31s2.61.39 3.59.35c1.62-.07 2.39-.42 2.89-.7c.6-.34.63-6.9.77-10.35c.13-3.12.56-7.74.56-8.8s-1.97-3.24-2.96-5.21c-.7-1.41-1.41-3.45-1.41-4.72s-.2-9.01-.2-9.01z" fill="#fa821b" />
              <path fill="#fa821b" d="M35.04 11.67l-.23-4.83l3.19-.1l.89 4.27z" />
              <path d="M102.57 83.14s2.53-.4 4.22.63s3.16 3.07 3.14 6.45c-.01 2.66-.96 5.06-2.02 6.57c-.82 1.17-1.83 1.78-2.16 1.6s-.23-3.28-.8-5.44s-2.11-7.37-2.25-7.98c-.13-.61-.13-1.83-.13-1.83z" fill="#d57657" />
              <path d="M41.45 11.72s-2.78-1.54-5.92-.55s-4.82 3.27-6.04 5.48s-2.49 3.68-3.61 4.46c-2.37 1.65-8.02 3.61-6.57 8.17c1.09 3.44 6.8 1.97 10 1.74c3.19-.23 8.45-.09 8.45-.09l7.7-12.34l-4.01-6.87z" fill="#d57657" />
              <path d="M49.7 17.63l8.24-1.29l1.65 1.27s-2.46 4.79-4.96 6.03c-2.17 1.08-5.96.8-5.96.8s1.78 5.49 3.66 9.06c1.88 3.57 5.63 9.48 6.76 10.65s7.56 5.4 8.4 6.15c.84.75 3.94 7.23 3.94 7.23l-12.11.27l-17.45-33.65l7.83-6.52z" fill="#d57657" />
              <path d="M47.03 7.21l-3.89-1.13s-.8 3.1-1.22 3.89c-.42.8-2.58 1.92-2.82 3.1c-.23 1.17-.09 1.83-.09 1.83s-7.09-.66-7.88 5.49c-.39 2.98.36 4.93 1.27 6.34c1.2 1.86 2.94 2.56 3.1 2.96c.28.7 4.74 11.64 5.58 13.84c.84 2.21 6.99 15.63 7.09 16.61c.09.99-.42 2.53-.66 4.13c-.23 1.6-.75 6.29 1.03 9.85s5.73 7.04 6.1 8.31c.38 1.27 2.16 5.63 2.72 8.82c.56 3.19 1.41 10.04 1.78 12.67c.38 2.63 1.45 7.04 1.41 10.32c-.05 3.28-1.36 7.04-1.13 7.88c.23.84 1.97 1.6 3.94 1.5c1.97-.09 3.94-.99 4.04-1.5c.09-.52-.7-10.51-.89-12.62c-.19-2.11-.75-8.54-.38-13.84c.38-5.3 1.22-12.76 1.22-12.76s3.24-.33 4.6-.56s5.77-1.6 5.77-1.6s.66 3.57 1.69 8.92c1.03 5.35 1.83 10.65 1.41 12.62s-1.13 6.05-2.53 9.9s-3.52 9.76-3.24 10.37c.28.61 2.16 1.31 4.13 1.13c1.97-.19 3.28-.94 3.52-1.5s.8-6.29.99-6.95c.19-.66 4.65-13.37 5.07-16.47c.42-3.1 1.17-11.45 1.45-12.34c.28-.89 2.39-2.3 3.47-5.16c1.08-2.86 1.55-5.91 1.55-5.91s1.64 3.19 3.28 5.16s4.83 4.81 5.21 5.26c.65.75 2.06.14 1.03-1.22c-1.03-1.36-3.52-3.61-4.6-5.4c-1.08-1.78-3-6.19-3.33-7.32c-.33-1.13-1.54-3.27-1.99-4c-.73-1.17-4.85-8.07-7.29-8.73c-2.44-.66-5.98-1.44-10.01-1.4c-2.39.03-7.65-1.5-8.4-1.83c-.75-.33-2.67-1.27-2.67-1.27s-1.6-2.72-2.91-3.99s-4.55-2.58-5.35-3.38s-4.88-6.9-7.04-11.31s-4.32-8.02-4.79-9.85c-.47-1.83-.89-4.18-.89-4.18s4.27.23 6.85-.56s6.05-4.65 6.05-4.65s-2.72-2.58-6.71-2.49c-3.99.09-5.14.97-5.14.97s-.07-2.24.02-3.27c.1-1.02.48-4.68.48-4.68z" fill="#ffb305" />
              <path d="M23.16 25.59c-.75.69-1.27 1.63-.71 2.26c.66.74 1.62.3 2.32-.3c.71-.59 1.47-1.67.91-2.36c-.5-.62-1.56-.49-2.52.4z" fill="#2e2a32" />
              <path d="M42.43 21.24c0 2.41-1.98 4.5-4.46 4.5s-4.51-1.86-4.51-4.27s2.01-4.36 4.49-4.36s4.48 1.72 4.48 4.13z" fill="#fee2b2" />
              <path d="M35.39 21.27c.23-.55.41-1.17.96-1.64c.99-.84 2.73-.86 3.54.4c.94 1.45.31 2.96-.84 3.5c-1.04.49-2.58-.02-2.58-.02s-1.29.61-2.44.45c-.49-.07-1.25-.5-1.27-.92c-.02-.54.17-.73 1.36-.84c1.01-.11 1.15-.65 1.27-.93z" fill="#2e2a32" />
              <path d="M36.47 4.09c-2-.15-2.57.74-2.6 1.79c-.04 1.06.6 2.08 2.29 2.08s2.46-.6 2.46-2.11c0-1.34-1.23-1.69-2.15-1.76z" fill="#4d4d4d" />
              <path d="M42.6 5.39c-.7 1.58.14 2.86 1.87 3.48c1.76.63 3.24.28 3.63-1.51c.39-1.79-.56-2.6-1.55-3.06c-.98-.45-3.06-.92-3.95 1.09z" fill="#4d4d4d" />
              <path d="M43.26 26.83c.82.41.77 1.76.49 2.53c-.17.46-1.27 1.13-2.11.28c-.84-.84.36-3.45 1.62-2.81z" fill="#d57657" />
              <path d="M39.36 33.9c-.03.81.95 3.38 2.11 3.45c1.16.07 2.71-.6 2.6-1.44c-.11-.84-1.09-3.41-1.97-3.45c-.88-.04-2.71.39-2.74 1.44z" fill="#d57657" />
              <path d="M45.34 31.61c-1.26.65-.42 1.87.07 2.5c.49.63 1.55 1.51 2.29.95s.46-1.56.32-2.22c-.5-2.32-1.24-1.96-2.68-1.23z" fill="#d57657" />
              <path d="M48.33 36.61c-.68.43-1.48.67-.56 2.46c.92 1.79 2.6 6.19 4.5 5.24s.14-3.48-.56-4.82c-.7-1.33-1.58-4-3.38-2.88z" fill="#d57657" />
              <path d="M41.96 41.29c-.25 1.1 1.65 5.38 3.38 5.56c1.72.18 2.89-.88 2.89-1.79c0-.92-1.87-5.6-3.31-5.56s-2.78 1.02-2.96 1.79z" fill="#d57657" />
              <path d="M46.71 51.25c-.06.78 1.9 4.5 3.52 4.65s4.4-1.06 4.54-2.46c.14-1.41-1.48-5.07-3.31-5.24c-1.83-.18-4.68 2.07-4.75 3.05z" fill="#d57657" />
              <path d="M53.82 46.64c-.87.99-.39 1.13 1.55 3.48c.65.79 2.01 2.85 3.2 1.34c1.01-1.27.88-1.23-1.62-3.52c-.92-.84-2.39-2.14-3.13-1.3z" fill="#d57657" />
              <path d="M59.77 53.82c0 1.02 3.38 3.2 4.08 2.32s-1.02-3.7-1.97-3.94c-.95-.24-2.11.95-2.11 1.62z" fill="#d57657" />
              <path d="M52.63 60.83c1.9 2.36 3.1 1.76 4.19 2.29c1.09.53 3.13 1.96 3.91 1.94c1.23-.04 3.87-1.62 3.98-3.45c.11-1.83-3.41-5.6-5.77-6.02c-2.37-.43-8.04 3.09-6.31 5.24z" fill="#d57657" />
              <path d="M51.01 64.13c.06.38-.81 1.65-1.2 2.96c-.39 1.3-.42 3.13-.7 3.41c-.28.28-1.65.04-1.65.04s-.48-2-.32-4.75c.11-1.83.88-3.94.88-3.94s2.88 1.62 2.99 2.28z" fill="#d57657" />
              <path d="M53.51 65.05c-.56.21-1.69 1.48-2.15 2.89s-.88 3.91-.6 4.26c.28.35 7.85 3.91 9.12 3.73c1.27-.18 5.81-3.7 5.91-4.93c.11-1.23-.7-4.72-2.29-4.89c-1.58-.18-4.08 2.25-4.75 2.39c-.67.14-4.29-3.8-5.24-3.45z" fill="#d57657" />
              <path d="M66.14 57.66c.04.56 1.37 1.65 1.51 3.41c.14 1.76-1.27 3.27-1.27 3.91s1.76 4.24 2.39 4.15c1.34-.18 3.84-4.22 4.01-7.71c.11-2.11-.6-4.29-1.16-4.65c-.56-.35-2.15-.99-3.24-.67c-1.08.33-2.31.64-2.24 1.56z" fill="#d57657" />
              <path d="M76 59.35c-1.03.23-2.99 6.19-2.36 7.29c.63 1.09 5.14 2.64 6.26 1.58c1.13-1.06.35-3.87-.32-5.21c-.66-1.34-2.49-3.91-3.58-3.66z" fill="#d57657" />
              <path d="M70.4 70.26c-.49.63 2.78 4.93 4.01 6.34c.82.93 4.79-4.47 4.61-5.53c-.17-1.06-6.6-3.4-8.62-.81z" fill="#d57657" />
              <path d="M68.6 72.62c-1.51-.2-5.38 3.17-5.49 3.8c-.11.63 1.48 4.12 3.48 3.98c2.01-.14 5.17-1.94 5.1-2.67c-.06-.75-1.75-4.94-3.09-5.11z" fill="#d57657" />
              <path d="M56.04 77.23c-1.21.7.35 3.77 2.53 5.81c2.12 1.98 3.17 3.2 4.05 2.46c.88-.74 1.44-4.89.7-5.56c-.73-.67-5.45-3.77-7.28-2.71z" fill="#d57657" />
              <path d="M61.92 88.7c-.15.9 1.16 2.11 1.87 1.83c.7-.28 1.9-2.36 1.09-3.06c-.82-.71-2.79.17-2.96 1.23z" fill="#d57657" />
              <path d="M59.24 92.01c-.33.92.81 2.15 1.94 2.15s1.27-1.72.25-2.39c-1.03-.68-1.98-.36-2.19.24z" fill="#d57657" />
              <path d="M86.1 67.44c-1.38-.3-4.47 2.15-5.14 4.26c-.67 2.11.04 9.19 1.58 9.61s5.24-3.73 5.46-4.89c.21-1.16-.78-8.73-1.9-8.98z" fill="#d57657" />
              <path d="M88.31 67.86c.77 2.46 1.44 6.05 2.29 7.32c1.22 1.83 4.15-2.11 3.84-4.36c-.32-2.25-2.32-4.68-3.45-4.79c-1.13-.1-3.06.62-2.68 1.83z" fill="#d57657" />
              <path d="M87.75 81.24c-.82-.37-4.43 2.89-4.61 4.08c-.18 1.2 1.97 4.19 3.38 3.55c1.41-.63 1.93-7.31 1.23-7.63z" fill="#d57657" />
              <path d="M89.69 80.99c.47.93 2.22.49 2.82-.32s.6-3.55.18-3.66c-.42-.11-2.15 1.3-2.32 1.58c-.19.29-.82 2.12-.68 2.4z" fill="#d57657" />
              <path d="M83.81 92.61c-.04.35 1.33 3.58 2.04 3.55c.99-.04 1.41-2.75 1.51-3.31c.08-.43-.67-1.83-1.51-1.79s-1.97.98-2.04 1.55z" fill="#d57657" />
              <path d="M82.82 66.67c.44 1.24 3.06-1.44 3.27-1.9c.21-.46.99-2.96 0-3.59c-.99-.63-4.43-.11-4.61.53c-.17.63 1.13 4.36 1.34 4.96z" fill="#d57657" />
              <path d="M88.49 64.31c.36.45 2.15.74 2.92.53c.77-.21 1.13-.42 1.13-.42s-1.65-2.46-2.08-2.99c-.42-.53-1.9-1.9-2.29-2.08c-.38-.18-.74 3.66.32 4.96z" fill="#d57657" />
              <path d="M80.96 60.33c1.48 0 3.03-2.08 3.03-2.08s-2.11-.35-2.6-.42c-.49-.07-3.03-.14-3.03-.14s1.44 2.64 2.6 2.64z" fill="#d57657" />
            </svg>Bienvenido <?php echo $_SESSION['firstName'] ?></a></li>
                    <br>
                    <!-- Login -->
                    <li><a href="../../../../../src/php/functions/logout.php" class="relative right-10 flex text-gray-600 hover:text-white cursor-pointer transition-colors duration-300 font-semibold  "><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="30px" width="30px" version="1.1" id="Layer_1" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                <g id="Exit_1_">
                  <path d="M52.4501991,28.7678509l-5-4.9990005c-0.3768997-0.3770008-0.9902-0.3770008-1.3671989,0   c-0.3778992,0.3778992-0.3778992,0.9902,0,1.3671989l3.3171997,3.3164005H35.2666016v2h14.1320992l-3.3157005,3.3163986   c-0.3778992,0.377903-0.3778992,0.9902,0,1.3672028c0.1884995,0.1884995,0.4365997,0.2831993,0.6835976,0.2831993   c0.2471008,0,0.4951019-0.0946999,0.6836014-0.2831993l5-5.0010014c0.1817017-0.1816006,0.2831993-0.4277,0.2831993-0.6835995   C52.7333984,29.1946507,52.6319008,28.9495506,52.4501991,28.7678509z" />
                  <path d="M40.2666016,39.4524498c-0.5527,0-1,0.4473-1,1v10.7900009c0,1.0429993-0.8310013,2.2099991-1.9433022,2.2099991   h-6.0566998V11.2394505V9.8677502L30.0191994,9.33395L14.0765009,2.56445l-0.2606955-0.112h23.507494   c1.2168007,0,1.9433022,0.9921999,1.9433022,1.9511998v15.0487995c0,0.5527,0.4473,1,1,1c0.5527992,0,1-0.4473,1-1V4.4036498   c0-2.1786997-1.7685013-3.9511998-3.9433022-3.9511998H12.2666006c-0.5215998,0-0.9358997,0.4029-0.9822998,0.9124   L11.2666006,1.35725V1.45245V55.03405l17.1855011,7.3064003l2.8144989,1.2070999v-3.0951004v-5h6.0566998   c2.3584023,0,3.9433022-2.1767998,3.9433022-4.2099991V40.4524498   C41.2666016,39.8997498,40.8194008,39.4524498,40.2666016,39.4524498z M29.2665997,11.2394505v49.2129974l-15.999999-6.7766991   V4.4524498l15.9906988,6.7728004l0.0093002,0.0038996V11.2394505z" />
                </g>
              </svg></a></li>
                  </div>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <script>
          document.addEventListener("DOMContentLoaded", function() {
            const button = document.querySelector(".relative button");
            const menu = document.querySelector(".absolute");

            button.addEventListener("click", function() {
              menu.classList.toggle("hidden");
            });
          });
        </script>
        <button class="switch" id="switch">
          <span><i class="fas fa-sun"></i></span>
          <span><i class="fas fa-moon"></i></span>
        </button>
    </nav>
      <!--Fin header con sesion y sin sesion-->

  <?php } else { ?>
    <nav class="justify-around py-4 shadow-md w-full fixed top-0 left-0 right-0 z-10">
      <!--DIV DEL TRADUCTOR (Menú de idiomas)-->
      <div class="md:relative md:left-5-4" id="google_translate_element"></div>
      <!--FIN DEL TRADUCTOR-->

      <!-- Logo Container -->
      <div class="flex items-center">
        <!-- Logo -->
        <a href="../../../../../pruebahome/index.php" id="PlanetWise" class="text-2xl cursor-pointer text-gray-600">
          PlanetWise
        </a>
      </div>
      <div></div>
      <ul class="hidden md:flex space-x-8">

        <!-- Links Section -->

        <li><a href="../../../../../pruebahome/Curiosidades.php" class="hidden md:flex text-gray-600 hover:text-white cursor-pointer transition-colors duration-300">
            Datos curiosos
          </a></li>

        <li><a href="../../../../../pruebahome/sobre nosotros.php" class="hidden md:flex text-gray-600 relative hover:text-white cursor-pointer transition-colors duration-300">
            Sobre nosotros
          </a></li>

        <!-- Icon Menu Section -->
        <div class="flex items-center space-x-5">
        </div>
        <!-- Icon Menu Section -->
        <div class="flex relative right-5 items-center space-x-5">
          <!-- Register -->
          <li><a href="../../../../../src/php/functions/registro usuario.php" class="relative left-5 flex text-gray-600 hover:text-white cursor-pointer transition-colors duration-300">

              <svg class="fill-current h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
                <path d="M12 0L11.34 .03L15.15 3.84L16.5 2.5C19.75 4.07 22.09 7.24 22.45 11H23.95C23.44 4.84 18.29 0 12 0M12 4C10.07 4 8.5 5.57 8.5 7.5C8.5 9.43 10.07 11 12 11C13.93 11 15.5 9.43 15.5 7.5C15.5 5.57 13.93 4 12 4M12 6C12.83 6 13.5 6.67 13.5 7.5C13.5 8.33 12.83 9 12 9C11.17 9 10.5 8.33 10.5 7.5C10.5 6.67 11.17 6 12 6M.05 13C.56 19.16 5.71 24 12 24L12.66 23.97L8.85 20.16L7.5 21.5C4.25 19.94 1.91 16.76 1.55 13H.05M12 13C8.13 13 5 14.57 5 16.5V18H19V16.5C19 14.57 15.87 13 12 13M12 15C14.11 15 15.61 15.53 16.39 16H7.61C8.39 15.53 9.89 15 12 15Z" />
              </svg> Registro</a></li>

          <!-- Login -->
          <li><a href="../../../../../src/php/functions/login usuario.php" class="relative left-5 flex text-gray-600 hover:text-white cursor-pointer transition-colors duration-300 font-semibold ">

              <svg class="fill-current h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
                <path d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z" />
              </svg>

              Inicio de sesión
            </a></li>
        </div>
      </ul>

      <!--Memú desplegable responsive-->
      <div class="relative flex">
        <!--Botón de menú desplegable responsive-->
        <button type="button" class="flex bg-slate-500 relative right-5 top-1 cursor-pointer transition-colors duration-300" aria-expanded="false">
          <svg class="h-5 w-5 lg:hidden md:hidden flex" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
        </button>
        <!-- Menú desplegable-->
        <div class="absolute hidden z-10 mt-5 -translate-x-1/2 px-4 h-80 top-8 right-1 ">
          <div class="w-44 rounded-xl lg:hidden md:hidden flex flex-auto overflow-hidden rounded-3x text-sm leading-6 shadow-lg ring-1 ring-gray-900/5">
            <div class="bg-gray-200 lg:hidden md:hidden flex p-4 w-44 rounded-xl">
              <div class="group relative rounded-xl p-4 lg:hidden md:hidden flex ">
                <ul class="space-x-8">

                  <!-- Links Section -->

                  <li class="text-black"><a href="../../../../../pruebahome/Curiosidades.php" class="left-2 text-black relative hover:text-white cursor-pointer transition-colors duration-300">
                      Datos curiosos
                    </a></li>
                  <br>

                  <li><a href="../../../../../pruebahome/sobre nosotros.php" class="right-6 text-black relative hover:text-white cursor-pointer transition-colors duration-300">
                      Sobre nosotros
                    </a></li>
                  <br>
                  <!-- Icon Menu Section -->
                  <div class="items-center space-x-5">
                    <!-- Register -->
                    <li><a href="../../../../../src/php/functions/registro usuario.php" class="relative right-7 text-gray-600 hover:text-white cursor-pointer transition-colors duration-300">

                        <svg class="fill-current h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
                          <path d="M12 0L11.34 .03L15.15 3.84L16.5 2.5C19.75 4.07 22.09 7.24 22.45 11H23.95C23.44 4.84 18.29 0 12 0M12 4C10.07 4 8.5 5.57 8.5 7.5C8.5 9.43 10.07 11 12 11C13.93 11 15.5 9.43 15.5 7.5C15.5 5.57 13.93 4 12 4M12 6C12.83 6 13.5 6.67 13.5 7.5C13.5 8.33 12.83 9 12 9C11.17 9 10.5 8.33 10.5 7.5C10.5 6.67 11.17 6 12 6M.05 13C.56 19.16 5.71 24 12 24L12.66 23.97L8.85 20.16L7.5 21.5C4.25 19.94 1.91 16.76 1.55 13H.05M12 13C8.13 13 5 14.57 5 16.5V18H19V16.5C19 14.57 15.87 13 12 13M12 15C14.11 15 15.61 15.53 16.39 16H7.61C8.39 15.53 9.89 15 12 15Z" />
                        </svg> Registro</a></li>
                    <br>
                    <!-- Login -->
                    <li><a href="../../../../../src/php/functions/login usuario.php" class="relative right-10 text-gray-600 hover:text-white cursor-pointer transition-colors duration-300 font-semibold ">

                        <svg class="fill-current h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
                          <path d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z" />
                        </svg>

                        Inicio de sesión
                      </a></li>
                  </div>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <script>
          document.addEventListener("DOMContentLoaded", function() {
            const button = document.querySelector(".relative button");
            const menu = document.querySelector(".absolute");

            button.addEventListener("click", function() {
              menu.classList.toggle("hidden");
            });
          });
        </script>


        <button class="switch" id="switch">
          <span><i class="fas fa-sun"></i></span>
          <span><i class="fas fa-moon"></i></span>
        </button>
      
    </nav>
  <?php } ?>

    <style>
      nav {
      position: relative;
      z-index: 2; /* Asegura que el menú aparezca encima del slider */}
    
      nav:hover + .hero {
      visibility: hidden; /* Oculta el slider cuando el menú se sombree */
    }
    
      .hero {
        background-image: url('/dist/images/ColaboraciónSV.png'); /* Ruta de imagen de fondo */
        background-size: cover;
          background-position: center;
          height: 900px;
          position: relative;
          z-index: 1;
          filter: none;
          /* Restablecer el filtro de desenfoque por defecto */
          transition: filter 0.3s ease-in-out;
      }
    
      .overlay {
        background-color: rgba(0, 0, 0, 0.5);
        height: 100%;
      }
      .menu-item:hover ~ .hero,
      .menu-item:focus ~ .hero,
      .menu-item:active ~ .hero {
          background: rgba(255, 252, 252, 0);
          /* Cambiar el fondo a un color con transparencia para simular el desenfoque */
      }
    
    
      .hero-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
        text-align: center;
        color: rgb(255, 255, 255);
        padding: 2rem;
      }
    
      .hero-title {
        font-size: 4rem;
        color: white;
        font-weight: bold;
        margin-bottom: 1rem;
      }
    
      .hero-subtitle {
        font-size: 2rem;
        margin-bottom: 2rem;
      }
    
      .cta-button {
        padding: 1rem 2rem;
        font-size: 1.5rem;
        font-weight: bold;
        text-transform: uppercase;
        background-color: #3182ce;
        color: white;
        border-radius: 0.5rem;
        transition: background-color 0.3s;
      }
    
      .cta-button:hover {
        background-color: #2c5282;
      }
    
      .feature {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 4rem 2rem;
      }
    
      .feature-icon {
        font-size: 4rem;
        color: #3182ce;
      }
    
      .feature-title {
        font-size: 2rem;
        font-weight: bold;
        margin-top: 2rem;
        margin-bottom: 1rem;
      }
    
      .feature-description {
        font-size: 1.2rem;
      }
    </style>
    <section class="hero relative">
      <div class="overlay absolute inset-0"></div>
      <div class="hero-content">
        <h2 class="hero-title">Instituciones y leyes que respaldan el cuido del medio ambiente en El Salvador.</h2>
        <p class="hero-subtitle"></p>

      </div>
    </section><br> <br>
    </header>
      <div class="container mx-auto flex flex-wrap py-6">
    
          <!-- Posts Section -->
          <section class="w-full md:w-2/3 flex flex-col items-center px-3">
    
              <article class="flex flex-col my-4">
                  <!-- Article Image -->
                  <a class="hover:opacity-75">
                      <img alt="" src="/dist/images//agricultorSV.jpeg">
                  </a>
                  <div class="bg-white bg-opacity-10 text-gray-500 shadow-2xl rounded-2xl flex flex-col justify-start p-6 scroll">
              
                      <p class="text-3xl font-bold hover:text-gray-700 pb-4">¿Qué son las medidas que protegen al medio ambiente?</p>
                                                         
                      <p class="pb-6">Las medidas preventivas tienen por objeto prevenir o impedir la ocurrencia de un hecho, la realización de una actividad o la existencia de una situación que atente contra el medio ambiente, los recursos naturales, el paisaje o la salud humana.<br><br>

                        El impacto del cambio climático en los ecosistemas y la biodiversidad es un tema complejo y diverso que abarca una amplia gama de efectos sobre la vida en la Tierra. A continuación, se presenta un desglose detallado del tema:</i></p><br>

                      <p class="text-3xl font-bold hover:text-gray-700 pb-4">¿Qué hace El Salvador para proteger al medio ambiente?</p>
                      <p>
                        El Gobierno del Presidente Nayib Bukele implementa políticas públicas que impulsen el cuido y conservación del medio ambiente, que contribuyan a contrarrestar los efectos del cambio climático y a crear un desarrollo sostenible a nivel social, económico y ambiental. <br><br>
                        <i>“Este es un día muy importante para el Gobierno del Presidente Bukele, porque no solo estamos presentando esta Política Nacional del Medio Ambiente, sino que tenemos todas las estrategias y herramientas para hacerla realidad”, declaró el titular de Medio Ambiente. <br>Fernando López.</i>
                        <br><br>
                        Esta nueva normativa, aprobada por el Consejo de Ministros, está basada en cuatro pilares fundamentales: gestión de los recursos hídricos para buscar la seguridad a través del tiempo, gestión del riesgo climático y el tránsito hacia una economía baja en carbono, integración de la biodiversidad en las actividades de desarrollo económico y social e inducir a una gestión ambiental que propicie la protección y conservación de los recursos naturales. <br><br>
                        <i>“Estamos promoviendo cumplir con los estándares de desempeño ambiental, más allá de lo que exige la normativa; se busca incorporar a todas las áreas, no solamente la parte ambiental, también el área productiva”, declaró el funcionario.</i>
                      </p>

          
                    </a> <br>         
                  </div>
              </article>
    
              <article class="flex flex-col my-4">
                  <!-- Article Image -->
                  <p class="scroll text-3xl text-gray-400 font-bold hover:text-gray-700 pb-4 flex justify-center items-center">Datos curiosos</p> 
    
                  <p class="hover:opacity-80 flex justify-center items-center ">
    
                    <iframe class="scroll" width="560" height="315" src="https://www.youtube.com/embed/qGi6Ubo6_oc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  </p><br>

                  <div class="bg-white bg-opacity-10 text-gray-500 shadow-xl rounded-2xl flex flex-col justify-start p-6 scroll">                     
                     
                      <p class="pb-6"><b class="text-2xl">Instituciones que velan por la protección del medio ambiente.</b>
                        <br><br>
                        <li><b>Ministerio de Medio Ambiente y recursos naturales:</b> El Ministerio de Medio Ambiente y Recursos Naturales de El Salvador cumple su mandato como rector de la gestión ambiental nacional y es una institución cohesionada y respetada que promueve una vigorosa cultura ciudadana para recuperar el medio ambiente y reducir los riesgos socioambientales.</li><br>

                        <li><b>Dirección General del Observatorio de Amenazas y Recursos Naturales:</b> Apoyar la gestión ambiental y la gestión de riesgos mediante la observación sistemática de las amenazas relacionadas con fenómenos meteorológicos, hidrológicos, geológicos, oceanográficos y de calidad de agua y aire.</li><br>

                        <li><b>Dirección General de Evaluación y Cumplimiento Ambiental:</b> Garantizar la protección del medio ambiente a través del ordenamiento ambiental y de la evaluación ambiental de las actividades, obras y/o proyectos de inversión pública y privada, así como su seguimiento y verificación.</li><br>

                        <li><b>Dirección General de Seguridad Hídrica:</b> Promover el manejo adecuado y sostenible de los recursos hídricos y mejorar los índices de salubridad ambiental a través de la implementación de planes estratégicos nacionales en materia de seguridad hídrica, gobernanza y saneamiento ambiental.</li><br>

                        <li><b>Dirección General de Gestión Territorial:</b> Desarrollar la gobernanza ambiental en los ámbitos local y nacional, basada en una cultura de corresponsabilidad.</li><br>

                        <li><b>Dirección General de Ecosistemas y Biodiversidad:</b> Asegurar la provisión sostenida de los servicios de los ecosistemas críticos y la protección de hábitats y especies relacionadas, garantizando una gestión inclusiva y derechos de aprovechamiento por parte de comunidades locales.</li>
                      </p>
                  </div>
              </article>
    
              <article class="flex flex-col my-4 scroll">
                  <!-- Article Image -->
                  <a class="hover:opacity-75 ">
                      <img alt="" class="rounded-t-2xl w-full" src="/dist/images/cuidardesdecasa.webp">
                  </a>
                  <div class="bg-white bg-opacity-10 text-gray-500 shadow-xl rounded-b-2xl flex flex-col justify-start p-6">
                    
                      <p class="text-3xl font-bold hover:text-gray-700 pb-4">¿Cómo cuidar el medio ambiente desde casa?</p>
                      <p>
                        <b>Cultiva tus propios alimentos:</b><br>

                        Los productos ecológicos generan menos contaminación ambiental ya que no se utilizan fertilizantes. Te recomendamos realizar un huerto en casa, de esta manera disfrutarás alimentos frescos y llenos de nutrientes. <br><br>
                        
                        <b>Planta árboles:</b><br>
                        
                        Los árboles son esenciales para el mundo, producen oxígeno, reducen el dióxido de carbono, absorben gases contaminantes, regulan la temperatura, entre otros beneficios. Así que ya sabes, planta un árbol y contribuye al cuidado del medio ambiente. <br><br>
                        
                        <b>Ahorrar agua:</b><br>
                        
                        El agua es un recurso imprescindible y escaso que debemos usar con responsabilidad. Cerrar el grifo mientras te lavas los dientes, bañarte en 5 minutos, juntar el agua de la regadera mientras te bañas, son pequeñas acciones que ayudan a ahorrarla. <br><br>
                        
                        <b>Separa la basura:</b><br>
                        
                        Es importante separar los residuos en distintos botes: orgánica, vidrio, cartón, plásticos y desechos tóxicos. Por tu salud, cuida tu entorno. <br><br>
                        
                        <b>Reutiliza todo lo que puedas:</b> <br>
                        
                        Dale segunda vida a tus objetos antes de desecharlos con el fin de ahorrar dinero y evitar comprar todo nuevo. Puede ser tu ropa, juguetes o algún utensilio del hogar. <br><br>
                        
                       <b>Conecta con la naturaleza:</b><br>
                        
                        La naturaleza te protege, te sana, te alimenta y te da todo lo que necesitas para vivir y tener bienestar, cuidarla, valorarla y apreciarla es tarea de todas y todos.  <br><br>
    
                   </div>
              </article>
          
          </section>
    
          <!-- Sidebar Section -->
          <aside class="w-full md:w-1/3 flex flex-col items-center px-3">
    
          <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6 scroll">
                  <p class="text-xl font-semibold pb-5">Ministerio del Medio Ambiente y Recursos Naturales.
                  </p>
                  <p class="pb-2">El Ministerio de Medio Ambiente es la entidad principal que vela por el bienestar del medio ambiente en El Salvador. Conózcalo un poco más.</p>
                  <a href="../Instituciones y leyes que respaldan el cuido del medio ambiente en El Salvador/Ministerio del medio ambinete.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                      Leer más 
                  </a>
              </div>
    
              
              <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6 scroll">
                  <p class="text-xl font-semibold pb-5">Ley del Medio Ambiente de El Salvador.</p>
                  <p class="pb-2">La ley del Medio Ambiente es un conjunto de acciones y procedimientos que aseguran que las actividades, obras o proyectos que tengan un impacto ambiental negativo en el ambiente o en la calidad de vida de la población.</p>
                  <a href="../Instituciones y leyes que respaldan el cuido del medio ambiente en El Salvador/Ley del medio ambiente.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                   Leer más
                  </a>
              </div>
    
    
              
              <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6 scroll">
                  <p class="text-xl font-semibold pb-5">Instituciones no gubernamentales que velan por el medio ambiente en El Salvador.</p>
                  <p class="pb-2">Aunque cualquier organización privada es, en sentido estricto, una organización no gubernamental, el término ONG, u oenegé, se utiliza para identificar a organizaciones que no son parte de las esferas gubernamentales o empresas, cuyo fin fundamental es el bien social.</p>
                  <a href="../Instituciones y leyes que respaldan el cuido del medio ambiente en El Salvador/Instituciones no gubernamentales que velan por el medio ambiente en El Salvador.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                      Leer más 
                  </a>
              </div>
    
              <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6 scroll">
                  <p class="text-xl font-semibold pb-5">Diversidad</p>
                  <div class="grid grid-cols-3 gap-3">
                      <img alt="" class="hover:opacity-75 h-50" src="https://img.freepik.com/foto-gratis/disparo-enfoque-selectivo-colibri-vuelo_181624-56855.jpg?w=826&t=st=1690858682~exp=1690859282~hmac=6015319e298a11a02addf4e9bddd42b6e724839f05f735e037f1c68f84198ff8">
                      <img alt="" class="hover:opacity-75" src="https://img.freepik.com/foto-gratis/lindo-mascota-collage-aislado_23-2150007407.jpg?w=826&t=st=1690858697~exp=1690859297~hmac=3e274404b00a2286a6c3d02f4fcbeca92beac47cbf13d260703b6bae01eb6df4">
                      
                      <img alt="" class="hover:opacity-75" src="https://img.freepik.com/foto-gratis/tucan-multicolor-posado-rama-ia-generativa_188544-8020.jpg?w=826&t=st=1690858831~exp=1690859431~hmac=941c90819497d401bc6f946ed36677f1e710ca316570e594e215677af35ea3dd">
    
                      <img alt="" class="hover:opacity-75 h-full" src="https://img.freepik.com/foto-gratis/elefante-parque-nacional-amboseli-kenia-africa_181624-22024.jpg?w=996&t=st=1690859150~exp=1690859750~hmac=9616a553f96a383c848c4694def166d6cd4d966a5c153e142125e0ddfad9bbb8">
    
                      <img alt="" class="hover:opacity-75 h-full" src="https://img.freepik.com/foto-gratis/serpiente-piton-arbol-verde-rama-lista-atacar-serpiente-chondropython-viridis-closeup-fondo-negro_488145-1162.jpg?w=1380&t=st=1690859215~exp=1690859815~hmac=375e9b9296f77ec12329659ee6bdfc39503c4f85a29bd18a67a346429d2f1e58">
    
                      <img alt="" class="hover:opacity-75 h-full" src="https://img.freepik.com/foto-gratis/tortuga-estimulada-africana-hierba_167946-113.jpg?w=1380&t=st=1690859250~exp=1690859850~hmac=aae400813e92b0da7ddb9081877f1e377a1a4a770771fc11d329eee0198c3ad8">
    
                      <img alt="" class="hover:opacity-75 h-full" src="https://img.freepik.com/foto-gratis/dos-jirafas-macho-al-atardecer-kruger-np-sudafrica_181624-33921.jpg?w=1380&t=st=1690859296~exp=1690859896~hmac=16a0536b7d0b20fe2ae1f75da11b57439c1df5f5c21addac25cae1a6f71d434d">
    
                      <img alt="" class="hover:opacity-75 h-full" src="https://img.freepik.com/foto-gratis/tiro-enfoque-superficial-madre-cebra-su-bebe-pie-carretera_181624-19806.jpg?w=1380&t=st=1690859333~exp=1690859933~hmac=ce0a44366afbfa2f62dd867f4f4ed7b0f370d19c62307cbe0a8c61587405f0b0">
    
                      <img alt="" class="hover:opacity-75 h-full" src="https://img.freepik.com/foto-gratis/vibrante-pez-leon-nada-colorido-arrecife-coral-generado-ia_188544-36953.jpg?w=1380&t=st=1690859361~exp=1690859961~hmac=67910d9ff79b1bf394975f9ba8521ec5b413d27f94574075719875d63b0b3c78">
                  </div>                 
              </div>    
          </aside>    
      </div><br><br>
          <!--SCRIPT PARA EL MODO NOCTURNO-->
          <script src="/src/js/main.js"></script>
          
     <!--footer-->
  <footer class="degradado-footer pt-10 pb-10">
    <div class="w-screen flex justify-center">
      <img class="h-20 w-20" src="/dist/images/leaf.png" alt="PlanetWise Logo">
    </div>
    <div class="container mx-auto">
      <div class="flex flex-col md:flex-row justify-center items-center">
        <div class="flex items-center justify-center md:justify-between mt-4 md:mt-0">
          <a href="../../../../../pruebahome/PaginaPrincipal.php" class="text-base px-4 py-2">Página principal</a>
          <a href="../../../../../pruebahome/sobre nosotros.php" class="text-base px-4 py-2">Sobre nosotros</a>
        </div>
      </div>
    </div>
    <div class="container mx-auto mt-4">
      <div class="flex justify-center items-center">
        <a href="https://www.facebook.com/profile.php?id=100093617268110" target="_blank">
          <img class="rounded-full w-12 h-12" src="/dist/images/facebook-gris.png" alt="Facebook Page">
        </a>
      </div>
      <h4 class="pt-4 text-gray-400 text-center">Crea-J 2023</h4>
    </div>
  </footer>
     <!--Script de la página de carga-->
     <script src="../../../../js/load.js"></script>       
</body>
</html>