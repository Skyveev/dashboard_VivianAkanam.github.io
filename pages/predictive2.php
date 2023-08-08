
<?php


$link2= mysqli_connect("localhost", "root", "");
mysqli_select_db($link2, "chart");
$res2= mysqli_query($link2, "select * from predictive2");

$test2 = array();
$count2=0;
while ($row2=mysqli_fetch_array($res2)) {
  $test2 [$count2] ["label"] = $row2["y"];
  $test2 [$count2] ["y"] = $row2["x"];
  $count2=$count2+1;
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



