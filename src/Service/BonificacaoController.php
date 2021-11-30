<?php

namespace Alura\Banco\Service;

use Alura\Banco\Model\Funcionario\{Funcionario};

class BonificacaoController
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacao(Funcionario $funcionario): void
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }
    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}
