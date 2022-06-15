<?php
    // 구구단 출력
    for ($i=2; $i<=9; $i++){

        if($i>2){print "------------------<br>";}
            for($j=1; $j<=9; $j++){
                print "$i X $j = " .($i*$j). "<br>";
            }
    }

        echo "<br>";

     
    for ($i=2; $i<=9; $i++){
        if($i>2){print "------------------<br>";}
            for($dan=2; $dan<10; $dan++){
                $result = $i*$dan;
                echo "$i X $dan = $result <br>";
            }
        }
?>