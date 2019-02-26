<?php

    // Formas de definir arrays
    $carros = [];
    $carros = array();

    // definindo elementos com posições 0, 1 ,2, 3
    $nomeDeCarros = ['Celta', 'Corsa', 'Ford Ka', 'Focous'];

    // Array composto
    $carro = [
        // index e o valor
        'cor'       => 'Branco',
        'portas'    => 4,
        'ano'       => 2018,
        'modelo'    => 2017,
        'nome'      => 'Corsa'
    ];

    // adicionando mais valores ao array
    $carro['airbag'] = false;
    $carro['som'] = 'Pioner 2000';

    // para exibir o valor no index basta acessar da seguinte forma:
    echo $carro['cor']; // retorno: Branco

    // Array multidimensionais
    $carros = [
        'chevrolet' => [
            'nome' => 'Corsa',
            'motor' => 1.4,
            'cor' => 'preto'
        ],
        'Ford' => [
            'nome' => 'Ka',
            'motor' => 1.0,
            'cor' => 'branco'
        ]
    ];
    // para exibir os valores abaixo:
    echo $carros['ford']['nome'];

    // criando array com compact
    $nome = 'Rafael';
    $idade = 24;
    $sexo = 'Masculino';

    $newArray = compact('nome', 'idade', 'sexo');
    var_dump($newArray);

    // verificar se a variavel é um array
    is_array($newArray); // true

    // Verificar se existe algum valor procurado dentro do valor
    var_dump(in_array('Rafael', $newArray));

    // Função para retornar as chaves do array
    var_dump(array_keys($carros));

    //Função para retornar apenas os valores do array, sem chave
    var_dump(array_values($carros));

    // Função count retorna a quantidade de registro no array
    var_dump(count($carros));

    // Juntar array
    $mergeArray = array_merge($carro, $carros);

    // REmovendo o ultimo item do array
    var_dump(array_pop($nomeDeCarros));

    // Removendo a primeiro item do array
    var_dump(array_shift($nomeDeCarros));

    // removendo atraves de um index, essa mesma função pode apagar uma variavel
    unset($nomeDeCarros[1]);

    // Adicionando novos valores ao array 
    array_push($nomeDeCarros, 'Ford KA +');

    // Adicionar um valor no inicio do array
    array_unshift($nomeDeCarros, 'Fiat Uno');

    // Organizar o array de forma decrescente os valores
    arsort($nomeDeCarros);

    // organizar de forma apenas os valores crescente
    asort($nomeDeCarros);

    // organiza de forma crescente os valores e o index
    sort($nomeDeCarros);

    // retornar apenas o ultimo valor de um array
    $idades = [12, 16, 18, 20, 27, 50, 54, 80];

    echo end($idades);

    // filtrar valores em um array
    $filtroDeIdades = array_filter($idades, function($idade){
        return $idade > 18;
    });

    // tranformando um array todo com map
    $transformarArray = array_map($nomeDeCarros, function($nome){
        return strtoupper($nome);
    }, $transformarArray);