<?php
    $matkul = $_GET["matkul"];
    if($matkul == "PBP"){
        $sks = 4;
    }else if($matkul == "Pl"){
        $sks = 3;
    }else{
        $sks = 2;
    }
    echo "<br> Jumlah SKS : ".$sks;
    echo"
    <script>
        alert('Berhasil mengambil mata kuliah $matkul SKS : $sks');
    </script>
    ";