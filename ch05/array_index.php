<?php
  $numbers = array(10, 20, 5=>30, 40);
                        // 30의 인덱스를 5로 변환

  print_r($numbers);
  echo "<br>";
  echo "count : " . count($numbers) . "<br>";

  for($i=0; $i<count($numbers); $i++){
    echo $numbers[$i] . "<br>";
  }
  echo "--- END ---";
?>