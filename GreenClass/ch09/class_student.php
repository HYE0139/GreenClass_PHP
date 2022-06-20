<?php

  // class : 객체지향 분야에서 동종의 객체들을 하나의 그룹으로 묶어 정의한것
  // 클래스가 필요한 이유? 비슷한 객체들을 쉽게 생성할 수 있다.

  class Student {
    public $studentId; // 멤버변수를 선언
    public $studentName;
    // public : 클래스 멤버들의 접근을 결정하는 접근제어 지시자
  // 어디서든 멤버 변수(attribute)와 멤버함수(method)에 접근할 수 있다.

    public function printStudent($id, $name) { //멤버함수 선언
      print "ID : {$id}<br>";
      print "Name : {$name}<br>";
    }
  }

  $obj = new Student; //새로운 객체를 선언
  $obj->studentId = 20171234;
  $obj->studentName = "Alice";

  $obj->printStudent($obj->studentId, $obj->studentName);