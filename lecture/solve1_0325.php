<?php
    $sum = 0;
    for($dice1 = 1; $dice1 <= 6; $dice1++){
        for($dice2 = 6; $dice2 >= 1; $dice2--){
            $sum = $dice1 + $dice2;
            if($sum == 7){
                echo "$dice1 + $dice2 = $sum <br>";
            }
        }
    }
?>