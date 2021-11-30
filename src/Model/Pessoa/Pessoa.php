<?php

namespace Alura\Banco\Model\Pessoa;

use Alura\Banco\Model\Acessor\AcessoPropriedades;
use Alura\Banco\Model\Pessoa\{CPF, Endereco};

/**
 * @package Alura\Banco\Model\Pessoa
 * @property-read string $nome
 * @property-read CPF $cpf
 * @property-read Endereco $endereco
 */

abstract class Pessoa {

    use AcessoPropriedades;

    private $nome;
    private $cpf;
    private $endereco;

    public function __construct(string $nome, CPF $cpf, Endereco $endereco)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }
    
    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaEndereco(): object
    {
        return $this->endereco;
    }
    
    final private function validaNome(string $nome): void
    {
        if (mb_strlen($nome) < 3){
            echo "Nome inválido. <br>";
            exit();
        }
    }
}