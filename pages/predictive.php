<!doctype html>
<html lang="zxx">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/boxicons.min.css">

<link rel="stylesheet" href="assets/css/meanmenu.min.css">

<link rel="stylesheet" href="assets/css/nice-select.css">

<link rel="stylesheet" href="assets/css/animate.min.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">

<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="assets/css/magnific-popup.min.css">

<link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css" />

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="assets/css/responsive.css">

<link rel="icon" type="image/png" href="assets/img/favicon.png">
<title>one</title>
</head>
<body>

<div class="preloader">
<div class="container">
<div class="d-table">
<div class="d-table-cell">
<div class="preloader loading">
<span class="slice"></span>
<span class="slice"></span>
<span class="slice"></span>
<span class="slice"></span>
<span class="slice"></span>
<span class="slice"></span>
</div>
</div>
</div>
</div>
</div>


<div class="navbar-area">
<div class="main-responsive-nav">
<div class="container">
<div class="main-responsive-menu">
<div class="logo">
<a href="#">
<img src="assets/img/rgu.jpg" alt="image">
</a>
</div>
</div>
</div>
</div>
<div class="main-navbar pag-nav">
<div class="container" >
<nav class="navbar  navbar-expand-md navbar-two">
<a class="navbar-brand" href="#">
<img src="assets/img/rgu.jpg" alt="image">
</a>

<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" >
<ul class="navbar-nav mr-auto">

<li class="nav-item">
<a href="../dashboard/index.php" class="nav-link">
Dashboard
</a>
</li>

<li class="nav-item">
<a href="thread.html" class="nav-link">
Threat Intelligence Overview
</a>
</li>

<li class="nav-item">
<a href="predictive.html" class="nav-link">
  Predictive Analysis
</a>
</li>


<li class="nav-item">
<a href="summary.html" class="nav-link">
Summary and Heat Map
</a>
</li>
</ul>
</div>
</nav>
</div>
</div>
</div>





<div class="page-banner-area bg-4" style="height:200px;">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="page-content">
<h2>Forecasting Industry Trends: A Time Series Analysis for 2023</h2>
<ul>
</ul>
</div>
</div>
 </div>
</div>
</div>


<div class="services-area ptb-100" style="margin-top:-70px; margin-bottom: -70px;">
<div class="container">

<div class="row">
  <?php include('data.php'); ?>
<div id="chartContainer1" style="height: 390px; width:100%;"></div> 
        <div class="close"></div>
</div>
</div>
</div>




<div class="terms-condition bg-color pt-100 pb-70">
<div class="container">
<h3>Introduction</h3>
<p style="text-align: justify;">In today's fast-paced and ever-changing business landscape, having reliable forecasts is crucial for making informed decisions and staying ahead of the competition. Time series analysis, a powerful statistical technique, allows us to analyze historical data and make predictions about future trends. In this article, we delve into a time series model to forecast the performance of various industries in the year 2023, based on historical data from 2018 to 2022.</p>

<h3>Data Overview:</h3>
<p style="text-align: justify;">The dataset consists of ten different industries, each with their percentage of attacks recorded for the years 2018 to 2022. These industries include Manufacturing, Finance and Insurance, Professional Business and Consumer Services, Energy, Retail and Wholesale, Education, Healthcare, Government, Transportation, and Media. By analyzing this data, we aim to gain insights into the expected growth or decline of these industries in 2023.</p>

<h3>Methodology:</h3>
<p style="text-align: justify;">To create accurate forecasts for each industry, we employed the Seasonal Autoregressive Integrated Moving Average with Exogenous Regressors (SARIMAX) model. This method is particularly suitable for time series data that exhibits seasonality, such as the trends seen in our dataset. We divided the data into training and testing sets, using historical data up to 2022 to train the model and validate its performance. With SARIMAX, we were able to capture seasonal patterns and make predictions for the year 2023.</p>

<h3>Forecasting Results::</h3>
<p style="text-align: justify;">After applying the SARIMAX model to each industry's historical data, we obtained forecasted values for the year 2023. Let's delve into the predicted performance for some of the major industries:
</p>


</div>
</div>
</div>



<div class="services-area ptb-100" style=" margin-top:-70px; margin-bottom: -70px;">
<div class="container">
<div class="row">
  <?php include('predictive2.php'); ?>
<div id="chartContainer2" style="height: 390px; width:100%;"></div> 
<div class="close"></div>
</div>
</div>
</div>







<div class="terms-condition bg-color pt-100 pb-70">
<div class="container">
<h6>Manufacturing </h6>
<p >The manufacturing industry is forecasted to face cyber attacks at a rate of 10.0 in 2023. As manufacturers increasingly adopt Industry 4.0 technologies and IoT devices, they become more susceptible to cyber threats, making robust cybersecurity measures essential.</p>


