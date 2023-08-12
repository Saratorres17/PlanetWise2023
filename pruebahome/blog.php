<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="/dist/images/leaf.png">
        <link href="/dist/output.css" rel="stylesheet">
        <link rel="stylesheet" href="/src/scroll.css">
        <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@1,500&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
        <title>Blog</title>
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	      <link rel="stylesheet" href="../src/css modo oscuro/estilos.css">
    </head>
    <header>
<body class="h-screen font-sans cursor-default">

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

<!-- Navbar -->

      <nav class="justify-around py-4 shadow-md w-full fixed top-0 left-0 right-0 z-10 ">

        <!--DIV DEL TRADUCTOR (Menú de idiomas)-->
        <div class="md:relative md:left-5-4" id="google_translate_element"></div>
        <!--FIN DEL TRADUCTOR-->

                    <!-- Logo Container -->
                    <div class="flex items-center">
                      <!-- Logo -->
                      <a href="../pruebahome/index.php" id="PlanetWise" class="text-2xl cursor-pointer text-gray-600">
                        PlanetWise
                      </a>
                  </div>
          <ul class="flex xsm:hidden md:items-center md:static space-x-8"><!--No se si borrarlo-->

            <!-- Links Section -->
               
                <li><a href="../pruebahome/Curiosidades.php" class="flex text-gray-600 hover:text-white
                    cursor-pointer transition-colors duration-300">
                    Datos curiosos
                </a></li>

                <li><a href="../pruebahome/blog.php" class="flex text-gray-600 hover:text-white
                    cursor-pointer transition-colors duration-300">
                    Blog
                </a></li>

                <li><a href="../pruebahome/sobre nosotros.php" class="flex text-gray-600 relative hover:text-white
                    cursor-pointer transition-colors duration-300">
                    Sobre nosotros
                </a></li>

            <!-- Icon Menu Section -->
            <div class="flex items-center space-x-5">
                <!-- Register -->
              <li><a href="/src/php/functions/registro usuario.php"  class="relative left-5 flex text-gray-600 hover:text-white
                    cursor-pointer transition-colors duration-300">

                  <svg class="fill-current h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 0L11.34 .03L15.15 3.84L16.5 2.5C19.75 4.07 22.09 7.24 22.45 11H23.95C23.44 4.84 18.29 0 12 0M12 4C10.07 4 8.5 5.57 8.5 7.5C8.5 9.43 10.07 11 12 11C13.93 11 15.5 9.43 15.5 7.5C15.5 5.57 13.93 4 12 4M12 6C12.83 6 13.5 6.67 13.5 7.5C13.5 8.33 12.83 9 12 9C11.17 9 10.5 8.33 10.5 7.5C10.5 6.67 11.17 6 12 6M.05 13C.56 19.16 5.71 24 12 24L12.66 23.97L8.85 20.16L7.5 21.5C4.25 19.94 1.91 16.76 1.55 13H.05M12 13C8.13 13 5 14.57 5 16.5V18H19V16.5C19 14.57 15.87 13 12 13M12 15C14.11 15 15.61 15.53 16.39 16H7.61C8.39 15.53 9.89 15 12 15Z" />
                    </svg> Registro</a></li>

                <!-- Login -->
              <li><a href="../src/php/functions/login usuario.php" class="relative left-5 flex text-gray-600 hover:text-white
                    cursor-pointer transition-colors duration-300
                    font-semibold ">

                    <svg class="fill-current h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z" />
                    </svg>

                    Inicio de sesion
                </a></li>
              </div>
          </ul>
                <button class="switch" id="switch">
                  <span><i class="fas fa-sun"></i></span>
                  <span><i class="fas fa-moon"></i></span>
                </button>
            <img class="w-5 h-5 lg:hidden xs:visible" src="/dist/images/hambur.png" alt="menú de hamburguesa">
          </nav>
<!-- fin de nav-->

