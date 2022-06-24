<?php
  $numbers = array(10, 20, 30, 40, 50);

  print $numbers . "<br>";
  print_r ($numbers); // array에 속한 요소들을 출력한다.개행은 안됨.
  echo "<br>";

  array_push($numbers, 60, 100, 200); // 요소 추가
  print_r ($numbers);
  print "<br>";

?>