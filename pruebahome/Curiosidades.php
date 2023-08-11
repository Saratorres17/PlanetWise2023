<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos curiosos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="/dist/images/leaf.png">
    <link rel="stylesheet" href="/src/scroll.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	  <link rel="stylesheet" href="../src/css modo oscuro/estilos.css">
</head>

<body class="h-screen  font-sans bg-white cursor-default">

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
        <nav class="flex justify-around py-4 shadow-md w-full fixed top-0 left-0 right-0 z-10">

          <!--DIV DEL TRADUCTOR (Menú de idiomas)-->
          <div id="google_translate_element"></div>
          <!--FIN DEL TRADUCTOR-->

            <!-- Logo Container -->
            <div class="flex items-center">
                <!-- Logo -->
                <a href="/pruebahome/index.html" id="PlanetWise" class="text-2xl cursor-pointer text-gray-600">
                  PlanetWise
                </a>
            </div>

            <!-- Links Section -->
            <div class="items-center hidden space-x-8 lg:flex">
                <a class="flex text-gray-600 hover:text-white
                    cursor-pointer transition-colors duration-300">
                   Pagina principal
                </a>

               
                <a href="/pruebahome/Curiosidades.html" class="flex text-gray-600 hover:text-white
                    cursor-pointer transition-colors duration-300">
                    Datos curiosos
                </a>

                

                <a href="/pruebahome/blog.html" class="flex text-gray-600 hover:text-white
                    cursor-pointer transition-colors duration-300">
                    Blog
                </a>

                <a href="/pruebahome/sobre nosotros.html" class="flex text-gray-600 hover:text-white
                    cursor-pointer transition-colors duration-300">
                    Sobre nosotros
                </a>
            </div>

            <!-- Icon Menu Section -->
            <div class="flex items-center space-x-5">
                <!-- Register -->
              <a href="/src/php/functions/registro usuario.php"  class="flex text-gray-600 hover:text-white
                    cursor-pointer transition-colors duration-300">

                  <svg class="fill-current h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 0L11.34 .03L15.15 3.84L16.5 2.5C19.75 4.07 22.09 7.24 22.45 11H23.95C23.44 4.84 18.29 0 12 0M12 4C10.07 4 8.5 5.57 8.5 7.5C8.5 9.43 10.07 11 12 11C13.93 11 15.5 9.43 15.5 7.5C15.5 5.57 13.93 4 12 4M12 6C12.83 6 13.5 6.67 13.5 7.5C13.5 8.33 12.83 9 12 9C11.17 9 10.5 8.33 10.5 7.5C10.5 6.67 11.17 6 12 6M.05 13C.56 19.16 5.71 24 12 24L12.66 23.97L8.85 20.16L7.5 21.5C4.25 19.94 1.91 16.76 1.55 13H.05M12 13C8.13 13 5 14.57 5 16.5V18H19V16.5C19 14.57 15.87 13 12 13M12 15C14.11 15 15.61 15.53 16.39 16H7.61C8.39 15.53 9.89 15 12 15Z" />
                    </svg> Registro</a>

                <!-- Login -->
                <a href="/pruebahome/inicio de sesion usu.html" class="flex text-gray-600 hover:text-white
                    cursor-pointer transition-colors duration-300
                    font-semibold ">

                    <svg class="fill-current h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z" />
                    </svg>

                    Inicio de sesion
                </a>
                <button class="switch" id="switch">
                  <span><i class="fas fa-sun"></i></span>
                  <span><i class="fas fa-moon"></i></span>
                </button>
            </div>
        </nav>
   <!-- fin de nav-->
