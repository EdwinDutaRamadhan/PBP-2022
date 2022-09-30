<?php

    // for($i = 100; $i >= 75; $i--){
    //     echo $i.'<br>';
    // }
    // $i = 100;
    // while($i>=75){
    //     echo $i.'<br>';
    //     $i--;
    // }
    $i = 100;
    do{
        if($i % 2 == 1){
            echo $i.'<br>';
        }
        $i--;
    }while($i>=75);
    