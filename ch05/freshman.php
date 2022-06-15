<?php
  $freshman = array(
    "David" => "computer",
    "Alice" => "math",
    "Elsa"  => "Physics",
    "Bob"   => "Musice",
    "chris" => "Electronics"
  );

  print_r ($freshman);
  echo "<br>";
  print $freshman["David"]. "<br>";
  print $freshman["Alice"]. "<br>";
  print $freshman["Elsa"]. "<br>";
  print $freshman["Bob"]. "<br>";
  print $freshman["chris"]. "<br>";

  $freshman["Bob"] = "Dance";
  echo "<br><br>";
  echo $freshman["Bob"] . "<br>";

  $freshman["Frank"] = "History";
  echo $freshman ["Frank"] . "<br>";
?>