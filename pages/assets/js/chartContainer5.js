var chart3 = new CanvasJS.Chart("chartContainer5", {
  animationEnabled: true,
  theme: "light2", // "light1", "light2", "dark1", "dark2"
  title: {
    text: "Driving Technology for increase cyber security in Manufacturing companies in the United Kingdom (UK) as of September 2022",
     fontColor: "black",
     wrap: true,
      fontSize: 15
  },

  dataPointMaxWidth: 20,
  exportEnabled: false,

  axisY: {
    title: "Percentage of attack",
    titleWrap: true,
     titleFontSize: 5,
     //fontSize:4,
     //dataPointWidth: 10,
    suffix: "%"
  },
  
  legend:{
  fontSize: 9,
   horizontalAlign: "right",
    verticalAlign: "center"
 },
 
  data: [{
    
    radius: "10%",
    type: "doughnut",
    indexLabelFontSize: 10,
    indexLabelWrap: true,  // change to true
    indexLabelOrientation: "vertical",  // "horizontal", "vertical"
     indexLabel: "{y}",
    showInLegend: true,
    toolTipContent: "{label} (#percent%)",
    indexLabel: "{y}",
    legendText: "{label}",
    innerRadius: "40%",
    indexLabelPlacement: "inside",
  yValueFormatString: "##.#0 '%'",
    radius: "100%",
    indexLabelPlacement: "inside",
    indexLabelFontColor: "white",
  

    dataPoints: [

      { label: "3D printing & machine learning", y:9.45,  color: "#E2523A" },
      { label: "Robotics and cobotics", y:7.77, color: "#E7922A" },
      { label: "Industrial internet of thing", y:18.91 },
      { label: "Automation", y:11.13, color: "#C0C0C0"},
      { label: "Augmented & virtual reality", y:6.09},
      { label: "Artificial intelligence", y:13.31, color: "#800080" },
      { label: "Technologies", y:33.33,color: "#5412C1" }

    
       
       
      

      
    ]
  }]
}); 
chart3.render();
//End of script


