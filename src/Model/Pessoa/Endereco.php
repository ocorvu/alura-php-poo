<?php

namespace Alura\Banco\Model\Pessoa;

use Alura\Banco\Model\Acessor\AcessoPropriedades;

/**
 * @package Alura\Banco\Model\Pessoa
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */

final Class Endereco {

    use AcessoPropriedades;
    
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade(){
        return $this->cidade;
    }

    public function recuperaBairro(){
        return $this->bairro;
    }

    public function recuperaRua(){
        return $this->rua;
    }

    public function recuperaNumero(){
        return $this->numero;
    }

    public function __toString()
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

}