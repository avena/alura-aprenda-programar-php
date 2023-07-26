<?php

function sacar($conta, $valorASacar)
{
  if ($valorASacar > $conta['saldo']) {
    exibeMensagem("Voce nao pode sacar este valor" . PHP_EOL);
  } else {
    $conta['saldo'] -= $valorASacar;
  }
  return $conta;
}

function adiciona2($x)
{
  return $x + 2;
}

$sete = adiciona2(5);
exibeMensagem($sete);

// exit();

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

$contaCorrentes['132.143.242-14'] = sacar($contaCorrentes['132.143.242-14'], 500);
$contaCorrentes['132.143.246-13'] = sacar($contaCorrentes['132.143.246-13'], 500);






foreach ($contaCorrentes as $cpf => $conta) {
  exibeMensagem($cpf . ' ' . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL);
}
