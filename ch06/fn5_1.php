<?php
  $snum = 10;
  $enum = 5;
  print_num_from_to($snum, $enum);
  // [4, 5, 6, 7, 8, 9, 10] 출력
  // 만약 enum값이 더 작으면 [5, 4, 3, 2, 1] 출력

  function print_num_from_to($snum, $enum)
  { echo " [ ";
    if($snum<$enum){
      for($i=$snum; $i<=$enum; $i++)
      {
        if($i != $snum) {echo ", ";}
        echo $i;
      }
    }
    else
    {
      for($i=$snum; $i>=$enum; $i--){
        if($i != $snum) {echo ", ";}
        echo $i;
      }
    }
    echo " ] ";
  }
?>