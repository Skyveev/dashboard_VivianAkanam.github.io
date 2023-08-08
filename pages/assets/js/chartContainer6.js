
 
// var chart = new CanvasJS.Chart("chartContainer", {
//   animationEnabled: true,
//   theme: "light2",
//   title:{
//     text: "Average Amount Spent on Real and Artificial X-Mas Trees in U.S."
//   },
//   axisY:{
//     suffix: "%",
//      title: "Percentage of an Attack",
//     includeZero: false

//   },

//    axisX:{
//     title: "Industry"


//   },
//   legend:{
//     cursor: "pointer",
//     verticalAlign: "center",
//     horizontalAlign: "right",
//     itemclick: toggleDataSeries
//   },

//   data: [{
//     type: "column",
//     name: "Sum of 2018",
//   yValueFormatString: "#0.0"%"",
//     showInLegend: true,
//     dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
//   },{
//     type: "column",
//     name: "Sum of 2019",
   
//   yValueFormatString: "#0.0"%"",
//     showInLegend: true,
//     dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
//   },{
//     type: "column",
//     //name: "Artificial Trees",
//     name: "Sum of 2020",
    
//    yValueFormatString: "#0.0"%"",
//     showInLegend: true,
//     dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>

//     },{
//     type: "column",
//     name: "Sum of 2021",
  
//     yValueFormatString: "#0.0"%"",

//     showInLegend: true,
//     dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>

//     },{
//     type: "column",
//     name: "Sum of 2022",
  
//    yValueFormatString: "#0.0"%"",
//     showInLegend: true,
//     dataPoints: <?php echo json_encode($dataPoints5, JSON_NUMERIC_CHECK); ?>

//   }]
// });


// chart.render();
 
// function toggleDataSeries(e){
//   if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
//     e.dataSeries.visible = false;
//   }
//   else{
//     e.dataSeries.visible = true;
//   }
//   chart.render();
// }
 
