<?php

print_r(PHP_EOL);

print_r('--------------------------'. PHP_EOL);
print_r('BEM VINDO AO SMART FINANCE'. PHP_EOL);
print_r('--------------------------'. PHP_EOL);

$exit = false;

while ($exit == false) {

    
    print_r('Oque voce desejar fazer hoje?' . PHP_EOL);

    print_r(PHP_EOL);
    print_r(PHP_EOL);

    print_r('1) Cadastrar Receita'. PHP_EOL);
    print_r('2) Cadastrar despesa'. PHP_EOL);
    print_r('3) Ver relatório de gastos'. PHP_EOL);
    print_r('4) SAIR.'. PHP_EOL);

    print_r(PHP_EOL);

    $option = stream_get_line(STDIN, 1024, PHP_EOL);



    switch ($option) {
        case 1:
            include 'options/create-recipe.php';
            break;
        case 2:
            include 'options/create-expense.php';
            break;
        case 3: 
            include 'options/report.php';
        case 4:
           $exit = true;
             break;
        default: 
        print_r('opcao invalida'.PHP_EOL);
             break;

    };
}