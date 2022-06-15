<?php
  function make_ten()
  {
    $i = $i + 10; // 함수 안에 있는 것은 지역변수
    echo "i : $i <br>";
  }

  $i = 0; // 함수 밖에 있는 것을 전역변수, 지역변수와는 별개다.
  make_ten();
  print "i : $i <br>";
  
  function make_ten2()
  {
    global $z; // 해당 변수명을 전부 전역변수로 만들어줌
    $z = $z + 10;
  }

  $z = 5;
  make_ten2();
  print "z : $z <br>"; // $z 합이 출력됨
?>