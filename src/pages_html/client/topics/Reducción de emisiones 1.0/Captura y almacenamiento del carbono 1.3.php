<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="/dist/images/leaf.png">
        <link href="/dist/output.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@1,500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/pruebahome/static/tailwind/tailwind.min.css">
        <link rel="stylesheet" href="/src/tailwind.min.css">
        <link rel="stylesheet" href="/src/scroll.css">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
        <title>Captura y almacenamiento del carbono </title>
        <link rel="stylesheet" href="../../../../../src/pantallacarga.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/src/css modo oscuro/estilos.css">
    </head>

<body class="h-screen font-sans cursor-default">

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
     </Nav>
     <style>
        nav {
        position: relative;
        z-index: 2; /* Asegura que el menú aparezca encima del slider */}
  
        nav:hover + .hero {
        visibility: hidden; /* Oculta el slider cuando el menú se sombree */
    }
  
        .hero {
          background-image: url('/dist/images/co2.jpg'); /* Ruta de imagen de fondo */
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
          <h2 class="hero-title">Captura y almacenamiento del carbono</h2>
        </div>
      </section>
  </header>
  <div class="container mx-auto flex flex-wrap py-6">

    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">
  
        <article class="flex flex-col my-4 scroll">
            <!-- Article Image -->
            <p class="hover:opacity-75">
                <img  class="rounded-t-2xl w-full h-full scroll" src="https://img.freepik.com/foto-gratis/fondo-paisaje-cielo-nublado_23-2149134093.jpg?w=740&t=st=1690921961~exp=1690922561~hmac=ddded34422a647043e0bbce7ecc5e03983ea17d59304ec50f901f9686a8a6fed">
            </p>
            <div class="bg-white bg-opacity-10 text-gray-500 shadow-2xl rounded-b-2xl flex flex-col justify-start p-6">
        
                <p class="text-3xl font-bold hover:text-gray-700 pb-4">¿Qué es la captura y almacenamiento del carbono?</p>
                                                   
                <p class="pb-6">Esta técnica se ha considerado por los grupos de poder financieros y energéticos como la gran esperanza para no afrontar los cambios radicales que exige la lucha contra el cambio climático. Pero a fecha de hoy apenas hay un puñado de proyectos piloto que se enfrentan a la inviabilidad económica que marca el bajo precio del dióxido de carbono. Además, el almacenamiento de carbono comparte con el ‘fracking» algunos riesgos, como la posibilidad de fugas y el hecho de aumentar los riesgos sísmicos. <br><br>

                    La Captura y Almacenamiento del Carbono constituye un proceso consistente en la separación del CO2 emitido por la industria y fuentes relacionadas con la generación de energía en los procesos de combustión y su transporte a un lugar de almacenamiento geológico para aislarlo de la atmósfera a largo plazo. Debido a los riesgos subyacentes se ha prohibido la difusión del CO2 en la columna de agua oceánica o en el fondo marino [1], contempladas inicialmente como una opción en los primeros estudios sobre la CAC y por tanto solamente nos referiremos al almacenamiento en el subsuelo terrestre o marino, de forma preferente en yacimientos salinos. La acidificación del océano podría tener consecuencias negativas para los ecosistemas marinos y no hay ninguna garantía de que el CO2 no vuelva a la atmósfera. <br><br>

                    La CAC está diseñada para ser aplicada a las grandes centrales termoeléctricas de carbón y gas, de nuevo diseño, aunque también se puede aplicar a las actuales centrales. Se vende como una forma «limpia» de generar electricidad y supone una magnífica excusa para promover y alargar la extracción de carbón, uno de los combustibles más sucios y contaminantes. <br><br>

                   La reducción neta de las emisiones de CO2 dependerá del balance global de los siguientes factores: de la fracción de CO2 captado, de la mayor emisión debido a la pérdida de eficiencia de los procesos industriales y al aumento de la energía necesaria para captar, transportar y almacenar el CO2 (el CO2 se comprime hasta casi licuarlo), a las fugas producidas en el transporte y a la fracción del CO2 retenido en el almacén geológico. La captura puede ascender al 90% de las emisiones, que aumentan en un 25-30% debido a la pérdida de eficiencia y al mayor consumo energético. Suponiendo que no haya fugas en el transporte y en el almacenamiento, las reducciones reales quedan en un 80% del CO2 emitido anteriormente.</a></p>
            </div>
        </article><br><br>
  
        <article class="flex flex-col my-4">
            <!-- Article Image -->
            <p class="scroll text-3xl text-gray-400 font-bold hover:text-gray-700 pb-4 flex justify-center items-center">¿Cómo se captura el CO2 en los procesos de combustión?</p> 
  
            <a class="hover:opacity-75 flex justify-center items-center ">
              <iframe class="scroll" width="560" height="315" src="https://www.youtube.com/embed/9m46-j6dLFw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </a><br>

            <div class="bg-white bg-opacity-10 text-gray-500 shadow-xl rounded-2xl flex flex-col justify-start p-6 scroll">
                <p class="pb-6">
                    <li>La CAC consta de tres fases: captura, transporte y almacenamiento del CO2, siendo la fase de captura la más costosa de las tres. Aunque hay muchas tecnologías posibles, todas ellas se agrupan en tres tipos: pre-combustión (gasificación del combustible), post-combustión y oxicombustión. Se trata de separar los diferentes gases a utilizar o generados, para obtener una corriente de CO2 lo más pura posible, que retenga la mayor parte del carbono utilizado en la combustión.

                    </li><br><br>
                    <li>La precombustión se trata de gasificar el carbón para obtener un gas de síntesis (mezcla de monóxido de carbono e hidrógeno) y de separar el hidrógeno que se quemará sin producir dióxido de carbono. El monóxido de carbono se hace reaccionar con agua para producir dióxido de carbono e hidrógeno, que puede utilizarse de nuevo tras su separación como combustible. El dióxido de carbono se almacen</li><br><br>

                    <li>En la técnica de postcombustión los gases de combustión son tratados con amoníaco o rocas calizas para fijar los óxidos de azufre y nitrógeno y posteriormente se fija el CO2 con sustancias químicas como las aminas, que al regenerarse generan una corriente rica en CO2</li><br><br>

                    <li>En la oxicombustión se trata de eliminar del aire el nitrógeno y que el comburente sea muy rico en oxígeno (95-99%). El gas de combustión muy rico en CO2 y sin óxidos de nitrógeno se seca y purifica para eliminar el vapor de agua y las partículas. El CO2 obtenido hay que comprimirlo para transportarlo al punto de almacenaje subterráneo. La separación previa del nitrógeno del aire para obtener oxígeno puro es un procedimiento muy costoso energéticamente (hay que enfriar y comprimir el aire hasta licuarlo y después hacer una destilación fraccionada para separarlos). <br><br>

                    La técnología de la postcombustión es la única que se podría aplicar a las actuales centrales térmicas de carbón o gas, y las otras dos son más adecuadas para plantas de nuevo diseño y alto rendimiento (centrales de gas de ciclo combinado, ciclo combinado de gasificación integrada del carbón, lecho fluidificado), pues alteran las condiciones de la combustión (el horno ha de resistir temperaturas más altas en la oxicombustión [3]) o del combustible. De todas formas el rendimiento global es mucho menor en el caso de la adaptación a la CAC de las actuales plantas que en las plantas nuevas.</li><br><br>


                    <li>La inyección de CO2 en el subsuelo se utiliza como técnica madura desde hace 40 años para la recuperación mejorada de yacimientos de gas o de petróleo cercanos al agotamiento. La gran mayoría de la veintena de proyectos de demostración de la CAC existentes en la actualidad en el mundo se utilizan en la industria del petróleo y el gas. Pero no hay gran experiencia en el almacenamiento geológico del carbono y persisten las dudas sobre la posibilidad de fugas y los impactos ambientales, así como la estabilidad sísmica del emplazamiento [5]. La sismicidad inducida en el proyecto de almacenamiento de gas en el subsuelo marino en el proyecto Castor frente a Vinarós (Castellón), con más de 600 sismos en septiembre-octubre de 2013, alguno con magnitud de 4,2 es un ejemplo de lo que podría suceder en la CAC.</li><br></p>
                
            </div>
        </article>
  
        
    </section>
  
    <!-- Sidebar Section -->
    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">
  
        <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6 scroll">
            <p class="text-xl font-semibold pb-5">Gestión de residuos peligrosos.
            </p>
            <p class="pb-2">
              La reducción de residuos peligrosos es una estrategia crucial para proteger el medio ambiente y la salud humana. Los residuos peligrosos son aquellos que pueden representar un riesgo significativo para la salud, el ecosistema y la vida silvestre debido a sus características tóxicas, corrosivas, inflamables o reactivas.</p>
            <a href="../Reducción de emisiones 1.0/Gestión de residuos peligrosos 1.9.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                Leer mas 
            </a>
        </div>
  
        
        <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6 scroll">
            <p class="text-xl font-semibold pb-5">Planificacion urbana sostenible.</p>
            <p class="pb-2">Es una disciplina que busca diseñar y gestionar las ciudades de manera eficiente, equitativa y respetuosa con el medio ambiente, con el objetivo de mejorar la calidad de vida de sus habitantes y preservar los recursos naturales para las generaciones futuras.</p>
            <a href="../Reducción de emisiones 1.0/Planificación urbana sostenible 1.4.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
             Leer mas
            </a>
        </div>
  
        
        <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6 scroll">
            <p class="text-xl font-semibold pb-5">Energias renovables.</p>
            <p class="pb-2">Las energías renovables son fuentes de energía que se obtienen a partir de recursos naturales que son virtualmente inagotables o se renuevan a una tasa más rápida de lo que se consumen. </p>
            <a href="../Reducción de emisiones 1.0/Energías renovables 1.1.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                Leer mas 
            </a>
        </div>
  
        
        <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6 scroll">
            <p class="text-xl font-semibold pb-5">Compostaje.</p>
            <p class="pb-2">El compostaje es un proceso natural de descomposición de materia orgánica, como restos de alimentos, residuos de jardín, hojas caídas, cáscaras de huevo, papel y otros materiales biodegradables.</p>
            <a href="../Reducción de emisiones 1.0/Compostaje 1.7.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                Leer mas 
            </a>
        </div>
  
        
        <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6 scroll">
            <p class="text-xl font-semibold pb-5">Captura y almacenamiento del carbono.</p>
            <p class="pb-2">
              La Captura y Almacenamiento del Carbono, conocido como CAC o CCS (Carbon Capture and Storage, en inglés), es una estrategia que tiene como objetivo reducir las emisiones de dióxido de carbono (CO2) y otros gases de efecto invernadero producidos por la quema de combustibles fósiles y otras actividades industriales.</p>
            <a href="../Reducción de emisiones 1.0/Captura y almacenamiento del carbono 1.3.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                Leer mas 
            </a>
        </div>
  
        <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6 scroll">
            <p class="text-xl font-semibold pb-5">Diversidad.</p>
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