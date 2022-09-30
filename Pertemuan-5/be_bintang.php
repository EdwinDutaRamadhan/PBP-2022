<?php
$input = $_POST["nilai"];
$a = 1;

for($j=0; $j<$input; $j++){
    for($i=0;$i<$a; $i++){
        echo"*";
    }
    $a++;
    echo"<br>";
}