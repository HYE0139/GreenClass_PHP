<?php
  function A()
  {
    global $n; //$n 을 전역변수로 선언
    print $n . "<br>";
  }

  function B ()
  {
    $n = "B"; // 이 함수 안에서 $n은 B가 되어야하지만
    A();// A(); 함수에서 $n을 전역변수로 선언했기에 해당 변수가 적용됨
  }

  $n = "M"; //전역변수
  A(); // M
  B(); // M
?>