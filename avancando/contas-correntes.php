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

// echo $conta1['titular'];
$contaCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contaCorrentes); $i++) {
  // echo titular
  echo $contaCorrentes[$i]['titular'] . PHP_EOL;
}
