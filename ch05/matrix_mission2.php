<?php
  /* 각 과목별 총점과 평균을 구하시오 */

  $score = array(
    array(100, 100, 100),
    array(90, 80, 70),
    array(55, 65, 75),
    array(90, 88, 55),
  );

  $sub = array("국어", "영어", "수학");
  $sum = array();
  $avg = array(0, 0, 0,);

  // array[0,1,3,4]의 array[0]
  for($i=0; $i<count($score); $i++){
    for($z=0; $z<count($score[$i]); $z++)
    {
      $sum[$z] = $score[$i][$z];
    }
  } 

  for($i=0; $i<count($sub); $i++){
    echo $sub[$i]. " : " .$sum[$z]. "/" .$avg[$i]. "<br>";
  }
?>