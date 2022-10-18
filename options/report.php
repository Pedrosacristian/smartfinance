<?php

print_r('----------------------------------------------'.PHP_EOL);
print_r('                   Relatorio                  '.PHP_EOL);
print_r('----------------------------------------------'.PHP_EOL);
print_r('  Tipo      Valor      Data      Descrição    '.PHP_EOL);

//buscando receitas
$fileRecipes = __DIR__.'/../database/recipes.csv';

$recipes = readFileToArray ('Recipes',   $fileRecipes);

//buscando despesas
$fileExpenses = __DIR__.'/../database/expenses.csv';

$expenses = readFileToArray ('Expense',   $fileExpenses);

//juntando despesas e receitas
$lines = array_merge($recipes, $espenses);

//percorrendo o array de linhas, formatando e imprimindo os dados
$total = 0;

foreach ($lines as $row) {
    if ($row['type'] == 'Recipes') {
      $total = $total + $row['value'];
    }
    if ($row['type'] == 'Expense') {
        $total = $total + $row['value'];
      }
      $value = str_pad($row['value'], 10, ' ', STR_PAD_RIGHT);

      $day = str_pad($row['day'], 2, '0', STR_PAD_LEFT);
      $month = str_pad($row['month'], 2, '0', STR_PAD_LEFT);
      $date = str_pad($row['date'], 10, ' ', STR_PAD_RIGHT);

      print_r('/ '.$row['type'].'  / '.$value.' / ' .$date.' / '.$description.' /'.PHP_EOL);
}

$totalformated = str_pad($total, 51, ' ', STR_PAD_RIGHT);

print_r('Total: ' .$totalformated. ' / ' . PHP_EOL);
    



