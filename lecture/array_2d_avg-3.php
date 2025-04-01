<?php
    $score = array(
        array(88, 98, 96, 77, 63),
        array(86, 77, 66, 86, 93),
        array(74, 83, 95, 86, 97));
    $name = array("조하나", "김이슬", "유바다");
    $sum = array(0, 0, 0);
    $avg = array(0, 0, 0);

    for($i=0; $i<3; $i++){
        for($j=0; $j<5; $j++){
            $sum[$i] = $sum[$i] + $score[$i][$j];
        }
        $avg[$i] = $sum[$i]/5;
    }

    echo "&nbsp;&nbsp;&nbsp; 성명 국어 영어 수학 사회 과학 총점 평균<br>";
    echo "==================================<br>";
    for($i=0; $i<3; $i++){
        echo $name[$i];
        for($j=0; $j<5; $j++){
            echo "&nbsp;&nbsp;&nbsp;&nbsp;".$score[$i][$j]."&nbsp;";
        }
        echo "&nbsp;&nbsp;".$sum[$i]."&nbsp;&nbsp;".$avg[$i]."<br>";
    }
    echo "==================================<br>";
    
?>