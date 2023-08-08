<?php
 
$dataPoints = array( 
  array("y" => 3373.64, "label" => "Germany" ),
  array("y" => 2435.94, "label" => "France" ),
  array("y" => 1842.55, "label" => "China" ),
  array("y" => 1828.55, "label" => "Russia" ),
  array("y" => 1039.99, "label" => "Switzerland" ),
  array("y" => 765.215, "label" => "Japan" ),
  array("y" => 612.453, "label" => "Netherlands" )
);
 
$link= mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "chart");
$res= mysqli_query($link, "select * from data");

$test = array();
$count=0;
while ($row=mysqli_fetch_array($res)) {
  $test [$count] ["label"] = $row["x"];
  $test [$count] ["y"] = $row["y"];
  $count=$count+1;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 alert("akinjjjj");
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2",
  title:{
    text: "Gold Reserves"
  },
  axisY: {
    title: "Gold Reserves (in tonnes)"
  },
  data: [{
    type: "bar",
    yValueFormatString: "#,##0.## tonnes",
    dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>         