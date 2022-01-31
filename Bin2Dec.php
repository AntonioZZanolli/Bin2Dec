<?php

$binario = $_GET['binario'];
$posicao = 0;
$soma = 0;
$pattern = '/[2-9a-zA-ZÀ-Úà-ú]/';


function calculo($binario, $posicao, $soma){
    for($x = 7; $x > -1; $x--){
        if ($binario[$posicao] == "0"){
            $soma += 0*2**$x;
        }
        else{
            $soma += 1*2**$x;
        }
        $posicao += 1;
    }
    return $soma;
}



function verificacao1($binario, $posicao, $soma, $pattern){
    if(strlen($binario) == 8){
        return verificacao2($pattern, $binario, $posicao,$soma);
    }
    else{
        return 'Insira um binário de 8 caracteres';
    }
}


function verificacao2($pattern, $binario, $posicao,$soma){
    if(preg_match($pattern,$binario)){
        return 'Insira apenas números binários';
    }
    else{
        return calculo($binario, $posicao, $soma);
    }
}

echo verificacao1($binario, $posicao, $soma, $pattern);
