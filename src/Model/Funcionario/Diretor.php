<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Auth\Autenticavel;
use Alura\Banco\Model\Funcionario\{Funcionario};
use Alura\Banco\Model\Pessoa\{CPF, Endereco};

class Diretor extends Funcionario implements Autenticavel
{

    public function __construct(string $nome, CPF $cpf, Endereco $endereco)
    {
        parent::__construct($nome, $cpf, $endereco);
        $this->cargo = 'diretor';
        $this->salario = 6000;
    }

    public function calculaBonificacao(): float
    {
        return $this->salario * 2;
    }

    public function podeAutenticar($senha): bool
    {
        return $senha === '1234';
    }
}
