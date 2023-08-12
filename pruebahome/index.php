<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="/dist/images/leaf.png">
    <link rel="stylesheet" href="/src/scroll.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	  <link rel="stylesheet" href="../src/css modo oscuro/estilos.css">
</head>

<body class="h-screen font-sans cursor-default">

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

<!-- Navbar -->

      <nav class="justify-around py-4 shadow-md w-full fixed top-0 left-0 right-0 z-10 ">

        <!--DIV DEL TRADUCTOR (Menú de idiomas)-->
        <div class="md:relative md:left-5-4" id="google_translate_element"></div>
        <!--FIN DEL TRADUCTOR-->

                    <!-- Logo Container -->
                    <div class="flex items-center">
                      <!-- Logo -->
                      <a href="../pruebahome/index.php" id="PlanetWise" class="text-2xl cursor-pointer text-gray-600" >
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

    <style>
        nav {
        position: relative;
        z-index: 2; /* Asegura que el menú aparezca encima del slider */}

        nav:hover + .hero {
        visibility: hidden; /* Oculta el slider cuando el menú se sombree */
    }

        .hero {
          background-image: url('https://img.freepik.com/foto-gratis/fondo-textura-hoja-verde_501050-120.jpg?w=740&t=st=1689357103~exp=1689357703~hmac=fafecf6086e736132360c11f5779e58cec5d9ff373e98b6e2b72a84ab957d95b'); /* Ruta de imagen de fondo */
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
          <h2 class="hero-title">Bienvenido a PlanetWise</h2>
          <p class="hero-subtitle">¡Conocer la biodiversidad nos da el poder de cuidarlo!</p>
         <!--Fin header-->
        </div>
      </section><br> <br>
      <div class="scroll container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2">
          <div class="max-h-96 md:h-screen">
            <img class="w-30 h-50 object-cover object-top rounded-3xl" src="https://cdn-pro.elsalvador.com/wp-content/uploads/2022/05/eclipse-lunar-mayo-2022_luna-de-sangre-10.jpg" alt="Eclipse Lunar">
          </div>
          <div class="shadow-xl flex bg-gray-200 bg-opacity-40 p-10 mt-5 mb-12 rounded-r-xl">
            <div class="mt-4 h-20">
              
              <h1 class="text-3xl uppercase font-serif cursor-default">Así fue el eclipse lunar total que pudo verse en América Latina</h1>
              <p class="font-semibold mb-5 text-red-800 hover:text-red-600 cursor-default">BBC NEWS MUNDO</p>
              <p class="cursor-default">En un eclipse lunar total, toda la Luna cae dentro de la parte más oscura de la sombra de la Tierra, llamada umbra, explica la NASA en su sitio web.</p>
             
            </div>
          </div>
        </div>
      </div>
      </div>
      <br>
      <br><br><br><br>
     
      <!-- cards-->
      <div class="py-10 bg-gradient-to-br to-cyan-100">  
        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="mb-12 space-y-2 text-center">
              <h2 class="scroll text-2xl text-gray-500 font-bold md:text-4xl">Temas de interes</h2>
            </div>
            <br><br><br>
            <div  class="grid gap-12 lg:grid-cols-2">
              <div  class=" scroll p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
                <img src="/dist/images/educacion-clave-cambio-climatico.jpg" alt="art cover" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-top rounded-lg transition duration-500 group-hover:rounded-xl">
                <div class="sm:w-7/12 pl-0 p-5">
                  <div class="space-y-2">
                    <div class="space-y-4">
                      <h4 class="text-2xl font-semibold text-gray-800">Tipos de contaminacion</h4>
                      <p class="text-gray-900"> la actividad humana ha generado diversas formas de contaminación que impactan negativamente en el aire, el agua, el suelo y la biodiversidad.</p>
                    </div>
                    <a href="../src/pages_html/client/topics/Contaminacion/Contaminacion1.php" class="block w-max text-cyan-600 hover:text-green-400">Leer más</a>
                  </div>
                </div>
              </div>
              <div  class=" scroll p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
                <img src="https://www.defensa.gob.es/medioambiente/Galerias/cambioclimatico/reduccionemisiones/img/Alternative_Energies_380.jpg" alt="art cover" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-top rounded-lg transition duration-500 group-hover:rounded-xl">
                <div class="sm:w-7/12 pl-0 p-5">
                  <div class="space-y-2">
                    <div class="space-y-4">
                      <h4 class="text-2xl font-semibold text-gray-800">Reduccion de emisiones</h4>
                      <p class="text-gray-900">Estas emisiones, conocidas como gases de efecto invernadero (GEI) y contaminantes atmosféricos, están asociadas con el cambio climático y la contaminación del aire, lo que tiene efectos negativos en el medio ambiente y la salud humana.</p>
                    </div>
                    <a href="../src/pages_html/client/topics/Reducción de emisiones 1.0/Redución de emisiones 1.0.php" class="block w-max text-cyan-600 hover:text-green-400">Leer más</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
  <!-- cards-->
      <div class="py-10 bg-gradient-to-br to-cyan-100">  
        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="mb-12 space-y-2 text-center">
              <h2 class="text-2xl text-cyan-900 font-bold md:text-4xl"></h2></div>
      
            <div class="grid gap-12 lg:grid-cols-2">
              <div class="scroll p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
                <img src="/dist/images/Biodiversidad index.jpeg" alt="art cover" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-top rounded-lg transition duration-500 group-hover:rounded-xl">
                <div class="sm:w-7/12 pl-0 p-5">
                  <div class="space-y-2">
                    <div class="space-y-4">
                      <h4 class="text-2xl font-semibold text-gray-800">Conservación de biodiversidad 
                      </h4>
                      <p class="text-gray-900"> Protección y preservación de la variedad de formas de vida en la Tierra, incluyendo todas las especies de plantas, animales, hongos y microorganismos, así como los ecosistemas naturales en los que habitan.</p>
                    </div>
                    <a href="../pruebahome/pag-restriccion.php" class="block w-max text-cyan-600 hover:text-green-400">Leer más</a>
                  </div>
                </div>
              </div>
              <div class="scroll p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
                <img src="https://www.accioncontraelhambre.org/sites/default/files/eficiencia-agua-campo-agricola.jpg" alt="art cover" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-top rounded-lg transition duration-500 group-hover:rounded-xl">
                <div class="sm:w-7/12 pl-0 p-5">
                  <div class="space-y-2">
                    <div class="space-y-4">
                      <h4 class="text-2xl font-semibold text-gray-800">Uso sostenible de recursos naturales
                      </h4>
                      <p class="text-gray-900">El uso sostenible de recursos naturales es una estrategia que busca aprovechar los recursos del planeta de manera responsable y equitativa, garantizando su disponibilidad a largo plazo sin comprometer la capacidad de las generaciones futuras para satisfacer sus necesidades.</p>
                    </div>
                    <a href="../pruebahome/pag-restriccion.php" class="block w-max text-cyan-600 hover:text-green-400">Leer más</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>

  <!-- cards-->
      <div class="py-10 bg-gradient-to-br to-cyan-100">  
        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="mb-12 space-y-2 text-center">
              <h2 class="text-2xl text-cyan-900 font-bold md:text-4xl"></h2></div>
      
            <div class="grid gap-12 lg:grid-cols-2">
              <div class="scroll p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
                <img src="/dist/images/cambio-climatico ind.jpg" alt="art cover" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-top rounded-lg transition duration-500 group-hover:rounded-xl">
                <div class="sm:w-7/12 pl-0 p-5">
                  <div class="space-y-2">
                    <div class="space-y-4">
                      <h4 class="text-2xl font-semibold text-gray-800"> Cambio climático</h4>
                      <p class="text-gray-900">Caracterizado por aumentos significativos de la temperatura promedio global. Esta transformación es atribuida a actividades humanas que han liberado grandes cantidades de gases de efecto invernadero (GEI) a la atmósfera, principalmente debido a la quema de combustibles fósiles, la deforestación y la agricultura intensiva.</p>
                    </div>
                    <a href="../pruebahome/pag-restriccion.php" class="block w-max text-cyan-600 hover:text-green-400">Leer más</a>
                  </div>
                </div>
              </div>
              <div class="scroll p-1 rounded-xl group sm:flex space-x-6 bg-white bg-opacity-50 shadow-xl hover:rounded-2xl">
                <img src="https://www.presidencia.gob.sv/wp-content/uploads/2022/02/photo_2022-02-03-15.54.11.jpeg" alt="art cover" loading="lazy" width="1000" height="667" class="h-56 sm:h-full w-full sm:w-5/12 object-cover object-top rounded-lg transition duration-500 group-hover:rounded-xl">
                <div class="sm:w-7/12 pl-0 p-5">
                  <div class="space-y-2">
                    <div class="space-y-4">
                      <h4 class="text-2xl font-semibold text-gray-800">Instituciones y leyes que respaldan el cuido del medio ambiente en El Salvador.
                      </h4>
                      <p class="text-gray-900">En El Salvador, existen diversas instituciones y leyes que respaldan el cuidado del medio ambiente y la conservación de los recursos naturales.</p>
                    </div>
                    <a href="../pruebahome/pag-restriccion.php" class="block w-max text-cyan-600 hover:text-green-400">Leer más</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>       
    <br>
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