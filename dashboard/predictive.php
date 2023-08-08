
<?php
 
$link= mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "chart");
$ress1= mysqli_query($link, "select * from attack1");
$ress2= mysqli_query($link, "select * from attack2");
$ress3= mysqli_query($link, "select * from attack3");
$ress4= mysqli_query($link, "select * from attack4");
$ress5= mysqli_query($link, "select * from attack5");
$ress6= mysqli_query($link, "select * from attack6");


$tests1 = array();
$counts1=0;
while ($rows1=mysqli_fetch_array($ress1)) {
  $tests1 [$counts1] ["label"] = $rows1["y"];
  $tests1 [$counts1] ["y"] = $rows1["x"];
  $counts1=$counts1+1;
}

$tests2 = array();
$counts2=0;
while ($rows2=mysqli_fetch_array($ress2)) {
  $tests2 [$counts2] ["label"] = $rows2["y"];
  $tests2 [$counts2] ["y"] = $rows2["x"];
  $counts2=$counts2+1;
}


$tests3 = array();
$counts3=0;
while ($rows3=mysqli_fetch_array($ress3)) {
  $tests3 [$counts3] ["label"] = $rows3["y"];
  $tests3 [$counts3] ["y"] = $rows3["x"];
  $counts3=$counts3+1;
}

$tests4 = array();
$counts4=0;
while ($rows4=mysqli_fetch_array($ress4)) {
  $tests4 [$counts4] ["label"] = $rows4["y"];
  $tests4 [$counts4] ["y"] = $rows4["x"];
  $counts4=$counts4+1;
}

$tests5 = array();
$counts5=0;
while ($rows5=mysqli_fetch_array($ress5)) {
  $tests5 [$counts5] ["label"] = $rows5["y"];
  $tests5 [$counts5] ["y"] = $rows5["x"];
  $counts5=$counts5+1;
}


$tests6 = array();
$counts6=0;
while ($rows6=mysqli_fetch_array($ress5)) {
  $tests6 [$counts6] ["label"] = $rows6["y"];
  $tests6 [$counts6] ["y"] = $rows6["x"];
  $counts6=$counts6+1;
}
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
// $dataPoints2 = array(
//   array("label"=> "Manufacturing 2019", "y"=> 23.2),
//   array("label"=> "-Finance and Insurance 2019", "y"=> 22.4),
//   array("label"=> "Professional Business 2019", "y"=> 12.7),
//   array("label"=> "Energy 2019", "y"=> 8.2),
//   array("label"=> "Retail and Wholesale 2019", "y"=> 7.3),
//   array("label"=> "Education 2019", "y"=> 2.8),
//   array("label"=> "Healthcare 2019", "y"=> 5.1),
//     array("label"=> "Government 2019", "y"=> 2.8),
//      array("label"=> "Transportation 2019", "y"=> 4),
//      array("label"=> "Media 2019", "y"=> 2.5)
// );
  

//   $dataPoints3= array(
//   array("label"=> "Manufacturing", "y"=> 17.7),
//   array("label"=> "Finance and Insurance", "y"=> 23),
//   array("label"=> "Professional Business", "y"=> 8.7),
//   array("label"=> "Energy", "y"=> 11.1),
//   array("label"=> "Retail and Wholesale", "y"=> 10.2),
//   array("label"=> "Education", "y"=> 4),
//   array("label"=> "Healthcare", "y"=> 6.6),
//    array("label"=> "Government", "y"=> 7.9),
//     array("label"=> "Transportation", "y"=> 5.1),
//     array("label"=> "Media", "y"=> 5.7)
// );

//   $dataPoints4= array(
//   array("label"=> "Manufacturing", "y"=> 8),
//   array("label"=> "Finance and Insurance", "y"=> 17),
//   array("label"=> "Professional Business", "y"=> 10),
//   array("label"=> "Energy", "y"=> 6),
//   array("label"=> "Retail and Wholesale", "y"=> 16),
//   array("label"=> "Education", "y"=> 8),
//   array("label"=> "Healthcare", "y"=> 3),
//    array("label"=> "Government", "y"=> 8),
//     array("label"=> "Transportation", "y"=> 13),
//     array("label"=> "Media", "y"=> 10)
// );


//   $dataPoints5= array(
//   array("label"=> "Manufacturing", "y"=> 10),
//   array("label"=> "Finance and Insurance", "y"=> 19),
//   array("label"=> "Professional Business", "y"=> 12),
//   array("label"=> "Energy", "y"=> 6),
//   array("label"=> "Retail and Wholesale", "y"=> 11),
//   array("label"=> "Education", "y"=> 6),
//   array("label"=> "Healthcare", "y"=> 6),
//    array("label"=> "Government", "y"=> 8),
//     array("label"=> "Transportation", "y"=> 13),
//     array("label"=> "Media", "y"=> 8)
// );
?>



