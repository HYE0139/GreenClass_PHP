<?php

    //2~9 의 숫자를 랜덤하게 출력하는데 그에 맞게 구구단도 함께 출력
    $dan = rand(2, 9);

    for ($i=1; $i<=9; $i++){
        echo "$dan X $i =" .($dan*$i)."<br/>";

        /*
            $result = $dan * $i;
            echo "$dan X $i = $result <br>";
        */
    }

?>