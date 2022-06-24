<?php
  $arr1 = [1, 2, 3, 4, 5];
  $arr2 = [1, 2, 3];
  $arr3 = [1, 2, 3, 4, 5];

  $diff_arr = array_diff($arr1, $arr2);

  print_r($diff_arr);
  echo "<br>";
  /*
    두 배열함수를 비교하여 두번째 함수에 없는 것을 첫번째에서 뽑아낸다.
   */

   print ($arr1 == $arr2) . "<br>"; //false = 0
   print ($arr1 == $arr3) . "<br>"; // false = 1
?>