<?php

namespace Alura\Banco\Service;

use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Model\Auth\Autenticavel;

class AutenticarController
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha){
        if ($autenticavel->podeAutenticar($senha)){
            echo "Usuário logado com sucesso. <br>";
        } else {
            echo "Senha incorreta. <br>";
        }
    }
}
