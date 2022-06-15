<?php
//single line comment
/*
    multi line comment
*/

// $변수,  ' = ' : 대입연산자
    $age = 21;
    print "<div>" . $age . "</div>";

    $name; // 변수선언
    $name = "홍길동"; //첫 대입값은 초기화라 불린다.
    print $name;

    $name = "장보고";
    print "<div>" .$name. "</div>";
    
    $name = 10; //정수개념이 없고 문자열로 인식한다.
    print "<div>" .$name. "</div>";

    // 변수명 네이밍 규칙
    /*
        1. 대소문자 영어, 숫자, 특수기호_(언더바)로 이루어진다.
        2. 숫자가 맨 앞에 오면 X
        3. 문자 사이 빈칸 X

        ex ) $age  $id01  $Student_Name $number_school_bus $NUMBER
        X  ) $21c  id03   $student-id   $tiger@sun
    */

?>
