<?php
  $array = array(100, 200, 300, 400, 500);

  foreach($array as $val)
  //foreach : 반목문 / 배열함수 속 내용을 as $val에 저장하여 순차적으로 반복한다.
  {
    echo $val . "<br>";
    /*
      100
      200
      300
      400
      500
    */
  }

  echo "---------------------<br>";

  foreach($array as $key => $val)
  {
    echo $key . " : " . $val . "<br>";
  }

 

?>