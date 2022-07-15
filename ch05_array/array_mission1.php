<?php
    /*
        합계 : ?
        평균 : ?
    */
    $score_arr = array(100, 90, 33, 87, 65);

    
    $sum = 0;
    $len = count($score_arr); //$score_arr 에 속한 값 갯수 = 5
    for($i=0; $i<$len; $i++) //$i를 lne(score=5) 미만 만큼 반복한다.
    {
        $sum += $score_arr[$i]; // $score_arr[] :  속한 값들을 호출한다. 
        //$i는 0,1,2,3,4 만큼 반복하며 $score_arr의 인덱스 번호가 된다.
        // 즉, array(100, 90, 33, 87, 65) 안의 숫자를 다 부르고 반복할때마다 $sum에 더해진다.
    }
    $avg = $sum / $len; // 값 총합/5 값을 새로 선언!

    print "합계: $sum <br>";
    print "평균: $avg <br>";
    
   $num_arr = array(20, 45, 35, 22, 100);

   $sum = 0;
   $len = count($num_arr);
   for($i=0; $i<$len; $i++){
     $sum += $num_arr[$i];
   }

   $avg2 = $sum /$len;

   print " $sum <br>";
   print $avg2;
    
?>