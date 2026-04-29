<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seguro de Veículo</title>
  <script src="../assets/js/calcseguro.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
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
</head>
<body class="bg-gradient-to-t from-black to-gray-900 text-white min-h-screen">
<?php
session_start();


$idade = $usoVeiculo = $numAcidentes = $experiencia = $seguro = 0;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idade = isset($_POST['idade']) ? (int)$_POST['idade'] : 0;
    $usoVeiculo = isset($_POST['usoVeiculo']) ? (int)$_POST['usoVeiculo'] : 0;
    $numAcidentes = isset($_POST['numAcidents']) ? (int)$_POST['numAcidents'] : 0;
    $experiencia = isset($_POST['experiencia']) ? (int)$_POST['experiencia'] : 0;


    function calcularSeguro($idade, $usoVeiculo, $numAcidentes, $experiencia) {
        $baseidade = $idade <= 25 ? $idade * 8 : $idade * 5;
        $baseUso = $usoVeiculo * 3;
        $baseAcidentes = $numAcidentes * 8;
        $baseExp = $experiencia <= 5 ? $experiencia * 5 : ($experiencia <= 10 ? $experiencia * 3 : $experiencia * 2);
        return ($baseidade + $baseUso + $baseAcidentes + $baseExp) * 1200;
    }

    $seguro = calcularSeguro($idade, $usoVeiculo, $numAcidentes, $experiencia);
}
?>

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
                <li class="gtimes"><a href="../paginas/paginadecompra.php" class="hover:text-yellow-500">COMPRAR</a></li>
                <li class="gtimes"><a href="../paginas/anunciar.php" class="hover:text-yellow-500">ANUNCIAR</a></li>
                <li class="gtimes"><a href="../paginas/tabelafipe.php" class="hover:text-yellow-500">TABELA FIPE</a></li>
                <li class="gtimes"><a href="../paginas/contato.php" class="hover:text-yellow-500">CONTATO</a></li>
                <li class="gtimes"><a href="../paginas/seguroveic.php" class="hover:text-yellow-500">Calcule seu seguro</a></li>
                <li class="gtimes"><a href="../paginas/desavalveic.php" class="hover:text-yellow-500">Desvalorização do Veículo</a></li>
            </ul>
        </div>
        <div>
            <ul class="flex items-center space-x-1">
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#EA3323">
                        <path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360Zm0 360Z"/>
                    </svg>
                </li>
                <li class="gtimes">
                    <?php if (isset($_SESSION['usuario'])): ?>
                        <p class="gtimes text-white"><?php echo htmlspecialchars($_SESSION['usuario']); ?></p>
                    <?php else: ?>
                        <a href="../paginas/entrar.php">ENTRAR</a>
                    <?php endif; ?>
                </li>     
            </ul>
        </div> 
    </div>
</div>

<div class="flex items-center justify-center h-screen">
    <div class="bg-white rounded-xl shadow-2xl py-20 px-14 max-w-96 opacity-80 gtimes text-black">
        <h2 class="gtimes justify-center flex items-center text-black text-3xl">CÁLCULO DE SEGURO DE VEÍCULO</h2><br>
        <form action="" method="post" class="space-y-6" enctype="multipart/form-data">
            <div>
                <label for="idade" class="block text-black mb-1">Idade</label>
                <input 
                    type="number"
                    id="idade"
                    name="idade"
                    placeholder="Digite sua idade" 
                    value=""
                    class="w-full shadow-xl rounded-lg px-10 py-2 border border-gray-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-300"
                >
            </div>
            <div>
                <label for="usoVeiculo" class="block text-black mb-1">Uso do Veículo (de 1 a 10)</label>
                <input 
                    type="number"
                    id="usoVeiculo"
                    name="usoVeiculo"
                    min="1" 
                    max="10"
                    placeholder="Digite o quanto você utiliza o veículo" 
                    value=""
                    class="w-full shadow-xl rounded-lg px-10 py-2 border border-gray-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-300"
                >
            </div>
            <div>
                <label for="numAcidents" class="block text-black mb-1">Números de Acidentes</label>
                <input 
                    type="number"
                    id="numAcidents"
                    name="numAcidents"
                    placeholder="Digite o número de acidentes" 
                    value=""
                    class="w-full shadow-xl rounded-lg px-10 py-2 border border-gray-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-300"
                >
            </div>
            <div>
                <label for="experiencia" class="block text-black mb-1">Tempo de Experiência (em anos)</label>
                <input 
                    type="number"
                    id="experiencia"
                    name="experiencia"
                    placeholder="Digite o tempo de experiência em direção" 
                    value=""
                    class="w-full shadow-xl rounded-lg px-10 py-2 border border-gray-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-300"
                >
            </div>
            <div class="justify-center items-center flex">
                <input 
                    type="submit" 
                    value="Calcular Seguro"
                    class="w-full gtimes px-6 py-2 bg-black text-white rounded-lg transition ease-in-out duration-300 cursor-pointer"
                >
            </div>
            <div>
                <label for="valorSeguro" class="block text-black mb-1">Valor Estimado do Seguro</label>
                <input 
                    type="text"
                    readonly
                    value="<?php echo $seguro > 0 ? $seguro . ' R$' : ''; ?>"
                    class="w-full shadow-xl rounded-lg px-10 py-2 border border-gray-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-300"
                >
            </div>
        </form>
    </div>
</div>
</body>
</html>