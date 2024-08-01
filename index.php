<?php

// IMPORTAR MINHA CLASS DE CONVERSÃO
include_once "class/class_romanos.php";

// INICIAR A CLASS ALGARISMOS
$algarismo = new Cliente();
$algarismo->romano  = "LXXXII";
$algarismo->arabico = 88; 

$romano  = $algarismo->converterRomano();
$arabico = $algarismo->converterArabico();

print_r($arabico);

?>