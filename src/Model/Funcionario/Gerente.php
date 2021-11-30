<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Auth\Autenticavel;
use Alura\Banco\Model\Funcionario\Funcionario;
use Alura\Banco\Model\Pessoa\{CPF, Titular, Endereco};

class Gerente extends Funcionario implements Autenticavel
{

    public function __construct(string $nome, CPF $cpf, Endereco $endereco)
    {
        parent::__construct($nome, $cpf, $endereco);
        $this->cargo = 'gerente';
        $this->salario = 3000;
    }
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario();
    }

    public function podeAutenticar($senha): bool
     {
        return $senha === '1234';
    }
}
