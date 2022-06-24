<?php
  $star = rand(3, 10);
  print "star : $star <br>";
  print_star2($star);

  // 랜덤으로 출력되는 숫자와 동일하게 *이  출력되도록
  
  function print_star($star)
  {
    for($i=0; $i<$star; $i++){
      echo "*";
    }
  }

  function print_star2($star){
    $sum= "";
    for($i=0; $i<$star; $i++){
        $sum = $sum. "@";
        print "{$sum}<br>";
    }
  }
  
?>