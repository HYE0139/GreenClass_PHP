<?php
    // 오버라이딩 Overriding
    // 상속 관계에 있는 부모 클래스에서 이미 정의된 메소드를
    // 자식 클래스에서 같은 시그니쳐를 갖는 메소드로 다시 정의하는 것
    
    class Animal { // 부모 클래스
        function crying() {
            print "동물이 운다. <br>";
        }
    }

    // 자식 클래스 
    class Dog extends Animal {
        function crying() {
            print "강아지가 멍멍. <br>";
        }
    }

    class Chiwawa extends Dog {
        function crying() {
            print "치와와가 왕왕. <br>";
        }
    }

    class Cat extends Animal {
        function crying() {
            print "고양이가 야옹~ <br>";
        }
    }

    function doCry($ani) {
        $ani->crying();
    }

    doCry(new Chiwawa);
    doCry(new cat);
    doCry(new Dog);
    doCry(new Animal);
