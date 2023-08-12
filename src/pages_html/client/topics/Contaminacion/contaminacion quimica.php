<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
    <title>contaminacion quimica</title>
    <link rel="icon" href="/dist/images/leaf.png">
    <link rel="stylesheet" href="/src/scroll.css">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	  <link rel="stylesheet" href="/src/css modo oscuro/estilos.css">
</head>
<body class="cursor-default">

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
    <style>
      nav {
      position: relative;
      z-index: 2; /* Asegura que el menú aparezca encima del slider */}
    
      nav:hover + .hero {
      visibility: hidden; /* Oculta el slider cuando el menú se sombree */
    }
    
      .hero {
        background-image: url('/dist/images/qupimicos.jpg'); /* Ruta de imagen de fondo */
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
        <h2 class="hero-title">Contaminacion quimica</h2>
       
      </div>
    </section><br> <br>
      <div class="container mx-auto flex flex-wrap py-6">
    
          <!-- Posts Section -->
          <section class="w-full md:w-2/3 flex flex-col items-center px-3">
    
              <article class="flex flex-col my-4">
                  <!-- Article Image -->
                  <a class="hover:opacity-75 scroll">
                      <img alt="" src="https://img.freepik.com/foto-gratis/residuos-radiactivos-barriles-deposito-residuos-nucleares-ia-generativa_8829-2882.jpg?w=1380&t=st=1690862629~exp=1690863229~hmac=2c59eb6a4c26467a6dfd0705de2337d8c3eddf6464fb8bd50c03edd6d672402b">
                  </a>
                  <div class="bg-white scroll bg-opacity-10 text-gray-500 shadow-xl rounded-2xl flex flex-col justify-start p-6">
              
                      <p class="text-3xl font-bold hover:text-gray-700 pb-4">¿Qué es la contaminación quimica?</p>
                                                         
                      <p class="pb-6">La contaminación química es un tipo de contaminación que se debe a la introducción de un agente externo, totalmente ajeno, en un ecosistema. Los daños que causa dependen de la naturaleza del agente químico, de la cantidad de contaminante y de la resiliencia del medio que tengamos en cuenta. Las causas son variadas, aunque en general se deben siempre a la actividad antrópica, y las consecuencias pueden llegar a ser altamente dañinas, tanto para la salud de las personas como para el medio ambiente.

                        La contaminación química es aquella contaminación que se produce debido a la entrada de un agente químico nocivo en un ecosistema. Los daños que llega a causar dependen tanto de la cantidad de contaminante como de su agresividad, así como de la resiliencia del medio en el que se libere. <br><br>

    
                        Además, hemos de tener en cuenta que hay dos tipos de contaminación química según el agente contaminante liberado. Así, encontramos los contaminantes primarios y contaminantes secundarios. Un contaminante primario es aquel que ejerce su influencia dañina sin sufrir ninguna modificación posterior. Por el contrario, un contaminante secundario puede incluso ser en su origen una sustancia inocua, pero una vez liberado sufre una serie de transformaciones químicas que lo convierten en un agente nocivo.<br><br>
    
                        Hemos de tener también en cuenta que no es lo mismo ecotoxicidad y toxicidad o peligrosidad para las personas. Un agente ecotóxico es dañino para el medio ambiente, pero dependiendo de su naturaleza puede ser perfectamente aceptable (siempre atendiendo a la cantidad) para la salud de las personas. Por ejemplo, los restos de medicamentos hormonales pueden causar estragos en los ecosistemas acuáticos, incluso en proporciones irrisorias, pero no causan problemas en nuestra salud cuando se trata de cantidades tan ínfimas.
    
                      </p><br>
                  </div>
              </article><br>
    
              <article class="flex flex-col my-4">
                  <!-- Article Image -->
                  <p class="scroll text-3xl text-gray-400 font-bold hover:text-gray-700 pb-4 flex justify-center items-center">Causas de la contaminación química
                </p> 
    
                  <a href="#" class="hover:opacity-75 flex justify-center items-center ">
                    <iframe class="scroll" width="560" height="315" src="https://www.youtube.com/embed/Pj3sd--teIg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  </a><br>
                  <div class="bg-white scroll bg-opacity-10 text-gray-500 shadow-xl rounded-2xl flex flex-col justify-start p-6">
                     
                      <p class="pb-6">Hay multitud de causas de la contaminación química, pero todas ellas se pueden resumir en una gestión deficiente de los residuos (sin tener en cuenta actividades ilegales y/o deliberadas). Vamos a ver algunos ejemplos concretos:<br><br>

                          <li>Aguas residuales: cuando las aguas residuales no se depuran, o se depuran mal, pueden llevar todo tipo de contaminantes. Incluso bien depuradas, hay ciertos contaminantes muy difíciles de retirar. </li><br><br>
    
                          <li>Lixiviados: los lixiviados son líquidos que se desprenden a partir de materiales acumulados. Por ejemplo, los vertederos suelen tener una "balsa de lixiviados", que es una balsa de contención de estos contaminantes. </li><br><br>
    
                          <li>Bioacumulación: la bioacumulación supone la acumulación de un contaminante en los tejidos de organismos vivos, dado que no pueden ser excretados. La propia dieta de un animal puede ser una fuente de contaminación. Es frecuente con los metales pesados.  </li></p><br><br>
                      
                  </div>
              </article>
    
              <article class="flex flex-col my-4">
                  <!-- Article Image -->
                  <a class="hover:opacity-75">
                      <img alt="" class="scroll rounded-t-2xl w-full" src="/dist/images/contaquimi.jpg">
                  </a>
                  <div class="bg-white bg-opacity-10 text-gray-500 shadow-2xl rounded-b-2xl flex flex-col justify-start p-6">
                    
                      <p class="text-3xl font-bold hover:text-gray-700 pb-4">Consecuencias de la contaminación química</p>
                      
                     <li>Hay contaminantes que son muy perjudiciales para la salud. Los disruptores endocrinos (EDC) son sustancias que alteran nuestro sistema endocrino al asemejarse mucho a nuestras propias señales hormonales. Algunas fuentes son los medicamentos, los productos sanitarios (pesticidas y plaguicidas, etc.).</li> <br><br>
    
                     <li>Las consecuencias para el medio ambiente son variadas, pero en cualquier caso afectan siempre en mayor medida a los seres vivos. Por ejemplo, estas son algunas de las consecuencias de la contaminación por químicos más patentes:</li><br><br>

                     <li>La contaminación de balsas de agua con disruptores endocrinos.</li><br>
                     <li>La acidificación generalizada.</li><br>
    
                     <li>Para saber si un producto químico es peligroso para el medio ambiente, en Europa disponemos de los pictogramas CLP, emitidos por la ECHA (European Chemical Agency). Los pictogramas son unas señales claras y sencillas que nos informan de la peligrosidad de un agente químico en cuestión. El pictograma de ecotoxicidad, o tóxico para el medio ambiente, representa una orilla con un pez y un árbol muertos. </li><br>
    
                   </div>
              </article>
          
          </section>
    
          <!-- Sidebar Section -->
          <aside class="w-full md:w-1/3 flex flex-col items-center px-3">
    
          <div class="bg-white bg-opacity-10 scroll text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6">
                  <p class="text-xl font-semibold pb-5">Contaminación del aire
                  </p>
                  <p class="pb-2">El aire que respiramos es un recurso esencial para la vida en nuestro planeta. Sin embargo, en las últimas décadas, la calidad del aire se ha visto amenazada por un fenómeno preocupante: la contaminación del aire</p>
                  <a href="../Contaminacion/Contaminacion del aire.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                      Leer mas 
                  </a>
              </div>
    
              
              <div class="bg-white bg-opacity-10 scroll text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6">
                  <p class="text-xl font-semibold pb-5">Contaminacion del agua</p>
                  <p class="pb-2">La contaminación del agua no solo afecta la disponibilidad de agua dulce para el consumo humano, sino que también tiene un impacto devastador en los ecosistemas acuáticos y en la biodiversidad</p>
                  <a href="../Contaminacion/contaminacion del agua.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                   Leer mas
                  </a>
              </div>
    
    
              
              <div class="bg-white bg-opacity-10 text-gray-500 scroll lg:shadow-2xl w-full flex flex-col my-4 p-6">
                  <p class="text-xl font-semibold pb-5">Contaminación acústica</p>
                  <p class="pb-2">El ruido es una parte inevitable de la vida moderna, pero cuando sus niveles superan ciertos límites, puede convertirse en una forma de contaminación ambiental conocida como "contaminación acústica" o "contaminación sonora".</p>
                  <a href="../Contaminacion/contaminacion acustica.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                      Leer mas 
                  </a>
              </div>
    
              
              <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full scroll flex flex-col my-4 p-6">
                  <p class="text-xl font-semibold pb-5">Contaminación química</p>
                  <p class="pb-2">Las fuentes de contaminación química son diversas y pueden provenir de actividades industriales, agrícolas, mineras, residenciales y de desechos. Productos químicos como pesticidas, herbicidas, fertilizantes, metales pesados, hidrocarburos y productos químicos industriales pueden filtrarse en el suelo, el agua y el aire, afectando la calidad y la integridad del entorno natural.</p>
                  <a href="../Contaminacion/contaminacion quimica.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                      Leer mas 
                  </a>
              </div>
    
              
              <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl scroll w-full flex flex-col my-4 p-6">
                  <p class="text-xl font-semibold pb-5">Contaminación del suelo</p>
                  <p class="pb-2">La contaminación del suelo se produce cuando sustancias tóxicas, químicas o materiales peligrosos se introducen en el suelo, alterando su composición y capacidad para sustentar la vida. Estas sustancias pueden provenir de actividades humanas, como vertidos de productos químicos industriales, derrames de hidrocarburos, el uso excesivo de pesticidas y fertilizantes agrícolas, así como la disposición inadecuada de residuos sólidos y líquidos.</p>
                  <a href="../Contaminacion/contaminacion del suelo.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                      Leer mas 
                  </a>
              </div>
    
              <div class="bg-white scroll bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6">
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
</body>
</html>