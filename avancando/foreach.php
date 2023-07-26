<?php

$contaCorrentes = [
  1321432423 => [
    'titular' => 'Vinicius',
    'saldo' => 1000
  ],
  1321432424 => [
    'titular' => 'Maria',
    'saldo' => 10000
  ],
  1321432463 => [
    'titular' => 'Alberto',
    'saldo' => 300
  ],
];

foreach ($contaCorrentes as $cpf => $conta) {
  echo $cpf;
  echo $conta['titular'] . PHP_EOL;
}
