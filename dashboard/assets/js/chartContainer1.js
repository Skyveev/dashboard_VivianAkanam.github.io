//alert("chartContainer1");
//   //chart 1

 
// var chart = new CanvasJS.Chart("chartContainer1", {
//   animationEnabled: true,
//   theme: "light2",
//   title:{
//     text: "Share of cyber attacks in the manufacturing industry worldwide from 2018  To 2022",
//       fontColor: "black",
//      wrap: true,
//       fontSize: 15
//   },
//   legend:{
//    fontSize: 13,
//        horizontalAlign: "right",
//     verticalAlign: "left",
//     fontSize: 10
//   },
//   axisY:{
//     suffix: "%",
//      title: "Percentage of an Attack",
//      titleFontSize: 10,
//     includeZero: false

//   },

//    axisX:{
//     title: "Industry",
//      titleFontSize: 10,
//       labelFontSize: 10,
//       labelMaxWidth: 70,
//       labelWrap: true, 


//   },
//   legend:{
//     cursor: "pointer",
//     verticalAlign: "center",
//     horizontalAlign: "right",
//     itemclick: toggleDataSeries
//   },

//   data: [{
//     type: "column",
//     name: "2018",
//   yValueFormatString: "#0.0"%"",
//     showInLegend: true,
//     dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
//   },{
//     type: "column",
//     name: "2019",
   
//   yValueFormatString: "#0.0"%"",
//     showInLegend: true,
//     dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
//   },{
//     type: "column",
//     //name: "Artificial Trees",
//     name: "2020",
    
//    yValueFormatString: "#0.0"%"",
//     showInLegend: true,
//     dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>

//     },{
//     type: "column",
//     name: "2021",
  
//     yValueFormatString: "#0.0"%"",

//     showInLegend: true,
//     dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>

//     },{
//     type: "column",
//     name: "2022",
  
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
 


