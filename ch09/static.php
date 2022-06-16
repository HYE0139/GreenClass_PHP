<?php
    class Calc {
        function sum($n1, $n2) {
            return $n1 + $n2;
        }
    }

    //Calc를 객체화, 변수명은 C
    //sum 메소드를 호출. 5, 10을 더한 값을 리턴받고 화면에 출력

    $c = new Calc; // 객체화
    $result = $c->Sum(5, 10);

    print $result . "<br>";

    class StaticCalc {
        static function sum($n1, $n2) { 
            return $n1 + $n2;
        }
    }
    // static : 메모리에 먼저 올라가서 객체를 만들때마다 참조가 된다.
    // 객체를 여러개 만들어놓고 값을 변경하면 전체 객체가 그 값을 받는다.
    // 인스턴스(객체를 실체화해서 메모리에 올라가는)를 생성하지 않아도 접근할 수 있다.

    $result = StaticCalc :: sum(10, 11);
    print "result : ". $result . "<br>";