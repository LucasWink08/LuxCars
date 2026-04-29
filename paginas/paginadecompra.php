<style>
    @font-face {
    font-family: 'gtimes';
    src: url(../assets/fontes/good_times/Good\ Times\ Rg.otf);
    font-weight: bold;
    font-style: normal;
}
.gtimes{
    font-family: 'gtimes', Arial, Helvetica, sans-serif;
}
@font-face {
    font-family: 'luxo';
    src: url(../assets/fontes/luxoorea/Luxoorea.ttf);
    font-weight: bold;
    font-style: normal;
}
#luxo {
    font-family: 'luxo', Arial, Helvetica, sans-serif;
    font-weight: 800;
    font-style: normal;
}
    
</style>
<script src="https://cdn.tailwindcss.com"></script>
<body class="bg-gradient-to-t from-black to-gray-900 text-white min-h-screen">
<div class="bg-black p-3">
    <div class="flex justify-between items-center">
        <div class="w">
            <ul class="flex items-center space-x-2">
                <li id="luxo" class="text-2xl text-white tracking-wider">
                    <h1>LXC</h1>
                </li>
                <li>
                    <a href="../paginas/homepage.php">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                        <path d="M160-120v-480L480-840l320 240v480H540v-240H420v240H160Zm60-60h140v-240h200v240h140v-390L480-780 220-570v390Zm140 0h200-200Z"/>
                    </svg>
                    </a>
                </li>
            </ul>
        </div>
        <div class="hidden md:block">
            <ul class="flex space-x-5 text-white">
                <li class="gtimes"><p class="hover-effect"><a href="../paginas/paginadecompra.php" class="hover:text-yellow-500 transition duration-150 ease-in-out">COMPRAR</a></p></li>
                <li class="gtimes"><p class="hover-effect"><a href="../paginas/anunciar.php" class="hover:text-yellow-500">ANUNCIAR</a></p></li>
                <li class="gtimes"><p class="hover-effect"><a href="../paginas/tabelafipe.php" class="hover:text-yellow-500">TABELA FIPE</a></p></li>
                <li class="gtimes"><p class="hover-effect"><a href="../paginas/contato.php" class="hover:text-yellow-500">CONTATO</a></p></li>
                <li class="gtimes"><p class="hover-effect"><a href="../paginas/seguroveic.php" class="hover:text-yellow-500">Calcule seu seguro</a></p></li>
                <li class="gtimes"><p class="hover-effect"><a href="../paginas/desavalveic.php" class="hover:text-yellow-500">desvalorização do veiculo</a></p></li>
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
    <img src="../assets/imagens/cars/ferrari/300px-2017_Ferrari_488_GTB_Automatic_3.9.jpg" alt="Carro"
        class="h-40 w-full object-cover rounded-t-xl">
    <div class="p-3 text-center">
        <h2 class="font-bold text-lg text-black gtimes">ferrari 488 gtb</h2>
        <p class="text-sm text-black mt-2">
            Motor V8 biturbo de 670 cv<br>
            Aceleração 0-100 km/h em 3,0 segundos<br>
            Velocidade máxima de 330 km/h<br>
        </p>
        <p class="text-black text-2xl gtimes -mb-4 mt-12">R$3.490.000</p>
    </div>
    <div class="mt-4 w-full">
        <a href="../paginas/anuncios/ferrari/ferrari488gtb.php"
            class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
            Ver Mais
        </a>
    </div>
</div>
<div class="max-w-sm  w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
    <img src="../assets/imagens/cars/ferrari/f40.webp" alt="Carro"
        class="h-40 w-full object-cover rounded-t-xl">
    <div class="p-3 text-center">
        <h2 class="font-bold text-lg text-black gtimes">ferrari f40 v8 biturbo</h2>
        <p class="text-sm text-black mt-2">
            Motor V8 2.9L turbo de 478 cv<br>
            Aceleração 0-100 km/h em 3,8 segundos<br>
            Velocidade máxima de 324 km/h<br>
        </p>
        <p class="text-black text-2xl gtimes -mb-4 mt-16">R$10.540.990</p>
    </div>
    <div class="mt-4 w-full">
        <a href="../paginas/anuncios/ferrari/ferrarif40.php"
            class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
            Ver Mais
        </a>
    </div>
