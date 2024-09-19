<?php
    require_once "Conta.class.php";
    require_once "Corrente.class.php";
    require_once "Poupanca.class.php";

    //Corrente
    $corrente = new Corrente(1000.00, "123-2", "12345-6",
    "Algenor Rubulos", 5000.00);

    echo "{$corrente->getTitular()}<br>";
    $corrente->retirar(3000);
    echo "Saldo restante: R$ {$corrente->getSaldo()}<br><br>";

    //Poupanca
    $poupanca = new Poupanca (10, "432-1", "6543-2",
    "Samantha Tamanco", 10000.00);

    $poupanca->retirar(1000);
    echo ", saldo atual: R$ {$poupanca->getSaldo()}";


    //$conta = new Conta();
    //echo "<pre>";
    //var_dump($corrente);
    //echo "</pre>";

?>