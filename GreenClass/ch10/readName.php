<?php
    // 파일에 저장된 데이터를 읽어 배열로 만든다.
    $data = file("./name.txt");

    print_r($data);
    print "--------<br>";
    
    foreach($data as $idx => $name) {
        print $idx ." : ". $name . "<br>";
    }