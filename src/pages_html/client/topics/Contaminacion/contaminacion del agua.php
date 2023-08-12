<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
    <title>Contaminacion del agua</title>
    <link rel="stylesheet" href="/src/scroll.css">
    <link rel="icon" href="/dist/images/leaf.png">
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
    background-image: url('/dist/images/Agua.webp'); /* Ruta de imagen de fondo */
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
    <h2 class="hero-title">Contaminacion del agua</h2>
   
  </div>
</section><br> <br>
  <div class="container mx-auto flex flex-wrap py-6">

      <!-- Posts Section -->
      <section class="w-full md:w-2/3 flex flex-col items-center px-3">

          <article class="flex flex-col my-4">
              <!-- Article Image -->
              <a href="#" class="hover:opacity-75">
                  <img alt="" src="https://img.freepik.com/foto-gratis/concepto-contaminacion-residuos-plasticos_23-2149094890.jpg?w=1380&t=st=1690861257~exp=1690861857~hmac=dceb336fe8f487c89b7699010d1181307bb10f2f72f2245cc55d7e153c8ff0c5">
              </a>
              <div class="bg-white bg-opacity-10 scroll text-gray-500 shadow-xl rounded-2xl flex flex-col justify-start p-6">
          
                  <p class="text-3xl font-bold hover:text-gray-700 pb-4">¿Qué es la contaminación del agua?</p>
                                                     
                  <p class="pb-6">El poeta británico W. H. Auden dijo una vez: “Miles han vivido sin amor, ni uno solo sin agua”. Sin embargo, aunque todos sabemos que el agua es crucial para la vida, la desperdiciamos de todos modos. Alrededor del 80 por ciento de las aguas residuales del mundo se vierten—en su mayoría sin tratar—en el medio ambiente, contaminando ríos, lagos y océanos”. <br><br>

                    Este problema generalizado de contaminación del agua está poniendo en peligro nuestra salud. El agua insalubre mata cada año a más personas que la guerra y todas las demás formas de violencia juntas. Mientras tanto, nuestras fuentes de agua potable son limitadas: menos del 1 por ciento del agua dulce de la Tierra es realmente accesible para nosotros. Si no se toman medidas, los retos no harán más que aumentar de aquí a 2050, cuando se espera que la demanda mundial de agua dulce sea más de un tercio que la actual. <br><br>

                    La contaminación del agua ocurre cuando sustancias nocivas—a menudo sustancias químicas o microorganismos—contaminan un arroyo, un río, un lago, un océano, un acuífero u otra masa de agua, degradando la calidad del agua y haciéndola tóxica para los seres humanos o el medio ambiente. <br><br>

                    El agua es especialmente vulnerable a la contaminación. Conocida como “solvente universal”, el agua es capaz de disolver más sustancias que cualquier otro líquido de la tierra. Es la razón por la que tenemos Kool-Aid y cascadas azules brillantes. También es la razón por la que el agua se contamina tan fácilmente. Las sustancias tóxicas procedentes de las granjas, las ciudades y las fábricas se disuelven fácilmente en ella y se mezclan con ella, lo que provoca la contaminación del agua. <br>

                  </p>

              </div>
          </article><br>

          <article class="flex flex-col my-4">
              <!-- Article Image -->
              <p class="scroll text-3xl text-gray-400 font-bold hover:text-gray-700 pb-4 flex justify-center items-center">Datos curiosos</p> 

              <a href="#" class="hover:opacity-90 flex justify-center items-center ">

                <iframe class="scroll" width="560" height="315" src="https://www.youtube.com/embed/iPCUpCDhdsE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </a><br>
              <div class="bg-white bg-opacity-10 scroll text-gray-500 shadow-xl rounded-2xl flex flex-col justify-start p-6">
                 
                  <p class="pb-6">Cuando la lluvia cae y se filtra en las profundidades de la tierra, llena las grietas, hendiduras y espacios porosos de un acuífero (básicamente un almacén subterráneo de agua), se convierte en agua subterránea, uno de nuestros recursos naturales menos visibles pero más importantes. Casi el 40 por ciento de los estadounidenses dependen del agua subterránea, bombeada a la superficie de la tierra, para beber. Para algunos habitantes de zonas rurales, es su única fuente de agua dulce. Las aguas subterráneas se contaminan cuando los contaminantes—desde los pesticidas y fertilizantes hasta los residuos lixiviados de los vertederos y los sistemas sépticos—llegan a un acuífero, haciéndolo inseguro para el uso humano. Eliminar los contaminantes de las aguas subterráneas puede ser difícil o imposible, además de costoso.<br><br>

                    Una vez contaminado, un acuífero puede quedar inutilizado durante décadas, o incluso miles de años. Las aguas subterráneas también pueden propagar la contaminación lejos de la fuente original de contaminación al filtrarse en los arroyos, lagos y océanos.</a><br>

                      <li>El agua superficial cubre aproximadamente el 70 por ciento de la tierra, es la que llena nuestros océanos, lagos, ríos y todas las demás partes azules de nuestro planeta. El agua superficial procedente de fuentes de agua dulce (es decir, de fuentes distintas al océano) representa más del 60 por ciento del agua que llega a los hogares estadounidenses. Pero una parte importante de esa agua está en peligro. Según los estudios más recientes de la Agencia de Protección Ambiental de Estados Unidos (EPA por sus siglas en inglés) sobre la calidad del agua a nivel nacional, casi la mitad de nuestros ríos y arroyos y más de un tercio de nuestros lagos están contaminados y no son aptos para nadar, pescar y beber. La contaminación por nutrientes, que incluye nitratos y fosfatos, es el principal tipo de contaminación en estas fuentes de agua dulce. Aunque las plantas y los animales necesitan estos nutrientes para crecer, estos se han convertido en un importante contaminante debido a los residuos agrícolas y a la escorrentía de los fertilizantes. Los vertidos municipales e industriales también aportan su cuota de toxinas. También está toda la basura que la industria y las personas vierten directamente en los cursos de agua.</li><br><br>

                      <li>El ochenta por ciento de la contaminación de los océanos (también llamada contaminación marina) se origina en tierra, ya sea en la costa o en el interior. Contaminantes como los productos químicos, los nutrientes y los metales pesados son transportados desde las granjas, las fábricas y las ciudades por los arroyos y los ríos hasta nuestras bahías y estuarios; desde allí viajan hasta el mar. Mientras tanto, los desechos marinos—sobre todo el plástico—son arrastrados por el viento o por los desagües pluviales y las alcantarillas. Nuestros mares también se estropean a veces por vertidos y fugas de petróleo—grandes y pequeños—y absorben constantemente la contaminación de carbono del aire. El océano absorbe hasta una cuarta parte de las emisiones de carbono producidas por el hombre.</li><br><br>

                      <li>Cuando la contaminación se origina en una sola fuente, se denomina contaminación puntual. Algunos ejemplos son las aguas residuales (también llamadas efluentes) vertidas legal o ilegalmente por un fabricante, una refinería de petróleo o una instalación de tratamiento de aguas residuales, así como la contaminación por fugas en los sistemas sépticos, los vertidos químicos y de petróleo y los vertidos ilegales. La EPA regula la contaminación puntual estableciendo límites sobre lo que puede verter una instalación directamente en una masa de agua. Aunque la contaminación puntual se origina en un lugar concreto, puede afectar muchos kilómetros de vías fluviales y al océano. </li>
                    </p><br><br>
              </div>
          </article>

          <article class="flex flex-col my-4">
              <!-- Article Image -->
              <a class="hover:opacity-75 ">
                  <img alt="" class="rounded-t-2xl scroll w-full" src="https://img.freepik.com/foto-gratis/ola-rompiendo-playa_1160-39.jpg?1&w=1380&t=st=1690861644~exp=1690862244~hmac=d13dfef453fad8c373677f92675cc6f0696ba1b8159589ab88639211a20b3ac2">
              </a>
              <div class="bg-white bg-opacity-10 text-gray-500 shadow-2xl rounded-b-2xl flex flex-col justify-start p-6">
                
                  <p class="text-3xl font-bold hover:text-gray-700 pb-4">Tipos de contaminacion</p>
                  
                 <li>Contaminación del petróleo: Casi la mitad del millón de toneladas de petróleo que se calcula llegan al medio marino cada año no procede de vertidos de petroleros, sino de fuentes terrestres como fábricas, granjas y ciudades. En el mar, los derrames de petroleros suponen alrededor del 10 por ciento del petróleo en las aguas de todo el mundo, mientras que las operaciones regulares de la industria naviera—a través de los vertidos legales e ilegales—contribuyen con alrededor de un tercio. El petróleo también se libera de forma natural desde el fondo del océano a través de fracturas conocidas como filtraciones. </li> <br><br>

                 <li>Sustancias radiactivas:Los residuos radiactivos son cualquier tipo de contaminación que emite radiaciones más allá de lo que libera naturalmente el medio ambiente. Se crean en las minas de uranio, en las centrales nucleares y en la producción y pruebas de armas militares, así como en las universidades y hospitales que utilizan materiales radiactivos para la investigación y la medicina. Los residuos radiactivos pueden persistir en el medio ambiente durante miles de años, lo que hace que su eliminación sea un gran reto. Pensemos en el centro de producción de armas nucleares de Hanford, en Washington, donde se espera que la limpieza de 56 millones de galones de residuos radiactivos cueste más de 100 mil millones de dólares y durarán hasta 2060. Los contaminantes liberados accidentalmente o eliminados de forma inadecuada amenazan las aguas subterráneas, las aguas superficiales y los recursos marinos. </li><br><br>

                 <li>Aguas residuales: Las aguas usadas son aguas residuales. Provienen de nuestros lavabos, duchas e inodoros (piense en el alcantarillado) y de actividades comerciales, industriales y agrícolas (piense en metales, disolventes y lodos tóxicos). El término también incluye la escorrentía de las aguas pluviales, que se produce cuando las precipitaciones arrastran las sales de las carreteras, el aceite, la grasa, los productos químicos y los desechos de las superficies impermeables a nuestras vías fluviales. <br><br>

                  Según las Naciones Unidas, más del 80 por ciento de las aguas residuales del mundo retornan al medio ambiente sin ser tratadas o reutilizadas; en algunos países menos desarrollados, la cifra supera el 95 por ciento. En los Estados Unidos, las instalaciones de tratamiento de aguas residuales procesan unos 34 mil millones de galones de aguas residuales al día. Estas instalaciones reducen la cantidad de contaminantes como los patógenos, el fósforo y el nitrógeno de las aguas residuales, así como los metales pesados y los productos químicos tóxicos de los residuos industriales, antes de verter las aguas tratadas de nuevo en los cursos de agua. Eso es cuando todo va bien. Pero según los cálculos de la EPA, los sistemas de tratamiento de aguas residuales de nuestro país, envejecidos y que se desbordan fácilmente, también vierten cada año más de 850 mil millones de galones de aguas residuales sin tratar. </li><br><br>

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
                  <img alt=""  class="hover:opacity-75 h-50" src="https://img.freepik.com/foto-gratis/disparo-enfoque-selectivo-colibri-vuelo_181624-56855.jpg?w=826&t=st=1690858682~exp=1690859282~hmac=6015319e298a11a02addf4e9bddd42b6e724839f05f735e037f1c68f84198ff8">
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