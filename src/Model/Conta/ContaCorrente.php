<?php 

namespace Alura\Banco\Model\Conta;

class ContaCorrente extends Conta {

    public function tranferir(Conta $contaDestino, float $valorATransferir): void
    {
        if ($valorATransferir > $this->recuperarSaldo()){
            echo "Saldo insuficiente <br>";
        } else {
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);

            printf("Transferência no valor de R$ %.2f realizada com sucesso para %s. <br>", $valorATransferir, $contaDestino->recuperaNomeTitular());
        }
    }

    protected function percentualTarifa(): float
    {
        return 0.05;
    }
}