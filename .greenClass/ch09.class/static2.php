<?php
    class Computer {
        public static $brand;
        public $price;
        // self::static변수 = 이미 메모리에 올라간 값이라 스스로를 불러와야한다.
        // 다른 변수는 class에 속해있기에 this->변수
        function myPrint(){
            print "컴퓨터 브랜드는" .self::$brand. ", 가격은 {$this->price}입니다.<br>";
        }

        /* static 함수는 static 변수만 사용할 수 있어서 해당 함수는 오류가 난다.
        static function myPrint(){                          ____________
            print "컴퓨터 브랜드는" .self::$brand. ", 가격은 {$this->price}입니다.<br>";
        }                                            객체 생성 후 호출을 해야 쓸 수 있는 부분
        */
    }

    Computer::$brand = "LG";

    $c = new Computer;
    $c->price = 10000;
    $c->myPrint();

    $c2 = new Computer;
    $c2->price = 20000;
    $c2->myPrint();

    // brand가 참조라서 두 객체 모두 값이 바뀐다.
    Computer::$brand = "SUMSUNG";
    $c->myPrint();
    $c2->myPrint();