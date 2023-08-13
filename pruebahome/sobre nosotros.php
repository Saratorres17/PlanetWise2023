<html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre nosotros</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="icon" href="/dist/images/leaf.png">
  <link rel="stylesheet" href="/src/scroll.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@1,500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../src/css modo oscuro/estilos.css">
  <link rel="stylesheet" href="../src/pantallacarga.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
    <body class="h-screen  font-sans oculto">
           <!--Pantalla de carga-->
  <div class=" flex justify-center items-center h-full z-10" id="onload">
     <div class="lds-ring">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
     </div>
</div>
    <header>
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
  </header>
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

<body>
  <div class="relative">
    <div class="sticky top-0 flex h-screen items-center justify-center">
      <img alt="" src="../dist/images/fkamingos.jpg" class="h-full w-full object-cover" />
      <div class="absolute left-0 right-0 m-auto flex w-2/4 flex-col items-start justify-center gap-4 p-10 backdrop-blur-2xl">
        <h2 class="text-6xl font-bold text-white" >Misión</h2>
        <p class="font-sans text-xl text-white">Educar y concientizar a las personas sobre la importancia de cuidar la naturaleza y los animales, promoviendo prácticas sostenibles y responsables que contribuyan a la conservación del medio ambiente y la biodiversidad.</p>
      </div>
    </div>
    <div class="sticky top-0 flex h-screen items-center justify-center">
      <img alt="" src="https://img.freepik.com/foto-gratis/hermosa-foto-ciervos-sobre-hierba-verde-zoologico-dia-soleado_181624-30352.jpg?w=1380&t=st=1690569468~exp=1690570068~hmac=c888c0ca7a5d4f01733027370661316da047228986857ce0ceab37237a03451b" class="h-full w-full object-cover" />
      <div class="absolute left-0 right-0 m-auto flex w-2/4 flex-col items-start justify-center gap-4 p-10 backdrop-blur-2xl">
        <h2 class="text-6xl font-bold text-white">Visión </h2>
        <p class="font-sans text-xl text-white">Buscamos ser una plataforma líder en la difusión de información y conocimiento sobre el cuidado de la naturaleza y los animales, descubrir conciencia y motivar a las personas a tomar acciones concretas para proteger y preservar nuestro planeta.
        </p>
      </div>
    </div>
    <div class="sticky top-0 flex h-screen items-center justify-center">
      <img alt="" src="../dist/images/mataralla.jpg" class="h-full w-full object-cover" />
      <div class="absolute left-0 right-0 m-auto flex w-2/4 flex-col items-start justify-center gap-4 p-10 backdrop-blur-10xl">
        <h2 class="text-6xl font-bold text-white">Valores</h2><br>
        <p class="font-sans text-xl text-white">Responsabilidad: Tomar conciencia de nuestro impacto en el medio ambiente y asumir la responsabilidad de nuestras acciones para minimizar ese impacto y promover prácticas sostenibles.</p><br>
        <p class="font-sans text-xl text-white">Compromiso: Tomar medidas concretas para proteger y preservar nuestro planeta, ya motivar a otros a hacer lo mismo.</p><br>
        <p class="font-sans text-xl text-white">Respeto: Respetar la biodiversidad y los ecosistemas, así como a los animales y las comunidades que dependen de ellos. Respetar a las personas que trabajan en la conservación del medio ambiente y valorar su trabajo y dedicación.</p>
      </div>
    </div>
  </div>
        <!--SCRIPT PARA EL MODO NOCTURNO-->
        <script src="/src/js/main.js"></script>

    <!--footer-->
    <footer class="degradado-footer pt-10 pb-10">
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

             <!--Script de la página de carga-->
             <script src="../src/js/load.js"></script>      
</body>
</html>