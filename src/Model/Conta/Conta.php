<?php
namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Conta\Titular;

abstract class Conta {
    private $titular;
    private float $saldo;
    private static int $numeroDeContas = 0;
    private static int $codigoDoBanco = 777;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar): void
    {
        $taxaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $taxaSaque;

        if ($valorSaque > $this->recuperarSaldo()){
            echo "Saldo insuficiente. *Existe uma taxa de 5% para o saque. <br>";
        } else {
            $saldo = $this->recuperarSaldo() - $valorSaque;
            $this->defineSaldo($saldo);
            printf("Saque no valor de R$ %.2f realizado. Taxa de R$ %.2f cobrada.<br>", $valorASacar, $taxaSaque);
        }
    }

    public function depositar(float $valorADepositar): void
    {
        if($valorADepositar < 0){
            echo "Valor de depósito inválido. <br>";
        } else {
            $saldo = $this->recuperarSaldo() + $valorADepositar;
            $this->defineSaldo($saldo);
        }
    }


    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public function recuperaEnderecoTitular(): object
    {
        return $this->titular->recuperaEndereco();
    }

    public function defineSaldo(float $valor)
    {
        $this->saldo = $valor;
    }

    public static function recuperaNumeroDeContas(): float
    {
        return Conta::$numeroDeContas;
    }
    abstract protected function percentualTarifa();

    
}

