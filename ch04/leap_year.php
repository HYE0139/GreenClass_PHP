<?php
    $year = 1800;
    // $year%400 == 0 or $year%4 == 0 and $year%100 != 0 = 윤년
    // () : 안에 있는 것을 우선순위로 읽음 
    if($year%400 == 0 || ($year % 4 == 0 && $year%100 !=0 )){
        print "${year} : 윤년";
    }
    else{
        print "${year} : 평년";
    } 


?>