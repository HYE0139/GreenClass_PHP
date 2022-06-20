<?php
    //array : 변수 하나에 여러값을 담고 싶을 때 사용
    $week = array("일", "월", "화", "수", "목", "금", "토");
                // 0 ,   1  ,  2 ,   3 ,   4 ,  5  ,  6 
    $weekend = array($week[6], $week[0]);

    $week[3] = "wed";//수정
    echo $week[3] . "<br>";

    $week[7] = "null"; //지정하지 않은 값이라도 출력됨
    print $week[7] . "<br>";

    $week[9] = "ㅁㅁ";
    print $week[8] . "<br>";// 할당된 내용이 없기에 빈칸
    print $week[9] . "<br>";// ㅁㅁ 출력
    print $week[11] . "<br>";//빈칸
    print "test<br>";

    $test = array("A", "B");
    print count($test) . "<br>"; //배열변수 속에 담긴 값들의 수

    array_push($test, "C", "D");// 직접선언보다 안전한 추가식
    print "count(\$test) : " . count($test) . "<br>";
                // " \ " 변수명 그대로 나타내고 싶을 때
    print "test[2] : " .$test[2] . "<br>";
    print "test[3] : " .$test[3] . "<br>";

    print "---------------------------<br>";
    $test2 = array(1, 3.44, "안녕"); // 출력은 되지만 위험하다. 타입은 통일
    print $test2[0];
    print $test2[1];
    print $test2[2];
?>