<?php
//1
    $makanan = [
        "Indomie Goreng", 
        "Indomie Rebus", 
        "Indomie Sedap",
        "Indomie Rendang",
        "Indomie Sarimi"
    ];
    //2 
    for($i=0;$i<count($makanan);$i+=2):
        echo "[$i]".$makanan[$i]."<br>";
    endfor;
    echo "<br>";
    //3
    foreach($makanan as $pakan):
        echo $pakan."<br>";
    endforeach;

?>