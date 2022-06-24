<?php

  $snum = 4;
  $enum = 10;
  print_num_from_to($snum, $enum);

  //[4, 5, 6, 7, 8, 9, 10] 출력
  // 만약 enum값이 더 작으면 "종료값이 더 작을 수 없습니다." 출력

  
  function print_num_from_to($snum, $enum)
  { echo " [ ";
    if($snum>$enum){
      echo "종료값이 더 작을 수 없습니다.";//오류를 먼저 설정
      return;//함수가 나타나면 다음 함수가 적용되지 않도록
    }
    
    

    for($i=$snum; $i<=$enum; $i++)
    { 
      echo $i;
      if($i<$enum){echo ",";}
    }

    echo " ] ";
  }
  
?>