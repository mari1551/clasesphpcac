<?php
    echo "Clase 31: Aplicando POO.<br>";
    class cuentabancaria{
        private $titular;
        private $num_cuenta;
        private $tipo;
        private $saldo;
    
        public function __construct($titular,$num_cuenta,$tipo,$saldo){
            $this->titular=$titular;
            $this->num_cuenta=$num_cuenta;
            $this->tipo=$tipo;
            $this->saldo=$saldo;
        }

        public function getTitular(){
            return $this->titular;
        }
        public function getNumero(){
            return $this->num_cuenta;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function getSaldo(){
            return $this->saldo;
        }
        public function depositar($saldo){
            if($saldo>0){
                $this->saldo=$this->saldo+$saldo;
                echo "<br>Monto depositado en la cuenta No ".$this->num_cuenta.": ".$saldo."<br>";
            }
            else{
                echo "<br>Se debe depositar un monto superior<br>";
            }
        }

        public function extraer($monto){
            if($this->saldo>=$monto){
                $this->saldo=$this->saldo-$monto;
                echo "<br>Monto extraido de la cuenta No ".$this->num_cuenta.": ".$monto."<br>";
            }
            else{
                echo "<br>Saldo insuficiente<br>";
            }
        }

        public function versaldo(){
            echo "<br>El saldo actual de la cuenta numero ".$this->num_cuenta." es: ".$this->saldo."<br>";
        }
    }

    $cuenta1=new cuentabancaria("Mariana Delgado", "0000001", "Cuenta Corriente",15000);
    $cuenta1->versaldo();

    $cuenta2=new cuentabancaria("Carla Thompson", "0000002", "Ahorro",50000);
    $cuenta2->versaldo();

    $cuenta3=new cuentabancaria("Alejandra Perez", "0000003", "Corriente",5000);
    $cuenta4=new cuentabancaria("Nicole Lugo", "0000004", "Moneda Extranjera",1000);
    $cuenta5=new cuentabancaria("Sebastian Rodriguez", "0000005", "Corriente",23000);

    $cuenta3->depositar(10000);
    $cuenta3->versaldo();
    $cuenta4->extraer(300);
    $cuenta4->versaldo();
    $cuenta5->extraer(500000);


    
?>