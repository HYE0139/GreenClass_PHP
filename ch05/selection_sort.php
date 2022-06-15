<?php
   $arr = [10, 33, 12, 8, 1, 89, 11];
   print_r ($arr);
   echo "<br>";

   for($i=0; $i<count($arr)-1; $i++) // 0~5 : 6번
   {
     $idx = $i;
     for($z=$i+1; $z<count($arr); $z++)// 1~6 : 6번
     {
      if($arr[$idx]> $arr[$z])
      {// idx값이 더 클 경우에만 반복되도록
        $idx = $z;
      }
     }

     if($idx != $i)
     {// 안 넣어도 되는 부분이지만 비효율적인 순환을 막기 위한 것
      $temp = $arr[$idx];
      $arr[$idx] = $arr[$i];
      $arr[$i] = $temp;
     }
   }

   print_r($arr);
?>