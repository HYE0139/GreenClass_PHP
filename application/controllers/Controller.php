<?php
namespace application\controllers;
include_once "application/utils/SessionUtils.php";

abstract class Controller { // 각각의 파일로 접근
    public function __construct($action) {        
        $view = $this->$action();
        require_once $this->getView($view); 
    }
    
    protected function addAttribute($key, $val) {
        $this->$key = $val;
    }

    protected function getView($view) {
        if(strpos($view, "redirect:") === 0) { // 0은 해당 문자열의 인덱스 위치
            header("Location: "  . substr($view, 9));
            return;
            //BoardController.php 에서 함수 실행 후 이동하는 주소값에
            //redirect라는 문자열이 가장 처음에 적혀있는지 확인
        }
        return _VIEW . $view;
    }
}

