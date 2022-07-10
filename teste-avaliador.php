<?php

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;

require 'vendor/autoload.php';

$leilao = new Leilao('Gol 94');

$maria = new Usuario('Maria');
$jose = new Usuario('José');

$leilao->recebeLance(new Lance($jose, 2500));
$leilao->recebeLance(new Lance($maria, 3900));

$leiloeiro = new Avaliador();
$leiloeiro->avalia($leilao);

$maiorValor = $leiloeiro->getMaiorValor();

var_dump($maiorValor);