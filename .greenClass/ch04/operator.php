<?php

    $num = 12;
    $odd_even = "홀";

    if($num%2 === 0){//기본값을 홀로 선언하고 if문을 활용해 다른 경우를 만든것.
        $odd_even = "짝";
    }

    print "${num}는(은) ${odd_even}수입니다.";

    print "<br>";
    print "!---------------<br>";

    if(($num%2)===0){ // %num을 2로 나눈 나머지가 0과 같으면 true 다르면 false
        print "${num}은(는) 짝수입니다.";
    }
    else
    {
        print "${num}은(는) 홀수입니다.";
    }

    print "<br>";
    print "!---------------<br>";

    

?>