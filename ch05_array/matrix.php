<?php
// 부모 자식 관계 파악하기 
  $matrix = array(// $matrix(부모)> array(자식)
    array(1, 2, 3, 0),// array에 포함된 자식요소
    array(4, 5, 6, 0),
    array(7, 8, 9, 0),
  );

  print_r ($matrix);
  echo "<br><br>";

  print $matrix [1][1]. "<br>";
            //인덱스 1번째(두번쨰)에 속한 1번째 요소를 가져온다. = 5

  print "martrix count : " . count($matrix) . "<br>";
  print "martrix count[0] : " . count($matrix[0]) . "<br>";
  print "martrix count[1] : " . count($matrix[1]) . "<br>";

?>