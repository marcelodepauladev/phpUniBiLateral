<?php 

class Conta
{
    public function __construct(
        protected string $agencia = "",
        protected string $numero = "",
        protected string $titular = "",
        protected float $saldo = 0.00
        ){}


//Agencia
public function getAgencia()
{
    return $this->agencia;
}
public function setAgencia($agencia)
{
   $this->agencia = $agencia;
}

//Numero
public function getNumero()
{
    return $this->numero;
}
public function setNumero($numero)
{
   $this->numero = $numero;
}

//Titular
public function getTitular()
{
    return $this->titular;
}
public function setTitular($titular)
{
   $this->titular = $titular;
}

//Saldo
public function getSaldo()
{
    return $this->saldo;
}
public function setSaldo($saldo)
{
   $this->saldo = $saldo;
}

//Retirar valor
public function retirar($valor)
{
    if($valor > 0){
        $this->saldo -= $valor;
    }
}

//Depositar valor
public function depositar($valor)
{
    $this->saldo += $valor;
}
}


?>