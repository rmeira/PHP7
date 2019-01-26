<?php
    // Curso do especializa TI: https://youtu.be/_rdcWDTNmKA?list=PLVSNL1PHDWvTwSPNOGj_GrXg41W6dgWam
    
    // Tipos de impressão de dados

    // Impressões de dados com ECHO

    echo 123; // Impressão de valor inteiro
    echo 12.30; // Impressão de valor double
    echo 'Rafael Meira'; // Impressão de Sring
    echo('Rafael Meira');

    // Outra forma de impressão de dados com PRINT

    print 123; // Impressão de valor inteiro
    print 12.30; // Impressão de valor double
    print 'Rafael Meira'; // Impressão de Sring
    print('Rafael Meira');

    // Impressão de valores de array com PRINT_R
    $array = ['Rafael', 'Vicente', 'Aline', 'Lucineide', 'Zezito']; //Criação de um array com nomes
    print_r($array);

    // Impressão de debug
    var_dump(123);
    var_dump(12.34);
    var_dump('Rafael Meira');
    var_dump($array); 
