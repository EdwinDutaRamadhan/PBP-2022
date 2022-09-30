<?php
    $input1 = $_GET["input1"];
    $input2 = $_GET["input2"];
    $perkalian = $input1 * $input2;
    $pertambahan = $input1 + $input2;
    $pembagian = $input1 / $input2;
    $pengurangan = $input1 - $input2;

    echo"Hasil Pertambahan $input1 + $input2 : $pertambahan <br>";
    echo"Hasil Pengurangan $input1 - $input2 : $pengurangan <br>";
    echo"Hasil Perkalian $input1 x $input2 : $perkalian <br>";
    echo"Hasil Pembagian $input1 : $input2 : $pembagian <br>";

    echo"<a href='fe1.php'>Hitung lagi</a>";
    
?>