<body>
    <br><br><br><br><br><br><br><br>
    <div class="hidden mx-auto px-4 py-4 max-w-xl my-auto">
        <div class="md:shadow-xl rounded-lg mb-6 ">
          
            <div class="md:flex-shrink-0">
    
              <img src="https://static.nationalgeographic.es/files/styles/image_3200/public/7086.600x450.jpg?w=1600&h=900" alt="botellas"
                class="object-cover h-full w-full rounded-lg rounded-b-none">
            </div>
 
            <div class="p-4  bg-white bg-opacity-50 rounded-b-lg">
                <p class="font-normal">
                    <b class="font-serif text-lg">Botellas contaminantes.</b> <br>
                    Desde su llegada en 1973, las botellas de un solo uso han sido unas de las principales causas de contaminación por plástico, puesto que su empleo —sobre todo en la industria refresquera— ha incrementado de forma excesiva.
                </p>   
            </div>
        </div>
      </div>
      <br><br>
      <div class="scroll mx-auto px-4 py-4 max-w-xl my-auto">
        <div class="md:shadow-xl rounded-lg mb-6 ">
          
            <div class="md:flex-shrink-0">
    
              <img src="https://static.nationalgeographic.es/files/styles/image_3200/public/7086.600x450.jpg?w=1600&h=900" alt="botellas"
                class="object-cover h-full w-full rounded-lg rounded-b-none">
            </div>
 
            <div class="p-4  bg-white bg-opacity-50 rounded-b-lg">
                <p class="font-normal text-lg">
                    <b class="font-serif">Botellas contaminantes.</b> <br>
                    Desde su llegada en 1973, las botellas de un solo uso han sido unas de las principales causas de contaminación por plástico, puesto que su empleo —sobre todo en la industria refresquera— ha incrementado de forma excesiva.
                </p>   
            </div>
        </div>
      </div>
      <br><br>
      <div class="scroll mx-auto px-4 py-4 max-w-xl my-auto">
        <div class="md:shadow-xl rounded-lg mb-6 ">
          
            <div class="md:flex-shrink-0">
    
              <img src="https://www.paho.org/sites/default/files/styles/max_1500x1500/public/2023-05/covid-19-virus-blue.jpg?itok=tDu0OGCa" alt="botellas"
                class="object-cover h-full w-full rounded-lg rounded-b-none">
            </div>
 
            <div class="p-4  bg-white bg-opacity-50 rounded-b-lg">
                <p class="font-normal text-lg">
                    <b class="font-serif">Contaminación durante la pandemia.</b> <br>
                    La pandemia por COVID-19 representó un golpe fuerte para el medio ambiente, como lo explica la Organización de las Naciones Unidas (ONU), debido a la demanda de insumos —como guantes, mascarillas y equipos de protección desechables—. El 75% de estos residuos terminará en mares y océanos incrementando la presencia de contaminación por plástico en dichos ambientes.
                </p>   
            </div>
        </div>
      </div>
      <br><br>
      <div class="scroll mx-auto px-4 py-4 max-w-xl my-auto">
        <div class="md:shadow-xl rounded-lg mb-6 ">
          
            <div class="md:flex-shrink-0">
    
              <img src="https://www.expoknews.com/wp-content/uploads/2022/08/mares-plasticos-1024x682.jpg" alt="Continete de pl[astico]"
                class="object-cover h-full w-full rounded-lg rounded-b-none">
            </div>
 
            <div class="p-4  bg-white bg-opacity-50 rounded-b-lg">
                <p class="font-normal">
                    <b class="font-serif  text-lg">Nuevo continente flotante.</b> <br>
                    Existe una isla de contaminación plástica flotando a la deriva en el Océano Pacífico, con 1.6 millones de km2 y unas 80,000 toneladas de plástico. Lo preocupante es que no deja de expandirse, sus 1.8 billones de plásticos que la conforman están matando a miles de especies que habitan o recorren de California a Hawái. <br><br>

                    Se cree que este montículo se originó principalmente por los desechos que provienen de Asia, y su magnitud es tal que, Charles Moore, un capitán y oceanógrafo estadounidense, quien fue el primero en descubrirlo en 1997, tardó 7 días en rodearlo.
                </p>   
            </div>
        </div>
      </div>
      <br><br>
      <div class="scroll mx-auto px-4 py-4 max-w-xl my-auto">
        <div class="md:shadow-xl rounded-lg mb-6 ">
          
            <div class="md:flex-shrink-0">
    
              <img src="https://www.expoknews.com/wp-content/uploads/2022/08/tratado-1024x768.jpg" alt="tratado"
                class="object-cover h-full w-full rounded-lg rounded-b-none">
            </div>
 
            <div class="p-4  bg-white bg-opacity-50 rounded-b-lg">
                <p class="font-normal">
                    <b class="font-serif text-lg">Un tratado histórico contra el plástico</b> <br>
                    La preocupación que ha generado el cambio climático así como el estado de nuestro planeta, ha sumado a sus propósitos la lucha contra la contaminación plástica. En este sentido, en 2022 la Asamblea de las Naciones Unidas para el Medio Ambiente, aprobó la elaboración de un tratado vinculante que limite los desechos plásticos y su impacto.
                    <br><br>
                    Con esta iniciativa firmada por 175 países, el organismo internacional buscará diseñar una estrategia que ayude a gestionar, administrar y modificar el ciclo de vida de los plásticos, además de actuar legalmente contra aquellas naciones que contaminan de esta forma. 
                </p>   
            </div>
        </div>
      </div>
      <br><br>
      <div class="scroll mx-auto px-4 py-4 max-w-xl my-auto">
        <div class="md:shadow-xl rounded-lg mb-6 ">
          
            <div class="md:flex-shrink-0">
    
              <img src="https://www.expoknews.com/wp-content/uploads/2022/08/mares-plasticos-1024x682.jpg" alt="Continete de pl[astico]"
                class="object-cover h-full w-full rounded-lg rounded-b-none">
            </div>
 
            <div class="p-4  bg-white bg-opacity-50 rounded-b-lg">
                <p class="font-normal">
                    <b class="font-serif text-lg">Nuevo continente flotante.</b> <br>
                    Existe una isla de contaminación plástica flotando a la deriva en el Océano Pacífico, con 1.6 millones de km2 y unas 80,000 toneladas de plástico. Lo preocupante es que no deja de expandirse, sus 1.8 billones de plásticos que la conforman están matando a miles de especies que habitan o recorren de California a Hawái. <br><br>

                    Se cree que este montículo se originó principalmente por los desechos que provienen de Asia, y su magnitud es tal que, Charles Moore, un capitán y oceanógrafo estadounidense, quien fue el primero en descubrirlo en 1997, tardó 7 días en rodearlo.
                </p>   
            </div>
        </div>
      </div>
      <br><br>
      <div class="scroll mx-auto px-4 py-4 max-w-xl my-auto">
        <div class="md:shadow-xl rounded-lg mb-6 ">
          
            <div class="md:flex-shrink-0">
    
              <img src="https://cdn.businessinsider.es/sites/navi.axelspringer.es/public/media/image/2023/01/extincion-2919288.jpg?tf=3840x" alt="Animal muerto"
                class="object-cover h-full w-full rounded-lg rounded-b-none">
            </div>
 
            <div class="p-4  bg-white bg-opacity-50 rounded-b-lg">
                <p class="font-normal">
                    <b class="font-serif text-lg">Un tratado histórico contra el plástico</b> <br>
                    La grave contaminación ambiental que sufre el planeta Tierra, ha provocado severos daños en la biodiversidad mundial a un ritmo alarmante, de tal forma que la comunidad científica considera que se está transitando por la sexta extinción masiva de especies.
                    <br><br>
                    Datos que posee la Comisión Nacional para el Conocimiento y uso de la Biodiversidad (Conabio), indican que en México se han extinguido por lo menos 135 especies, entre las que se incluyen: 43 de peces, 29 de anfibios, 26 de plantas, 19 de aves, 15 de mamíferos y tres de crustáceos. Más de la mitad eran especies endémicas (aquellas que solo habitan en un lugar específico), lo cual significa que su pérdida es definitiva. 
                </p>   
            </div>
        </div>
      </div>
      <!--SCRIPT PARA EL MODO NOCTURNO-->
      <script src="/src/js/main.js"></script>

      <footer class="bg-gradient-to-t from-gray-800 pt-10 pb-10">
        <div class="w-screen flex justify-center">
            <img class="h-20 w-20"  src="/dist/images/leaf.png" alt="PlanetWise Logo">
        </div>
        <div class="container mx-auto">
          <div class="flex flex-col md:flex-row justify-center items-center">
            <div class="flex items-center justify-center md:justify-between mt-4 md:mt-0">
              <a href="/pruebahome/index.html" class="text-base px-4 py-2">Home</a>
              <a href="/pruebahome/sobre nosotros.html" class="text-base px-4 py-2">sobre nosotros</a>
              <a href="#" class="text-base px-4 py-2">Translator</a>
              <a href="/pruebahome/blog.html" class="text-base px-4 py-2">Blog</a>
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