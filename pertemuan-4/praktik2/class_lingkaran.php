<?php
    class Lingkaran {
        private $jarijari;
        const PHI = 3.14;
        
        function __construct($r)
        {
            $this->jarijari = $r;
        }

        function getLuas()
        {
            $luas = self::PHI * pow($this->jarijari,2) ;
            return $luas;
        }
        
        function getKel()
        {
            $keliling =  2 * $this->jarijari * self::PHI;
            return $keliling;
        }
    }
?>