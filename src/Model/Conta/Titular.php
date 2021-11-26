<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Auth\Autenticavel;
use Alura\Banco\Model\Pessoa\{Pessoa, CPF, Endereco};


class Titular extends Pessoa implements Autenticavel {


    public function __construct(string $nome, CPF $cpf, Endereco $endereco)
    {
        parent::__construct($nome, $cpf, $endereco);
    }

    public function podeAutenticar($senha) {
        return $senha === '1234';
    }

}