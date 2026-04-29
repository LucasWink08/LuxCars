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
            <img src="../../assets/imagens/cars/porsche/2017-10-04-porsche-panamera-turbo-sport-turismo-10.webp" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">porsche panamera </h2>
                <p class="text-sm text-black mt-2">
                Motorização: V6 <br>
                Potência: 500 cv <br>
                Aceleração 0-100 km/h: 5,6 a 3,1 segundos <br>
                Velocidade máxima: Até 315 km/h  <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$ 630.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/porsche/porschepanamera.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/porsche/2017-porsche-718-cayman.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">porsche cayman</h2>
               <p class="text-sm text-black mt-2">
               Motorização: Flat-4 <br>
               Potência: 420 cv <br>
               Velocidade máxima: Até 293 km/h  <br>
               Aceleração 0-100 km/h: 4,9 a 4,4 segundos <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 "> R$ 500.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/porsche/porschecayman.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/porsche/911gt1s.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">porsche 911 gt1s</h2>
               <p class="text-sm text-black mt-2">
               Motorização: 3.2L Flat-6 biturbo <br>
               Potência: 537 cv <br>
               Aceleração 0-100 km/h: 3,9 segundos <br>
                Velocidade máxima: 310 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$ 30.000.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/porsche/porsche911gt1s.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/porsche/porsche-718-spyder-rs-br.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">porsche 718 spider rs </h2>
               <p class="text-sm text-black mt-2">
               Motorização: 4.0L Flat-6 aspirado <br>
               Potência: 500 cv <br>
               Aceleração 0-100 km/h: 3,4 segundos<br>
               Velocidade máxima: 308 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$1.100.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/porsche/porsche718spiderrs.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/porsche/porsche-911-gt2-rs.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">porsche 911 gt2</h2>
               <p class="text-sm text-black mt-2">
               Motorização: 3.8L Flat-6 biturbo <br>
               Potência: 700 cv <br>
               Velocidade máxima: 340 km/h <br>
               Aceleração 0-100 km/h: 2,7 segundos <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$2.450.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/porsche/porsche911gt2.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/porsche/porsche-cayenne-2023.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">porsche cayenne </h2>
               <p class="text-sm text-black mt-2">
               Motorização: V6 <br>
               Potência: 335 cv <br>
               Velocidade máxima: Até 250 km/h <br>
               Aceleração 0-100 km/h: 6,2 segundos <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$1.150.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/porsche/porschecayenne.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/porsche/porsche-macan-rwd-2024.webp" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">porsche macan</h2>
               <p class="text-sm text-black mt-2">
               Motorização: 4 cilindros e V6 <br>
               Potência: 350cv <br>
               Velocidade máxima: Até 270 km/h <br>
               Aceleração 0-100 km/h: 6,4 segundos <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$1.150.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/porsche/porschemacna.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/porsche/Porsche_918_Spyder_IAA_2013.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">porsche 918 spider </h2>
               <p class="text-sm text-black mt-2">
               Motorização: 4.6L V8 + motores elétricos <br>
               Potência: 887 cv <br>
               Velocidade máxima: 345 km/h <br>
               Aceleração 0-100 km/h: 2,6 segundos <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 "> R$ 10.000.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/porsche/porsche918spider.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/porsche/porschegt3rs.webp" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">porsche gt3 rs </h2>
               <p class="text-sm text-black mt-2">
               Motorização: 4.0L Flat-6 aspirado <br>
               Potência: 525 cv <br>
               Velocidade máxima: 296 km/h <br>
               Aceleração 0-100 km/h: 3,2 segundos <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 "> R$ 2.200.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/porsche/porschegt3rs.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/porsche/porschetaycan1.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">porsche taycan</h2>
               <p class="text-sm text-black mt-2">
               Motorização: Motores elétricos <br>
               Potência: Até 761 cv <br>
               Velocidade máxima: 260 km/h <br>
               Aceleração 0-100 km/h: 5,4 a 2,8 segundos <br>
                </p>
                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$ 630.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/porsche/porschetaycan.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
    </div>
</body>
</html>

