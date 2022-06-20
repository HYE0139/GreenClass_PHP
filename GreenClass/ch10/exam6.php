<?php
    // exam.txt 파일을 읽어 전부 대문자로 바꾸고
    // emam6_capital.txt에 새로 저장해주세요.

$filep = fopen("./exam6.txt", "r");

while($line = fgets($filep, 100)){
    $str .= strtoupper($line); // 한줄씩 불러올테니까 문자열붙이기
    print $str;
}

fclose($filep);

$filep2 = fopen("./exam6_capital.txt", "w");
fputs($filep2, $str);
 


$file = fopen("./exam6.txt", "r");
$openfile = fopen("./exam6_cap.txt", "w");
// 파일을 필요한 모드로 열고 fgets로 문자열을 받아와서 fputs로 새로운 파일에 추가하기.
while($line2 = fgets($file, 1000)) {
 fputs($openfile, strtoupper($line2));
}

fclose($file, $openfile); 