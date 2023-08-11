<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="/dist/images/leaf.png">
        <link rel="stylesheet" href="/src/scroll.css">
        <link href="/dist/output.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@1,500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/pruebahome/static/tailwind/tailwind.min.css">
        <link rel="stylesheet" href="/src/tailwind.min.css">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
        <title>Gestión forestal sostenible</title>
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/src/css modo oscuro/estilos.css">
    </head>

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
                      <a href="../../../../../pruebahome/index.php" id="PlanetWise" class="text-2xl cursor-pointer text-gray-600">
                        PlanetWise
                      </a>
                  </div>
          <ul class="flex xsm:hidden md:items-center md:static space-x-8"><!--No se si borrarlo-->

            <!-- Links Section -->
               
                <li><a href="../../../../../pruebahome/Curiosidades.php" class="flex text-gray-600 hover:text-white
                    cursor-pointer transition-colors duration-300">
                    Datos curiosos
                </a></li>

                <li><a href="../../../../../pruebahome/blog.php" class="flex text-gray-600 hover:text-white
                    cursor-pointer transition-colors duration-300">
                    Blog
                </a></li>

                <li><a href="../../../../../pruebahome/sobre nosotros.php" class="flex text-gray-600 relative hover:text-white
                    cursor-pointer transition-colors duration-300">
                    Sobre nosotros
                </a></li>

            <!-- Icon Menu Section -->
            <div class="flex items-center space-x-5">
                <!-- Register -->
              <li><a href="../../../../../src/php/functions/registro usuario.php"  class="relative left-5 flex text-gray-600 hover:text-white
                    cursor-pointer transition-colors duration-300">

                  <svg class="fill-current h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 0L11.34 .03L15.15 3.84L16.5 2.5C19.75 4.07 22.09 7.24 22.45 11H23.95C23.44 4.84 18.29 0 12 0M12 4C10.07 4 8.5 5.57 8.5 7.5C8.5 9.43 10.07 11 12 11C13.93 11 15.5 9.43 15.5 7.5C15.5 5.57 13.93 4 12 4M12 6C12.83 6 13.5 6.67 13.5 7.5C13.5 8.33 12.83 9 12 9C11.17 9 10.5 8.33 10.5 7.5C10.5 6.67 11.17 6 12 6M.05 13C.56 19.16 5.71 24 12 24L12.66 23.97L8.85 20.16L7.5 21.5C4.25 19.94 1.91 16.76 1.55 13H.05M12 13C8.13 13 5 14.57 5 16.5V18H19V16.5C19 14.57 15.87 13 12 13M12 15C14.11 15 15.61 15.53 16.39 16H7.61C8.39 15.53 9.89 15 12 15Z" />
                    </svg> Registro</a></li>

                <!-- Login -->
              <li><a href="../../../../../src/php/functions/login usuario.php" class="relative left-5 flex text-gray-600 hover:text-white
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
        </div>
     </Nav>
     <style>
        nav {
        position: relative;
        z-index: 2; /* Asegura que el menú aparezca encima del slider */}
  
        nav:hover + .hero {
        visibility: hidden; /* Oculta el slider cuando el menú se sombree */
    }
  
        .hero {
          background-image: url('/dist/images/forestación.jpg'); /* Ruta de imagen de fondo */
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
    </head>
    
      <section class="hero relative">
        <div class="overlay absolute inset-0"></div>
        <div class="hero-content">
          <h2 class="hero-title">Gestión forestal sostenible</h2>
          
         
        </div>
      </section>
  </header>
  <div class="container mx-auto flex flex-wrap py-6">

    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">
  
        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-90">
                <img  class="rounded-t-2xl w-full h-full" src="https://img.freepik.com/foto-gratis/arboleda-verano_1398-333.jpg?w=740&t=st=1690952102~exp=1690952702~hmac=10c7cf245facaab32b94d084b03d78d0661a00b0b9d940704b79c03b112bc7db">
            </a>
            <div class="bg-white bg-opacity-10 text-gray-500 shadow-2xl rounded-b-2xl flex flex-col justify-start p-6 scroll">
        
                <p class="text-3xl font-bold hover:text-gray-700 pb-4">¿Qué es la Gestión forestal sostenible?</p>
                                                   
                <p class="pb-6">La gestión forestal sostenible es un enfoque que busca equilibrar la utilización de los recursos forestales con la conservación y protección de los ecosistemas forestales a lo largo del tiempo. Se trata de un conjunto de prácticas y políticas que aseguran que la explotación de los recursos forestales se realice de manera responsable y respetuosa con el medio ambiente, las comunidades locales y las generaciones futuras.

                
                    La aplicación de estos métodos, analizada por el entomólogo Jan van der Blom, responsable de agroecología de la Asociación de Organizaciones de Productores de Frutas y Hortalizas de Andalucía, en un artículo publicado en 2017, nos cuenta una historia de agricultura sostenible. Una que habla de sostenibilidad medioambiental, pero también social y, sobre todo, económica.</p>
                     
                    <p>Lo forestal, aunque sea complicado de definir, es un concepto físico extremadamente real. En el caso español tan real como que ocupa más de la mitad del territorio, un total de 27.664.673,77 ha (MARM, 2011), lo que supone el 54,82% del territorio nacional. Así, la gestión forestal será aquella que se realice sobre más de la mitad del territorio hispano. Y que además es la mitad que alberga mayores valores naturales y aporta más servicios ambientales (fijación de CO2, estabilización de suelos y laderas, producción de agua de calidad, mantenimiento de biodiversidad, etc.) al conjunto de los ciudadanos.</p><br><br>

                    <p>En la actualidad contamos con un nuevo concepto , la gestión forestal sostenible. De acuerdo a la conferencia ministerial de Helsinki realizada en 1993, se puede definir gestión forestal sostenible como “la organización, administración y uso de los bosques y montes de forma e intensidad que permita mantener su biodiversidad, productividad, vitalidad, potencialidad y capacidad de regeneración, para atender, ahora y en un futuro, las funciones ecológicas, económicas y sociales relevantes a escala local, nacional y global, y sin producir daños a otros ecosistemas”. <br><br>

                      Junto a esta cabe citar la definición de las Naciones Unidas, que la define como “un concepto dinámico en evolución que tiene por objetivo mantener y aumentar el valor económico, social y medioambiental de todos los tipos de bosques, en beneficio de las generaciones presentes y futuras. Consta de siete puntos característicos: (i) extensión de los recursos forestales; (ii) diversidad biológica forestal; (iii) salud y vitalidad de los bosques; (iv) funciones productivas de los recursos forestales; (v) funciones de protección de los recursos forestales; (vi) funciones socioeconómicas de los bosques. <br><br>
                      
                      Es decir, la gestión forestal que cumpla con estos objetivos permitirá la conservación de las especies amenazadas. Por tanto, la gestión forestal debe permitir el mantenimiento y la recuperación de las especies amenazadas.</p>
  
               
            </div>
        </article><br>
  
        <article class="flex flex-col my-4">
            <!-- Article Image -->
            <p class="text-3xl scroll font-bold hover:text-gray-700 text-gray-400 pb-4 flex justify-center items-center">Consejos para llevar a cabo una mejor gestión forestal sostenible:
            </p>
            <a class="hover:opacity-75">
              <img class="scroll rounded-t-2xl w-full h-full" src="https://ecoinventos.com/wp-content/uploads/2019/03/Gestion-forestal-sostenible.jpg">
          </a>
              
          
            </a>
            <div class="bg-white bg-opacity-10 text-gray-500 shadow-2xl rounded-b-2xl flex flex-col justify-start p-6 scroll">
                <p class="pb-6"><br>
  
              <p>1. Desarrolla un plan detallado que incluya objetivos claros, estrategias de manejo, cronogramas y metas a corto y largo plazo. La planificación adecuada te ayudará a optimizar el uso de los recursos y a tomar decisiones informadas.</p><br><br>

              <p>2. Realiza un seguimiento regular del estado de los bosques y los ecosistemas que administras. El monitoreo te permitirá identificar posibles problemas, como plagas, enfermedades o incendios, y tomar medidas preventivas o correctivas a tiempo.</p><br><br>
              <p>3. Prioriza la protección y conservación de la biodiversidad. Fomenta la regeneración natural de especies nativas y evita la introducción de especies exóticas que puedan ser invasivas.</p><br><br>
  
              <p>4. Fomenta la educación ambiental y la divulgación de información sobre la importancia de la gestión forestal sostenible. Sensibilizar a la sociedad sobre el valor de los bosques puede generar un mayor apoyo a las prácticas de manejo responsable.</p><br><br>
                  
            </div>
        </article>
  
    </section>
  
    <!-- Sidebar Section -->
    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">
  
        <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6">
            <p class="text-xl font-semibold pb-5 scroll">Agricultura sostenible
            </p>
            <p class="pb-2">La agricultura sostenible promueve la participación activa de las comunidades locales y las pequeñas explotaciones agrícolas, fomentando la producción de alimentos a nivel local y la distribución justa de los beneficios económicos.
               </p>
            <a href="../Usos sostenible de los recursos naturales 4.0/Agricultura sostenible 4.2.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                Leer mas 
            </a>
        </div>
  
        
        <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6">
            <p class="text-xl font-semibold pb-5 scroll">Gestión forestal sostenible</p>
            <p class="pb-2">La gestión forestal es el proceso de planificación, manejo y conservación de los recursos forestales de manera sostenible y responsable. Implica tomar decisiones informadas para garantizar la utilización adecuada de los bosques y los recursos que proporcionan, al mismo tiempo que se protege la biodiversidad y se conserva la salud y la funcionalidad de los ecosistemas forestales. </p>
            <a href="../Usos sostenible de los recursos naturales 4.0/Gestión forestal sostenible 4.1.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                Leer mas 
            </a>
        </div>
  
       
    </head>
           
        
  
        <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6">
            <p class="text-xl font-semibold pb-5 scroll">Diversidad</p>
            <div class="grid grid-cols-3 gap-3">
                <img class="hover:opacity-75 h-50" src="https://img.freepik.com/foto-gratis/disparo-enfoque-selectivo-colibri-vuelo_181624-56855.jpg?w=826&t=st=1690858682~exp=1690859282~hmac=6015319e298a11a02addf4e9bddd42b6e724839f05f735e037f1c68f84198ff8">
                <img class="hover:opacity-75" src="https://img.freepik.com/foto-gratis/lindo-mascota-collage-aislado_23-2150007407.jpg?w=826&t=st=1690858697~exp=1690859297~hmac=3e274404b00a2286a6c3d02f4fcbeca92beac47cbf13d260703b6bae01eb6df4">
                
                <img class="hover:opacity-75" src="https://img.freepik.com/foto-gratis/tucan-multicolor-posado-rama-ia-generativa_188544-8020.jpg?w=826&t=st=1690858831~exp=1690859431~hmac=941c90819497d401bc6f946ed36677f1e710ca316570e594e215677af35ea3dd">
  
                <img class="hover:opacity-75 h-full" src="https://img.freepik.com/foto-gratis/elefante-parque-nacional-amboseli-kenia-africa_181624-22024.jpg?w=996&t=st=1690859150~exp=1690859750~hmac=9616a553f96a383c848c4694def166d6cd4d966a5c153e142125e0ddfad9bbb8">
  
                <img class="hover:opacity-75 h-full" src="https://img.freepik.com/foto-gratis/serpiente-piton-arbol-verde-rama-lista-atacar-serpiente-chondropython-viridis-closeup-fondo-negro_488145-1162.jpg?w=1380&t=st=1690859215~exp=1690859815~hmac=375e9b9296f77ec12329659ee6bdfc39503c4f85a29bd18a67a346429d2f1e58">
  
                <img class="hover:opacity-75 h-full" src="https://img.freepik.com/foto-gratis/tortuga-estimulada-africana-hierba_167946-113.jpg?w=1380&t=st=1690859250~exp=1690859850~hmac=aae400813e92b0da7ddb9081877f1e377a1a4a770771fc11d329eee0198c3ad8">
  
                <img class="hover:opacity-75 h-full" src="https://img.freepik.com/foto-gratis/dos-jirafas-macho-al-atardecer-kruger-np-sudafrica_181624-33921.jpg?w=1380&t=st=1690859296~exp=1690859896~hmac=16a0536b7d0b20fe2ae1f75da11b57439c1df5f5c21addac25cae1a6f71d434d">
  
                <img class="hover:opacity-75 h-full" src="https://img.freepik.com/foto-gratis/tiro-enfoque-superficial-madre-cebra-su-bebe-pie-carretera_181624-19806.jpg?w=1380&t=st=1690859333~exp=1690859933~hmac=ce0a44366afbfa2f62dd867f4f4ed7b0f370d19c62307cbe0a8c61587405f0b0">
  
                <img class="hover:opacity-75 h-full" src="https://img.freepik.com/foto-gratis/vibrante-pez-leon-nada-colorido-arrecife-coral-generado-ia_188544-36953.jpg?w=1380&t=st=1690859361~exp=1690859961~hmac=67910d9ff79b1bf394975f9ba8521ec5b413d27f94574075719875d63b0b3c78">
            </div>           
        </div>  
    </aside> 
  </div><br><br>

  <!--Footer-->
  <footer class="bg-gradient-to-t from-gray-800 pt-10 pb-10">
  <div class="w-screen flex justify-center">
      <img class="h-20 w-20"  src="/dist/images/leaf.png" alt="PlanetWise Logo">
  </div>
  <div class="container mx-auto">
    <div class="flex flex-col md:flex-row justify-center items-center">
      <div class="flex items-center justify-center md:justify-between mt-4 md:mt-0">
        <a href="/pruebahome/index.html" class="text-base px-4 py-2">Home</a>
        <a href="/pruebahome/sobre nosotros.html" class="text-base px-4 py-2">sobre nosotros</a>
        <a href="#" class="text-base px-4 py-2">Translator</a>
        <a href="/pruebahome/blog.html" class="text-base px-4 py-2">Blog</a>
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