<?php
  $dan = rand(2, 9);

  print_gugudan($dan);
  
  // 함수를 이용하여 구구단 출력
  /* 
  function print_gugudan($dan)
  {
    echo "${dan}단 <br>";

    for($i=1; $i<10; $i++){

      $result = $dan * $i;
      print " $dan X $i = $result <br>";
    }
  }

  echo "<br><br>";
*/

  print_gugudan_from_to(2, 6);

  function print_gugudan_from_to($sdan, $ednn)
  {
    for($dan = $sdan; $dan<=$edan; $dan++){
      for($i=1; $i<10; $i++){
        print "$dan X $i = " .($dan*$i). "<br>"; 
      }
      print "<br>";
    }
        
  }

?>