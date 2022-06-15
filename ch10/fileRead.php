<?php
    // fopen("경로", "파일모드") r = read, 읽기모드
    $filep = fopen("C:/Apache24/htdocs/PHP/ch10/lorem.txt", "r");

    if(!$filep) {
        die("파일을 열 수 없습니다.");
    }
    print "파일을 열었습니다. <br>";
    //            fgets(불러올파일, 문장길이)
    while($line = fgets($filep, 1024)){
        print $line."<br>";
    } // fgets 함수가 반복하는 중에 줄이 바뀌거나 파일이 끝이나면 문자열을 반환한다.

    fclose($filep); //