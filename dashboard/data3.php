
<?php

 $link3= mysqli_connect("localhost", "root", "");
mysqli_select_db($link3, "chart");
$res3= mysqli_query($link3, "select * from data3");

$test3 = array();
$count3=0;
while ($row3=mysqli_fetch_array($res3)) {
  $test3 [$count3] ["label"] = $row3["y"];
  $test3 [$count3] ["y"] = $row3["x"];
  $count3=$count3+1;
}
?>



