<?php
  print "--------break--------<br>";
  for ($i=0; $i<20; $i++)
  {
    if($i == 12 ) { break; }
    print $i . "<br>";
  }

  print "--------continue--------<br>";
  for($i=0; $i<20; $i++)
  {
    if($i == 12){ continue; }//다수 실행 가능

    print $i. "<br>";
  }

?>