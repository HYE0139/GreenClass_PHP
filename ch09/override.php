<?php
    class People {
        protected $name;
        protected $age;

        function printPeople() {
            print "Name : ".$this->name."<br>";
            print "Age : ".$this->age."<br>";
        }
    }

    class Student extends People {
        private $studentId;

        function __construct($name, $age, $id){
            $this->name = $name;
            $this->age = $age;
            $this->studentId = $id;
        }
        function printPeople(){
            print "--Student--<br>";
            parent::printPeople();
            print "Id : ".$this->studentId."<br>";
        }
    }

    class Professor extends People {
        private $office_No;

        function__constuct($name, $age, $no){
            $this->name = $name;
            $this->age = $age;
            $this->office_no = $no;
        }
        function printPeople() {
            print "--Professor--<br>";
            parent::printPeople();
            print "Office_No : ".$this->office_No."<br>";
        }
    }

    $object1 = new Student("Lee", "21", "20170123");
    $object2 = new Professor("Kim", "42", "107");

    $object1->printPeople();
    print "<br>";
    $object2->printPeople();