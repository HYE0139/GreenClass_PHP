<?php
   // 증가/감소 연산자
   // ++정수 , --정수 : 1씩 증가/감소한다.
   $n1 = 10;

   $n1++;
   print "$n1<br>";

   ++$n1;
   print "$n1<br>";

   print"!-----------------<br>";

   $n2 = 10;
   $sum = 10 + $n2++;
   /*
   연삭식에서 ++이 뒤에 있으면 읽기 먼저 적용되기 때문에
   10 + $n2(= 10) 값이 20으로 출력되긴 하지만 증가 연산자가
   적용되긴 했기에 +1 이 된 상태. 그래서 다음 연산인 $n2가 11이 되는 것이 맞다<div class=""></div>
   */
   print "$sum<br>";
   print "$n2<br>";

   $sum = 10 + ++$n2; // ++ 를 앞에 적어서 같이 읽혀지니 바로 +1 된 연산값이 나오는것
   print "$sum<br>";


   print"!!-----------------<br>";

   $n3 = 10;

   $n3 = $n3 + 2;
   print "$n3 <br>";

   $n3 = $n3 + 2; // 위 연산식과 중첩되어 결과값이 나온다.
   print "$n3 <br>";


   print"!!!-----------------<br>";

   $n4 = 10;
   $n4 += 2; // $n4 + 2 와 같은 문장
   print "$n4 <br>";


   print"!!!!-----------------<br>";

   $oprd1 = 20;
   $prrd2 = 10;

   $result = $oprd1 == $oprd2; // 값이 다르기 때문에 false 값이 0이 뜬다.(화면에 표시되지 않음)
   print "$oprd1 == $oprd2 : $result <br>";

   $result = $oprd1 === $oprd2; // 
   print "$oprd1 === $oprd2 : $result <br>";


   $result = $oprd1 != $oprd2;
   print "$oprd1 != $oprd2 : $result <br>";

   $result = $oprd1 > $oprd2;
   print "$oprd1 > $oprd2 : $result <br>";

?>