<h6>Finance and Insurance</h6>
<p style="text-align justify;">The finance and insurance sector is projected to encounter a higher volume of cyber attacks, with a forecasted value of 19.0 in 2023. The attraction of financial gain for cybercriminals and the vast amount of sensitive data in this industry drive the elevated threat level.
.</p>


<h6>Professional Business and Consumer Services</h6>
<p style="text-align justify;">With a forecasted value of 12.0, the professional business and consumer services industry are expected to face a moderate level of cyber attacks in 2023. As this sector handles a diverse range of client information, safeguarding data privacy remains a priority.</p>


<h6>Energy </h6>
<p>The energy sector is predicted to experience cyber attacks at a rate of  in 2023. As critical infrastructure becomes increasingly </p>

<h6>Retail and Wholesale</h6>
<p style="text-align justify;">In 2023, the retail and wholesale industry is expected to be targeted by cybercriminals at a rate of 11.0. The rise of e-commerce and digital transactions has exposed this sector to potential data breaches and ransomware attacks. </p>


<h6>Education </h6>
<p style="text-align justify;">The education sector's forecasted value of  suggests that educational institutions may face cyber threats targeting sensitive student and faculty data. As online learning becomes more prevalent, ensuring cybersecurity resilience becomes imperative. </p>

<h6>Healthcare </h6>
<p style="text-align justify;">Healthcare remains a prime target for cyber attacks, with a forecasted value of . The digitization of patient records and medical devices introduces vulnerabilities that require comprehensive security measures.</p>


<h6>Government </h6>
<p style="text-align justify;">With a forecasted value of , the government sector is expected to encounter cyber attacks at a significant rate. Safeguarding sensitive government data and critical infrastructure remains a priority.</p>


<h6>Transportation</h6>
<p>The transportation industry is projected to witness a higher frequency of cyber attacks, with a forecasted value of 13.0 in 2023. The interconnectedness of transportation systems and increasing reliance on technology create potential entry points for cybercriminals.</p>


<h6>Media </h6>
<p style="text-align justify;">The media sector's forecasted value of  indicates a notable level of cyber threats. As media organizations increasingly rely on digital platforms and content distribution channels, protecting intellectual property and customer data becomes critical.</p>

<h6>Conclusion</h6>
<p style="text-align justify;">The forecasted values for cyber-attacks by industry in 2023 highlight the pervasive and evolving nature of cybersecurity risks. From finance and insurance to education and government, every sector faces unique challenges in protecting sensitive information and critical assets from cyber threats. As industries continue to embrace digital transformation, cybersecurity resilience must be an integral part of their strategies.<br><br>
Businesses and organizations must invest in robust cybersecurity practices, including threat detection, incident response plans, employee training, and proactive risk management. Collaboration between public and private sectors is essential to share threat intelligence and mitigate cyber risks collectively.<br><br>
Predictions based on time series analysis offer valuable insights into the potential trajectory of various industries in 2023. While some sectors are projected to experience rapid growth, others are expected to maintain stability or moderate development. As we navigate the complexities of the future, these forecasts can aid businesses, policymakers, and investors in making informed decisions and implementing targeted strategies.<br><br>
While predictions offer valuable insights, it is crucial to remain agile in response to emerging threats and advancements in cyber-attack techniques. As we approach 2023 and beyond, staying vigilant and proactive in the face of cyber threats will be the key to safeguarding our digital future.
.</p>

</div>
</div>
</div>










<div class="footer-bottom-area">
<div class="container">
<p>Copyright @2021 Covax. All rights reserved <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
</div>
</div>


<div class="go-top">
<i class='bx bxs-upvote'></i>
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>

<script src="assets/js/meanmenu.min.js"></script>

<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.mixitup.min.js"></script>

<script src="assets/js/jquery.datetimepicker.full.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/custom.js"></script>

<script src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>

<script src="https://canvasjs.com/assets/script/jquery-ui.1.11.2.min.js"></script>

<script src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>

<style type="text/css">

                              .close{
                                width: 100%;
                              position: sticky;
                               margin-top: -10px;
                              background-color:ghostwhite;
                              border: 1px line;
                              }
                            </style>
  <!-- End Style Switcher JS -->

