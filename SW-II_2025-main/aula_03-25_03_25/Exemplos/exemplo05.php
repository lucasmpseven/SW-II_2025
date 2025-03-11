<?php

    function teste($x){
        foreach ($x as $nome) {
            echo "$nome <br>";
        }
    }


    $vetor = ['Lucas','Martins','ETEC'];

    teste($vetor);

 ?>