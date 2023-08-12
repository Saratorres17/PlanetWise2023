<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/dist/images/leaf.png">
    <link rel="stylesheet" href="/src/scroll.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
    <title>Instituciones y leyes que respaldan el cuido del medio ambiente en El Salvador</title>
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
        background-image: url('/dist/images/ColaboraciónSV.png'); /* Ruta de imagen de fondo */
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
        <h2 class="hero-title">Instituciones y leyes que respaldan el cuido del medio ambiente en El Salvador.</h2>
        <p class="hero-subtitle"></p>

      </div>
    </section><br> <br>

      <div class="container mx-auto flex flex-wrap py-6">
    
          <!-- Posts Section -->
          <section class="w-full md:w-2/3 flex flex-col items-center px-3">
    
              <article class="flex flex-col my-4">
                  <!-- Article Image -->
                  <a class="hover:opacity-75">
                      <img alt="" src="/dist/images//agricultorSV.jpeg">
                  </a>
                  <div class="bg-white bg-opacity-10 text-gray-500 shadow-2xl rounded-2xl flex flex-col justify-start p-6 scroll">
              
                      <p class="text-3xl font-bold hover:text-gray-700 pb-4">¿Qué son las medidas que protegen al medio ambiente?</p>
                                                         
                      <p class="pb-6">Las medidas preventivas tienen por objeto prevenir o impedir la ocurrencia de un hecho, la realización de una actividad o la existencia de una situación que atente contra el medio ambiente, los recursos naturales, el paisaje o la salud humana.<br><br>

                        El impacto del cambio climático en los ecosistemas y la biodiversidad es un tema complejo y diverso que abarca una amplia gama de efectos sobre la vida en la Tierra. A continuación, se presenta un desglose detallado del tema:</i></p><br>

                      <p class="text-3xl font-bold hover:text-gray-700 pb-4">¿Qué hace El Salvador para proteger al medio ambiente?</p>
                      <p>
                        El Gobierno del Presidente Nayib Bukele implementa políticas públicas que impulsen el cuido y conservación del medio ambiente, que contribuyan a contrarrestar los efectos del cambio climático y a crear un desarrollo sostenible a nivel social, económico y ambiental. <br><br>
                        <i>“Este es un día muy importante para el Gobierno del Presidente Bukele, porque no solo estamos presentando esta Política Nacional del Medio Ambiente, sino que tenemos todas las estrategias y herramientas para hacerla realidad”, declaró el titular de Medio Ambiente. <br>Fernando López.</i>
                        <br><br>
                        Esta nueva normativa, aprobada por el Consejo de Ministros, está basada en cuatro pilares fundamentales: gestión de los recursos hídricos para buscar la seguridad a través del tiempo, gestión del riesgo climático y el tránsito hacia una economía baja en carbono, integración de la biodiversidad en las actividades de desarrollo económico y social e inducir a una gestión ambiental que propicie la protección y conservación de los recursos naturales. <br><br>
                        <i>“Estamos promoviendo cumplir con los estándares de desempeño ambiental, más allá de lo que exige la normativa; se busca incorporar a todas las áreas, no solamente la parte ambiental, también el área productiva”, declaró el funcionario.</i>
                      </p>

          
                    </a> <br>         
                  </div>
              </article>
    
              <article class="flex flex-col my-4">
                  <!-- Article Image -->
                  <p class="scroll text-3xl text-gray-400 font-bold hover:text-gray-700 pb-4 flex justify-center items-center">Datos curiosos</p> 
    
                  <p class="hover:opacity-80 flex justify-center items-center ">
    
                    <iframe class="scroll" width="560" height="315" src="https://www.youtube.com/embed/qGi6Ubo6_oc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  </p><br>

                  <div class="bg-white bg-opacity-10 text-gray-500 shadow-xl rounded-2xl flex flex-col justify-start p-6 scroll">                     
                     
                      <p class="pb-6"><b class="text-2xl">Instituciones que velan por la protección del medio ambiente.</b>
                        <br><br>
                        <li><b>Ministerio de Medio Ambiente y recursos naturales:</b> El Ministerio de Medio Ambiente y Recursos Naturales de El Salvador cumple su mandato como rector de la gestión ambiental nacional y es una institución cohesionada y respetada que promueve una vigorosa cultura ciudadana para recuperar el medio ambiente y reducir los riesgos socioambientales.</li><br>

                        <li><b>Dirección General del Observatorio de Amenazas y Recursos Naturales:</b> Apoyar la gestión ambiental y la gestión de riesgos mediante la observación sistemática de las amenazas relacionadas con fenómenos meteorológicos, hidrológicos, geológicos, oceanográficos y de calidad de agua y aire.</li><br>

                        <li><b>Dirección General de Evaluación y Cumplimiento Ambiental:</b> Garantizar la protección del medio ambiente a través del ordenamiento ambiental y de la evaluación ambiental de las actividades, obras y/o proyectos de inversión pública y privada, así como su seguimiento y verificación.</li><br>

                        <li><b>Dirección General de Seguridad Hídrica:</b> Promover el manejo adecuado y sostenible de los recursos hídricos y mejorar los índices de salubridad ambiental a través de la implementación de planes estratégicos nacionales en materia de seguridad hídrica, gobernanza y saneamiento ambiental.</li><br>

                        <li><b>Dirección General de Gestión Territorial:</b> Desarrollar la gobernanza ambiental en los ámbitos local y nacional, basada en una cultura de corresponsabilidad.</li><br>

                        <li><b>Dirección General de Ecosistemas y Biodiversidad:</b> Asegurar la provisión sostenida de los servicios de los ecosistemas críticos y la protección de hábitats y especies relacionadas, garantizando una gestión inclusiva y derechos de aprovechamiento por parte de comunidades locales.</li>
                      </p>
                  </div>
              </article>
    
              <article class="flex flex-col my-4 scroll">
                  <!-- Article Image -->
                  <a class="hover:opacity-75 ">
                      <img alt="" class="rounded-t-2xl w-full" src="/dist/images/cuidardesdecasa.webp">
                  </a>
                  <div class="bg-white bg-opacity-10 text-gray-500 shadow-xl rounded-b-2xl flex flex-col justify-start p-6">
                    
                      <p class="text-3xl font-bold hover:text-gray-700 pb-4">¿Cómo cuidar el medio ambiente desde casa?</p>
                      <p>
                        <b>Cultiva tus propios alimentos:</b><br>

                        Los productos ecológicos generan menos contaminación ambiental ya que no se utilizan fertilizantes. Te recomendamos realizar un huerto en casa, de esta manera disfrutarás alimentos frescos y llenos de nutrientes. <br><br>
                        
                        <b>Planta árboles:</b><br>
                        
                        Los árboles son esenciales para el mundo, producen oxígeno, reducen el dióxido de carbono, absorben gases contaminantes, regulan la temperatura, entre otros beneficios. Así que ya sabes, planta un árbol y contribuye al cuidado del medio ambiente. <br><br>
                        
                        <b>Ahorrar agua:</b><br>
                        
                        El agua es un recurso imprescindible y escaso que debemos usar con responsabilidad. Cerrar el grifo mientras te lavas los dientes, bañarte en 5 minutos, juntar el agua de la regadera mientras te bañas, son pequeñas acciones que ayudan a ahorrarla. <br><br>
                        
                        <b>Separa la basura:</b><br>
                        
                        Es importante separar los residuos en distintos botes: orgánica, vidrio, cartón, plásticos y desechos tóxicos. Por tu salud, cuida tu entorno. <br><br>
                        
                        <b>Reutiliza todo lo que puedas:</b> <br>
                        
                        Dale segunda vida a tus objetos antes de desecharlos con el fin de ahorrar dinero y evitar comprar todo nuevo. Puede ser tu ropa, juguetes o algún utensilio del hogar. <br><br>
                        
                       <b>Conecta con la naturaleza:</b><br>
                        
                        La naturaleza te protege, te sana, te alimenta y te da todo lo que necesitas para vivir y tener bienestar, cuidarla, valorarla y apreciarla es tarea de todas y todos.  <br><br>
    
                   </div>
              </article>
          
          </section>
    
          <!-- Sidebar Section -->
          <aside class="w-full md:w-1/3 flex flex-col items-center px-3">
    
          <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6 scroll">
                  <p class="text-xl font-semibold pb-5">Ministerio del Medio Ambiente y Recursos Naturales.
                  </p>
                  <p class="pb-2">El Ministerio de Medio Ambiente es la entidad principal que vela por el bienestar del medio ambiente en El Salvadar. Conozcalo un poco m</p>
                  <a href="../Instituciones y leyes que respaldan el cuido del medio ambiente en El Salvador/Ministerio del medio ambinete.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                      Leer mas 
                  </a>
              </div>
    
              
              <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6 scroll">
                  <p class="text-xl font-semibold pb-5">Ley del Medio Ambiente de El Salvador.</p>
                  <p class="pb-2">La ley del Medio Ambiente es un conjunto de acciones y procedimientos que aseguran que las actividades, obras o proyectos que tengan un impacto ambiental negativo en el ambiente o en la calidad de vida de la población.</p>
                  <a href="../Instituciones y leyes que respaldan el cuido del medio ambiente en El Salvador/Ley del medio ambiente.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                   Leer mas
                  </a>
              </div>
    
    
              
              <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6 scroll">
                  <p class="text-xl font-semibold pb-5">Instituciones no gubernamentales que velan por el medio ambiente en El Salvador.</p>
                  <p class="pb-2">Aunque cualquier organización privada es, en sentido estricto, una organización no gubernamental, el término ONG, u oenegé, se utiliza para identificar a organizaciones que no son parte de las esferas gubernamentales o empresas, cuyo fin fundamental es el bien social.</p>
                  <a href="../Instituciones y leyes que respaldan el cuido del medio ambiente en El Salvador/Instituciones no gubernamentales que velan por el medio ambiente en El Salvador.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
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