<?php
    //Função SEM parâmetros e COM retorno

    function msg(){
        $a = "Olá";
        return $a; //Devolve o valor, algo é colocado no seu lugar
    }

    $frase = "Olá";
    $frase .= msg(); // .= Para concatenar(junta)strings
    //O valor de $frase foi definido e ele irá retornar com o valor de msg, pois foi concatenado com o .
    $frase .= "Bem Vindo";

    echo $frase;
 ?>