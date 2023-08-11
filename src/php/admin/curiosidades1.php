<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" href="/dist/images/leaf.png">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body class="flex space-x-32">
  <!-- Sidebar -->
  <div class="bg-gray-800 text-white w-1/4 py-4 px-6 min-h-screen bg-sidebar-image">
    <div class="flex items-center mb-8">
      <img src="admin-profile.jpg" alt="Admin Profile" class="w-12 h-12 rounded-full mr-2">
      <span class="text-lg font-semibold">Nombre del Administrador</span>
    </div>
    <ul class="space-y-2">
      <li><a href="/src/php/admin/Dasboard adm.php" class="block py-2 px-4 hover:bg-gray-700">Usuarios</a></li>
      <li><a href="/src/php/admin/Dashboard- Publicaciones.php" class="block py-2 px-4 hover:bg-gray-700">Publicaciones</a></li>
      <li><a href="/src/php/admin/curiosidades1.php" class="block py-2 px-4 hover:bg-gray-700">Datos curiosos</a></li>
    </ul>
  </div>

  <div class=" w-3/12 p-4">
    <div class="flex justify-center items-center w-full max-w-md mx-4 my-4">
      <!-- Card 1 -->
      <div class="w-full max-w-md  md:shadow-xl rounded-lg">
        <div class="md:flex-shrink-0">
          <img src="https://static.nationalgeographic.es/files/styles/image_3200/public/7086.600x450.jpg?w=1600&h=900" alt="botellas" class="object-cover h-full w-full rounded-lg rounded-b-none">
        </div>
        <div class="p-4 bg-white bg-opacity-50 rounded-b-lg">
          <p class="font-normal">
            <b class="font-serif text-lg">Botellas contaminantes.</b> <br>
            Desde su llegada en 1973, las botellas de un solo uso han sido unas de las principales causas de contaminación por plástico, puesto que su empleo —sobre todo en la industria refresquera— ha incrementado de forma excesiva.
          </p>
          <div class="flex">
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="60px" viewBox="0 0 1010 1010">
              <path fill="#000000" d="M832 512a32 32 0 1 1 64 0v352a32 32 0 0 1-32 32H160a32 32 0 0 1-32-32V160a32 32 0 0 1 32-32h352a32 32 0 0 1 0 64H192v640h640V512z" />
              <path fill="#000000" d="m469.952 554.24 52.8-7.552L847.104 222.4a32 32 0 1 0-45.248-45.248L477.44 501.44l-7.552 52.8zm422.4-422.4a96 96 0 0 1 0 135.808l-331.84 331.84a32 32 0 0 1-18.112 9.088L436.8 623.68a32 32 0 0 1-36.224-36.224l15.104-105.6a32 32 0 0 1 9.024-18.112l331.904-331.84a96 96 0 0 1 135.744 0z" />
            </svg><br>

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="60px" viewBox="0 0 76 76" version="1.1" baseProfile="full" enable-background="new 0 0 76.00 76.00" xml:space="preserve">
              <path fill="#000000" fill-opacity="1" stroke-width="0.2" stroke-linejoin="round" d="M 25.3333,23.75L 50.6667,23.75C 51.5411,23.75 51.8541,27.3125 51.8541,27.3125L 24.1458,27.3125C 24.1458,27.3125 24.4589,23.75 25.3333,23.75 Z M 35.625,19.7917L 40.375,19.7917C 40.8122,19.7917 41.9583,20.9378 41.9583,21.375C 41.9583,21.8122 40.8122,22.9584 40.375,22.9584L 35.625,22.9584C 35.1878,22.9584 34.0416,21.8122 34.0416,21.375C 34.0416,20.9378 35.1878,19.7917 35.625,19.7917 Z M 27.7083,28.5L 48.2916,28.5C 49.1661,28.5 49.875,29.2089 49.875,30.0834L 48.2916,53.8334C 48.2916,54.7078 47.5828,55.4167 46.7083,55.4167L 29.2917,55.4167C 28.4172,55.4167 27.7083,54.7078 27.7083,53.8334L 26.125,30.0834C 26.125,29.2089 26.8339,28.5 27.7083,28.5 Z M 30.0833,31.6667L 30.4792,52.25L 33.25,52.25L 32.8542,31.6667L 30.0833,31.6667 Z M 36.4167,31.6667L 36.4167,52.25L 39.5833,52.25L 39.5833,31.6667L 36.4167,31.6667 Z M 43.1458,31.6667L 42.75,52.25L 45.5208,52.25L 45.9167,31.6667L 43.1458,31.6667 Z " />
            </svg>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full max-w-md mx-4 my-4">
      <!-- Card 2 -->
      <div class="md:shadow-xl rounded-lg">
        <div class="md:flex-shrink-0">
          <img src="https://www.paho.org/sites/default/files/styles/max_1500x1500/public/2023-05/covid-19-virus-blue.jpg?itok=tDu0OGCa" alt="botellas" class="object-cover h-full w-full rounded-lg rounded-b-none">
        </div>
        <div class="p-4 bg-white bg-opacity-50 rounded-b-lg">
          <p class="font-normal text-lg">
            <b class="font-serif">Contaminación durante la pandemia.</b> <br>
            La pandemia por COVID-19 representó un golpe fuerte para el medio ambiente, como lo explica la Organización de las Naciones Unidas (ONU), debido a la demanda de insumos —como guantes, mascarillas y equipos de protección desechables—. El 75% de estos residuos terminará en mares y océanos incrementando la presencia de contaminación por plástico en dichos ambientes.
          </p>
          <div class="flex">
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="60px" viewBox="0 0 1010 1010">
              <path fill="#000000" d="M832 512a32 32 0 1 1 64 0v352a32 32 0 0 1-32 32H160a32 32 0 0 1-32-32V160a32 32 0 0 1 32-32h352a32 32 0 0 1 0 64H192v640h640V512z" />
              <path fill="#000000" d="m469.952 554.24 52.8-7.552L847.104 222.4a32 32 0 1 0-45.248-45.248L477.44 501.44l-7.552 52.8zm422.4-422.4a96 96 0 0 1 0 135.808l-331.84 331.84a32 32 0 0 1-18.112 9.088L436.8 623.68a32 32 0 0 1-36.224-36.224l15.104-105.6a32 32 0 0 1 9.024-18.112l331.904-331.84a96 96 0 0 1 135.744 0z" />
            </svg><br>

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="60px" viewBox="0 0 76 76" version="1.1" baseProfile="full" enable-background="new 0 0 76.00 76.00" xml:space="preserve">
              <path fill="#000000" fill-opacity="1" stroke-width="0.2" stroke-linejoin="round" d="M 25.3333,23.75L 50.6667,23.75C 51.5411,23.75 51.8541,27.3125 51.8541,27.3125L 24.1458,27.3125C 24.1458,27.3125 24.4589,23.75 25.3333,23.75 Z M 35.625,19.7917L 40.375,19.7917C 40.8122,19.7917 41.9583,20.9378 41.9583,21.375C 41.9583,21.8122 40.8122,22.9584 40.375,22.9584L 35.625,22.9584C 35.1878,22.9584 34.0416,21.8122 34.0416,21.375C 34.0416,20.9378 35.1878,19.7917 35.625,19.7917 Z M 27.7083,28.5L 48.2916,28.5C 49.1661,28.5 49.875,29.2089 49.875,30.0834L 48.2916,53.8334C 48.2916,54.7078 47.5828,55.4167 46.7083,55.4167L 29.2917,55.4167C 28.4172,55.4167 27.7083,54.7078 27.7083,53.8334L 26.125,30.0834C 26.125,29.2089 26.8339,28.5 27.7083,28.5 Z M 30.0833,31.6667L 30.4792,52.25L 33.25,52.25L 32.8542,31.6667L 30.0833,31.6667 Z M 36.4167,31.6667L 36.4167,52.25L 39.5833,52.25L 39.5833,31.6667L 36.4167,31.6667 Z M 43.1458,31.6667L 42.75,52.25L 45.5208,52.25L 45.9167,31.6667L 43.1458,31.6667 Z " />
            </svg>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full max-w-md mx-4 my-4">
      <!-- Card 3 -->
      <div class="md:shadow-xl rounded-lg">
        <div class="md:flex-shrink-0">
          <img src="https://www.expoknews.com/wp-content/uploads/2022/08/mares-plasticos-1024x682.jpg" alt="Continente de plástico" class="object-cover h-full w-full rounded-lg rounded-b-none">
        </div>
        <div class="p-4 bg-white bg-opacity-50 rounded-b-lg">
          <p class="font-normal">
            <b class="font-serif text-lg">Nuevo continente flotante.</b> <br>
            Existe una isla de contaminación plástica flotando a la deriva en el Océano Pacífico, con 1.6 millones de km2 y unas 80,000 toneladas de plástico. Lo preocupante es que no deja de expandirse, sus 1.8 billones de plásticos que la conforman están matando a miles de especies que habitan o recorren de California a Hawái.
          </p>
          <div class="flex">
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="60px" viewBox="0 0 1010 1010">
              <path fill="#000000" d="M832 512a32 32 0 1 1 64 0v352a32 32 0 0 1-32 32H160a32 32 0 0 1-32-32V160a32 32 0 0 1 32-32h352a32 32 0 0 1 0 64H192v640h640V512z" />
              <path fill="#000000" d="m469.952 554.24 52.8-7.552L847.104 222.4a32 32 0 1 0-45.248-45.248L477.44 501.44l-7.552 52.8zm422.4-422.4a96 96 0 0 1 0 135.808l-331.84 331.84a32 32 0 0 1-18.112 9.088L436.8 623.68a32 32 0 0 1-36.224-36.224l15.104-105.6a32 32 0 0 1 9.024-18.112l331.904-331.84a96 96 0 0 1 135.744 0z" />
            </svg><br>

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="60px" viewBox="0 0 76 76" version="1.1" baseProfile="full" enable-background="new 0 0 76.00 76.00" xml:space="preserve">
              <path fill="#000000" fill-opacity="1" stroke-width="0.2" stroke-linejoin="round" d="M 25.3333,23.75L 50.6667,23.75C 51.5411,23.75 51.8541,27.3125 51.8541,27.3125L 24.1458,27.3125C 24.1458,27.3125 24.4589,23.75 25.3333,23.75 Z M 35.625,19.7917L 40.375,19.7917C 40.8122,19.7917 41.9583,20.9378 41.9583,21.375C 41.9583,21.8122 40.8122,22.9584 40.375,22.9584L 35.625,22.9584C 35.1878,22.9584 34.0416,21.8122 34.0416,21.375C 34.0416,20.9378 35.1878,19.7917 35.625,19.7917 Z M 27.7083,28.5L 48.2916,28.5C 49.1661,28.5 49.875,29.2089 49.875,30.0834L 48.2916,53.8334C 48.2916,54.7078 47.5828,55.4167 46.7083,55.4167L 29.2917,55.4167C 28.4172,55.4167 27.7083,54.7078 27.7083,53.8334L 26.125,30.0834C 26.125,29.2089 26.8339,28.5 27.7083,28.5 Z M 30.0833,31.6667L 30.4792,52.25L 33.25,52.25L 32.8542,31.6667L 30.0833,31.6667 Z M 36.4167,31.6667L 36.4167,52.25L 39.5833,52.25L 39.5833,31.6667L 36.4167,31.6667 Z M 43.1458,31.6667L 42.75,52.25L 45.5208,52.25L 45.9167,31.6667L 43.1458,31.6667 Z " />
            </svg>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full max-w-md mx-4 my-4">
      <!-- Card 4 -->
      <div class="md:shadow-xl rounded-lg">
        <div class="md:flex-shrink-0">
          <img src="https://www.expoknews.com/wp-content/uploads/2022/08/tratado-1024x768.jpg" alt="Tratado" class="object-cover h-full w-full rounded-lg rounded-b-none">
        </div>
        <div class="p-4 bg-white bg-opacity-50 rounded-b-lg">
          <p class="font-normal">
            <b class="font-serif text-lg">Un tratado histórico contra el plástico</b> <br>
            La preocupación que ha generado el cambio climático así como el estado de nuestro planeta, ha sumado a sus propósitos la lucha contra la contaminación plástica. En este sentido, en 2022 la Asamblea de las Naciones Unidas para el Medio Ambiente, aprobó la elaboración de un tratado vinculante que limite los desechos plásticos y su impacto.
          </p>
          <div class="flex">
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="60px" viewBox="0 0 1010 1010">
              <path fill="#000000" d="M832 512a32 32 0 1 1 64 0v352a32 32 0 0 1-32 32H160a32 32 0 0 1-32-32V160a32 32 0 0 1 32-32h352a32 32 0 0 1 0 64H192v640h640V512z" />
              <path fill="#000000" d="m469.952 554.24 52.8-7.552L847.104 222.4a32 32 0 1 0-45.248-45.248L477.44 501.44l-7.552 52.8zm422.4-422.4a96 96 0 0 1 0 135.808l-331.84 331.84a32 32 0 0 1-18.112 9.088L436.8 623.68a32 32 0 0 1-36.224-36.224l15.104-105.6a32 32 0 0 1 9.024-18.112l331.904-331.84a96 96 0 0 1 135.744 0z" />
            </svg><br>

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="60px" viewBox="0 0 76 76" version="1.1" baseProfile="full" enable-background="new 0 0 76.00 76.00" xml:space="preserve">
              <path fill="#000000" fill-opacity="1" stroke-width="0.2" stroke-linejoin="round" d="M 25.3333,23.75L 50.6667,23.75C 51.5411,23.75 51.8541,27.3125 51.8541,27.3125L 24.1458,27.3125C 24.1458,27.3125 24.4589,23.75 25.3333,23.75 Z M 35.625,19.7917L 40.375,19.7917C 40.8122,19.7917 41.9583,20.9378 41.9583,21.375C 41.9583,21.8122 40.8122,22.9584 40.375,22.9584L 35.625,22.9584C 35.1878,22.9584 34.0416,21.8122 34.0416,21.375C 34.0416,20.9378 35.1878,19.7917 35.625,19.7917 Z M 27.7083,28.5L 48.2916,28.5C 49.1661,28.5 49.875,29.2089 49.875,30.0834L 48.2916,53.8334C 48.2916,54.7078 47.5828,55.4167 46.7083,55.4167L 29.2917,55.4167C 28.4172,55.4167 27.7083,54.7078 27.7083,53.8334L 26.125,30.0834C 26.125,29.2089 26.8339,28.5 27.7083,28.5 Z M 30.0833,31.6667L 30.4792,52.25L 33.25,52.25L 32.8542,31.6667L 30.0833,31.6667 Z M 36.4167,31.6667L 36.4167,52.25L 39.5833,52.25L 39.5833,31.6667L 36.4167,31.6667 Z M 43.1458,31.6667L 42.75,52.25L 45.5208,52.25L 45.9167,31.6667L 43.1458,31.6667 Z " />
            </svg>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full max-w-md mx-4 my-4">
      <!-- Card 5 -->
      <div class="md:shadow-xl rounded-lg">
        <div class="md:flex-shrink-0">
          <img src="https://cdn.businessinsider.es/sites/navi.axelspringer.es/public/media/image/2023/01/extincion-2919288.jpg?tf=3840x" alt="Animal muerto" class="object-cover h-full w-full rounded-lg rounded-b-none">
        </div>
        <div class="p-4 bg-white bg-opacity-50 rounded-b-lg">
          <p class="font-normal">
            <b class="font-serif text-lg">La sexta extinción masiva</b> <br>
            La grave contaminación ambiental que sufre el planeta Tierra, ha provocado severos daños en la biodiversidad mundial a un ritmo alarmante, de tal forma que la comunidad científica considera que se está transitando por la sexta extinción masiva de especies.
          </p>
          <div class="flex">
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="60px" viewBox="0 0 1010 1010">
              <path fill="#000000" d="M832 512a32 32 0 1 1 64 0v352a32 32 0 0 1-32 32H160a32 32 0 0 1-32-32V160a32 32 0 0 1 32-32h352a32 32 0 0 1 0 64H192v640h640V512z" />
              <path fill="#000000" d="m469.952 554.24 52.8-7.552L847.104 222.4a32 32 0 1 0-45.248-45.248L477.44 501.44l-7.552 52.8zm422.4-422.4a96 96 0 0 1 0 135.808l-331.84 331.84a32 32 0 0 1-18.112 9.088L436.8 623.68a32 32 0 0 1-36.224-36.224l15.104-105.6a32 32 0 0 1 9.024-18.112l331.904-331.84a96 96 0 0 1 135.744 0z" />
            </svg><br>

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="60px" viewBox="0 0 76 76" version="1.1" baseProfile="full" enable-background="new 0 0 76.00 76.00" xml:space="preserve">
              <path fill="#000000" fill-opacity="1" stroke-width="0.2" stroke-linejoin="round" d="M 25.3333,23.75L 50.6667,23.75C 51.5411,23.75 51.8541,27.3125 51.8541,27.3125L 24.1458,27.3125C 24.1458,27.3125 24.4589,23.75 25.3333,23.75 Z M 35.625,19.7917L 40.375,19.7917C 40.8122,19.7917 41.9583,20.9378 41.9583,21.375C 41.9583,21.8122 40.8122,22.9584 40.375,22.9584L 35.625,22.9584C 35.1878,22.9584 34.0416,21.8122 34.0416,21.375C 34.0416,20.9378 35.1878,19.7917 35.625,19.7917 Z M 27.7083,28.5L 48.2916,28.5C 49.1661,28.5 49.875,29.2089 49.875,30.0834L 48.2916,53.8334C 48.2916,54.7078 47.5828,55.4167 46.7083,55.4167L 29.2917,55.4167C 28.4172,55.4167 27.7083,54.7078 27.7083,53.8334L 26.125,30.0834C 26.125,29.2089 26.8339,28.5 27.7083,28.5 Z M 30.0833,31.6667L 30.4792,52.25L 33.25,52.25L 32.8542,31.6667L 30.0833,31.6667 Z M 36.4167,31.6667L 36.4167,52.25L 39.5833,52.25L 39.5833,31.6667L 36.4167,31.6667 Z M 43.1458,31.6667L 42.75,52.25L 45.5208,52.25L 45.9167,31.6667L 43.1458,31.6667 Z " />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- form -->
  <div class="mt-32">
    <div class="text-center">
      <h2 class="text-4xl font-bold text-center text-gray-700 dark:text-white">Registra una nueva informacion!</h2>
    </div><br><br>
    <form class="relative left-0 transition-transform transform translate-x-0 hover:translate-x-4 w-100 h-24 ">
      <div>
        <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Titulo</label>
        <input type="text" name="info" id="info" placeholder="Ingresa el titulo" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" /> <br>
      </div>
      <div>
        <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Descripcion</label>
        <input type="text" name="info" id="info" placeholder="Ingresa la descripcion" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
      </div>

      <div class="mt-6">
        <div class="flex justify-between mb-2">
          <label for="info" class="text-sm text-gray-600 dark:text-gray-200">Informacion</label>

        </div>

        <input type="password" name="password" id="password" placeholder="Ingresa tu informacion" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" /><br>
      </div><br><br>

      <div class="mb-4">

        <!-- funcion de la foto -->
        <div class="p-4">
          <div class="border-4 border-dashed border-gray-300 rounded-lg p-8">
            <label for="foto" class=" text-sm font-bold text-gray-700">Arrastra y suelta una foto aquí:</label>
            <input type="file" id="foto" name="foto" class="hidden" accept="image/*">

            <div id="preview" class="mt-4">
              <p class="text-gray-500">Vista previa de la foto</p>
              <div id="imagePreview"></div>
            </div>
          </div>
        </div>

        <script>
          const fotoInput = document.getElementById('foto');
          const previewDiv = document.getElementById('preview');
          const imagePreviewDiv = document.getElementById('imagePreview');

          fotoInput.addEventListener('change', handleFileSelect, false);

          previewDiv.addEventListener('dragover', handleDragOver, false);
          previewDiv.addEventListener('dragleave', handleDragLeave, false);
          previewDiv.addEventListener('drop', handleFileSelect, false);

          function handleDragOver(event) {
            event.preventDefault();
            previewDiv.classList.add('border-blue-500');
          }

          function handleDragLeave(event) {
            event.preventDefault();
            previewDiv.classList.remove('border-blue-500');
          }

          function handleFileSelect(event) {
            event.preventDefault();
            previewDiv.classList.remove('border-blue-500');

            const file = event.type === 'drop' ? event.dataTransfer.files[0] : fotoInput.files[0];
            if (!file || !file.type.startsWith('image/')) {
              alert('Por favor, selecciona un archivo de imagen válido.');
              return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
              const img = document.createElement('img');
              img.src = e.target.result;
              img.classList.add('max-w-full', 'mt-4');
              imagePreviewDiv.innerHTML = '';
              imagePreviewDiv.appendChild(img);

              const deleteBtn = document.createElement('button');
              deleteBtn.innerText = 'Eliminar Foto';
              deleteBtn.classList.add('mt-2', 'px-2', 'py-1', 'bg-red-500', 'text-white', 'rounded');
              deleteBtn.addEventListener('click', function() {
                imagePreviewDiv.innerHTML = '';
              });
              imagePreviewDiv.appendChild(deleteBtn);
            }
            reader.readAsDataURL(file);
          }
        </script>
        <!-- funcion de la foto -->

        <div class="mt-6">
          <button class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-green-500 rounded-md hover:bg-green-300 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
            Registrar
          </button>
          <div class="flex justify-between mb-2">

            <a href="/pruebahome/index.html" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Regresar</a>
          </div>
        </div>
    </form>
  </div>
  </div>

</body>

</html>