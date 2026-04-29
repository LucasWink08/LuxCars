<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @font-face {
            font-family: 'gtimes';
            src: url(../assets/fontes/good_times/Good\ Times\ Rg.otf);
            font-weight: bold;
            font-style: normal;
        }
        .gtimes {
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
<?php

if(!isset(($_POST['precoatual']))){
    header('location');
}

$preconicial = 0; 
if (isset($_POST['preconicial'])) {
    $preconicial = $_POST['preconicial'];
}

$precoatual = 0; 
if (isset($_POST['precoatual'])) {
    $precoatual = $_POST['precoatual'];
}

if (isset($_POST['preconicial'])) {
    function calcdesval($preconicial, $precoatual) {
        if ($precoatual != 0) {
            $desval = (($preconicial - $precoatual) / $preconicial * 100);     
        }
        return $desval;
    }

    $dsvl = calcdesval($preconicial, $precoatual);

}
?>



</head>
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
                            if (isset($_SESSION['usuario'])) {
                                $usuario = $_SESSION['usuario'];
                                echo "<p class='gtimes'>$usuario</p>";
                            } else {
                                echo "<a href='../paginas/entrar.php'>ENTRAR</a>";
                            }
                        ?></p></p>
                    </li>     
                </ul>
            </div> 
        </div>
    </div>
    <div class="flex items-center justify-center h-screen gtimes text-black">
        <div class="bg-white rounded-xl shadow-2xl py-20 px-14 max-w-96 opacity-80">
            <h2 class="gtimes justify-center flex items-center text-black text-3xl">CÁLCULO DE DESVALORIZAÇÃO DE VEÍCULO</h2>
            <br>
            <form action="" method="post" class="space-y-6" enctype="multipart/form-data">
                <div>
                    <label for="vehicle" class="block text-black mb-1">Veículo</label>
                    <input type="text" id="vehicle" name="vehicle" placeholder="Digite o modelo do carro" class="w-full shadow-xl rounded-lg px-10 py-2 border border-gray-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-300">
                </div>
                <div>
                    <label for="year" class="block text-black mb-1">Ano de Fabricação</label>
                    <input type="number" id="year" name="year" placeholder="Digite o ano do carro" class="w-full shadow-xl rounded-lg px-10 py-2 border border-gray-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-300">
                </div>
                <div>
                    <label for="preconicial" class="block text-black mb-1">Preço Inicial</label>
                    <input type="number" id="preconicial" name="preconicial" placeholder="Digite o preço inicial do veículo" class="w-full shadow-xl rounded-lg px-10 py-2 border border-gray-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-300">
                </div>
                <div>
                    <label for="precoatual" class="block text-black mb-1">Preço Atual</label>
                    <input type="number" id="precoatual" name="precoatual" placeholder="Digite o preço atual do veículo" class="w-full shadow-xl rounded-lg px-10 py-2 border border-gray-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-300">
                </div>
                <div class="justify-center items-center flex">
                    <input type="submit" value="Calcular" class="w-full gtimes px-6 py-2 bg-black text-white rounded-lg transition ease-in-out duration-300 cursor-pointer">
                </div>
                <div>
                    <label for="accidents" class="block text-black mb-1">Índice de desvalorização</label>
                    <input type="text" 
                           id="accidents" 
                           placeholder="Índice de desvalorização" 
                           class="w-full shadow-xl rounded-lg px-10 py-2 border border-gray-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-300" 
                           readonly 
                         value="<?php 
                           if(isset($_POST['precoatual'])){
                         echo $dsvl; echo "%"; 
                           }
                         ?>">
                           
                </div>
            </form>     
        </div>
    </div>
</body>
</html>
