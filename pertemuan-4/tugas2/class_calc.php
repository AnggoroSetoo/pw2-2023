<?php

    class Calculator {
        public $angka1;
        public $angka2;

        public function __construct($a1,$a2) {
            $this->angka1 = $a1;
            $this->angka2 = $a2;
        }

        public function pertambahan(){
            return $this->angka1 + $this->angka2;
        }

        public function pengurangan(){
            return $this->angka1 - $this->angka2;
        }

        public function pembagian(){
            return $this->angka1 / $this->angka2;
        }

        public function perkalian(){
            return $this->angka1 * $this->angka2;
        }
    }

    $calculator = new Calculator(12, 4);

    echo "Pertambahan = " .$calculator->pertambahan();
    echo "<br/>Pengurangan = " .$calculator->pengurangan();
    echo "<br/>Pembagian = " .$calculator->pembagian();
    echo "<br/>Perkalian = " .$calculator->perkalian();
?>