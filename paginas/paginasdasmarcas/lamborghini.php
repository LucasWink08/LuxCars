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
            <img src="../../assets/imagens/cars/lamborghini/2024-lamborghini-revuelto-110-651719c597ac8.avif" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">lamborghini revuelto </h2>
                  <p class="text-sm text-black mt-2">
                  Motor : 6.5L V12 atmosférico, combinado com 3 motores elétricos <br>
                  Potência : 1.001 cv <br>
                  Aceleração 0-100 km/h : Aceleração de 0 a 100 km/h em menos de 2,5 segundos <br>
                  Velocidade máxima : Aproximadamente 350 km/h/h<br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$8.000.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/lamborghini/lamborghinirevuelto.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/lamborghini/aventador2021.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">lamborghini aventador</h2>
                 <p class="text-sm text-black mt-2">
                 Motor : 6.5L V12 atmosférico <br>
                 Potência : 730 cv <br>
                 Aceleração 0-100 km/h : 2,9 segundos <br>
                 Velocidade máxima : 350 km/h<br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$2.525.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/lamborghini/lamborgihniaventador.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/lamborghini/huracen2018.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">lamborghini huracan</h2>
                 <p class="text-sm text-black mt-2">
                 Motor : 5.2L V10 atmosférico <br>
                 Potência : 640 cv <br>
                 Aceleração 0-100 km/h : 2,9 segundos <br>
                 Velocidade máxima : 325 km/h<br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$1.300.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/lamborghini/lamborghinihuracan.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/lamborghini/lambo-revuelto-1.webp" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">lamborghini revuelto</h2>
                <p class="text-sm text-black mt-2">
                  Motor : 6.5L V12 atmosférico, combinado com 3 motores elétricos <br>
                  Potência : 1.001 cv <br>
                  Aceleração 0-100 km/h : Aceleração de 0 a 100 km/h em menos de 2,5 segundos <br>
                  Velocidade máxima : Aproximadamente 350 km/h/h<br>
                </p>
                <p class="text-black text-2xl gtimes -mb-4 mt-10 ">R$9.770.700</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/lamborghini/lamborghinirevueltov12..php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/lamborghini/inovacoes-que-o-Lamborghini-Aventador.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">lamborghini aventador</h2>
                <p class="text-sm text-black mt-2">
                 Motor : 6.5L V12 atmosférico <br>
                 Potência : 730 cv <br>
                 Aceleração 0-100 km/h : 2,9 segundos <br>
                 Velocidade máxima : 350 km/h<br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$3.300.890</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/lamborghini/lamboaventador.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/lamborghini/lamborghini-gallardo-5795139_1280.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">lamborghini gallardo</h2>
                 <p class="text-sm text-black mt-2">
                 Motor : 5.2L V10 atmosférico <br>
                 Potência : 560 cv <br>
                 Aceleração 0-100 km/h : 3,7 segundos<br>
                 Velocidade máxima : 320 km/h<br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$1.110.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/lamborghini/lamborghinigallardo.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/lamborghini/lamborghini-urus-s.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">lamborghini urus </h2>
                 <p class="text-sm text-black mt-2">
                 Motor : 4.0L V8 biturbo <br>
                 Potência : 650 cv <br>
                 Aceleração 0-100 km/h : 3,6 segundos <br>
                 Velocidade máxima : 305 km/h<br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$1.487.990</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/lamborghini/lamborghiniurus.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/lamborghini/lamborghini-veneno-6.webp" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">lamborghini veneno</h2>
                 <p class="text-sm text-black mt-2">
                 Motor : 6.5L V12 atmosférico <br>
                 Potência : 750 cv<br>
                 Aceleração 0-100 km/h : 2,8 segundos <br>
                 Velocidade máxima : 355 km/h<br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$35.670.900</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/lamborghini/lamborghiniveneno.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/lamborghini/urus2024.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">lamborghini urus</h2>
                <p class="text-sm text-black mt-2">
                 Motor : 4.0L V8 biturbo <br>
                 Potência : 650 cv <br>
                 Aceleração 0-100 km/h : 3,6 segundos <br>
                 Velocidade máxima : 305 km/h<br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$3.335.890</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/lamborghini/lamborghiniurus1.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/lamborghini/lamborghini-huracan-sto.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">lamborghini huracan</h2>
                <p class="text-sm text-black mt-2">
                 Motor : 5.2L V10 atmosférico <br>
                 Potência : 640 cv <br>
                 Aceleração 0-100 km/h : 2,9 segundos <br>
                 Velocidade máxima : 325 km/h<br>
                </p>


                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$1.275.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/lamborghini/lamborghinihuracan2.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
       
    </div>
</body>
</html>

