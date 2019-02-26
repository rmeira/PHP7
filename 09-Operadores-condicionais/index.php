<?php

    $idade = 18;

    // verificar se a indade é igual a 18
    if ($idade == 18){
        echo true;
    }

    // verificando se a idade é menor que 18 com else
    if($idade < 19){
        echo false;
    }else{
        echo true;
    }

    // verificando mais condições com elseif

    if($idade < 19){
        echo true;
    }elseif($idade == 18){
        echo true;
    }else{
        echo false;
    }