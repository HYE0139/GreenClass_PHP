<?php
    $star = rand(3, 10);
    /*
        만약에 star 값이 3이면
        *
        **
        ***
    */
    

    print $star."<br>";
    for($z=1; $z<=$star; $z++){
        for($i=1; $i<=$z; $i++){
            echo "*";
        }
        echo "<br>";
    }
    
    $sum = "";
    for ($z=0; $z<$star; $z++)
    { 
        $sum = $sum. "@";
        print "{$sum}<br>";
    }

    /*
        $sum을 반복문으로 만드는 것
        $sum은 값이 없는데 @라는 값을 넣어 반복할 때마다 증가하게 만들었다.

    */
    

    

?>