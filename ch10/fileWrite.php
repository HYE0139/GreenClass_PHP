<?php
    $filep = fopen("C:/Apache24/htdocs/PHP/ch10/lorem.txt", "w");
    //              경로를 작성하고 기존에 없던 파일명을 쓰면 새롭게 만들어진다.
    if(!$filep) {
        die("파일을 열 수 없습니다.");
    }
    print "파일을 열었습니다. <br>";

    fputs($filep, "ROMEO: I take thee at thy word");
    // 파일 쓰기 : 기존에 있던 파일을 불러오면 위 문자로 내용이 수정된다.
    // 기존에 있는 내용에 추가를 하고 싶을 땐 a(쓰기전용)모드로 열면 파일의 끝에 추가된다.
    // 개행(한줄띄어쓰기) : \n 

    fclose ($filep);
