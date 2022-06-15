<?php
    $star = rand(2, 10);

    print $star."<br>";
    for($i=0; $i<$star; $i++){
         for($j=0; $j<$star; $j++){
             echo "*";
         }
         echo "<br>";
        }
?>