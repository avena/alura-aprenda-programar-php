<?php

$contaCorrentes = [
  '132.143.242-13' => [
    'titular' => 'Vinicius',
    'saldo' => 1000
  ],
  '132.143.242-14' => [
    'titular' => 'Maria',
    'saldo' => 10000
  ],
  '132.143.246-13' => [
    'titular' => 'Alberto',
    'saldo' => 300
  ],
];

$contaCorrentes['154.143.246-13'] = [
  'titular' => 'Claudia',
  'saldo' => 400
];

foreach ($contaCorrentes as $cpf => $conta) {
  echo $cpf . ' ' . $conta['titular'] . PHP_EOL;
}
