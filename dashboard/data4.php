
<?php

 $link4= mysqli_connect("localhost", "root", "");
mysqli_select_db($link4, "chart");
$res4= mysqli_query($link4, "select * from data4");

$test4 = array();
$count4=0;
while ($row4=mysqli_fetch_array($res4)) {
  $test4 [$count4] ["label"] = $row4["y"];
  $test4 [$count4] ["y"] = $row4["x"];
  $count4=$count4+1;
}
?>



