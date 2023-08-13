<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="/dist/images/leaf.png">
        <link rel="stylesheet" href="/src/scroll.css">
        <link href="/dist/output.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@1,500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/pruebahome/static/tailwind/tailwind.min.css">
        <link rel="stylesheet" href="/src/tailwind.min.css">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
        <link rel="icon" href="/dist/images/leaf.png">
        <title>Fragmentación de hábitats y sus efectos en la diversidad bilógica</title>
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
            <style>
                nav {
                position: relative;
                z-index: 2; /* Asegura que el menú aparezca encima del slider */}
        
                nav:hover + .hero {
                visibility: hidden; /* Oculta el slider cuando el menú se sombree */
            }
        
                .hero {
                  background-image: url('https://img.freepik.com/foto-gratis/lindo-mono-macaco-rhesus-macaca-mulatta-naturaleza_181624-37823.jpg?w=740&t=st=1690257906~exp=1690258506~hmac=84fc14a1da7653bbfe058c7b6af4e7e86c913aeaba8bd5d39dc3366c0a401ee4'); /* Ruta de imagen de fondo */
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
            
            <body class="bg-gray-100">
            
              <section class="hero relative">
                <div class="overlay absolute inset-0"></div>
                <div class="hero-content">
                  <h2 class="hero-title">Fragmentación de hábitats y sus efectos en la diversidad biológica.</h2>
                  <p class="hero-subtitle">Conservación de la biodiversidad.</p>
                 
                </div>
              </section>
    </header>
    <br>
    <div class="container mx-auto flex flex-wrap py-6">

      <!-- Posts Section -->
      <section class="w-full md:w-2/3 flex flex-col items-center px-3">
    
          <article class="flex flex-col my-4">
              <!-- Article Image -->
              <p class="hover:opacity-75">
                  <img  class="scroll rounded-t-2xl block w-full h-full" src="https://geoinnova.org/wp-content/uploads/2021/08/fragmentacion-habitats-humedales.jpg">
              </p>
              <div class="bg-white bg-opacity-10 text-gray-500 shadow-2xl rounded-b-2xl flex flex-col justify-start p-6 scroll">
          
                  <p class="text-3xl font-bold hover:text-gray-700 pb-4">Fragmentación de hábitats y sus efectos en la diversidad biológica</p>
                                                     
                  <p class="pb-6">La fragmentación de hábitats provoca graves pérdidas de diversidad biológica. Asimismo, la subdivisión de los ambientes deriva en una debilitación en la funcionalidad de los ecosistemas, amenazando a la vida del lugar. Las infraestructuras para el transporte son uno de los principales problemas en este sentido. <br><br>

                    En “Perspectivas ambientales de la OCDE hacia 2050. Consecuencias de la inacción” de la Organización para la Cooperación y el Desarrollo Económicos (OCDE) se proyectan tendencias demográficas y económicas y se evalúa el impacto en el medio ambiente.
                    <br><br>
              </div>
          </article><br>
    
          <article class="flex flex-col my-4">
              <!-- Article Image -->
              
              <p class="text-3xl scroll text-gray-400 font-bold hover:text-gray-700 pb-4 flex justify-center items-center"> fragmentación de hábitats</p> 
              <a href="#" class="hover:opacity-75 scroll flex justify-center items-center ">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/_5zPpY8b0Nc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </a><br>
              <div class="bg-white bg-opacity-10 text-gray-500 shadow-xl rounded-2xl flex flex-col justify-start p-6 scroll">
                  <p class="pb-6">
    
                      <li>En primer lugar, debe considerarse que la prevención es menester para asegurar una conectividad ecológica. Es decir, el ordenamiento espacial que facilite el movimiento de los organismos en y entre ecosistemas y parches de hábitats.</li><br><br>
                      
                      <li>Por otro lado, la restauración ecológica permite, a través de acciones concretas, el mantenimiento y mejora de la conectividad de los ecosistemas, cuando el ambiente ya está afectado.</li><br><br>
                      <li>Actualmente se estima que el 20% de las especies de animales se encuentran en peligro de extinción, siendo los peces y anfibios las clases de animales más amenazadas. Las causas que conllevan a la extinción de especies son múltiples, pero en resumidas cuentas la pérdida de hábitats debido a cambios en el uso del suelo contribuye severamente a la extinción de especies. En tanto, los procesos de fragmentación de hábitats colaboran en la pérdida de hábitats y, como consecuencia, no solo las especies animales se ven vulneradas, sino también las especies vegetales.</li><br><br>
                      <li>Los efectos de la fragmentación de hábitats en la biodiversidad, dependen fundamentalmente de la forma del fragmento y de las distancias existentes con otros fragmentos. En tanto, aquellos fragmentos que se encuentran aislados de otros fragmentos y cuya forma presenta una gran proporción borde/área, aumentan considerablemente el riesgo de extinción de las especies puesto que altera sus procesos ecológicos, como la interacción con otros ejemplares, búsqueda de alimento, apareamiento, etcétera.</li><br><br>
                      <li>Un ejemplo de fragmentación de hábitat sucede en el Bosque Chaqueño en Argentina, en el cual el ecosistema está profundamente fragmentado producto de cambios en el uso del suelo para llevar a cabo actividades antrópicas. Estudios sugieren que la fragmentación del Bosque Chaqueño ha disminuido la riqueza de insectos polinizadores nativos que polinizan precisamente a las especies vegetales nativas, mientras que las abejas exóticas se han visto favorecidas por los efectos de la fragmentación.</li><br><br>
                      <li>Otro ejemplo ocurre en la Cordillera Cantábrica en España, donde los hábitats se ven fragmentados por la construcción de carreteras y aperturas de pistas forestales. El oso pardo cantábrico (Ursus arctos arctos) está particularmente afectado por este proceso de pérdida de hábitat ya que requieren extensas áreas para vivir</li><br><br>
                  </p>
                       
              </div>
          </article>
    
          <article class="flex flex-col my-4">
            <!-- Article Image -->
            <p class="text-3xl scroll font-bold hover:text-gray-700 pb-4 flex justify-center items-center"></p> 
  
            <a class="hover:opacity-75 flex justify-center items-center ">
              <img class="scroll" src="https://img.freepik.com/foto-gratis/gente-plantando-arboles-campo_23-2149401187.jpg?w=826&t=st=1690933518~exp=1690934118~hmac=b94429af4720e8363767fc6480d5912f99cd35fb74dcde8a6b230196275a35dc">
            </a>
            <div class="bg-white bg-opacity-10 text-gray-500 shadow-2xl rounded-2xl flex flex-col justify-start p-6 scroll">
              <p class="text-3xl font-bold hover:text-gray-700 pb-4">Efectos en la diversidad biologica</p><br>
  
              <li>Aumenta la resiliencia de los ecosistemas <br>

              La biodiversidad permite que los ecosistemas se adapten a los cambios ambientales, como las sequías, las inundaciones y el cambio climático, al proporcionar una mayor diversidad genética y funcional que permite a los ecosistemas responder de manera más efectiva a estos cambios.</li><br><br>
              
              <li>Efectos de la pérdida de la biodiversidad <br>
                a biodiversidad del planeta está determinada por la constante interacción de los seres vivos con su entorno y la variedad de condiciones naturales. Por ello, la desaparición de una sola especie puede afectar de forma negativa la supervivencia de otras. <br><br>

                Una sola variación entre las complejas relaciones entre organismos y su hábitat es suficiente para desencadenar una serie de alteraciones que pueden conducir a la pérdida de la diversidad biológica. <br><br>
                
                
                Como consecuencia de la explotación de los recursos naturales, el equilibrio ecológico se ha visto alterado resultando en la extinción acelerada de gran cantidad de especies <br><br>
                
                La disminución de la diversidad biológica afecta la disponibilidad de medios de subsistencia; por lo tanto podemos afirmar que esto equivale a decir que se pone en peligro la supervivencia de la raza humana y del resto de las especies.</li><br><br>

                <li>3 Causas de la pérdida de la biodiversidad <br>
                  Como resultado de la evolución hemos podido observar cómo a lo largo de millones de años se ha producido la desaparición de algunas especies para dar lugar a otras nuevas. <br><br>

                  Sin embargo, durante los últimos 100 años este proceso se ha acelerado provocando la extinción de gran variedad de seres vivos y comprometiendo el equilibrio de los ecosistemas. <br><br>
                  
                  
                  Cuando indagamos cuáles son las principales causas de la pérdida de biodiversidad encontramos que la mayoría están vinculadas a la actividad humana. Aquí mencionamos las cinco que han ocasionado un mayor impacto. <br><br> 
                </li>

                <li>1. Contaminación ambiental <br>
                  El término contaminación nos hace pensar en químicos que se incorporan al agua, al suelo y al aire; sin embargo, la contaminación lumínica y acústica propias de los asentamientos humanos también afecta a la biodiversidad</li><br><br>
                     
                  <li>2. Aumento de los gases de efecto invernadero <br>
                    El incremento en las emisiones de gases de efecto invernadero (GEI) ha traído como resultado el cambio climático global que afecta la diversidad biológica de diferentes maneras: ciclos de reproducción, aumento o disminución de del número de individuos de una especie y su rol en los ecosistemas</li><br><br>
                    <div class=" pb-4 flex justify-center items-center">
                      <li>3. Introducción de especies exóticas</li>
                    </div><br>

                      <div class="flex justify-center items-center h-800">
                        <img class="scroll rounded-2xl hover:opacity-75" src="https://img.freepik.com/foto-gratis/pajaro-plumas-color-naranja-brillante-cabeza-negra-que-dice-pajaro-es-pajaro_1340-41345.jpg?w=360&t=st=1690945110~exp=1690945710~hmac=fc9516b255ce0e15945b207a1e8bef33ccd47f23ab063b72f36fc4e706b73057" alt="">
                      </div> <br><br>
                        
                      Las especies exóticas invasoras pueden ingresar en una región de forma accidental a través del transporte marítimo o aéreo de mercancías. Variedades de insectos o roedores pueden colarse en los contenedores y pasar desapercibidos. <br><br>

                     Por otra parte, hay especies vegetales que al introducirse en ecosistemas a los que no pertenecen afectan la supervivencia de otras; todo ello debido a la competencia por nutrientes que en ocasiones también puede provocar la degradación del suelo <br><br>


                    El comercio ilegal de mascotas es otra vía para introducir gran cantidad de especies exóticas que ocasionan serios desequilibrios en los ecosistemas locales. <br><br>

                    Estas especies que pueden convertirse en plagas vienen acompañadas de enfermedades y parásitos que afectan a las especies locales; además compiten por las fuentes de alimento.<br><br>

                    Todo ello ocasiona un desbalance considerable en la ecología de un lugar afectando el equilibrio de los ecosistemas y la supervivencia de las especies autóctonas.<br><br></li><br><br>


            </div>
        </article>
      </section>
    
      <!-- Sidebar Section -->
      <aside class="w-full md:w-1/3 flex flex-col items-center px-3">
    
          <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6 scroll">
              <p class="text-xl font-semibold pb-5">Importancia de la biodiversidad
              </p>
              <p class="pb-2">
                La biodiversidad, que hace referencia a la variedad de formas de vida en la Tierra, es de vital importancia para el funcionamiento de los ecosistemas y para el bienestar de la humanidad. </p>
              <a href="../Conservación de la biodiversidad 3.0/Importancia de la biodiversidad 3.1.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                  Leer mas 
              </a>
          </div>
    
          
          <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6 scroll">
              <p class="text-xl font-semibold pb-5">Fragmentación de hábitats y sus efectos en la diversidad bilógica.</p>
              <p class="pb-2">La fragmentación de hábitats es el proceso por el cual un hábitat continuo y extenso se divide en fragmentos más pequeños y aislados debido a la actividad humana, como la urbanización, la agricultura, la construcción de infraestructuras y la deforestación.</p>
              <a href="../Conservación de la biodiversidad 3.0/Fragmentación de hábitats y sus efectos en la diversidad biológica 3.9.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
               Leer mas
              </a>
          </div>
    
    
          
          <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6 scroll">
              <p class="text-xl font-semibold pb-5">Especies en peligro de extinción y conservación ex situ e in situ.</p>
              <p class="pb-2">Las especies en peligro de extinción son aquellas que enfrentan un alto riesgo de desaparecer de manera irreversible de la Tierra. Estas especies se encuentran en una situación crítica debido a diversas amenazas, como la destrucción del hábitat, la caza ilegal, la introducción de especies invasoras, la contaminación y el cambio climático. </p>
              <a href="../Conservación de la biodiversidad 3.0/Especies en peligro de extinción y conservación ex situ 3.3.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                  Leer mas 
              </a>
          </div>
    
          <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6 scroll">
                  <p class="text-xl font-semibold pb-5">Restauracion ecologica</p>
                  <p class="pb-2">
                    La restauración ecológica consiste en un proceso de rehabilitación y recuperación de ecosistemas que han sido dañados anteriormente por actividades humanas o acontecimientos naturales. Es un enfoque proactivo y estratégico de cara a mejorar la biodiversidad y salud del medio ambiente.</p>
                  <a href="../Conservación de la biodiversidad 3.0/Restauración ecológica en El Salvador 3.5.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                      Leer mas 
                  </a>
              </div>
  
  
    
          <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6 scroll">
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