<?php

// array associativo
$conta1 = [
  'titular' => 'Vinicius',
  'saldo' => 1000
];

$conta2 = [
  'titular' => 'Maria',
  'saldo' => 10000
];

$conta3 = [
  'titular' => 'Alberto',
  'saldo' => 300
];


$contaCorrentes = [
  1321432423 => $conta1,
  1321432424 => $conta2,
  1321432463 => $conta3
];
// $cpf como indice/key
foreach ($contaCorrentes as $cpf => $conta) {
  echo $cpf;
  echo $conta['titular'] . PHP_EOL;
}
