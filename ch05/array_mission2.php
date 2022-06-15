<?php

// 값의 크기에 상관없이 뒤에서부터 나열
$arr = [4, 5, 23, 60, 8, 10];

krsort($arr);

print_r ($arr);

for($i=count($arr)-1; $i>=0; $i--) {
  print $arr[$i] ."<br>";
}

print "--------------------<br>";

$len = count($arr);
for($i=0; $i<=$len; $i++){
    
    print $arr[$len - $i]. "<br>";
}