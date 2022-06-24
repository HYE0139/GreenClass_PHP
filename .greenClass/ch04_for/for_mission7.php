<?php
    $star = rand(1,10);

    print "star : $star <br>";
    for($i=0; $i<$star; $i++){
        print "*";
        //$star값 전까지 반복한다.
        // $i < $star 인 이유 > $i=0, 0까지 포함하여 반복하기 때문.
    }
?>