<?php
    

  /*
  재귀함수를 사용하지 않은 방법
   function factorial($num)
   {
     $result = 1;
     for($i=1; $i<=$num; $i++)
     {
       $result *= $i;
     }
     return $result;
   }
   */


    //재귀함수
    // 내가 함수라면 내가 나를 호출하는 것.
   
    function factorial($num)
   {
     if($num === 1) {return 1;}//종료지점을 알려주는 것
     return $num * factorial($num -1);
   }

   //절대값 만들기
   function my_abs($val)
   {
    if($val < 0) {return -1 * $val;}
    return $val;

    // return $val < 0 ? -$val :$val;
   }
   

   print "my_abs(-3) : " . my_abs(-3) . "<br>";
   print "my_abs(3) : " . my_abs(3) . "<br>";

    $num = 3;
    $result = factorial($num); // 3 X 2 X 1

    echo "${num}! = $result <br>";

?>