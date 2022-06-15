<?php
    /*
        90점 이상 A(3점 이하, '-'.7점 이상 '+')
        = > 93 : A-, 95: A 98+
        80점 이상 B(3점 이하, '-'.7점 이상 '+')
        70점 이상 c(3점 이하, '-'.7점 이상 '+')
        60점 이상 D(3점 이하, '-'.7점 이상 '+')
        60점 미만 F(3점 이하, '-'.7점 이상 '+')

        0~100 점수가 아니면 '잘못된 값 ' 출력
    */

    $score = rand(0, 100);
    print "점수 : $score <br>";

        //제외값부터 선언
        if($score > 100 || $score < 0) 
        {
            print "잘못된 값";
        } 
        else 
        {
            $sign = "F"; //기본 설정을 F로 설정
            $symbol = ""; // if문을 위해 선언
            $val_1 = intval($score / 10);
            //intval : 점수를 10으로 나눈 값을 정수로 바꾼다.
            //10으로 나눈 값은 결국 점수 앞자리. 큰 조건에 먼저 설정값을 준다.    
            switch($val_1) 
            {
                case 10: case 9:
                    $sign = "A";
                    break;
                case 8:
                    $sign = "B";
                    break;
                case 7:
                    $sign = "C";
                    break;
                case 6:
                    $sign = "D";
                    break;
            }

            $val_2 = $score % 10;//점수를 10으로 나누고 나머지값
            // 나머지값은 결국 점수의 1자리. n0~n9점이 되는 것.
            if($score >= 60)//60점미만은 기본값인 F
            {//60점 이상 조건에서 100과 같거나 뒷자리가 7이상인 점수
                if($score === 100 || $val_2 >= 7)
                {
                    $symbol = "+";
                } 
                else if($val_2 <= 3)//60점 이상 조건에서 또 다른 경우 뒷자리가 3미만일 경우
                {
                    $symbol = "-";
                }
            }
            print $sign . $symbol;
        }
?>