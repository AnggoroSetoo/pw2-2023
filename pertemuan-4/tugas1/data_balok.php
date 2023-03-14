<?php 

    require_once "class_balok.php";

    echo "Rumus Menghitung Balok";
    echo "<br>Luas = 2(pl + pt + lt)";
    echo "<br>Keliling = 4(p*l*t)";
    echo "<br>Volume = p*l*t";

    $balok1 = new Balok(4,6,8);
    $balok2 = new Balok(4,2,2);
    $balok3 = new Balok(2,10,4);
    $balok4 = new Balok(6,6,8);
 
    echo "<br><br/>Luas Balok 1 = " .$balok1->getLuas();
    echo "<br/>Keliling Balok 1 = " .$balok1->getKeliling();
    echo "<br/>Volume Balok 1 = " .$balok1->getVolume();
    
    echo "<br><br/>Luas Balok 2 = " .$balok2->getLuas();
    echo "<br/>Keliling Balok 2 = " .$balok2->getKeliling();
    echo "<br/>Volume Balok 2 = " .$balok2->getVolume();
    
    echo "<br><br/>Luas Balok 3 = " .$balok3->getLuas();
    echo "<br/>Keliling Balok 3 = " .$balok3->getKeliling();
    echo "<br/>Volume Balok 3 = " .$balok3->getVolume();
    
    echo "<br><br/>Luas Balok 4 = " .$balok4->getLuas();
    echo "<br/>Keliling Balok 4 = " .$balok4->getKeliling();
    echo "<br/>Volume Balok 4 = " .$balok4->getVolume();
?>