<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
   <style>
    @font-face {
        font-family: 'gtimes';
        src: url(../../assets/fontes/good_times/Good\ Times\ Rg.otf);
        font-weight: bold;
        font-style: normal;
    }
    .gtimes{
        font-family: 'gtimes', Arial, Helvetica, sans-serif;
    }
    @font-face {
        font-family: 'luxo';
        src: url(../../assets/fontes/luxoorea/Luxoorea.otf);
        font-weight: bold;
        font-style: normal;
    }
    #luxo {
        font-family: 'luxo', Arial, Helvetica, sans-serif;
        font-weight: 800;
        font-style: normal;
    }
        .hover-effect {
            transition: transform 0.3s ease;
        }
        .hover-effect:hover {
            transform: translateY(-3px); 
        }
    
   </style>
</head>
<body class="bg-gradient-to-t from-black to-gray-900 text-white min-h-screen">

<div class="bg-black p-3">
    <div class="flex justify-between items-center">
        <div class="w">
            <ul class="flex items-center space-x-2">
                <li id="luxo" class="text-2xl text-white tracking-wider">
                    <h1>LXC</h1>
                </li>
                <li>
                    <a href="../../paginas/homepage.php">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                        <path d="M160-120v-480L480-840l320 240v480H540v-240H420v240H160Zm60-60h140v-240h200v240h140v-390L480-780 220-570v390Zm140 0h200-200Z"/>
                    </svg>
                    </a>
                </li>
            </ul>
        </div>
        <div class="hidden md:block">
            <ul class="flex space-x-5 text-white">
                <li class="gtimes"><p class="hover-effect"><a href="../../paginas/paginadecompra.php" class="hover:text-yellow-500 transition duration-150 ease-in-out">COMPRAR</a></p></li>
                <li class="gtimes"><p class="hover-effect"><a href="../../paginas/anunciar.php" class="hover:text-yellow-500">ANUNCIAR</a></p></li>
                <li class="gtimes"><p class="hover-effect"><a href="../../paginas/tabelafipe.php" class="hover:text-yellow-500">TABELA FIPE</a></p></li>
                <li class="gtimes"><p class="hover-effect"><a href="../../paginas/contato.php" class="hover:text-yellow-500">CONTATO</a></p></li>
                <li class="gtimes"><p class="hover-effect"><a href="../../paginas/seguroveic.php" class="hover:text-yellow-500">Calcule seu seguro</a></p></li>
                <li class="gtimes"><p class="hover-effect"><a href="../../paginas/desavalveic.php" class="hover:text-yellow-500">desvalorização do veiculo</a></p></li>
            </ul>
        </div>
        <div>
            <ul class="flex items-center space-x-1">
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#EA3323">
                        <path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/>
                    </svg>
                </li>
                <li class="gtimes">
                    <p class="hover-effectt"><p class="text-white hover:text-yellow-500"><?php
                    session_start();
                    if(isset($_SESSION['usuario'])){
                        $usuario=$_SESSION['usuario'];
                        echo "<p class='gtimes'>$usuario</p>";
                    }
                    else{
                        echo "<a href='../paginas/entrar.php'>ENTRAR</a>";
                    }
                    ?></p></p>
                </li>     
            </ul>
        </div> 
    </div>
</div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-y-10 gap-x-8 p-8">

        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/bugatti/2018-08-24-bugatti-divo-37.avif" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">bugatti divo</h2>
                <p class="text-sm text-black mt-2">
                Motor: 8.0L W16 quad-turbo<br>
                Potência: 1.500 cv <br>
                Aceleração 0-100 km/h: Aproximadamente 2,4 segundos<br>
                Velocidade máxima: 380 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$ 40.000.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/bugatti/bugattidivo.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/bugatti/veyron.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">bugatti veyron </h2>
                <p class="text-sm text-black mt-2">
               Motor: 8.0L W16 quad-turbo <br>
               Potência: 1.001 cv <br>
               Aceleração 0-100 km/h: Aproximadamente 2,5 segundos <br>
               Velocidade máxima: 407 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$7.150.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/bugatti/bugattiveyron.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/bugatti/bugatti-chiron-super-sport-2021.webp" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">bugatti chiron</h2>
               <p class="text-sm text-black mt-2">
               Motor: 8.0L W16 quad-turbo <br>
               Potência: 1.500 cv <br>
               Aceleração 0-100 km/h: Aproximadamente 2,5 segundos <br>
               Velocidade máxima: 420 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$ 35.000.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/bugatti/bugattichiron.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/bugatti/Bugatti-Veyron-2015 (1).jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">bugatti veyron</h2>
               <p class="text-sm text-black mt-2">
               Motor: 8.0L W16 quad-turbo <br>
               Potência: 1.001 cv <br>
               Aceleração 0-100 km/h: Aproximadamente 2,5 segundos <br>
               Velocidade máxima: 407 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$ 6.000.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/bugatti/veyron2.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/bugatti/Bugatti-W16_Mistral-2024-1280-f3cc71974aebcc89ec019de660555c0652.webp" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">bugatti w16 mistral </h2>
               <p class="text-sm text-black mt-2">
               Motor: 8.0L W16 quad-turbo <br>
               Potência: 1.600 cv <br>
               Aceleração 0-100 km/h: Aproximadamente 2,5 segundos <br>
               Velocidade máxima: 420 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 "> R$ 30.000.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/bugatti/bugattiw16mistral.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/bugatti/centodieci.webp" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">bugatti centodieci</h2>
               <p class="text-sm text-black mt-2">
               Motor: 8.0L W16 quad-turbo <br>
               Potência: 1.600 cv <br>
               Aceleração 0-100 km/h: Aproximadamente 2,4 segundos <br>
               Velocidade máxima: 380 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 "> R$ 40.000.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/bugatti/buagatticentodieci.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/bugatti/chiron.webp" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">bugatti chiron</h2>
                <p class="text-sm text-black mt-2">
               Motor: 8.0L W16 quad-turbo <br>
               Potência: 1.500 cv <br>
               Aceleração 0-100 km/h: Aproximadamente 2,5 segundos <br>
               Velocidade máxima: 420 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$1.150.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/bugatti/bugattichiron2.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/bugatti/eb110.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">bugatti eb110</h2>
               <p class="text-sm text-black mt-2">
               Motor: 3.5L V12 quad-turbo <br>
               Potência: 560 cv
 <br>
 Aceleração 0-100 km/h: Aproximadamente 3,2 segundos <br>
 Velocidade máxima: 343 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$ 2.500.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/bugatti/bugattieb110.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/bugatti/lavoityre.webp" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes la voituire noire">bugatti la voiture noire </h2>
                <p class="text-sm text-black mt-2">
               Motor: 8.0L W16 quad-turbo <br>
               Potência: 1.500 cv <br>
               Aceleração 0-100 km/h: Aproximadamente 2,5 segundos <br>
               Velocidade máxima: 420 km/h<br>
                </p>
                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$70.000.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/bugatti/bugattilavoiture.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/bugatti/divo2.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">bugatti divo</h2>
                <p class="text-sm text-black mt-2">
                Motor: 8.0L W16 quad-turbo<br>
                Potência: 1.500 cv <br>
                Aceleração 0-100 km/h: Aproximadamente 2,4 segundos<br>
                Velocidade máxima: 380 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$40.000.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/bugatti/bugattidivo2.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
       
    </div>
</body>
</html>

