<?php
    // switch mission
    // $mon 값이 3~5사이면 "봄" 출력 6~8이면 여름 9~11 가을 12,1,2 겨울
    // $mon 다른 값이면 계절없음 출력

    $mon = rand(1,12);// 랜덤으로 출력

    print "${mon}월은 ";

    switch($mon){
        case 3: case 4: case 5:
            print "봄";
            break;

        case 6: case 7: case 8:
            print "여름";
            break;
        
        case 9: case 10: case 11:
            print "여름";
            break;
        
        case 12: case 1: case 2:
            print "겨울";
            break;

        default:
        print "계절없음";
    }
?>