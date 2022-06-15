<?php
  session_start();
  print $_SESSION['g'];
  //브라우저 종료 후 이 페이지부터 들어가면 오류 뜬다. 
?>