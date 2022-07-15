<?php

  function print_sum (...$vals){// ... < 가변함수
    foreach($vals as $val)
    {
      $sum += $val;
    }

    echo "sum : $sum <br>";
  }

  // 한 변수에 여러 값이 존재할 경우 {...$변수명} : 가변함수 사용, 해당 변수들이 배열로 들어간다.
  print_sum(1, 2);
  print_sum(1, 2, 3);
  print_sum(1, 2, 3, 4);
?>