<br><br><br><br>
        
    </head>
    <div class="scroll bg-purple-200 bg-opacity-70">
      <div class="lg:grid lg:grid-cols-2">
          <div class="py-24 px-10 lg:px-0 max-w-3xl lg:max-w-md mx-auto">
              <h2 class="text-4xl tracking-tight font-extrabold text-black">
                  <span class="block">¿Puede una pequeña acción cambiar el destino de nuestro planeta? </span>
        
              </h2>
              <p class="text-black mt-6">
                Descubre cómo tu elección diaria puede marcar la diferencia en la lucha contra el cambio climático.
              </p>
              <div class=" inline-block shadow mt-5">
                  <a href="/src/php/functions/registro de infotrmacion-blog.php" class="inline-block py-3 px-4 bg-white hover:bg-indigo-100 text-indigo-500 font-medium border border-transparent rounded-md">Registra tu informacion</a>
              </div>
          </div>
          <div class="lg:relative">
              <img class="lg:absolute lg:inset-0 h-60 w-full lg:h-full object-cover object-center rounded-l-full" src="/dist/images/familia cuidando.jpeg" alt="Woman workcation on the beach">
          </div>
      </div>
  </div> 
    <main class="py-12 md:px-20 sm:px-14 px-6">
        <div class="scroll sm:flex items-center bg-white bg-opacity-10 text-gray-500 shadow-xl rounded-2xl">
          <div class="md:px-10 sm:px-5">
            <h1 class="text-gray-400 font-bold text-2xl my-2">long established</h1>
            <p class="text-gray-500 mb-2 md:mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
            <div class="flex justify-between mb-2">
              <span class="font-thin text-gray-400 text-sm">May 20th 2020</span>
              <button class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
    data-ripple-light="true">Leer mas</button>
            </div>
          </div>
          <div>
            <img class="bg-cover" src="https://img.freepik.com/fotos-premium/fotografia-forma-corazon-cielo-selva-tropical-fondo-naturaleza_56644-435.jpg?w=740" alt="" />
          </div>
        </div>
        <div class="scroll mt-6 md:flex space-x-6">
          <div>
            <img src="https://img.freepik.com/foto-gratis/mujer-reserva-jugando-canguro_1157-33618.jpg?w=360&t=st=1690493921~exp=1690494521~hmac=d1a32e3146c162034ce71783f4bd7a658b7a1b6cce10bc0ff4779112828165c9" alt="">
            <div>
              <h1  class="mt-3 text-gray-400 text-2xl font-bold my-2">long established</h1>
              <p class="text-gray-500 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
              <div class="flex justify-between mt-4">
                <span class="font-thin text-gray-400 text-sm">May 20th 2020</span>
                <button class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true">Leer mas</button>
              </div>
            </div>
          </div>
          <div>
            <img src="https://img.freepik.com/foto-gratis/limpiadores-recogiendo-botellas-afuera_1262-21014.jpg?w=360&t=st=1690493956~exp=1690494556~hmac=9fe71a1766edc280a841946409a6622c8c0b5edaa6921f80e9d1145652376335" alt="">
            <div>
              <h1  class="mt-3 text-gray-400 text-2xl font-bold my-2">long established</h1>
              <p class="text-gray-500 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
              <div class="flex justify-between mt-4">
                <span class="font-thin text-gray-400 text-sm">May 20th 2020</span>
                <button class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true">Leer mas</button>
              </div>
            </div>
          </div>
          <div>
            <img src="https://img.freepik.com/fotos-premium/hombre-sonriente-que-lleva-envase-reciclaje-cocina_13339-250401.jpg?w=360" alt="">
            <div>
              <h1  class="mt-3 text-gray-400 text-2xl font-bold my-2">long established</h1>
              <p class="text-gray-500 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
              <div class="flex justify-between mt-4">
                <span class="font-thin text-gray-400 text-sm">May 20th 2020</span>
                
    <button class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
    data-ripple-light="true">Leer mas</button>
               
              </div>
            </div>
          </div>
        </div>
        <div class="scroll mt-6 md:flex space-x-6">
            <div>
              <img src="https://img.freepik.com/foto-gratis/pollito-alimentacion-nino-tiro-completo_23-2149147879.jpg?w=360&t=st=1690494162~exp=1690494762~hmac=2a5ec1630405d13d58210f5631b518a9adba70cef59487af08e9ad54bc5e7fa3" alt="">
              <div>
                <h1  class="mt-3 text-gray-400 text-2xl font-bold my-2">long established</h1>
                <p class="text-gray-500 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
                <div class="flex justify-between mt-4">
                  <span class="font-thin text-gray-400 text-sm">May 20th 2020</span>
                  <button class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                  data-ripple-light="true">Leer mas</button>
                </div>
              </div>
            </div>
            <div>
              <img src="https://img.freepik.com/foto-gratis/hombre-arrojando-basura-basura_23-2147826221.jpg?w=360&t=st=1690492906~exp=1690493506~hmac=aa935a15f60ef3dc54ea4d98f62001a1ae1bfbfa0a402fdba3e0b4b9c96bada7" alt="">
              <div>
                <h1  class="mt-3 text-gray-400 text-2xl font-bold my-2">long established</h1>
                <p class="text-gray-500 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
                <div class="flex justify-between mt-4">
                  <span class="font-thin text-gray-400 text-sm">May 20th 2020</span>
                  <button class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                  data-ripple-light="true">Leer mas</button>
                </div>
              </div>
            </div>
            <div>
              <img src="https://img.freepik.com/foto-gratis/mujer-joven-clasificacion-basura-concepto-reciclaje-cero-desperdicio_1153-5287.jpg?w=360&t=st=1690492928~exp=1690493528~hmac=530f4d3360c05301823fdd07a773c824c0decef06fa8255af879f8cc491c480a" alt="">
              <div>
                <h1  class="mt-3 text-gray-400 text-2xl font-bold my-2">long established</h1>
                <p class="text-gray-500 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
                <div class="flex justify-between mt-4">
                  <span class="font-thin text-gray-400 text-sm">May 20th 2020</span>
                  <button class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                  data-ripple-light="true">Leer mas</button>
                </div>
              </div>
            </button>
            <br>
          </div>
        </div>
      </main><br><br>

    <!--footer-->
    <footer class="bg-gradient-to-t from-gray-800 pt-10 pb-10">
        <div class="w-screen flex justify-center">
            <img class="h-20 w-20"  src="/dist/images/leaf.png" alt="PlanetWise Logo">
        </div>
        <div class="container mx-auto">
          <div class="flex flex-col md:flex-row justify-center items-center">
            <div class="flex items-center justify-center md:justify-between mt-4 md:mt-0">
              <a href="../pruebahome/index.php" class="text-base px-4 py-2">Home</a>
              <a href="../pruebahome/sobre nosotros.php" class="text-base px-4 py-2">sobre nosotros</a>
              <a href="../pruebahome/blog.php" class="text-base px-4 py-2">Blog</a>
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
            <!--SCRIPT PARA EL MODO NOCTURNO-->
            <script src="/src/js/main.js"></script>
</body>
</html>