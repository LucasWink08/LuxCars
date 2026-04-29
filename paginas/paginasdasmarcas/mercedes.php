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
            <img src="../../assets/imagens/cars/mercedes/2023-mercedes-amg-e63-s-4matic-103-1671563913.avif" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">mercedes amg e63s</h2>
                <p class="text-sm text-black mt-2">
                Motor : 4.0L V8 biturbo <br>
                Potência : 612 cv <br>
                Aceleração 0-100 km/h : 3,4 segundos <br>
                Velocidade máxima : 300 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$920.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/mercedes/lamborghiniamge63s.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/mercedes/a200amg.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">mercedes a200amg</h2>
                <p class="text-sm text-black mt-2">
                Motor : 1.3L 4 cilindros turbo <br>
                Potência : 163 cv <br>
                Aceleração 0-100 km/h : Aproximadamente 8,1 segundos <br>
                Velocidade máxima : 225 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$240.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/mercedes/mercedesa200amg.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/mercedes/amg gtr pro2018.webp" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">mercedes amg gt r pro</h2>
                <p class="text-sm text-black mt-2">
                Motor : 4.0L V8 biturbo<br>
                Potência : 585 cv <br>
                Aceleração 0-100 km/h : Aproximadamente 3,5 segundos <br>
                Velocidade máxima : 318 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$1.990.900</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/mercedes/mercedesgtrpro.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/mercedes/AMGcle53.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">mercedes amg cle53</h2>
                <p class="text-sm text-black mt-2">
                Motor : 3.0L 6 cilindros em linha turboalimentado com sistema híbrido leve (EQ Boost)<br>
                Potência : 435 cv <br>
                Aceleração 0-100 km/h : Aproximadamente 4,5 segundos <br>
                Velocidade máxima : 250 km/h (limitada eletronicamente) <br>
                </p>
                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$670.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/mercedes/mercedesamgcle53.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/mercedes/amggt63s.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">mercedes amg gt63s</h2>
                <p class="text-sm text-black mt-2">
                Motor : 4.0L V8 biturbo <br>
                Potência : 639 cv<br>
                Aceleração 0-100 km/h : Aproximadamente 3,2 segundos<br>
                Velocidade máxima : 315 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$1.355.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/mercedes/mercedesamggt63s.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/mercedes/c300.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">mercedes c300</h2>
                <p class="text-sm text-black mt-2">
                Motor : 2.0L 4 cilindros turbo <br>
                Potência : 258 cv<br>
                Aceleração 0-100 km/h : Aproximadamente 6,0 segundos <br>
                Velocidade máxima : 250 km/h (limitada eletronicamente) <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$300.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/mercedes/mercedesc300.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/mercedes/cls63amg.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">mercedes cls63amg</h2>
                <p class="text-sm text-black mt-2">
                Motor : 4.0L V8 <br>
                Potência: 612 cv <br>
                Aceleração 0-100 km/h : Aproximadamente 3,4 segundos <br>
                Velocidade máxima : 250 km/h (limitada eletronicamente) <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$1.090.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/mercedes/mercedescle63amgs.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/mercedes/gla2021.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">mercedes gla</h2>
                <p class="text-sm text-black mt-2">
                Motor : motores 1.3L turbo <br>
                Potência : Entre 163 cv <br>
                Aceleração 0-100 km/h : Aproximadamente 8,0 segundos <br>
                Velocidade máxima : Até 250 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$260.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/mercedes/mercedes gla.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/mercedes/Mercedes-AMG-GT-63S-E-Performance-e-hibrido-plug-in-mais-rapido-da-historia-da-Mercedes.png" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">mercedes amg gt63s</h2>
                <p class="text-sm text-black mt-2">
                Motor : 4.0L V8 biturbo <br>
                Potência : 639 cv<br>
                Aceleração 0-100 km/h : Aproximadamente 3,2 segundos<br>
                Velocidade máxima : 315 km/h <br>
                </p>


                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$1.150.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/mercedes/mercedesamggt63s1.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../../assets/imagens/cars/mercedes/Mercedes-Benz_SLR_McLaren_2.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">mercedes slr mclaren</h2>
                <p class="text-sm text-black mt-2">
                Motor : 5.4L V8 superalimentado<br>
                Potência : 617 cv <br>
                Aceleração 0-100 km/h : Aproximadamente 3,8 segundos <br>
                Velocidade máxima : 334 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$2.500.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../anuncios/mercedes/mercedesslrmclaren.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
       
    </div>
</body>
</html>

