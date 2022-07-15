<?php
  $score = array(
    // 국, 영, 수  | 아래로 줄, 칸 >>
    array (100, 100, 100),  //영수 0
    array (90, 80, 70),     //순자 1
    array (55, 65, 75),     //영철 2
  );

  /* 개인 점수를 합친 값 출력하기
  $names = array("영수", "순자", "영철");
  $each_sum = array(0, 0, 0); // 구해야하는 값의 자리
             //영수의점수, 순자의 점수, 영철의 점수
  for($i=0; $i<count($score); $i++)//줄
  {
    for($z=0; $z<count($score[$i]); $z++)//칸
    {      
      $each_sum[$i] += $score[$i][$z];
    }
  }

  for($i=0; $i<count($names); $i++){
    print $names[$i] . " : " . $each_sum[$i] . "<br>";
  }*/


  $name = array("영수", "순자", "영철");
  $each_sum = array(0, 0, 0);

  for($i=0; $i<count($score); $i++){
    for($z=0; $z<count($score[$i]); $z++)
    {
      $each_sum[$i] += $score[$i][$z];
    }

  }

  for($i=0; $i<count($name); $i++){
    $avg = $each_sum[$i] / count($score[$i]);
    print  $name[$i] . " : " . $each_sum[$i] . " : " .$avg. "<br>";
  }



?>