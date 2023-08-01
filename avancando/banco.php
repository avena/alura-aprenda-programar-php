<?php

function sacar(array $conta, float $valorASacar): array
{
  if ($valorASacar > $conta['saldo']) {
    exibeMensagem("Voce nao pode sacar este valor" . PHP_EOL);
  } else {
    $conta['saldo'] -= $valorASacar;
  }
  return $conta;
}


function depositar(array $conta, float $valorADepositar): array
{
  if ($valorADepositar > 0) {
    $conta['saldo'] += $valorADepositar;
  } else {
    exibeMensagem('Depositos precisam ser positivos');
  }

  return $conta;
}

function adiciona2($x)
{
  return $x + 2;
}

$sete = adiciona2(5);
exibeMensagem($sete);


function exibeMensagem(string $mensagem): void
{
  echo $mensagem . PHP_EOL;
}


$contaCorrentes = [
  '132.143.242-13' => [
    'titular' => 'Vinicius',
    'saldo' => 100
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


$contaCorrentes['132.143.242-13'] = depositar(
  $contaCorrentes['132.143.242-13'],
  900
);

$contaCorrentes['132.143.242-13'] = depositar(
  $contaCorrentes['132.143.242-13'],
  -1200
);



foreach ($contaCorrentes as $cpf => $conta) {
  exibeMensagem("$cpf  $conta[titular]  $conta[saldo]");
}
