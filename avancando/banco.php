<?php

function exibeMensagem($mensagem)
{
  echo $mensagem . PHP_EOL;
}


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

$contaCorrentes['132.143.242-14']['saldo'] -= 500;
if (500 > $contaCorrentes['132.143.246-13']['saldo']) {
  exibeMensagem("Voce nao pode sacar este valor" . PHP_EOL);
} else {
  $contaCorrentes['132.143.246-13']['saldo'] -= 500;
}


foreach ($contaCorrentes as $cpf => $conta) {
  exibeMensagem($cpf . ' ' . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL);
}
