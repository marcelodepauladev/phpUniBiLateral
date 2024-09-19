<?php 
    // Uma classe final, não pode ter filhos
    final class Poupanca extends Conta{ 
        public function __construct(
            private int $aniversario = 0,
            $agencia,
            $numero,
            $titular,
            $saldo           
            )
        {
            parent:: __construct($agencia, $numero, $titular, $saldo);
        }

        public function getAniversario(){
            return $this->aniversario;
        }

        
        public function setAniversario($aniversario){
            $this->aniversario = $aniversario;
        }

        public function retirar($valor){
            $data_atual = explode('/', date("d/m/y"));//explode() pega a string e coloca em um array

            if($this->aniversario > $data_atual[0]){//Começo do if
                echo "Você perderá os rendimentos";
            }//Fim do if

            if ($this->saldo >= $valor) {//Começo do if
                    parent :: retirar($valor);
            }else{
                echo "Saldo insuficiente na Poupança";
            }//Fim do if
        }
    }

?>