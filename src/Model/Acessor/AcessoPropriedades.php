<?php

namespace Alura\Banco\Model\Acessor;

trait AcessoPropriedades {

    public function __get(string $nomeAtributo): string
    {

        $metodo = 'recupera' . ucfirst($nomeAtributo);

        return $this->$metodo();
    }
}