var chart3 = new CanvasJS.Chart("chartContainer4", {
  animationEnabled: true,
  theme: "light2", // "light1", "light2", "dark1", "dark2"
  title: {
    text: "Distribution of cyber attacks across worldwide industries in 2022",
     fontColor: "black",
     wrap: true,
      fontSize: 15
  },

  dataPointMaxWidth: 30,
  exportEnabled: false,

  axisY: {
    title: "Percentage of attack",
    titleWrap: false,
     titleFontSize: 10,
     fontSize:7,
     dataPointWidth: 10,
    suffix: "%"
  },
  axisX: {
    title: "Industry",
     titleFontSize: 10,
      labelFontSize: 8,
      labelMaxWidth: 70,
      labelWrap: true, 
  },
  data: [{
    type: "bar",
     indexLabel: "{y}",
    indexLabelPlacement: "inside",
    indexLabelFontColor: "white",
    //yValueFormatString: "#,##0.0#\"%\"",
    yValueFormatString: "##.#0 '%'",
    dataPoints: [
      { label: "Manufacturing", y: 24.80 }, 
      { label: "Finance & insurance", y: 18.90 },  
      { label: "Professional Business", y: 14.60 },
      { label: "Energy", y: 10.70 },
      { label: "Retail & whole sale", y: 8.70 },
      { label: "Education", y: 7.30 },
      { label: "Healthcare", y: 5.80 },
      { label: "Government", y: 4.80 },
       { label: "Transportation", y: 3.90 },
        { label: "Media & Telicomunication", y: 0.50}

      
    ]
  }]
}); 
chart3.render();
//End of script


