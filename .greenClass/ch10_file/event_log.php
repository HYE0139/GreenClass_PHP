<?php
    // 이벤트 로그 파일 만들기
    // 서버에 접속했을 때마다 fputs 함수로 넣은 내용이 해당 파일에 기록된다.
    $filep = fopen("./lorem.txt", "a");

    if(!$filep) die ("파일을 열 수 없습니다.");

    $now = date("Y-m-d H:i:s", time());
    fputs($filep, $now . "\n");

    fclose($filep);

    print "connect service";