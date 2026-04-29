<?php
$idade = 0;
if (isset($_POST['idade'])) {
    $idade = $_POST['idade'];
}

$usoVeiculo = 0;
if (isset($_POST['usoVeiculo'])) {
    $usoVeiculo = $_POST['usoVeiculo'];
}

$numAcidentes = 0;
if (isset($_POST['numAcidentes'])) {
    $numAcidentes = $_POST['numAcidentes'];
}

$experiencia = 0;
if (isset($_POST['experiencia'])) {
    $experiencia = $_POST['experiencia'];
}

if (isset($_POST['idade'])) {
    function calcularSeguro($idade, $usoVeiculo, $numAcidentes, $experiencia) {
        
        if ($idade <= 25) {
            $baseidade = $idade * 8;
        } else {
            $baseidade = $idade * 5;
        }

        $baseUso = $usoVeiculo * 3; 

        $baseAcidentes = $numAcidentes * 8; 

       
        if ($experiencia <= 5) {
            $baseExp = $experiencia * 5;
        } elseif ($experiencia > 5 && $experiencia <= 10) {
            $baseExp = $experiencia * 3;
        } else {
            $baseExp = $experiencia * 2;
        }

   
        $valseguro = ($baseidade + $baseUso + $baseAcidentes + $baseExp) * 1200;
        return $valseguro;
    }

    $seguro = calcularSeguro($idade, $usoVeiculo, $numAcidentes, $experiencia);
}
?>