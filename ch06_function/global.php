<?php

  function counts()
  {//전역변수 $i를 1씩 증가시키는 함수
    global $i;
    $i++; //증감연산자
  }


  $i = 0;
  while($i < 10)
  {
    counts(); // 함수 호출
    print $i. "<br>";
  }

?>