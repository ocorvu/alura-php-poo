<?php

namespace Alura\Banco\Service;

use Alura\Banco\Model\Funcionario\{Funcionario};

class BonificacaoController
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacao(Funcionario $funcionario){
        
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(){
        return $this->totalBonificacoes;
    }

}