</div>
<div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
    <img src="../assets/imagens/cars/ferrari/f8spider.jpg" alt="Carro"
        class="h-40 w-full object-cover rounded-t-xl">
    <div class="p-3 text-center">
        <h2 class="font-bold text-lg text-black gtimes">ferrari f8 spider</h2>
        <p class="text-sm text-black mt-2">
            Motor V8 biturbo de 710 cv<br>
            Aceleração 0-100 km/h em 2,9 segundos<br>
            Velocidade máxima de 340 km/h<br>
        </p>
        <p class="text-black text-2xl gtimes -mb-4 mt-12">R$4.399.990</p>
    </div>
    <div class="mt-4 w-full">
        <a href="../paginas/anuncios/ferrari/ferrarif8spider.php"
            class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
            Ver Mais
        </a>
    </div>
</div>
<div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
    <img src="../assets/imagens/cars/ferrari/Ferrari 458 Italia.jpg" alt="Carro"
        class="h-40 w-full object-cover rounded-t-xl">
    <div class="p-3 text-center">
        <h2 class="font-bold text-lg text-black gtimes">ferrari 458 itália</h2>
        <p class="text-sm text-black mt-2">
            Motor V8 de 570 cv<br>
            Aceleração 0-100 km/h em 3,4 segundos<br>
            Velocidade máxima de 325 km/h<br>
        </p>

        <p class="text-black text-2xl gtimes -mb-4 mt-12 ">R$2.750.000</p>
    </div>
    <div class="mt-4 w-full">
        <a href="../paginas/anuncios/ferrari/ferrari458italia.php"
            class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
            Ver Mais
        </a>
    </div>
</div>
<div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
    <img src="../assets/imagens/cars/ferrari/ferrari-488 pista.jpg" alt="Carro"
        class="h-40 w-full object-cover rounded-t-xl">
    <div class="p-3 text-center">
        <h2 class="font-bold text-lg text-black gtimes">ferrari 488 pista</h2>
        <p class="text-sm text-black mt-2">
            Motor V8 biturbo de 720 cv<br>
            Aceleração 0-100 km/h em 2,9 segundos<br>
            Velocidade máxima de 340 km/h<br>
        </p>

        <p class="text-black text-2xl gtimes -mb-4 mt-12">R$6.220.000</p>
    </div>
    <div class="mt-4 w-full">
        <a href="../paginas/anuncios/ferrari/ferrari488pista.php"
            class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
            Ver Mais
        </a>
    </div>
</div>
<div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
    <img src="../assets/imagens/cars/ferrari/ferrari-purosangue-divulgacao1.jpg" alt="Carro"
        class="h-40 w-full object-cover rounded-t-xl">
    <div class="p-3 text-center">
        <h2 class="font-bold text-lg text-black gtimes">ferrari purosangue</h2>
        <p class="text-sm text-black mt-2">
            Motor V12 de 725 cv<br>
            Aceleração 0-100 km/h em 3,3 segundos<br>
            Velocidade máxima de 310 km/h<br>
        </p>

        <p class="text-black text-2xl gtimes mt-12 -mb-4">R$7.200.000</p>
    </div>
    <div class="mt-4 w-full">
        <a href="../paginas/anuncios/ferrari/ferararipurosangue.php"
            class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
            Ver Mais
        </a>
    </div>
</div>
<div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
    <img src="../assets/imagens/cars/ferrari/Ferrari296gtb.webp" alt="Carro"
        class="h-40 w-full object-cover rounded-t-xl">
    <div class="p-3 text-center">
        <h2 class="font-bold text-lg text-black gtimes">ferrari 296 gtb</h2>
        <p class="text-sm text-black mt-2">
            Motor V6 híbrido de 830 cv<br>
            Aceleração 0-100 km/h em 2,9 segundos<br>
            Velocidade máxima de 330 km/h<br>
        </p>
        <p class="text-black text-2xl gtimes mt-12 -mb-4">R$3.500.000</p>
    </div>
    <div class="mt-4 w-full">
        <a href="../paginas/anuncios/ferrari/ferrari296gtb.php"
            class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
            Ver Mais
        </a>
    </div>
