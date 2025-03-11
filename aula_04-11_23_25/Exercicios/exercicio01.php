<?php

    //Etapa A 
    $pessoa = array(
    "nome" => "Lucas",
    "idade" => 17,
    "cidade" => "Mauá"
    );

    //Etapa B

    $pessoa['Profissão'] = "Desempregado";

    //Etapa C

    $amigos = array("Tiago", "Vinicius", "Pedro");

    //Etapa D

    $dados = array_merge($pessoa, $amigos); 

    //Etapa E
    print_r($dados)
    
?>