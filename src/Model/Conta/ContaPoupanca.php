<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Conta\Conta;

class ContaPoupanca extends Conta {

    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}