<?php
    class Computer {
        private static $cnt = 0;
        private $modelName;
        private $price;
        //__construct 인스턴스를 생성할 때 처음 호출하는 함수(생성자)
        function __construct($modelName = null, $price = null) {
            self::$cnt++; // 호출될때마다 (값이 들어올때마다) 증감
            $this ->modelName = $modelName;
            $this->price = $price;
        }

        function printInfo() {
            print "모델명 : {$this->modelName}, 가격 : {$this->price} \n";
        }
        static function totalProductCnt() {
            print "총 생산된 컴퓨터 수 : ".self::$cnt."<br>";
        }
    }

    $c1 = new Computer("abc-123", 40000);
    $c2 = new Computer("xkk-222", 50000);
    $c3 = new Computer("y2k-ggg", 65000);
    $c4 = new Computer("y2k-ggg", 70000);

    $c1->printInfo();
    $c2->printInfo();
    $c3->printInfo();
    $c4->printInfo();

   Computer::totalProductCnt(); //static 함수라서 클래스로 직접 호출 가능