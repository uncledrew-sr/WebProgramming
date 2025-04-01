<?php
    $scores = array(87, 76, 98, 87, 87, 93, 79, 85, 88, 63, 74, 80, 95);
    $sum = 0;

    for($a = 0; $a < 13; $a++){
        $sum = $sum + $scores[$a];
    }

    $avg = $sum / 20;

    echo("합계 : $sum, 평균 : $avg");
?>
