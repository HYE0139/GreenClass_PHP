<?php
    // 파일에 저장된 데이터를 읽어 배열로 만든다.
    $data = file("./major.txt");

    print_r($data);
    print "--------<br>";
    
    foreach($data as $line) {
        // 문자열을 분할하여 배열로 저장하는 함수 explode("분할기준", "대상")
        $str = explode(" ", $line);
        print "Name : " .$str[0]. ", Major : " .$str[1]. "<br>";
    }