</div>
<div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
    <img src="../assets/imagens/cars/ferrari/Ferrari_FXX_K_Evo.webp" alt="Carro"
        class="h-40 w-full object-cover rounded-t-xl">
    <div class="p-3 text-center">
        <h2 class="font-bold text-lg text-black gtimes">ferrari fxxk evo</h2>
        <p class="text-sm text-black mt-2">
            Motor V12 de 1050 cv<br>
            Aceleração 0-100 km/h em 2,5 segundos<br>
            Velocidade máxima de 350 km/h<br>
        </p>
        <p class="text-black text-2xl gtimes mt-11 -mb-4">R$18.000.000</p>
    </div>
    <div class="mt-4 w-full">
        <a href="../paginas/anuncios/ferrari/ferrarifxxkevo.php"
            class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
            Ver Mais
        </a>
    </div>
</div>
<div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
    <img src="../assets/imagens/cars/ferrari/laferrari.jpg" alt="Carro"
        class="h-40 w-full object-cover rounded-t-xl">
    <div class="p-3 text-center">
        <h2 class="font-bold text-lg text-black gtimes">Ferrari la ferrari</h2>
        <p class="text-sm text-black mt-2">
            Motor V12 naturalmente aspirado de 800 cv<br>
            Aceleração 0-100 km/h em 2,6 segundos<br>
            Velocidade máxima de 350 km/h<br>
        </p>
    </div>
    <p class="gtimes  text-2xl text-black mt-4 -mb-2">R$12.560.000</p>
    <div class="mt-4 w-full">
        <a href="../paginas/anuncios/ferrari/ferrarilaferrari.php"
            class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
            Ver Mais
        </a>
    </div>
</div>
<div class="max-w-lg w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
    <img src="../assets/imagens/cars/ferrari/novitec-ferrari-sf90-stradale-2022.webp" alt="Carro"
        class="h-40 w-full object-cover rounded-t-xl">
    <div class="p-3 text-center">
        <h2 class="font-bold text-lg text-black gtimes">Ferrari sf90</h2>
        <p class="text-sm text-black mt-2">
            Motor V8 biturbo de 1000 cv<br>
            Aceleração 0-100 km/h em 2,5 segundos<br>
            Velocidade máxima de 340 km/h<br>
        </p>
        <p class="text-black text-2xl gtimes mt-16 -mb-4">R$6.230.000</p>
    </div>
    <div class="mt-4 w-full">
        <a href="../paginas/anuncios/ferrari/ferrarisf90.php"
            class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
            Ver Mais
        </a>
    </div>
</div>

