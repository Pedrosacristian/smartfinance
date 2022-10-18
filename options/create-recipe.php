<?php 

print_r(PHP_EOL);

print_r('--------------------------------------'. PHP_EOL);
print_r(' Opção esscolhida: Cadastrar receita' . PHP_EOL);
print_r('--------------------------------------'. PHP_EOL);

print_r(PHP_EOL);

print_r('Informe o valor, data e descricao da receita'. PHP_EOL);

$value = readFloat('Valor recebido: ');
$date = readDate('Informe a data: ');
$description = readString('Informe a descrição: ');

$line = '"'. $description. '",'. $value. ',' .$date.PHP_EOL;
$fileRecipes = __DIR__.'/../database/recipes.csv';
file_put_contents($fileRecipes, $line, FILE_APPEND);

print_r(PHP_EOL);
print_r('### Receita cadastrada com sucesso ###'.PHP_EOL);