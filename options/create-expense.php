<?php

print_r('--------------------------'. PHP_EOL);
print_r(' CADASTRAMENTO DE DESPESA'. PHP_EOL);
print_r('--------------------------'. PHP_EOL);

print_r(PHP_EOL);

print_r('Informe o valor, a data e a descrição da despesa.' . PHP_EOL);

$value = readFloat('Valor gasto: ');

$date = readDate('Informe a data: ');

$description = readString('Informe a descrição: ');

$line =  ' " ' . $description. '"'.$value.','.$date . PHP_EOL;

$FileExpenses = __DIR__.'/../database/espenses.csv';

file_put_contents ($fileExpenses, $line, FILE_APPEND);

print_r(PHP_EOL);

print_r(" # # DESPESA CADASTRADA COM SUCESSO! # # " . PHP_EOL);
