<?php
    require_once "class_lingkaran.php";

    echo "Nilai PHI = " . Lingkaran::PHI;
    $lingkar1 = new Lingkaran ( 10 );
    $lingkar2 = new Lingkaran ( 15 );

    echo "<br/>Luas Lingkaran 1 = " .$lingkar1->getLuas();
    echo "<br/>Luas Lingkaran 2 = " .$lingkar2->getLuas();

    echo "<br/>Keliling Lingkaran 1 = " . $lingkar1->getKel();
    echo "<br/>Keliling Lingkaran 2 = " . $lingkar2->getKel();
?>