<?php
    $score = array(
        array(88, 98, 96, 77, 63),
        array(86, 77, 66, 86, 93),
        array(74, 83, 95, 86, 97));

    print("|국어|영어|수학|사회|과학<br>===================<br>");
    for($i=0; $i<3; $i++){ // 행
        for($j=0; $j<5; $j++){ // 열
            echo "|&nbsp;&nbsp;".$score[$i][$j]."&nbsp;&nbsp;";
        }
        echo "<br>";
    }
    print("===================<br>");

    // 학생 3명의 성적 합계와 평균
    for($i=0; $i<3; $i++){ // 행
        $sum = 0;

        for($j=0; $j<5; $j++){ // 열
            $sum = $sum + $score[$i][$j];
        }
        $avg = $sum / 5;
        $student_num = $i + 1;
        echo "$student_num 번 학생의 점수 => 합계 : $sum, 평균 : $avg <br>";
    }
?>