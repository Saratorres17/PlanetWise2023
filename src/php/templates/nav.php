<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/dist/images/leaf.png">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css">
    <link href="/src/scroll.css" rel="stylesheet">
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="/src/css%20modo%20oscuro/estilos.css">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <title>header</title>
</head>
<body class="h-screen font-sans cursor-default dark:bg-gray-900">

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

    <?php
    session_start();

    if (isset($_SESSION['username'])) { ?>
        <nav class="justify-around py-4 shadow-md w-full fixed top-0 left-0 right-0 z-10">
            <!--DIV DEL TRADUCTOR (Menú de idiomas)-->
            <div class="md:relative md:left-5-4" id="google_translate_element"></div>
            <!--FIN DEL TRADUCTOR-->

            
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
            <ul class="hidden md:flex space-x-8"><!--No se si borrarlo-->

                <!-- Links Section -->

                <li><a href="../../../../../pruebahome/Curiosidades.php" class="flex text-gray-600 hover:text-white cursor-pointer transition-colors duration-300">
                        Datos curiosos
                    </a></li>

                <li><a href="../../../../../pruebahome/blog.php" class="flex text-gray-600 hover:text-white cursor-pointer transition-colors duration-300">
                        Blog
                    </a></li>

                <li><a href="../../../../../pruebahome/sobre nosotros.php" class="flex text-gray-600 relative hover:text-white cursor-pointer transition-colors duration-300">
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

              Inicio de sesion
            </a></li>
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
        <div class="lg:hidden md:hidden flex p-4 bg-slate-950 rounded-xl">
          <div class="group relative rounded-xl p-4 lg:hidden md:hidden flex ">
            <ul class="space-x-8">

                <!-- Links Section -->

                <li class="text-black"><a href="../../../../../pruebahome/Curiosidades.php" class="hover:bg-slate-700
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

                            Inicio de sesion
                        </a></li>
                </div>
            </ul>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const button = document.querySelector(".relative button");
      const menu = document.querySelector(".absolute");

      button.addEventListener("click", function () {
        menu.classList.toggle("hidden");
      });
    });
  </script>

  
            <button class="switch" id="switch">
                <span><i class="fas fa-sun"></i></span>
                <span><i class="fas fa-moon"></i></span>
            </button>
            
        </nav>
        
  <!--Fin del menú desplegable responsive-->
    <?php } ?>
</body>
  <!--SCRIPT PARA EL MODO NOCTURNO-->
  <script src="/src/js/main.js"></script>
</html>