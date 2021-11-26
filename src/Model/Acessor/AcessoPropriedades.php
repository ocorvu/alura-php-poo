<?php

namespace Alura\Banco\Model\Acessor;

trait AcessoPropriedades {

    public function __get(string $nomeAtributo){

        $metodo = 'recupera' . ucfirst($nomeAtributo);

        return $this->$metodo();
    }
}