
<?php
 
// $dataPoints1 = array(
//   array("label"=> "Manufacturing 2018", "y"=> 24.8),
//   array("label"=> "Finance and Insurance 2018", "y"=> 18.9),
//   array("label"=> "Professional Business 2018", "y"=> 14.6),
//   array("label"=> "Energy 2018", "y"=> 10.7),
//   array("label"=> "Retail and Wholesale 2018", "y"=> 8.7),
//   array("label"=> "Education 2018", "y"=> 7.3),
//   array("label"=> "Healthcare 2018", "y"=> 5.8),
//   array("label"=> "Government 2018", "y"=> 4.8),
//   array("label"=> "Transportation 2018", "y"=> 3.9),
//   array("label"=> "Media 2018", "y"=> 0.5)
// );


$link= mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "chart");
$res= mysqli_query($link, "select * from data1");

$test1 = array();
$count=0;
while ($row=mysqli_fetch_array($res)) {
  $test1 [$count] ["label"] = $row["x"];
  $test1 [$count] ["y"] = $row["y"];
  $count=$count+1;
}

?>



