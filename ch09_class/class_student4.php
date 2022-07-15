<?php


  class Student {
    private $studentId;
    private $studentName;
    // 클래스 내부 멤버변수로 선언된 값에 접근하기 위해 public 멤버함수를 이용한다.

    // getter, setter은 데이터를 보호하기 위해 사용한다.
    //getters : 인스턴스 변수를 반환
    public function getStudentId() {
      return $this->studentId; // 변수를 반환
    }
    public function getStudentName() {
      return $this->studentName; 
    }
    
    //setters : 인스턴스 변수를 대입하거나 수정한다.
    public function setStudentId($studentId) {
      $this->studentId = $studentId; // 파라미터를 받아서 변수에 할당한다.
    }
    public function setStudentName($studentName) {
      $this->studentName = $studentName;
    }

    public function printStudent() {
      print "ID : {$this->studentId}<br>";
      print "Name : {$this->studentName}<br>";
    }
  }

  $obj = new Student;

  $obj->setStudentId(123);
  $obj->setStudentName("홍길동");
  $obj->printStudent();

