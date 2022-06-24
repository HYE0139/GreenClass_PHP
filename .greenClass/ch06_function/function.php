<?php
  // 객체 안에 함수가 있으면 method[메소드]라고 부른다.

  // 객체 안이 아니라면 function[함수]라고 부른다.
  // 함수 function

  $result = sum(10, 11);

  print "result : $result <br>";
  print "result :" .sum(30, 30) . "<br>";

  minus (35, 12);
  minus (10, 2);//함수 호출

  function sum($n1, $n2)
  {           
    return $n1 + $n2;
    // return : 호출한 함수를 다시 원래 자리로 되돌린다.
  }

  function minus($n1, $n2)
  {
    print "minus : " . ($n1- $n2) . "<br>";
  }
?>