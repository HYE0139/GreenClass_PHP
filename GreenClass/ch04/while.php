<?php
  // for, while 반복문
  // for 몇 번을 반복해야하는 지 알고 있을 때.
  // while 언제 그만둬야 할 지 알고 있을 때.
/*
  for(초기화; 조건식; 증감식){

  }
 --------------------------------  
  while(조건식){

  }

*/

$i = 0; //초기화
while($i<10)//조건식
{
  print $i . "<br>"; 
  $i++;
}


/*
  랜덤으로 출력되는 val 변수에 있는 
  숫자를 1부터 모두 더하기.
*/
$val = rand(50, 100);
print "val : $val <br>";

$i = 1;
$sum = 0;
while($i<=$val){
    $sum+=$i++;
   
}
echo $sum. "<br>";



/*
    $rand(1, 10) 실행을 시키는데 10이 나올 때까지 반복한다.
    10 이 아닌 경우엔 숫자를 찍고 10이 나오면 반복을 멈추고 끝 출력
*/

$r_val = rand(1, 10);
echo "r_val : $r_val <br>";

print "---START---<br>";

$r_val  = rand(1, 10);

while($r_val != 10)//10이 아닌 것만 반복
{
  print "r_val : $r_val <br>";
  $r_val = rand(1, 10);
}
print "---END---<br>";

while(true){
  $r_val = rand(1, 10);
  if($r_val == 10) { break; }
  print "r_val : $r_val <br>";
}



?>