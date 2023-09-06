<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>
<body >
<section class="fixed max-w-md p-4 mx-auto bg-white border border-gray-200 dark:bg-gray-800 left-12 bottom-16 dark:border-gray-700 rounded-2xl cookies-section">


    <h2 class="font-semibold text-gray-800 dark:text-white">🍪Nuestas cookies!</h2>

    <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">Hola, este sitio web utiliza cookies esenciales para garantizar su correcto funcionamiento y cookies de seguimiento para comprender cómo interactúas con él. Este último se fijará sólo después del consentimiento.
        
    <a href="/pruebahome/termino y condiciones.php" class="font-medium text-gray-700 underline transition-colors duration-300 dark:hover:text-blue-400 dark:text-white hover:text-blue-500">Leer terminos y condiciones</a>. </p>
    
    
    <div class="grid grid-cols-2 gap-4 mt-4 shrink-0">
    <button class="text-xs bg-gray-900 font-medium rounded-lg hover:bg-gray-700 text-white px-4 py-2.5 duration-300 transition-colors focus:outline-none accept-button">
  Aceptar
</button>
        <a class="flex justify-end" href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M18 6l-12 12"/>
                <path d="M6 6l12 12"/>
            </svg>
        </a>
       
    </div>
</section>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const cookieSection = document.querySelector(".cookies-section");
    const acceptButton = document.querySelector(".accept-button");

   
    const cookiesAccepted = localStorage.getItem("cookiesAccepted");

    if (!cookiesAccepted) {

      cookieSection.style.display = "block";
    }


    acceptButton.addEventListener("click", function () {
      localStorage.setItem("cookiesAccepted", "true");
      cookieSection.style.display = "none";
    });
  });
</script>
</body>

</html>