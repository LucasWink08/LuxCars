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
                <li class="gtimes"><p class="hover-effect"><a href="../paginas/contato.php" class="hover:text-yellow-500">Calcule seu seguro</a></p></li>
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
    <div class="overflow-x-auto max-w-4xl mx-auto mt-10 mb-10 rounded-lg gtimes">
        <table class="min-w-full bg-white shadow-md rounded-lg">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="py-2 px-4 text-left">Marca</th>
                    <th class="py-2 px-4 text-left">Modelo</th>
                    <th class="py-2 px-4 text-left">Preço (R$)</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">Ferrari</td>
                    <td class="py-2 px-4 text-black">296 "GTB"</td>
                    <td class="py-2 px-4 text-black">R$ 3.200.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">Ferrari</td>
                    <td class="py-2 px-4 text-black">458 Italia</td>
                    <td class="py-2 px-4 text-black">R$ 1.500.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">Ferrari</td>
                    <td class="py-2 px-4 text-black">488 "GTB"</td>
                    <td class="py-2 px-4 text-black">R$ 1.800.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">Ferrari</td>
                    <td class="py-2 px-4 text-black">488 Pista</td>
                    <td class="py-2 px-4 text-black">R$ 2.500.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">Ferrari</td>
                    <td class="py-2 px-4 text-black">F40</td>
                    <td class="py-2 px-4 text-black">R$ 5.000.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">Ferrari</td>
                    <td class="py-2 px-4 text-black">F8 Spider</td>
                    <td class="py-2 px-4 text-black">R$ 1.900.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">Ferrari</td>
                    <td class="py-2 px-4 text-black">FXXK Evo</td>
                    <td class="py-2 px-4 text-black">R$ 13.000.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">Ferrari</td>
                    <td class="py-2 px-4 text-black"> la Ferrari</td>
                    <td class="py-2 px-4 text-black">R$ 12.000.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">Ferrari</td>
                    <td class="py-2 px-4 text-black">Puro Sangue</td>
                    <td class="py-2 px-4 text-black">R$ 7.500.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">Ferrari</td>
                    <td class="py-2 px-4 text-black">SF90</td>
                    <td class="py-2 px-4 text-black">R$ 6.200.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">Koenigsegg</td>
                    <td class="py-2 px-4 text-black">Agera Odin</td>
                    <td class="py-2 px-4 text-black">R$ 20.000.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">Koenigsegg</td>
                    <td class="py-2 px-4 text-black">Agera</td>
                    <td class="py-2 px-4 text-black">R$ 15.000.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">Koenigsegg</td>
                    <td class="py-2 px-4 text-black">CC850</td>
                    <td class="py-2 px-4 text-black">R$ 11.000.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">Koenigsegg</td>
                    <td class="py-2 px-4 text-black">CCX</td>
                    <td class="py-2 px-4 text-black">R$ 8.500.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">Koenigsegg</td>
                    <td class="py-2 px-4 text-black">Jesko</td>
                    <td class="py-2 px-4 text-black">R$ 16.000.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">Koenigsegg</td>
                    <td class="py-2 px-4 text-black">Jesko Absolut</td>
                    <td class="py-2 px-4 text-black">R$ 18.000.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">Koenigsegg</td>
                    <td class="py-2 px-4 text-black">"One:1"</td>
                    <td class="py-2 px-4 text-black">R$ 15.500.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">McLaren</td>
                    <td class="py-2 px-4 text-black">650S</td>
                    <td class="py-2 px-4 text-black">R$ 2.800.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">McLaren</td>
                    <td class="py-2 px-4 text-black">720S</td>
                    <td class="py-2 px-4 text-black">R$ 3.000.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">McLaren</td>
                    <td class="py-2 px-4 text-black">765LT</td>
                    <td class="py-2 px-4 text-black">R$ 3.500.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">McLaren</td>
                    <td class="py-2 px-4 text-black">F1</td>
                    <td class="py-2 px-4 text-black">R$ 20.000.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">McLaren</td>
                    <td class="py-2 px-4 text-black">P1</td>
                    <td class="py-2 px-4 text-black">R$ 10.500.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">McLaren</td>
                    <td class="py-2 px-4 text-black">P1 GTR</td>
                    <td class="py-2 px-4 text-black">R$ 12.000.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">McLaren</td>
                    <td class="py-2 px-4 text-black">Senna</td>
                    <td class="py-2 px-4 text-black">R$ 7.500.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">McLaren</td>
                    <td class="py-2 px-4 text-black">Senna GTR</td>
                    <td class="py-2 px-4 text-black">R$ 9.000.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">McLaren</td>
                    <td class="py-2 px-4 text-black">Speedtail</td>
                    <td class="py-2 px-4 text-black">R$ 15.000.000</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 text-black">McLaren</td>
                    <td class="py-2 px-4 text-black">Solus GT</td>
                    <td class="py-2 px-4 text-black">R$ 8.000.000</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

</body>
</html>
