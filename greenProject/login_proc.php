<?php
  include_once "db/db_user.php";

  $uid = $_POST["user_id"];
  $upw = $_POST["user_pw"];

  echo "아이디 : " .$uid. "<br>";
  echo "비밀번호 : " .$upw. "<br>";

  $param = [
    "user_id" => $uid,
    "user_pw" => $upw,
  ];

  $result = sel_user($param);
  if(empty($result)){
    echo "해당하는 아이디가 없습니다.";
    die;
  }

  if($upw === $result["user_pw"]){
    session_start();
    $_SESSION["login_user"] = $result;
    header("Location:main_page.php");
  }else{
    header("Location:login_page.php");
  }
?>