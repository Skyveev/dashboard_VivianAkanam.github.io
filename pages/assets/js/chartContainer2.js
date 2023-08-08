var chart3 = new CanvasJS.Chart("chartContainer2", {
  animationEnabled: true,
  theme: "light2", // "light1", "light2", "dark1", "dark2"
  title: {

    text: "Share of cyber attacks from 2018 to 2022",
     fontColor: "black",
     wrap: true,
      fontSize: 15
    
  },
  axisY: {
    title: "Percentage of Attacks",
     titleFontSize: 10,
    suffix: "%"
  },
  axisX: {
    title: "Year",
      titleFontSize: 10,
      labelFontSize: 10,
      labelMaxWidth: 50,
      labelWrap: true, 
  },
  data: [{
    type: "column",
    indexLabel: "{y}",
    indexLabelPlacement: "inside",
    indexLabelFontColor: "white",
    yValueFormatString: "#,##0.0#\"%\"",
    dataPoints: [
      { label: "2018", y: 11.95 }, 
      { label: "2019", y: 9.56 },  
      { label: "2020", y: 21.15},
      { label: "2021", y: 27.72 },  
      { label: "2022", y: 29.63 }
    
    ]
  }]
}); 
chart3.render();
//End of script


