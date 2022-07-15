<?php
  $seoul = getdate();

  print "현재시간 : " .
    $seoul["year"] . "년 " .
    $seoul["mon"] . "월 " .
    $seoul["mday"] . "일 " .
    $seoul["hours"] . "시 " .
    $seoul["minutes"] . "분 " .
    $seoul["seconds"] . "초 ";

    echo "<br>";
    print "OS : " . PHP_OS . "<br>";

    print "--- 글로벌 상수 ---<br>";
    foreach($GLOBALS as $key => $var)
    {
      print $key . " : ";
      print_r ($var);
      print "<br>";
    }

    while(list($key, $var) = each($GLOBALS))
    {
      print $key . " : ";
      print_r($var);
      print "<br>";
    }


?>