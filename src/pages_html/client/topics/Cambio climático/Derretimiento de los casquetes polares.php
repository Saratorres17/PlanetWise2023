<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/dist/images/leaf.png">
    <link rel="stylesheet" href="/src/scroll.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../src/pantallacarga.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Derretimiento de los casquetes polares y el nivel del mar</title>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	  <link rel="stylesheet" href="/src/css modo oscuro/estilos.css">
</head>
<body class="cursor-default oculto">
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
</header>
    </div>
    <style>
      nav {
      position: relative;
      z-index: 2; /* Asegura que el menú aparezca encima del slider */}
    
      nav:hover + .hero {
        visibility: hidden; /* Oculta el slider cuando el menú se sombree */
      }
    
      .hero {
        background-image: url("/dist/images/Casquetes\ polares.jpeg"); /* Ruta de imagen de fondo */
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
    </head>

    
    <section class="hero relative">
      <div class="overlay absolute inset-0"></div>
      <div class="hero-content">
        <h2 class="hero-title">Derretimiento de los casquetes polares y el nivel del mar.</h2>
        <p class="hero-subtitle"></p>
       
      </div>
    </section><br> <br>
      <div class="container mx-auto flex flex-wrap py-6">
    
          <!-- Posts Section -->
          <section class="w-full md:w-2/3 flex flex-col items-center px-3">
    
              <article class="flex flex-col my-4">
                  <!-- Article Image -->
                  <a href="#" class="hover:opacity-75">
                      <img src="/dist/images/Polo.jpg">
                  </a>
                  <div class="bg-white bg-opacity-10 scroll text-gray-500 shadow-2xl rounded-2xl flex flex-col justify-start p-6">
              
                      <p class="text-3xl font-bold hover:text-gray-700 pb-4">¿Qué es el Derretimiento de los casquetes polares y el nivel del mar?</p>
                                                         
                        El derretimiento de los casquetes polares es el proceso en el que el hielo de las regiones polares, como el Ártico y la Antártida, se derrite y se convierte en agua líquida. Esto está ocurriendo como resultado del calentamiento global causado por el aumento de las emisiones de gases de efecto invernadero debido a la actividad humana.<br><br>

                        A medida que los casquetes polares se derriten, contribuyen al aumento del nivel del mar. Cuando el hielo terrestre se derrite y fluye hacia el océano, añade más agua al sistema global. Esto, junto con la expansión térmica del agua debido al calentamiento, provoca que el nivel del mar aumente en todo el mundo. <br><br>

    
                        Los casquetes polares se encuentran en las regiones árticas y antárticas y están cubiertos por grandes capas de hielo acumulado durante miles de años.<br>
                        El calentamiento global causado por el aumento de las emisiones de gases de efecto invernadero está provocando el derretimiento acelerado de los casquetes polares.<br>
                        El derretimiento se produce tanto en las capas superficiales de hielo, como en las plataformas de hielo flotantes que se extienden hacia el mar.<br>
                        El derretimiento de los casquetes polares tiene consecuencias significativas, incluyendo la pérdida de hábitat para especies polares, la aceleración del aumento del nivel del mar y el cambio en los patrones climáticos<br><br>
    
                        <b class="text-2xl">Aumento del nivel del mar:</b>
                        <br>
                        <br>
                        Como resultado del derretimiento de los casquetes polares y el calentamiento global, el agua derretida se agrega a los océanos, lo que contribuye al aumento del nivel del mar en todo el mundo.<br>
                        La expansión térmica del agua también contribuye al aumento del nivel del mar. A medida que los océanos se calientan, el agua se expande y ocupa más espacio.<br>
                        El aumento del nivel del mar tiene impactos significativos en las comunidades costeras. Puede provocar inundaciones más frecuentes y severas, erosión costera y pérdida de tierras habitables.<br>
                        Las ciudades costeras, las infraestructuras críticas y los ecosistemas costeros están en riesgo debido al aumento del nivel del mar.</p><br><br>
                    </a><br>         
                  </div>
              </article>
    
              <article class="flex flex-col my-4">
                  <!-- Article Image -->
                  <p class="scroll text-3xl text-gray-400 font-bold hover:text-gray-700 pb-4 flex justify-center items-center">Datos curiosos</p> 
    
                  <a href="#" class="hover:opacity-75 flex justify-center items-center ">
    
                    <iframe class="scroll" width="560" height="315" src="https://www.youtube.com/embed/1Q0BT8e4a7w" title="La desaparición de los glaciares desencadenará una sucesión de catástrofes | #CALENTAMIENTOGLOBAL" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></iframe>
                  </a><br>
                  <div class="bg-white scroll bg-opacity-10 text-gray-500 shadow-xl rounded-2xl flex flex-col justify-start p-6"> 
                      <p href="#" class="pb-6">Además del derretimiento de los casquetes polares, los glaciares en diferentes partes del mundo también están contribuyendo al aumento del nivel del mar debido a su derretimiento.<br>
                        La pérdida de hielo en Groenlandia y la Antártida son fuentes importantes de contribución al aumento del nivel del mar.<br>
                        Las proyecciones indican que, si las emisiones de gases de efecto invernadero no se reducen significativamente, el aumento del nivel del mar podría tener efectos devastadores en las zonas costeras y las poblaciones humanas en el futuro.<br><br>
            
                        <b class="text-2xl">Mitigación y adaptación:<br></b><br>
                        
                        Para abordar el derretimiento de los casquetes polares y el aumento del nivel del mar, es esencial tomar medidas para reducir las emisiones de gases de efecto invernadero y mitigar el cambio climático.<br>
                        La adaptación también es crucial para enfrentar los impactos inevitables del aumento del nivel del mar. Esto incluye la planificación de infraestructuras resistentes al clima, la protección de los ecosistemas costeros y la migración planificada de comunidades en riesgo.
                    <br>
                      
                  </div>
              </article>
    
              <article class="flex flex-col my-4">
                  <!-- Article Image -->
                  <a class="hover:opacity-75">
                    <img class="scroll w-full rounded-t-2xl" src="/dist/images/derretide.jpeg">
                  </a>
                  <div class="bg-white scroll bg-opacity-10 text-gray-500 shadow-xl rounded-b-2xl flex flex-col justify-start p-6">
                    
                      <p class="text-3xl font-bold hover:text-gray-700 pb-4">¿Cómo evitar el derretimiento de los casquetes polares?</p>
                      
                     <li>Ser ecológicamente responsables: prescindir del coche en la medida de lo posible, ahorrar agua, electricidad, reciclar, utilizar bolsas recicladas de papel en lugar de plástico. Sumar millones de pequeños gestos como estos, es lo que puede marcar la diferencia. </li> <br><br>
    
                     <li>La reducción del consumo de combustibles fósiles continúa situándose como una de las mejores soluciones para el deshielo de los polos y los glaciares. Según los cálculos de los científicos, si consiguiéramos frenar la dependencia de combustibles como el petróleo, el incremento de la temperatura del Planeta se mantendría por debajo de los 2ºC.</li><br><br>
    
                     <li>Si apagamos las luces cuando no estamos en una habitación, utilizamos bombillas de bajo consumo, no dejamos aparatos electrónicos como nuestro ordenador en stand-by o compramos electrodomésticos como la heladera con la etiqueta de eficiencia energética, contribuiremos a reducir el calentamiento global.<br><br>
    
                   </div>
              </article>
    
          
          </section>
    
          <!-- Sidebar Section -->
          <aside class="w-full md:w-1/3 flex flex-col items-center px-3">
    
              <div class="bg-white scroll bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6">
                  <p class="text-xl font-semibold pb-5">Derretimiento de los casquetes polares y el nivel del mar.
                  </p>
                  <p class="pb-2">El deshielo de los glaciares es causado por el cambio climático, es una consecuencia de la enorme industrialización del planeta en los últimos 200 años. ¿Es demasiado tarde para encontrar una solución?</p>
                  <a href="/src/pages_html/client/topics/Cambio climático/Derretimiento de los casquetes polares.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                      Leer mas 
                  </a>
              </div>
    
              
              <div class="bg-white scroll bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6">
                  <p class="text-xl font-semibold pb-5">Efecto invernadero y aumento de la tamperatura global.</p>
                  <p class="pb-2">El efecto invernadero es la forma en que el calor queda atrapado cerca de la superficie de la Tierra por los "gases de efecto invernadero". Se puede pensar en estos gases que atrapan el calor como una manta que envuelve a la Tierra.</p>
                  <a href="/src/pages_html/client/topics/Cambio climático/Efecto invernadero y aumento de la temperatura.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                   Leer mas
                  </a>
              </div>
    
    
              
              <div class="bg-white scroll bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6">
                  <p class="text-xl font-semibold pb-5">Emisiones de gases y su efecto a la salud humana.</p>
                  <p class="pb-2">La contaminación del aire doméstico causa enfermedades no transmisibles, como accidentes cerebrovasculares, cardiopatía isquémica, enfermedad pulmonar obstructiva crónica (EPOC) y cáncer de pulmón.</p>
                  <a href="/src/pages_html/client/topics/Cambio climático/Emisiones de gases y su efecto contra la salud humana.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                      Leer mas 
                  </a>
              </div>
    
              
              <div class="bg-white scroll bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6">
                  <p class="text-xl font-semibold pb-5">Impacto de los ecosistemas y la biodiversidad.</p>
                  <p class="pb-2">El cambio climático tenderá a acelerar la pérdida de las especies de flora y fauna, el deterioro de los ecosistemas y la pérdida de los bienes y servicios de estos ecosistemas ¿Esto nos llevaría a una extinción masiva de las especies?</p>
                  <a href="/src/pages_html/client/topics/Cambio climático/Impacto de los ecosistemas y la biodiversidad.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                      Leer mas 
                  </a>
              </div>
    
              
              <div class="bg-white scroll bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6">
                  <p class="text-xl font-semibold pb-5">Políticas y medidas para reducir la contaminación atmosférica.</p>
                  <p class="pb-2">Nuestras propias actividades en hogares, industria, transporte, comercios, servicios, así como el manejo de los residuos de todo tipo son factores que han provocado afectaciones al medio ambiente y dañinas consecuencias a la salud humana ¿Cuáles son las medidas para evitar esta contminación masiva?</p>
                  <a href="/src/pages_html/client/topics/Cambio climático/Políticas y medidas para reducir la contaminación armostférica.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                      Leer mas 
                  </a>
              </div>
    
              <div class="bg-white scroll bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6">
                  <p class="text-xl font-semibold pb-5">Diversidad</p>
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