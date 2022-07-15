<?php
  $arr_age = array(
    "Peter" => 35,
    "Ben" => 37,
    "Joe" => 43,
    "Jhon" => 24,
  );

  //값 정렬
  //sort(오름차순), resort(내림차순)
  //키값은 날아가고 그저 값의 크기에 따라 나열된다.

  $copy_arr_1 = $arr_age;

  echo "origin : ";
  print_r($arr_age);
  echo "<br>";

  echo "copy - 일반복사 : ";
  print_r ($copy_arr_1);
  echo "<br>";


  sort($copy_arr_1);

  echo "copy - 오름차순 : ";
  print_r($copy_arr_1);
  echo "<br>------------------------------------------------------<br>";

//키 정렬
  //ksort(오름차순), krsort(내림차순)
  // 키값을 기준으로 정렬된다.
  $copy_arr_2 = $arr_age;
  echo "copy 2 : ";
  print_r ($copy_arr_2);
  echo "<br>";

  krsort($copy_arr_2); // 내림차순
  echo "copy 2 - 내림차순 ";
  print_r ($copy_arr_2);
  echo "<br>";

  ksort($copy_arr_2);
  echo "copy 2 - 오름차순 ";
  print_r ($copy_arr_2);
  
?>