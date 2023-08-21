<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../dist/images/leaf.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../src/pantallacarga.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../src/css modo oscuro/estilos.css">
    <title>pagina principal</title>
</head>
<body background="../dist/images/bosquechachi.jpg" class="oculto cursor-default bg-no-repeat bg-cover bg-black">

    <link
    crossorigin="anonymous"
    href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.css"
    rel="stylesheet"
  />
  
  <style>
    .swiper-pagination {
      bottom: 0;
      position: relative;
    }
  
    .swiper-container {
      overflow: hidden;
    }
    .swiper-pagination-bullet{
      background-color: rgb(14, 211, 207);
    }
    .swiper-pagination-bullet-active{
      background-color: rgb(14, 211, 207);
    }
  </style>
  
  <div class="bg-no-repeat bg-cover bg-center relative">

       <!--Pantalla de carga-->
       <div class=" flex justify-center items-center h-full z-10" id="onload">
     <div class="lds-ring">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
     </div>
</div>

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

        <!--DIV DEL TRADUCTOR (Menú de idiomas)-->
        <div class="md:relative md:left-5-4 z-20 top-8 " id="google_translate_element"></div>
        <!--FIN DEL TRADUCTOR-->
  
    <div class="absolute inset-0 z-0"></div>
    <div>
    <div class="min-h-screen flex justify-center">
  
      <div class="grid grid-cols-2 gap-4 items-center z-10">
        <div class="max-w-lg text-center sm:text-left">
          <h2 class="text-4xl font-bold text-gray-100 tracking-tight">
            PlanetWise
          </h2>
  
          <p class="mt-4 text-gray-300">
          ¡Una pagina web adonde podras conocer la biodiversidad!
          </p>
          <div class="flex flex-row  items-center space-x-3 mt-5">
           <a href="/pruebahome/index.php"> <button type="button"
            class="border border-teal-500 bg-teal-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-teal-600 focus:outline-none focus:shadow-outline">Infórmate más</button></a>
            </div>
        </div>
        <div class="mx-0 max-w-xl flex rounded-2xl fill-indigo-500">
           <div class="swiper-container flex-col flex  self-center">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <blockquote class="text-left ">
              <div class="relative">
                <div class="relative">
                <img
                  src="https://img.freepik.com/foto-gratis/primer-plano-guepardo-acostado-sobre-piedra-naturaleza_181624-61681.jpg?w=1480&t=st=1690670664~exp=1690671264~hmac=b283d1ecb97e83cb8a58c199c99026703411937a5fd4c15bd84120bd063a8f21"
                  alt="aji"
                  class="object-cover w-full h-60 mx-auto rounded-t-2xl"/>
               <div class="rounded-t-2xl absolute bg-gradient-to-t from-gray-800 opacity-75 inset-0 z-0"></div>
               </div>
              </div>
  
               <div class="relative m-5 p-5">
                <svg class="absolute left-0 w-6  fill-indigo-500" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"/></svg>
               <p class="text-gray-100 text-xl px-5">
                Los leopardos son conocidos por su adaptabilidad y habilidad para vivir en una amplia variedad de hábitats, desde selvas tropicales hasta áreas desérticas y montañas. Se pueden encontrar en África, el sur de Asia y partes del Medio Oriente.
               </p>
                <svg class="absolute right-0  w-6 fill-indigo-500" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M464 32H336c-26.5 0-48 21.5-48 48v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48zm-288 0H48C21.5 32 0 53.5 0 80v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48z"/></svg>
               
              </div>
              
            </blockquote>
          </div>
  
          <div class="swiper-slide">
            <blockquote class="text-left">
              <div class="">
                  <div class="relative">
                <img
                  src="https://static.nationalgeographic.es/files/styles/image_3200/public/01-golden-snub-nosed-monkey-minden_00455438.webp?w=1450&h=816"
                  alt="aji"
                  class="object-cover w-full mx-auto rounded-t-2xl h-60"
                />
                <div class="rounded-t-2xl absolute bg-gradient-to-t from-gray-800 opacity-75 inset-0 z-0"></div>
               </div>
              </div>
  
              <div class="relative  m-5 p-5">
                <svg class="absolute left-0  w-6  fill-indigo-500" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"/></svg>
                <p class="text-gray-100 text-xl px-5">
                Existen más de 260 especies de monos en todo el mundo, y se encuentran en una amplia variedad de hábitats, desde selvas tropicales hasta desiertos y montañas.</p>
                <svg class="absolute right-0 w-6 fill-indigo-500" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M464 32H336c-26.5 0-48 21.5-48 48v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48zm-288 0H48C21.5 32 0 53.5 0 80v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48z"/></svg>
              </div>
               
            </blockquote>
          </div>
  
          <div class="swiper-slide">
            <blockquote class="text-left">
              <div class="">
                 <div class="relative">
                <img
                  src="https://humanidades.com/wp-content/uploads/2017/03/serpiente-azul-1-e1564541782147.jpg"
                  alt="aji"
                  class="object-cover w-full mx-auto rounded-t-2xl h-60"/>
                <div class="rounded-t-2xl absolute bg-gradient-to-t from-gray-800 opacity-75 inset-0 z-0"></div>
               </div>
              </div>
  
              <div class="relative m-5 p-5">
                <svg class="absolute left-0 w-6  fill-indigo-500" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"/></svg>
               <p class="text-gray-100 text-xl px-5">
               Las serpientes tienen mandíbulas muy flexibles que les permiten tragar presas mucho más grandes que su propia cabeza. Sus mandíbulas no están conectadas y pueden abrirse mucho para acomodar objetos grandes.</p>
                <svg class="absolute right-0 w-6 fill-indigo-500" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M464 32H336c-26.5 0-48 21.5-48 48v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48zm-288 0H48C21.5 32 0 53.5 0 80v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48z"/></svg>
               </div>
              
                
            </blockquote>
          </div>
        </div>
  
        <div class="mt-12 swiper-pagination hidden"></div>
      </div>
        </div>
      </div>
  
      
     
    </div>
    </div>
  </div>
  <script
    crossorigin="anonymous"
    defer
    src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js"
  ></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      new Swiper('.swiper-container', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 8,
        autoplay: {
          delay: 6000,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
          },
          1024: {
            slidesPerView: 1,
          },
        },
      })
    })
  </script>
    <!--Script de la página de carga-->
      <script src="../src/js/load.js"></script>  
</body>
</html>