<div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../assets/imagens/cars/bmw/bmw i8.webp" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">BMW i8 motor híbrido</h2>
                <p class="text-sm text-black mt-2">
                Motor: Híbrido <br>
                Potência: 362 cv <br>
                Aceleração 0-100 km/h: 4,4 segundos <br>
                Velocidade máxima: 250 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$ 1.100.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../paginas/anuncios/bmw/bmwi8.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../assets/imagens/cars/bmw/2020-bmw-x6-m-competition-1.webp" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">BMW x6 competition</h2>
                <p class="text-sm text-black mt-2">
                Motor : V8 biturbo de 4,4 litros <br>
                Potência : 617 cv <br>
                Aceleração 0-100 km/h : 3,8 segundos <br>
                Velocidade máxima : 250 km/h (limitada eletronicamente) <br>
                </p> 

                <p class="text-black text-2xl gtimes -mb-4 mt-12 ">R$630.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../paginas/anuncios/bmw/bmwx6competition.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../assets/imagens/cars/bmw/BMW M5 CS.webp" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">bmw m5 cs v8 biturbo</h2>
                <p class="text-sm text-black mt-2">
                   Motor:V8 biturbo de 4,4 litros <br>
                   Potência : 635 cv <br>
                   Aceleração 0-100 km/h : 3,0 segundos <br>
                   Velocidade máxima : 305 km/h (limitada eletronicamente) <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-12 ">R$900.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../paginas/anuncios/bmw/bmwm5cs.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../assets/imagens/cars/bmw/bmw-i7-m70.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">bmw i7 m70 xdrive </h2>
                <p class="text-sm text-black mt-2">
                Motor : Elétrico <br>
                Potência:660 cv <br>
                Aceleração 0-100 km/h : 3,7 segundos <br>
                Velocidade máxima : 250 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$1.350.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../paginas/anuncios/bmw/bmwi7m70xdrive.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../assets/imagens/cars/bmw/BMW-X4-M40i-Individual_1.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">bmw x4 m40i</h2>
                <p class="text-sm text-black mt-2">
                Motor : 3.0L turboalimentado I6 <br>
                Potência : 382 cv <br>
                Aceleração 0-100 km/h : 4,4 segundos <br>
                Velocidade máxima : 250 km/h (limitada eletronicamente) <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-2 mt-16 ">R$ 500.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../paginas/anuncios/bmw/bmwx4m40i.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../assets/imagens/cars/bmw/BMWM3G80CS.png" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">BMW m3 g80cs</h2>
                <p class="text-sm text-black mt-2">
                Motor : 3.0L turboalimentado I6 <br> 
                Potência : 543 cv <br>
                Aceleração 0-100 km/h : 3,4 segundos <br>
                Velocidade máxima : 302 km/h (limitada eletronicamente) <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-12 ">R$950.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../paginas/anuncios/bmw/bmwm3g80cs.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../assets/imagens/cars/bmw/bmwm8grancoupe.webp" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">bmw m8 gran coupe</h2>
                <p class="text-sm text-black mt-2">
                Motor : 4.4L V8 biturbo <br>
                Potência : 617 cv <br>
                Aceleração 0-100 km/h : 3,1 segundos <br>
                Velocidade máxima : 250 km/h (limitada eletronicamente) <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$1.150.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../paginas/anuncios/bmw/bmwm8grancoupe.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../assets/imagens/cars/bmw/m4competition.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">bmw m4</h2>
                <p class="text-sm text-black mt-2">
                Motor : 3.0L turboalimentado I6 <br>
                Potência : 473 cv <br>
                Aceleração 0-100 km/h : 4,1 segundos <br>
                Velocidade máxima : 250 km/h  <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$630.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../paginas/anuncios/bmw/bmwm4.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../assets/imagens/cars/bmw/M4gts.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">bmw m4 gts </h2>
                <p class="text-sm text-black mt-2">
                Motor : 3.0L turboalimentado I6
                Potência : 493 cv
                Aceleração 0-100 km/h : 3,7 segundos
                Velocidade máxima : 305 km/h
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$1.100.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../paginas/anuncios/bmw/bmwm4gts.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../assets/imagens/cars/bmw/G90 BMW M5 saloon-13.webp" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">bmw m5 </h2>
                <p class="text-sm text-black mt-2">
                Motor : 4.4L V8 biturbo
                Potência : 625 cv
                Aceleração 0-100 km/h : 3,3 segundos
                Velocidade máxima : 250 km/h
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$920.990</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../paginas/anuncios/bmw/bmwm5.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
    
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../assets/imagens/cars/audi/2023-audi-r8-gt-front-three-quarters-motion-3-1664827965.avif" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">Audi r8 gt</h2>
                <p class="text-sm text-black mt-2">
                Motor : 5.2L V10 atmosférico <br>
                Potência : 560 cv<br>
                Aceleração 0-100 km/h : Aproximadamente 3,6 segundos <br>
                Velocidade máxima : 320 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$1.850.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../paginas/anuncios/audi/audir8gt.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../assets/imagens/cars/audi/audi-rs6-avant-gt.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">audi rs6 avant</h2>
                 <p class="text-sm text-black mt-2">
                 Motor : 4.0L V8 biturbo <br>
                 Potência : 600 cv<br>
                 Aceleração 0-100 km/h : Aproximadamente 3,5 segundos <br>
                Velocidade máxima : 320 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$1.350.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../paginas/anuncios/audi/audirs6avant.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../assets/imagens/cars/audi/audi-tt rs.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">audi tt rs</h2>
                 <p class="text-sm text-black mt-2">
                 Motor : 2.5L 5 cilindros turboalimentado <br>
                 Potência : 400 cv<br>
                 Aceleração 0-100 km/h : Aproximadamente 3,7 segundos <br>
                 Velocidade máxima : 280 km/h<br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$455.800</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../paginas/anuncios/audi/audittrs.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../assets/imagens/cars/audi/mtmrs6evo.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">audi mtm rs6 evo</h2>
                 <p class="text-sm text-black mt-2">
                 Motor : 4.0L V8 biturbo, modificado <br>
                 Potência : 1.000 cv<br>
                 Aceleração 0-100 km/h : Aproximadamente 3,0 segundos <br>
                 Velocidade máxima : Acima de 330 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$ 1.500.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../paginas/anuncios/audi/audimtmrs6.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../assets/imagens/cars/audi/nova-audi-rs6-avant-performance-frente.webp" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">audi rs6 avant</h2>
                 <p class="text-sm text-black mt-2">
                 Motor : 4.0L V8 biturbo <br>
                 Potência : 600 cv<br>
                 Aceleração 0-100 km/h : Aproximadamente 3,5 segundos <br>
                 Velocidade máxima : 280 km/h (limitada eletronicamente) <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 "> R$ 1.400.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../paginas/anuncios/audi/audirs6avant2.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../assets/imagens/cars/audi/RS3 Sportback 12021.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">audi rs3 Sportback</h2>
                 <p class="text-sm text-black mt-2">
                 Motor : 2.5L 5 cilindros turboalimentado <br>
                 Potência : 400 cv<br>
                 Aceleração 0-100 km/h : Aproximadamente 3,8 segundos <br>
                Velocidade máxima : 320 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$ 450.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../paginas/anuncios/audi/audirs3sportback.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../assets/imagens/cars/audi/rs4-avant_2.jpg" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">audi rs4 avant</h2>
                 <p class="text-sm text-black mt-2">
                 Motor : 2.9L V6 biturbo<br>
                 Potência : 450 cv<br>
                 Aceleração 0-100 km/h : Aproximadamente 4,1 segundos<br>
                 Velocidade máxima : 250 km/h (limitada eletronicamwnte) <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$ 700.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../paginas/anuncios/audi/audirs4avant.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../assets/imagens/cars/audi/rs7 2025.avif" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">audi rs7</h2>
                 <p class="text-sm text-black mt-2">
                 Motor : 4.0L V8 biturbo <br>
                 Potência : 600 cv<br>
                 Aceleração 0-100 km/h : Aproximadamente 3,6 segundos <br>
                 Velocidade máxima : 250 km/h (limitada eletronicamente) <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$ 1.200.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../paginas/anuncios/audi/audirs7.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../assets/imagens/cars/audi/image.png" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">audi r8</h2>
                <p class="text-sm text-black mt-2">
                Motor : 5.2L V10 atmosférico <br>
                Potência : 560 cv<br>
                Aceleração 0-100 km/h : Aproximadamente 3,6 segundos <br>
                Velocidade máxima : 320 km/h <br>
                </p>

                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$1.250.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../paginas/anuncios/audi/audir8.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
        <div class="max-w-sm w-64 p-4 rounded-xl bg-white shadow-lg flex flex-col items-center">
            <img src="../assets/imagens/cars/audi/rs32025.png" alt="Carro" class="h-40 w-full object-cover rounded-t-xl">
            <div class="p-3 text-center">
                <h2 class="font-bold text-lg text-black gtimes">audi rs3 </h2>
                <p class="text-sm text-black mt-2">
                Motor : 5.2L V10 atmosférico <br>
                Potência : 560 cv<br>
                Aceleração 0-100 km/h : Aproximadamente 3,6 segundos <br>
                Velocidade máxima : 320 km/h <br>
                </p>


                <p class="text-black text-2xl gtimes -mb-4 mt-16 ">R$450.000</p>
            </div>
            <div class="mt-4 w-full">
                <a href="../paginas/anuncios/audi/audirss3.php" class="block bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-500 focus:scale-95 transition-all duration-250 ease-out shadow-md text-center gtimes">
                    Ver Mais
                </a>
            </div>
        </div>
       
    </div>
</div>
</body>
</html>