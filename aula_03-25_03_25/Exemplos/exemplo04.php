<?php
    //Função COM parâmetros e COM retorno

    function msg($x){
        $a = "Lucas" .$x;
        return $a; 
    }

    $sobrenome = "Martins";

    $frase = "Olá"; 
    $frase .= msg($sobrenome);  
    $frase .= "Bem Vindo"; 

    echo $frase;
 ?>