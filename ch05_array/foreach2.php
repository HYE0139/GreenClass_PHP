<style>

  table {border-collapse: collapse;}
  table, th, td {border : 1px solid#000;}
  th, td {padding: 5px;}
</style>


<table>
  <tr>
    <th>이름</th>
    <th>키</th>
  </tr>


<?php
     $array = array(
      "Hong" => 182.2,
      "Hwang" => 180.4,
      "kim" => 176.3,
      "Park" => 174.1
    );
    
   foreach($array as $key => $val)
   {  
    print "<tr>";
    echo "<td>${key}</td>";
    echo "<td>${val}</td>";
    print"</tr>";
   }
  ?>
  </table>