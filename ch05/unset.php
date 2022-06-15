<?php

  if(isset($name)){
    print "name is ok!";
  }

  $name = "HongGilDong";
  if(isset($name)){//$name 값이 있으면 출력
    print "name is great! <br>";
    print isset($name);
  }
  print $name . "<br>";

  unset($name); // 항목을 지우는 함수
  print $name . "<br>";

  echo "The End";
?>