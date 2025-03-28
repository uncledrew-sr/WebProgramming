<?php
    echo "배열의 값을 표시하시오.<br>";
    $data = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);

    foreach($data as $A){ // $data에 있는 값을 하나씩 꺼내서 A라는 변수에 적용
        print "변수 A의 값은 현재 ${A}입니다.<br>";
    }
?>