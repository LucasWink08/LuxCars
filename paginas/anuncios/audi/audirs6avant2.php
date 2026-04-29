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
        src: url(../../../assets/fontes/good_times/Good\ Times\ Rg.otf);
        font-weight: bold;
        font-style: normal;
    }
    .gtimes{
        font-family: 'gtimes', Arial, Helvetica, sans-serif;
    }
    @font-face {
        font-family: 'luxo';
        src: url(../../../assets/fontes/luxoorea/Luxoorea.otf);
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
<body class="bg-gradient-to-t from-black to-gray-700 text-white min-h-screen">
<div class="bg-black p-3">
    <div class="flex justify-between items-center">
        <div class="w">
            <ul class="flex items-center space-x-2">
                <li id="luxo" class="text-2xl text-white tracking-wider">
                    <h1>LXC</h1>
                </li>
                <li>
                    <a href="../../../paginas/homepage.php">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                        <path d="M160-120v-480L480-840l320 240v480H540v-240H420v240H160Zm60-60h140v-240h200v240h140v-390L480-780 220-570v390Zm140 0h200-200Z"/>
                    </svg>
                    </a>
                </li>
            </ul>
        </div>
        <div class="hidden md:block">
            <ul class="flex space-x-5 text-white">
                <li class="gtimes"><p class="hover-effect"><a href="../../../paginas/paginadecompra.php" class="hover:text-yellow-500 transition duration-150 ease-in-out">COMPRAR</a></p></li>
                <li class="gtimes"><p class="hover-effect"><a href="../../../paginas/anunciar.php" class="hover:text-yellow-500">ANUNCIAR</a></p></li>
                <li class="gtimes"><p class="hover-effect"><a href="../../../paginas/tabelafipe.php" class="hover:text-yellow-500">TABELA FIPE</a></p></li>
                <li class="gtimes"><p class="hover-effect"><a href="../../../paginas/contato.php" class="hover:text-yellow-500">CONTATO</a></p></li>
                <li class="gtimes"><p class="hover-effect"><a href="../../../paginas/seguroveic.php" class="hover:text-yellow-500">Calcule seu seguro</a></p></li>
                <li class="gtimes"><p class="hover-effect"><a href="../../../paginas/desavalveic.php" class="hover:text-yellow-500">desvalorização do veiculo</a></p></li>
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
                        echo "<a href='../../../paginas/entrar.php'>ENTRAR</a>";
                    }
                    ?></p></p>
                </li>     
            </ul>
        </div> 
    </div>
</div>
  <div class="justify between w-screen flex h-[500px] gap-x-2">
    <div class="justify-left w-[33%] h-full">
       <img src="../../../assets/imagens/cars/imgsanuncios/audi/audirs6gt/audi-rs6-avant-performance.webp" alt="" class="w-full h-full object-cover">
    </div>
    <div class="justify-center w-[34%]  h-full">
      <img src="../../../assets/imagens/cars/imgsanuncios/audi/audirs6gt/audi-rs6-avant-performance.jpg" alt="" class="w-full h-full object-cover">
    </div>  
    <div class="justify-right w-[33%]  h-full">
      <img src="../../../assets/imagens/cars/imgsanuncios/audi/audirs6gt/audi-rs6-avant-performance2.webp " alt="" class="w-full h-full object-cover">
    </div>
  </div>



  <div class="flex justify-between mt-10 px-10 ">

  <div class="w-[45%] py-10 opacity-90">
    <div class="flex items-center justify-center h-full">
      <div class="bg-white rounded-xl shadow-2xl p-8 max-w-md w-full opacity-80">
        <div class="h-full">
          <p class="text-center text-black text-4xl font-bold mb-6 gtimes">audi rs6 avant </p>
          <div class="space-y-4 text-2xl text-black gtimes">
            <p><strong class="text-gray-600">Ano:</strong> 2023/2024</p>
            <p><strong class="text-gray-600">Cidade:</strong> são paulo-sp</p>
            <p><strong class="text-gray-600">Combustível:</strong> Gasolina</p>
            <p><strong class="text-gray-600">KM:</strong> 15.450 km rodados</p>
            <p><strong class="text-gray-600">Potência:</strong> 630 CV</p>
            <p><strong class="text-gray-600">Motor:</strong>  motor V8 twin-turbo TFSI de 4,0 litros</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="w-[45%] py-10 gtimes opacity-90 text-black">
    <div class="flex items-center justify-center h-full">
      <div class="bg-white rounded-xl shadow-2xl p-8 max-w-md w-full opacity-80">
        <h2 class="text-center text-black text-4xl font-bold mb-6">R$1.400.000</h2>
        <form action="" method="post" class="space-y-6">
       
          <div>
            <label for="email" class="block text-black text-sm font-medium mb-2">nome completo</label>
            <input 
              type="email" 
              id="email" 
              name="email" 
              placeholder="Digite seu email" 
              class="w-full shadow-lg rounded-lg px-4 py-2 border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-300"
            >
          </div>
          <div>
            <label for="password" class="block text-black text-sm font-medium mb-2">email</label>
            <input 
              type="password" 
              id="password" 
              name="password" 
              placeholder="Digite sua senha" 
              class="w-full shadow-lg rounded-lg px-4 py-2 border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-300"
            >
          </div>
          <div>
            <label for="password" class="block text-black text-sm font-medium mb-2">telefone</label>
            <input 
              type="password" 
              id="password" 
              name="password" 
              placeholder="Digite sua senha" 
              class="w-full shadow-lg rounded-lg px-4 py-2 border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-300"
            >
          </div>
          <div>
            <label for="password" class="block text-black text-sm font-medium mb-2">cpf</label>
            <input 
              type="password" 
              id="password" 
              name="password" 
              placeholder="Digite sua senha" 
              class="w-full shadow-lg rounded-lg px-4 py-2 border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-300"
            >
          </div>
          
          <div class="flex justify-between space-x-4">
          <input 
            type="submit" 
            value="Entrar em Contato" 
            class="flex-grow px-6 py-2 bg-black text-white rounded-lg shadow-md hover:bg-gray-800 cursor-pointer transition ease-in-out duration-300"
          >
          <a href="../../financiamento.php">
          <button 
            type="button" 
            class="flex-grow px-2 py-1 bg-black text-white rounded-lg shadow-md hover:bg-gray-800 cursor-pointer transition ease-in-out duration-300"
          >
           ver parcelas
          </button>
          </a>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>





</body>
</html>
