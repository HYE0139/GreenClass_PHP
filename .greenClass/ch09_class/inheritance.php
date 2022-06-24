<?php    
    class People {
        protected $name;
        protected $age;

        function printPeople() {
            print "Name : {$this->name}<br>";
            print "Age : {$this->age}<br>";
        }
    }

    class Student extends People { // people 클래스에서 상속받아서 name, age를 쓸 수 있음
        private $studentId;

        function __construct($name, $age, $studentId) {            
            print "나는 Student요. <br>";
            $this->name = $name;
            $this->age = $age;
            $this->studentId = $studentId;
        }

        function printStudent() {
            print "- Student - <br>";
            $this->printPeople(); // 부모클래스에 있는 메서드랑 동일한 이름
            //parent::printPeople(); 동일한 이름 중 부모클래스에 있는 메서드를 불러 올때.
            print "Id : {$this->studentId}<br>";
        }

        function printPeople() {
            print "Student에 있는 print People<br>";
        }
    }
    
    $stu1 = new Student("홍길동", 21, 1010);
    $stu1->printPeople(); 
    print("-------------<br>");
    $stu1->printStudent(); // tu1의 데이터를 보냄.