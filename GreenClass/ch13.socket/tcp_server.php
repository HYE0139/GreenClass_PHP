<?php
    $addr = gethostbyname("127.0.0.1");
    $port = 5092;
    print "addr : {$addr}<br>";
    set_time_limit(100);//인터넷프로토콜,전송타입,
    if(($sock = socket_create(AF_INET, SOCK_STREAM, 0)) < 0) { //통신 프로토콜 종류 설정
        echo "socket_create() failed: reason : " . socket_strerror($sock) . "<br>";
    } 
    if(($ret = socket_bind($sock, $addr, $port) < 0)) { // 주소 및 포트 할당
        echo "socket_bind() failed: reason : " . socket_strerror($ret) . "<br>";
    }
    if(($ret = socket_listen($sock, 0)) == false) { // 연결요청대기
        echo "socket_listen() failed: reason : " . socket_strerror($ret) . "<br>";
    }
    $msgsock = socket_accept($sock) or die ("accept failed");//연결수락
    echo "Server is ready <br>";
     

    $buf = "";
    $buf = socket_read($msgsock, 2048);
    if($buf == NULL) {
        echo "socket_read() failed: reason : " . socket_strerror($buf) . "<br>";
    }
    echo "Receive data : $buf <br>";
    $temp = preg_split("/\s+/", $buf);// \s : 공백, + : 한번 이상 반복
    sort($temp);
    $talkback = "";
    for($i=count($temp)-1; $i > 0; $i--) {
        $talkback .= $temp[$i] . " ";
    }
    socket_write($msgsock, $talkback, strlen($talkback));
    echo "Send data : $talkback <br>";
   
    socket_close($msgsock);
    socket_close($sock);