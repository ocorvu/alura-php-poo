<?php

spl_autoload_register(function(string $nomeCompletoDaClasse)
{
    
    $caminhoDoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoDoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoDoArquivo);
    $caminhoDoArquivo .= '.php';

    if (file_exists($caminhoDoArquivo)){
        require_once $caminhoDoArquivo;
    }
});