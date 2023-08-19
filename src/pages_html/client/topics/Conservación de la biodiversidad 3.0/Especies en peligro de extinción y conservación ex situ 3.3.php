<?php
session_start();

if(!isset($_SESSION["user_id"])){
  header("location: /pruebahome/pag-restriccion.php");  
}
?>



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
        <link rel="stylesheet" href="../../../../../src/pantallacarga.css">
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
        <title>Especies en peligro de extincion y conservacion ex situ e in situ</title>
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/src/css modo oscuro/estilos.css">
    </head>

<body class="cursor-default h-screen  font-sans oculto">

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
          background-image: url('https://img.freepik.com/foto-gratis/reforestacion-realizada-grupo-voluntario_23-2149500844.jpg?w=740&t=st=1690945700~exp=1690946300~hmac=2168be3fdbec492029c2ecfb37766a2b2b9d798573a339632168c163997ef3c2'); /* Ruta de imagen de fondo */
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
          <h2 class="hero-title">Especies en peligro de extincion y conservacion ex situ e in situ.</h2>
          
        </div>
      </section>
  </header>
  <div class="container mx-auto flex flex-wrap py-6">

    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">
  
        <article class="flex flex-col my-4">
            <!-- Article Image -->
            <p class="hover:opacity-75">
                <img  class="rounded-t-2xl scroll block w-full h-full" src="https://www.cienciamx.com/images/aic/A_Mau/voca-head-92217.jpg">
            </p>
            <div class="bg-white scroll bg-opacity-10 text-gray-500 shadow-2xl rounded-b-2xl flex flex-col justify-start p-6">
        
                <p class="text-3xl font-bold hover:text-gray-700 pb-4">¿Qué son las especies en peligro de extincion y conservacion ex situ?</p>
                                                   
                <p class="pb-6">Las especies en peligro de extinción son aquellas que se encuentran en un riesgo muy alto de desaparecer completamente de la Tierra en un futuro cercano. Esto puede deberse a diversas amenazas, como la pérdida de hábitat, la caza ilegal, la introducción de especies invasoras, la contaminación y el cambio climático. Cuando una especie está en peligro de extinción, significa que su población ha disminuido significativamente y que su supervivencia está en peligro. <br><br>

                  La conservación ex situ es una estrategia utilizada para proteger y preservar especies en peligro de extinción fuera de su hábitat natural. Consiste en trasladar individuos de la especie a lugares controlados y seguros, como zoológicos, acuarios, bancos de germoplasma y centros de cría en cautiverio, para garantizar su supervivencia y reproducción. </p> <br><br>
  
  
               
            </div>
        </article><br>
  
        <article class="bg-white scroll bg-opacity-10 text-gray-500 shadow-xl rounded-2xl flex flex-col justify-start p-6">
            <!-- Article Image -->
            
            <p class="text-3xl scroll font-bold hover:text-gray-700 pb-4 flex justify-center items-center">Algunas de las razones y objetivos principales de la conservación ex situ son:
            </p> 
            <a href="#" class="scroll hover:opacity-75">
              <img  class="block w-full h-full" src="https://animalesenpeligrodeextincion.eu/wp-content/uploads/image015-1024x576.jpg">
          </a><br>
              
          <p> La conservación ex situ proporciona un refugio seguro para las especies en peligro de extinción, evitando su desaparición mientras se abordan las amenazas que enfrentan en la naturaleza. <br><br>

            La conservación ex situ puede complementar las acciones de conservación in situ, que se realizan en el hábitat natural de las especies. Al mantener una población segura y estable ex situ, se puede contribuir a la reintroducción exitosa de individuos en su entorno natural cuando las condiciones sean favorables. <br><br>
            
           Los centros de conservación ex situ permiten realizar investigaciones científicas sobre la biología y el comportamiento de las especies en peligro, lo que proporciona información valiosa para el desarrollo de estrategias de conservación más efectivas. También son importantes para la educación pública sobre la importancia de proteger la biodiversidad y las especies en peligro de extinción. <br><br>
            
           La cría en cautiverio y el manejo cuidadoso de las poblaciones ex situ pueden ayudar a aumentar el número de individuos y mejorar la diversidad genética, lo que puede ser crucial para la supervivencia a largo plazo de la especie.</p><br><br>

            <div class="flex flex-col justify-start">
                  
            </div>
        </article><br>
  
        <article class="flex flex-col my-4">
          <!-- Article Image -->
          <p class="text-3xl font-bold hover:text-gray-700 pb-4 flex justify-center items-center"></p> 

            <p class="text-3xl scroll text-gray-400 font-bold hover:text-gray-700 pb-4 flex justify-center items-center" >Áreas protegidas y conservación in situ:</p><br>
            <p class="hover:opacity-90 flex justify-center items-center ">
              <iframe class="scroll" width="560" height="315" src="https://www.youtube.com/embed/YzYsYuhqHlU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </p> <br><br>
          <div class="bg-white scroll bg-opacity-10 text-gray-500 shadow-2xl rounded-2xl flex flex-col justify-start p-6">
             <p>Las áreas protegidas y la conservación in situ son dos estrategias fundamentales para proteger y preservar la biodiversidad y los ecosistemas de nuestro planeta. Ambas enfoques están dirigidos a la conservación de especies y hábitats en peligro de extinción y son complementarios en sus objetivos y acciones.</p> <br><br>

             <p>Áreas protegidas: <br>
              Las áreas protegidas son espacios geográficos que han sido designados y gestionados con el propósito específico de conservar la biodiversidad y los recursos naturales. Estas áreas pueden incluir parques nacionales, reservas naturales, santuarios de vida silvestre, monumentos naturales y áreas marinas protegidas, entre otros. <br><br>
              La principal función de las áreas protegidas es proteger los hábitats naturales y las especies que los habitan. Dentro de estas áreas, se prohíben o restringen ciertas actividades humanas que puedan afectar negativamente la vida silvestre y los ecosistemas, como la tala de árboles, la caza y la pesca excesiva. <br><br>
              Las áreas protegidas proporcionan refugios seguros para especies en peligro de extinción, permitiendo que se reproduzcan y prosperen en su entorno natural. También protegen la diversidad biológica y aseguran la provisión de servicios ecosistémicos vitales para la humanidad, como la regulación del clima y la purificación del agua.
            </p><br><br>

            <p>Conservación in situ: <br>
              La conservación in situ se refiere a las acciones y estrategias que se llevan a cabo directamente en el hábitat natural de las especies y ecosistemas para protegerlos y mantener su funcionamiento saludable. <br><br>
              Esta estrategia se centra en la protección y restauración de los hábitats naturales, la prevención de la degradación ambiental y la mitigación de las amenazas que enfrentan las especies en su entorno original. <br><br>
              Las acciones de conservación in situ pueden incluir la creación y el manejo de áreas protegidas, la restauración de ecosistemas degradados, la implementación de prácticas de manejo sostenible de recursos naturales, la promoción de la conservación de especies clave y la educación y concienciación pública sobre la importancia de la biodiversidad.
            </p>
            
            </a>
                   
          </div>
      </article>
    </section>
  
    <!-- Sidebar Section -->
    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">
  
        <div class="bg-white bg-opacity-10 scroll text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6">
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
  
       
    </head>
           
        <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6 scroll">
                <p class="text-xl font-semibold pb-5">Restauracion ecologica</p>
                <p class="pb-2">
                  La restauración ecológica consiste en un proceso de rehabilitación y recuperación de ecosistemas que han sido dañados anteriormente por actividades humanas o acontecimientos naturales. Es un enfoque proactivo y estratégico de cara a mejorar la biodiversidad y salud del medio ambiente.</p>
                <a href="../Conservación de la biodiversidad 3.0/Restauración ecológica en El Salvador 3.5.php" class="w-full bg-green-800 text-white font-bold text-sm uppercase rounded hover:bg-green-500 flex items-center justify-center px-2 py-3 mt-4">
                    Leer mas 
                </a>
            </div>


  
        <div class="bg-white bg-opacity-10 text-gray-500 lg:shadow-2xl w-full flex flex-col my-4 p-6 scroll">
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
<!--Footer-->
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