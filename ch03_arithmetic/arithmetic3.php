<?php
   // && : true 만들기가 어렵다. false 만들기는 쉬움.
   // || : false 만들기가 어렵다. true 만들기는 쉬움.

   if(1 && 0 && 1 && 1 && 2){ // false값인 0이 하나라도 있으면 출력 안됨.
      print "나는 진실이다.";
   }

   if(1|| 1 || 2 || 'a' || 0){ // false값이 있지만 다른 값은 true 라 출력됨.
      print "I'm true";
   }
?>