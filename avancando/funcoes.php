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
