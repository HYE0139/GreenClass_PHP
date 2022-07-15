<?php
    // 생성자 Construct : 클래스를 이용하여 객체를 생성할 때 사용된다.
    // 생성자를 정의하지 않아도 디폴트 생성자가 선언됨.
    class Fruit {
        private $name;
        private $color;
        private $price;

        // 파라미터에 null 넣어서 받아오는 값이 없을때의 오류방지. 
        // 생성자를 이용하여 객체를 생성해서 외부값을 받아온다.
        function __construct($name=null, $price, $color) {
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;
        }

        function print_fruit() {
            print "Name : {$this->name}<br>";
            print "Color : {$this->color}<br>";
            print "Price : {$this->price}<br>";
        }
    }

    $apple = new Fruit("Apple", null, "red");
    $banana = new Fruit("Banana", 500, "yellow");

    $apple->print_fruit();
    $banana->print_fruit();