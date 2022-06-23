<?php
  //배열 순서 바꾸기
  
  $arr = [10, 33, 12, 8, 1, 89];

  print_r($arr);
  print "<br>";

  $temp = $arr[0]; // 배열 0 의 값을 미리 복사한 후
  $arr[0] = $arr[1]; // 바꾸고자 하는 자리에 넣은 후 
  $arr[1] = $temp; // 복사한 값을 다시 넣기


  print_r($arr); // 0과 1의 자리가 바뀜
  print "<br>";

?>