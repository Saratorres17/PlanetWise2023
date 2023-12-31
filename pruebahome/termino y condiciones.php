<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../dist/images/leaf.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../src/css modo oscuro/estilos.css">
    <title>Página con Caja Centrada</title>
</head>
<body>
        <!--INICIO DEL SCRIPT DEL TRADUCTOR DE GOOGLE-->
        <script>
        // Crear un elemento <script> para cargar el script de traducción de Google
        const script = document.createElement('script');
        script.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
        script.async = true;
        document.body.appendChild(script);
        // Función para manejar los cambios en el estilo del cuerpo
        const handleBodyChanges = () => {
            const currentTop = parseInt(document.body.style.top) || 0;
            if (currentTop > 0) {
                document.body.style.top = '0px';
            }
        };
        // Definir la función global googleTranslateElementInit
        window.googleTranslateElementInit = () => {
            if (!document.querySelector('.goog-te-combo')) {
                new window.google.translate.TranslateElement({
                        pageLanguage: 'es',
                        includedLanguages: 'fr,en,es,pt,zh-CN,ru'
                    },
                    'google_translate_element'
                );
            }

            // Observar los cambios en el estilo del cuerpo 
            const observer = new MutationObserver(handleBodyChanges);
            observer.observe(document.body, {
                attributes: true,
                attributeFilter: ['style']
            });
        };
    </script>
    <!--FIN DEL SCRIPT DEL TRADUCTOR DE GOOGLE-->
    <div class="h-screen">
        <div class="flex justify-center">
            <div class="hidden bg-cover lg:block lg:w-2/3 h-[900px]" style="background-image: url(https://services.meteored.com/img/article/rios-que-desaparecen-en-un-abrir-y-cerrar-de-ojos-magia-glaciar-333021-1_1280.jpeg)">
                <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40 ">
                    <div>
                        <h2 class="text-5xl font-bold text-white">Tú actitud es importante para nosotros...</h2>
                        
                        <p class="max-w-xl mt-3 text-gray-300 text-2xl">"En cada página que leemos, descubrimos un nuevo mundo, ampliamos nuestra mente y abrimos las puertas de la imaginación. La lectura es el camino que nos lleva a lugares inexplorados y nos permite crecer en cada historia."</p> <br>   
                    </div>
                </div>
            </div>
            
            <div class="flex items-center w-full max-w-md px-6 lg:w-2/6">
                <div class="flex-1">
                    <div class="text-center">
                        <h2 class="text-4xl font-bold text-center">Términos y condiciones</h2>
                    </div>
                    <div class="mt-8">
                       <li>Este blog proporciona información sobre temas relacionados con el medio ambiente, sostenibilidad y conservación. La información se ofrece con fines informativos</li><br>
                       <li>El contenido publicado en este blog es propiedad del sitio o de sus colaboradores y está protegido por derechos de autor. Puedes compartir y enlazar el contenido, pero no puedes utilizarlo con fines comerciales sin nuestro consentimiento</li><br>
                       <li>Las publicaciones son bienvenidas, pero deben ser respetuosos y relevantes. Nos reservamos el derecho de eliminar publicaciones ofensivos o inapropiados.</li><br>
                       <li>Nos reservamos el derecho de modificar estos términos y condiciones en cualquier momento. Los cambios se publicarán en esta página. El uso continuado del sitio después de los cambios constituye tu aceptación de los nuevos términos.</li><br>
                       <li>Al utilizar este sitio, aceptas estos términos y condiciones en su totalidad. Si no estás de acuerdo, por favor, no uses el sitio.</li><br>

                

                    <a href="/pruebahome/index.php"><button type="button"class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">Regresar</button></div></a>
                </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
