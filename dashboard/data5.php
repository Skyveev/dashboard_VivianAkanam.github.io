
<?php
 



$link5= mysqli_connect("localhost", "root", "");
mysqli_select_db($link5, "chart");
$res5= mysqli_query($link5, "select * from data5");

$test5 = array();
$count5=0;
while ($row5=mysqli_fetch_array($res5)) {
  $test5 [$count5] ["label"] = $row5["y"];
  $test5 [$count5] ["y"] = $row5["x"];
  $count5=$count5+1;
}



?>



