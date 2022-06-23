<style>
  table{border-collapse : collapse;}
  td {padding: 5px; text-align:center;}
</style>

<?php
$val =rand(2, 5);
  print_table($val);

  function print_table($val)
  { echo $val;
    $num = 1;
    echo "<table border = 1px solid#000 >";
    for($i=0; $i<$val; $i++){
      echo "<tr>"; 
        for($z=0; $z<$val; $z++)
        {
          echo "<td>".$num++. "</td>";
        }
      echo "</tr>";
    }
    echo "</table>";
  }
    

?>