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
        <title>Agricultura sostenible</title>
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../../../../../src/pantallacarga.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="/src/css modo oscuro/estilos.css">
    </head>

<body class="h-screen font-sans cursor-default oculto">

     <!--Pantalla de carga-->
     <div class=" flex justify-center items-center h-screen z-10" id="onload">
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

     <style>
        nav {
        position: relative;
        z-index: 2; /* Asegura que el menú aparezca encima del slider */}
  
        nav:hover + .hero {
        visibility: hidden; /* Oculta el slider cuando el menú se sombree */
    }
  
        .hero {
          background-image: url('https://img.freepik.com/foto-gratis/iot-agricultura-inteligente-fondo-arbol-plantacion-manual_53876-124626.jpg?w=1060&t=st=1690947565~exp=1690948165~hmac=3c4ce006923d3c379e474730f2aa515850655684ababb77059c0aa36c9420b8b'); /* Ruta de imagen de fondo */
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
          <h2 class="hero-title">Agricultura sostenible</h2>
         
        </div>
      </section>
  </header>
  <div class="container mx-auto flex flex-wrap py-6">

    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">
  
        <article class="flex flex-col my-4">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75">
                <img alt="" class="scroll rounded-t-2xl block w-full h-full" src="/dist/images/agri soste.jpg">
            </a>
            <div class="bg-white bg-opacity-10 text-gray-500 shadow-2xl rounded-b-2xl flex flex-col justify-start p-6">
        
                <p class="text-3xl font-bold hover:text-gray-700 pb-4">¿Qué es la agricultura sostenible?</p>
                                                   
                <p class="pb-6">La agricultura sostenible es un enfoque de producción agrícola que busca satisfacer las necesidades actuales de alimentos y recursos, sin comprometer la capacidad de las futuras generaciones para satisfacer sus propias necesidades. Se basa en principios de respeto por el medio ambiente, la equidad social y la viabilidad económica. El objetivo es crear un sistema agrícola que sea ambientalmente sostenible, socialmente justo y económicamente viable a largo plazo. 

                <p>El valor de la producción agrícola mundial supera los 3.000 billones de dólares al año y en algunos países supone hasta el 40 % de su riqueza, según datos del Banco Mundial. Pero es responsable de más del 20 % de los gases de efecto invernadero. La apuesta por la agricultura sostenible, aquella que es respetuosa con el medioambiente, rentable y social, se ha convertido en una prioridad.</p><br><br>

                <p>Son más de 30.000 millones de insectos. Un ejército de trabajadores incansables que en los últimos meses ha ocupado 25.000 de las más de 31.000 hectáreas dedicadas al cultivo hortícola en invernadero en las provincias españolas de Almería y Granada. Forman parte de las medidas de control biológico de plagas que desde hace años aplica la industria agrícola de esta zona del Mediterráneo. <br><br>

                La primera aplicación masiva de control biológico en Almería tuvo lugar en 2007. La resistencia de algunas enfermedades y plagas a los pesticidas químicos había mermado la producción y disparado las advertencias por los residuos encontrados en las hortalizas. A los pocos años, el uso de sistemas de control biológico era ya dominante y, lo que es si cabe más importante, la producción se había recuperado.<br><br>
                    
                La aplicación de estos métodos, analizada por el entomólogo Jan van der Blom, responsable de agroecología de la Asociación de Organizaciones de Productores de Frutas y Hortalizas de Andalucía, en un artículo publicado en 2017, nos cuenta una historia de agricultura sostenible. Una que habla de sostenibilidad medioambiental, pero también social y, sobre todo, económica.</p>
  
            </div>
        </article><br>
  
        <article class="flex flex-col my-4"><br>
            <!-- Article Image -->
            <p class="text-3xl text-gray-400 font-bold scroll hover:text-gray-700 pb-4 flex justify-center items-center">Un mundo agrícola
            </p><br>
            <a href="#" class="hover:opacity-75">
              <img alt="" class="scroll rounded-t-2xl w-full h-full" src="https://img.freepik.com/foto-gratis/hombre-cuidando-su-granja-close-up_23-2148580028.jpg?w=1060&t=st=1690948012~exp=1690948612~hmac=a58831d6877096a17b5a645d495144200d203fe9042e92906ae0d517ac4a7ed5">
          </a>

          <div class="bg-white bg-opacity-10 text-gray-500 shadow-xl rounded-b-2xl flex flex-col justify-start p-6">

          <p>Nuestro mundo es, ante todo, un mundo agrícola. Salvo algunas excepciones, las sociedades que pueblan el planeta son una consecuencia directa de la invención de la agricultura. Sin ella, nuestra historia habría sido muy diferente. Hoy, la alimentación, el textil o el papel no pueden entenderse sin la agricultura. En 2019, el valor total de la producción agrícola mundial superó los 3.250 billones de dólares, según los datos del Banco Mundial. Esto es un 3,7% del Producto Interior Bruto (PIB) global. <br><br>

            En la mayoría de países ricos occidentales, este porcentaje es menor. Sin embargo, en grandes potencias como China o países emergentes como Brasil el peso de la agricultura es bastante más elevado. En muchos países emergentes, la producción agrícola supone más del 30 % e incluso el 40 % de su riqueza. Solo durante 2018 se produjeron más de 2.700 millones de toneladas de trigo, 780 millones de toneladas de arroz o 370 millones de toneladas de patatas. Estos números no han dejado de crecer desde la llamada revolución verde a mediados del siglo pasado.<br><br>
            
            La agricultura es un elemento de desarrollo económico y un eje de articulación social. Sin embargo, tal como señala la FAO, este protagonismo no viene libre de costes. La agricultura y el uso de las tierras de cultivo es responsable de más del 20 % de las emisiones de gases de efecto invernadero y del consumo del 70 % de agua a nivel mundial. Un tercio de toda la producción agrícola global se desperdicia; y, a pesar del aumento constante del rendimiento de los cultivos, cerca de 700 millones de personas pasan hambre.</p>

            </a>
                  
            </div>
        </article><br>
  
        <article class="flex flex-col my-4">
          <!-- Article Image -->
          <p class="text-3xl font-bold hover:text-gray-700 pb-4 flex justify-center items-center"></p> 

            <p class="text-3xl font-bold scroll hover:text-gray-700 pb-4 flex justify-center items-center text-gray-400">Agricultura sostenible:</p><br>

            <a class="hover:opacity-75 flex justify-center items-center ">
                <iframe class="scroll" width="560" height="315" src="https://www.youtube.com/embed/GsMKCfKtm3I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </a> <br><br>

            <div class="bg-white bg-opacity-10 text-gray-500 shadow-xl rounded-2xl flex flex-col justify-start p-6">
            
             <p>Algunos de los principios y prácticas clave de la agricultura sostenible son:</p><br><br>
             <li> La agricultura sostenible busca proteger y conservar los recursos naturales, como el suelo, el agua, la biodiversidad y el aire. Se promueve el uso responsable de los recursos naturales para evitar su agotamiento y deterioro.</li><br><br>
             <li>Se fomenta el uso de prácticas agrícolas que se basan en los principios de la ecología, como la rotación de cultivos, la agroforestería, el manejo integrado de plagas, el uso de abonos orgánicos y la conservación de la biodiversidad.</li><br><br>
             <li>La agricultura sostenible busca minimizar el uso de pesticidas y fertilizantes químicos, y en su lugar, se promueve el uso de métodos naturales y biológicos para controlar plagas y mantener la fertilidad del suelo.</li><br><br>
             <li>La agricultura sostenible promueve la participación activa de las comunidades locales y las pequeñas explotaciones agrícolas, fomentando la producción de alimentos a nivel local y la distribución justa de los beneficios económicos.</li><br><br>            
          </div>

      </article>
    </section>
  
    <!-- Sidebar Section -->
    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">
  
        <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full scroll flex flex-col my-4 p-6">
            <p class="text-xl font-semibold pb-5">Agricultura sostenible
            </p>
            <p class="pb-2">La agricultura sostenible promueve la participación activa de las comunidades locales y las pequeñas explotaciones agrícolas, fomentando la producción de alimentos a nivel local y la distribución justa de los beneficios económicos.
               </p>
            <a href="../Usos sostenible de los recursos naturales 4.0/Agricultura sostenible 4.2.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                Leer mas 
            </a>
        </div>
  
        
        <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6 scroll">
            <p class="text-xl font-semibold pb-5">Gestión forestal sostenible</p>
            <p class="pb-2">La gestión forestal es el proceso de planificación, manejo y conservación de los recursos forestales de manera sostenible y responsable. Implica tomar decisiones informadas para garantizar la utilización adecuada de los bosques y los recursos que proporcionan, al mismo tiempo que se protege la biodiversidad y se conserva la salud y la funcionalidad de los ecosistemas forestales. </p>
            <a href="../Usos sostenible de los recursos naturales 4.0/Gestión forestal sostenible 4.1.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                Leer mas 
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

    <!--footer-->
    <footer class="bg-gradient-to-t from-gray-800 pt-10 pb-10">
        <div class="w-screen flex justify-center">
            <img class="h-20 w-20"  src="/dist/images/leaf.png" alt="PlanetWise Logo">
        </div>
        <div class="container mx-auto">
          <div class="flex flex-col md:flex-row justify-center items-center">
            <div class="flex items-center justify-center md:justify-between mt-4 md:mt-0">
              <a href="../../../../../pruebahome/index.php" class="text-base px-4 py-2">Home</a>
              <a href="../../../../../pruebahome/sobre nosotros.php" class="text-base px-4 py-2">sobre nosotros</a>
              <a href="../../../../../pruebahome/blog.php" class="text-base px-4 py-2">Blog</a>
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
       <!--Script de la página de carga-->
       <script src="../../../../../src/js/load.js"></script> 

</body>
</html>