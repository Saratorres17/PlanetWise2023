<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="/dist/images/leaf.png">
        <link href="/dist/output.css" rel="stylesheet">
        <link rel="stylesheet" href="/src/scroll.css">
        <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@1,500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/pruebahome/static/tailwind/tailwind.min.css">
        <link rel="stylesheet" href="/src/tailwind.min.css">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
        <title>Reducción de emisiones</title>
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/src/css modo oscuro/estilos.css">
        <link rel="stylesheet" href="../../../../../src/pantallacarga.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
          background-image: url('/dist/images/energiasrenovables.webp'); /* Ruta de imagen de fondo */
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
          <h2 class="hero-title">Energias renovables</h2>
 
        </div>
      </section>
  </header>
  <div class="container mx-auto flex flex-wrap py-6">

    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">
  
        <article class="flex flex-col my-4 scroll">
            <!-- Article Image -->
            <p class="hover:opacity-75">
              <img class="rounded-t-2xl" src="/dist/images/energiarenovable.png">
            </p>
            <div class="bg-white bg-opacity-10 text-gray-500 shadow-2xl rounded-b-2xl flex flex-col justify-start p-6">
        
                <p class="text-3xl font-bold hover:text-gray-700 pb-4">¿Qué son las energias renovables?</p>
                                                   
                <p class="pb-6">Las energías renovables son un tipo de energías derivadas de fuentes naturales que llegan a reponerse más rápido de lo que pueden consumirse. Un ejemplo de estas fuentes son, por ejemplo, la luz solar y el viento; estas fuentes se renuevan continuamente. Las fuentes de energía renovable abundan y las encontramos en cualquier entorno. <br>

                    Por el contrario, los combustibles fósiles, como el carbón, el petróleo y el gas, constituyen fuentes de energía no renovables que tardan cientos de millones de años en formarse. Los combustibles fósiles producen la energía al quemarse, lo que provoca emisiones dañinas en forma de gases de efecto invernadero, como el dióxido de carbono. <br>
                    
                    La generación de energías renovables produce muchas menos emisiones que la quema de combustibles fósiles. Una transición de los combustibles fósiles, los cuales representan en la actualidad la mayor parte de las emisiones, a energías renovables resulta fundamental para abordar la crisis producida por el cambio climático. <br>
                    
                    Hoy en día, las energías renovables son más baratas en la mayoría de los países y generan tres veces más puestos de trabajo que los combustibles fósiles. </p>
               
            </div>
        </article>
  
        <article class="flex flex-col my-4">
            <!-- Article Image -->
            <p class="scroll text-3xl text-gray-400 font-bold hover:text-gray-700 pb-4 flex justify-center items-center">Tipos de energia</p> 
  
            <p class="hover:opacity-75 flex justify-center items-center">
  
                <iframe class="scroll" width="560" height="315" src="https://www.youtube.com/embed/Og6C1HyeaBs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </p><br>
            <div class="bg-white bg-opacity-10 text-gray-500 shadow-xl rounded-2xl flex flex-col justify-start p-6 scroll">

                <p class="pb-6">
                    <li>ENERGÍA SOLAR <br>
                        De todas las fuentes de energía, la energía solar es la que más abunda y, además, también puede obtenerse aún con el cielo nublado. La velocidad a la que la Tierra intercepta la energía solar es aproximadamente 10 000 veces superior a la velocidad con la que la humanidad consume la energía. <br><br>
                        
                        Las tecnologías solares pueden producir calor, refrigeración, luz natural, electricidad y, también, combustibles para multitud de aplicaciones. Las tecnologías solares convierten la luz solar en energía eléctrica, ya sea mediante paneles fotovoltaicos o a través de espejos que concentran la radiación solar. <br><br>
                        
                        Aunque no todos los países se ven igualmente favorecidos por la luz solar, sabemos que en cualquier país sería viable una importante contribución de la energía solar al conjunto de todas sus fuentes de energías. <br><br>
                        
                        El coste para la fabricación de los paneles solares ha descendido estrepitosamente durante la última década, haciendo que sean, además de asequibles, a menudo la forma más económica de producir electricidad. Los paneles solares tienen una vida útil de alrededor de 30 años y existen en una gran variedad de tonalidades en función del tipo de material usado durante su fabricación. </li><br><br>
  
                    <li>ENERGÍA EÓLICA <br>
                        La energía eólica aprovecha la energía cinética del aire en movimiento gracias al uso de enormes turbinas eólicas ubicadas en superficies terrestres, en alta mar o en aguas dulces (sobre la superficie acuática). La energía eólica se ha usado durante milenios, pero las tecnologías, tanto terrestres como sobre el agua, han evolucionado en las últimas pocas décadas hasta convertirse en una potente forma de producir electricidad gracias a turbinas más altas y a unos rotores que poseen diámetros de mayores proporciones.  <br><br>
                        
                        Aunque las velocidades eólicas promedio varían marcadamente dependiendo de cada ubicación, el potencial técnico mundial respecto a la energía eólica supera la producción global de energía eléctrica, teniendo en cuenta, además, el potencial en la mayoría de las regiones del planeta para permitir un despliegue importante de esta energía basada en el viento. <br><br>
                        
                        En muchas zonas del mundo nos encontramos vientos fuertes con velocidades muy altas; sin embargo, los mejores lugares para generar esta energía se localizan, algunas veces, en los sitios más remotos. La generación de energía eólica en zonas acuáticas supone un destacado potencial.</li><br><br>
  
                    <li>ENERGÍA GEOTÉRMICA <br><br>
                        La energía geotérmica utiliza la energía térmica disponible del interior de la Tierra. El calor se extrae de unos depósitos geotérmicos a través de pozos u otros medios.<br><br>
                        
                        Los depósitos con estas temperaturas lo suficientemente elevadas y permeables de forma natural se denominan depósitos hidrotermales, mientras que los depósitos que cuentan con el suficiente calor, pero que utilizan medios de estimulación hidráulica, se llaman sistemas geotérmicos mejorados.<br><br>
                        
                        Una vez en la superficie, pueden utilizarse fluidos a varias temperaturas para generar la electricidad. Esta tecnología, que consiste en la generación de electricidad por medio de depósitos geotérmicos, ya resulta madura y fiable, y lleva más de 100 años utilizándose.</li><br><br>
  
                    <li> ENERGÍA HIDROELÉCTRICA <br>
                        La energía hidroeléctrica aprovecha la energía que produce el movimiento del agua cuando se eleva o desciende de forma pronunciada. Puede generarse a partir de embalses y ríos. Las plantas hidroeléctricas de los embalses se valen del agua almacenada y estancada, mientras que las plantas hidroeléctricas fluviales utilizan la energía que se produce gracias al flujo de agua en un río. <br><br>
                        
                        Los embalses hidroeléctricos suelen tener múltiples aplicaciones, llegando a producir agua potable, agua para regadíos, un control ante inundaciones y sequías, servicios de navegación y también este suministro de energía que indicamos.<br><br>
                        
                        La energía hidroeléctrica supone en la actualidad la mayor fuente de energía renovable dentro del sector de la electricidad. Se basa en patrones generalmente estables de pluviosidad y puede verse negativamente afectada por sequías causadas por el cambio climático, o incluso por los cambios en los ecosistemas, que también produce este problema y que llega a afectar en estos patrones de precipitaciones. <br><br>
                        
                        La infraestructura necesaria para crear hidroelectricidad también puede provocar cambios en los ecosistemas de formas muy negativas. Por esa razón, hay muchos que defienden esta fuente de energía a pequeña escala como opción más respetuosa con el medioambiente y especialmente adecuada para las comunidades situadas en lugares muy remotos.</li><br><br>

                    <li> ENERGÍA OCEÁNICA <br>
                        La energía oceánica deriva de las tecnologías que utilizan las energías térmicas del agua marina, las olas o las corrientes de agua, por ejemplo, para producir electricidad o calor. <br><br>
                        
                        Los sistemas de energía oceánica se encuentran todavía en una etapa inicial de desarrollo y con una variedad de dispositivos de conversión del oleaje y las corrientes de las mareas en fase experimental. El potencial teórico de la energía oceánica supera cualquier necesidad energética actual en los seres humanos.</li><br><br>

                    <li>BIOENERGÍA <br>
                        La bioenergía se produce a partir de diversos materiales orgánicos, denominados biomasa, como la madera, el carbón, el estiércol y otros abonos utilizados para la producción de calor y electricidad, y los cultivos agrícolas destinados a biocombustibles líquidos. La mayor parte de la biomasa se utiliza en las zonas rurales para cocinar, aportar iluminación y calor en estancias, y por parte de las poblaciones más desfavorecidas en los países en desarrollo.<br><br>
                        
                        Los sistemas modernos de biomasa incorporan árboles o cultivos específicos, residuos provenientes de la agricultura o los entornos forestales, así como flujos de desechos orgánicos. <br><br>
                        
                        La energía creada a partir de la quema de biomasa forma emisiones de gases con efecto invernadero, aunque a niveles más bajos que la combustión de los carburantes fósiles, como pueden ser el carbón, el petróleo o el gas. Sin embargo, la bioenergía debe aplicarse únicamente en ciertas situaciones puesto que sus impactos potencialmente negativos para el medioambiente se relacionan con un aumento a gran escala en las plantaciones de bioenergía y bosques, algo que genera una deforestación y un cambio en el uso de las áreas de tierra.</li></p>     
            </div>
        </article>
  
        <article class="flex flex-col my-4 scroll">
            <!-- Article Image -->
            <p class="hover:opacity-75 ">
                <img class="rounded-t-2xl scroll w-full" src="https://img.freepik.com/foto-gratis/toma-aerea-increible-lago-rodeado-bosques-verdes-isla-antiguo-castillo_181624-47265.jpg?w=1380&t=st=1690914853~exp=1690915453~hmac=beb62c768ef9e3eaa9531c0794c817e8cf760ef09a966b4434aa5fcff6e27b0a">
            </p>
            <div class="bg-white bg-opacity-10 text-gray-500 shadow-2xl rounded-b-2xl flex flex-col justify-start p-6">
              
                <p class="text-3xl font-bold hover:text-gray-700 pb-4">La importancia de las energias renovables</p>
                
               <li>El crecimiento de las energías renovables es imparable, como queda reflejado en las estadísticas aportadas anualmente por la Agencia Internacional de la Energía (AIE): Según las previsiones de la AIE, la participación de las renovables en el suministro eléctrico global pasará del 28,7% en 2021 al 43% en 2030, y proporcionarán 2/3 del incremento de demanda eléctrica registrado en ese período, principalmente a través de las tecnologías eólica y fotovoltaica. <br> <br>
            
                De acuerdo a la AIE, la demanda mundial de electricidad aumentará un 82% entre 2020 y 2040, si se cumplen los compromisos ya anunciados de reducción de emisiones por los diversos países, elevando su participación en el uso de energía final del 38% al 63% en el mismo periodo- espoleada principalmente por regiones emergentes (India, China, África, Oriente Medio y el sureste asiático) y por la electrificación del transporte en las economías avanzadas.</li> <br><br>
  
             
  
               <li>La transición hacia un sistema energético basado en tecnologías renovables tendrá asimismo efectos económicos muy positivos para la economía global y el desarrollo. Según estudios de IRENA (Agencia Internacional de Energías Renovables) y la IEA (Agencia Internacional de la Energía), alcanzar los Acuerdos de París exige triplicar la cuota de renovables en la generación eléctrica de 2022 hasta situarla en el 90% a nivel mundial en 2030. Ello requiere elevar las inversiones anuales en energía renovable desde los 1,3 billones de dólares actuales hasta los 5 billones en 2050, con el consiguiente impulso a la creación de empleo y al crecimiento vinculados a la economía verde.</li>
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