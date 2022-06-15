<?php
    /* 
        [1, 2, 3, 4, 5, 6, 7] 출력하기
    */

    $end_val = 7; //끝내는 숫자를 지정 - 나중에 숫자 수정이 쉬워짐.
   
    echo "[";// 숫자를 찍고 콤마를 추가하는 소스 
    for($i=1; $i<=$end_val; $i++){

        print $i;

        if($i< $end_val){print ", ";}
    }
    echo "]";

    echo "<br>";

    //콤마 찍을 자리를 먼저 지정하는 소스
    for($i=1; $i<=$end_val; $i++){
        if($i>1){ print ", "; }
        print $i;
    }
   



?>