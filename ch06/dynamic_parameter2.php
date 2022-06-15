<?php

  function multi()
  {
    print "[0] : " . func_get_args()[1] . "<br>";
  }

  multi(2);
  multi(5, 10);

  /*

  함수 호출 시 몇 개의 파라미터를 할당할지 모르는 경우에 사용
  Argument : 전달인자, 인자 = 함수와 메서드의 입력 값 = 실제로 함수를 호출할 때 쓰는 명
    func_num_args() : 인자수 리턴
    func_get_arg()  : 인자값 가져올 때 사용
    func_get_args() : 인자배열로 받음
  */

    function print_sum()
    {
      print "func_num_agrs() : " . func_num_args() . "<br>";
      print "func_get_agr(0) : " . func_get_arg(0) . "<br>";
      print "func_get_arg(1) : " . func_get_arg(1) . "<br>";
    }
    // print_sum(10, 20);
    // print_sum(20, 30);

    function sum ()
    {
      print "count : " . count(func_get_args()) . "<br>";
      $sum = 0;
      foreach(func_get_args() as $val)
      { // 인자배열을 가져와 $val 로 선언 후 나열한 뒤 sum에 더하여 값을 출력했다.
        $sum += $val;
      }
      return $sum;
    }

    print "sum : " .sum(1, 2) . "<br>";
    print " 썸 : " . sum(1, 2, 10) . "<br>";
?>