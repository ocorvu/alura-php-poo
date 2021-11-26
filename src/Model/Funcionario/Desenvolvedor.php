<?php

namespace Alura\Banco\Model\Funcionario;
use Alura\Banco\Model\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function calculaBonificacao()
    {
        return $this->recuperaSalario() * 0.1;
    }
}
