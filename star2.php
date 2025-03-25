<?php
    for($a = 1; $a <= 10; $a++){
        for($b = 9; $b >= $a; $b--){
            echo "&nbsp;&nbsp;"; // &nbsp : 브라우저에서 빈칸 1개
        }
        for($c = 1; $c <= $a; $c++){
            echo "*";
        }
        echo "<br>";
    }
?>