<script>
//   //chart 1
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer1", {
  animationEnabled: true,
  theme: "light2", // "light1", "light2", "dark1", "dark2"
  title:{
    text: "Share of attacks by industry 2018 – 2023",
      fontColor: "black",
     wrap: false,
      fontSize: 15
  },
  legend:{
   fontSize: 13,
    horizontalAlign: "right",
    verticalAlign: "left",
    fontSize: 10
  },
  axisY:{
    suffix: "%",
     title: "Percentage of an Attack",
     titleFontSize: 10,
    includeZero: false

  },

   axisX:{
    title: "Industry",
     titleFontSize: 10,
      labelFontSize: 10,
      labelMaxWidth: 70,
      labelWrap: true, 


  },
  legend:{
    cursor: "pointer", 
    verticalAlign: "center",
    horizontalAlign: "right"

  },

  data: [{
    type: "line",
    name: "2018",
  yValueFormatString: "#0.0"%"",
    showInLegend: true,
    dataPoints: <?php echo json_encode($tests1, JSON_NUMERIC_CHECK); ?>
  },{
    type: "line",
    name: "2019",
   
  yValueFormatString: "#0.0"%"",
    showInLegend: true,
    dataPoints: <?php echo json_encode($tests2, JSON_NUMERIC_CHECK); ?>
  },{
    type: "line",
    //name: "Artificial Trees",
    name: "2020",
    
   yValueFormatString: "#0.0"%"",
    showInLegend: true,
    dataPoints: <?php echo json_encode($tests3, JSON_NUMERIC_CHECK); ?>

    },{
    type: "line",
    name: "2021",
  
    yValueFormatString: "#0.0"%"",

    showInLegend: true,
    dataPoints: <?php echo json_encode($tests4, JSON_NUMERIC_CHECK); ?>

    },{
    type: "line",
    name: "2022",
  
   yValueFormatString: "#0.0"%"",
    showInLegend: true,
    dataPoints: <?php echo json_encode($tests5, JSON_NUMERIC_CHECK); ?>


  },{
    type: "line",
    name: "2023",
  
   yValueFormatString: "#0.0"%"",
    showInLegend: true,
    dataPoints: <?php echo json_encode($tests6, JSON_NUMERIC_CHECK); ?>

  }]
});

chart.render();
 
function toggleDataSeries(e){
  if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
    e.dataSeries.visible = false;
  }
  else{
    e.dataSeries.visible = true;
  }
  chart.render();
}
 


//   Begin of hare of cyber attacks from 2018 to 2022 chart
   CanvasJS.addColorSet("greenShades",
                [//colorSet Array

                "#E2523A",
                "#E2523A",
                "#E2523A",
                "#E2523A",
                "#E2523A"                
                ]);
var chart = new CanvasJS.Chart("chartContainer2", {
    colorSet: "greenShades",
  animationEnabled: true,
 theme: "light2", // "light1", "light2", "dark1", "dark2"
  title:{
       text: "forcasted value for 2023",
     fontColor: "black",
     wrap: true,
      fontSize: 15
  },
    axisY: {
    title: "Forecasted Value for 2023",
     titleFontSize: 10,
     minimum: 0.0,
    maximum: 20.0,
    interval: 2.50,
    valueFormatString: "###0.00", //axisY labels with values upto two decimal places
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
    dataPoints: <?php echo json_encode($test2, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();

//   End of Share of cyber attacks from 2018 to 2022 chart


// //begin
// var chart3 = new CanvasJS.Chart("chartContainer2", {
//   animationEnabled: true,
//   theme: "light2", // "light1", "light2", "dark1", "dark2"
//   title: {

    // text: "forcasted value for 2023",
    //  fontColor: "black",
    //  wrap: true,
    //   fontSize: 15
    
//   },
  // axisY: {
  //   title: "Forecasted Value for 2023",
  //    titleFontSize: 10,
  //    minimum: 0.0,
  //   maximum: 20.0,
  //   interval: 2.50,
  //   valueFormatString: "###0.00", //axisY labels with values upto two decimal places
  //   suffix: "%"
  // },
  // axisX: {
  //   title: "Year",
  //     titleFontSize: 10,
  //     labelFontSize: 10,
  //     labelMaxWidth: 50,
  //     labelWrap: true, 
  // },
//   data: [{
    // type: "column",
    // indexLabel: "{y}",
    // indexLabelPlacement: "inside",
    // indexLabelFontColor: "white",
    // yValueFormatString: "#,##0.0#\"%\"",
//     dataPoints: [
//       { label: "Manufacturing", y: 10.0, color: "#E2523A"  }, 
//       { label: "Finance and Insurance   ", y: 19.0, color: "#E2523A"  },  
//       { label: "Professional Business and Consumer services ", y: 12.0, color: "#E2523A" },
//       { label: "Energy", y: 6.0, color: "#E2523A"  },  
//       { label: "Retail and Wholesale ", y: 11.0, color: "#E2523A"  },
//        { label: "Education     ", y: 6.0, color: "#E2523A"  },
//         { label: "Healthcare ", y: 6.0,color: "#E2523A"  },
//          { label: "Government    ", y: 8.0,color: "#E2523A"  },
//           { label: "Transportation  ", y: 13.0,color: "#E2523A"  },
//            { label: "Media ", y: 8.0 ,color: "#E2523A" }
    
//     ]
//   }]
// }); 
// chart3.render();
//End of script




}

</script>




</body>
</html>