<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Pessoa\{Pessoa, CPF, Endereco};

abstract class Funcionario extends Pessoa {

    protected $cargo;
    protected $salario;

    public function __construct(string $nome, CPF $cpf, Endereco $endereco)
    {
        parent::__construct($nome, $cpf, $endereco);
        $this->cargo = 'desenvolder';
        $this->salario = 1000;
    }

    public function recuperaCargo(){
        return $this->cargo;
    }

    public function recuperaSalario(){
        return $this->salario;
    }

    abstract public function calculaBonificacao();
}