<?php

namespace matematica{
function somar($a, $b, $c){
    return $a + $b + $c;
}

function subtrair($a, $b){
    return $a - $b;
}

function dividir($a, $b){
    return $a / $b;
    }

function multiplicar($a, $b){
    return $a * $b;
    }
}

namespace texto{
    function concatenar($nome, $sobrenome){
        return $nome . " " . $sobrenome;
    }
}

namespace logica{
    function verificaidade($idade){
        if ($idade >= 18){
            return "maior de idade";
        }
        else{
           return "menor de idade";
        }
    }
    function verificaexercito($sexo, $idade){
        if ($idade >= 18 && $sexo == "masculino"){
            return "você está apto para servir o exercito";
        }
            else{
                return "você não esta apto para servir o exercito";
            }
        }
}       

 ?>