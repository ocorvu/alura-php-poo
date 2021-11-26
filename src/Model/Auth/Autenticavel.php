<?php

namespace Alura\Banco\Model\Auth;

interface Autenticavel
{
    public function podeAutenticar($senha);
    
}
