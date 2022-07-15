<?php


  class Student {
    private $studentId;
    private $studentName;
    //private : 클래스 내에서만 접근할 수 있다.
    public function printStudent($id, $name) {
      print "ID : {$id}<br>";
      print "Name : {$name}<br>";
    }
  }

  $obj = new Student;
  $obj->studentId = 20171234;
  $obj->studentName = "Alice";

  $obj->printStudent($obj->studentId, $obj->studentName);

  //private로 선언된 멤버 변수를 외부에서 접근하려 해서 오류가 발생한다.
  // 아래 방법으로 호출하면 정상적으로 출력됨.

  //$obj->printStudent(123, "홍길동");