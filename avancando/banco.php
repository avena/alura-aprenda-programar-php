<?php

// include nao lança erro, se nao achar o arquivo
//include 'funcoes.php';

// erro - nem executa o arquivo
//require 'funcoes.php';

// caso ja foi incluido, ele nao inclui novamente.
require_once 'funcoes.php';

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

titularComLetrasMaiusculas($contaCorrentes['132.143.242-13']);


foreach ($contaCorrentes as $cpf => $conta) {
  // list($titular, $saldo) = $conta; // nao funciona por procupa por index numerico, como indice 0

  list('titular' => $titular, 'saldo' => $saldo) = $conta;

  // versão mais enxuta
  ['titular' => $titular, 'saldo' => $saldo] = $conta;
  exibeMensagem("$cpf  $titular  $saldo");
  //exibeMensagem("$cpf  {$conta['titular']}  {$conta['saldo']}");
}
