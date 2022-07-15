<?php

$arr = array(); // 이 배열에 최대로 넣을 수 있는 값은 5개까지
// 랜덤한 숫자를 중복되지 않게 배열에 넣기
for($i=0; $i<5; $i++){
  $var = rand(1, 10); 
  $is_duplication = 0;
  for($z=0; $z<count($arr); $z++){ 
    if($arr[$z] === $val) {
      $is_duplication = 1;
      break;
    }
  }
  if($is_duplication === 1){
    $i--;
  } else {

  }
}
print_r($arr);