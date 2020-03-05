$(document).ready(function() {
  var ctx = document.getElementById("myChart").getContext("2d");

  var data = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [{
      label: "My Second dataset",
      fillColor: "rgba(151,187,205,0.2)",
      strokeColor: "rgba(151,187,205,1)",
      pointColor: "rgba(151,187,205,1)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(151,187,205,1)",
      data: [7, 6, 5, 4, 2, 1, 8]
    }
    ],
  };
  var options = {
    animation: false,
    //Boolean - If we want to override with a hard coded scale
    scaleOverride: true,
    //** Required if scaleOverride is true **
    //Number - The number of steps in a hard coded scale
    scaleSteps: 10,
    //Number - The value jump in the hard coded scale
    scaleStepWidth: 10,
    //Number - The scale starting value
    scaleStartValue: 0
  };

  var myLineChart = new Chart(ctx).Line(data, options);

    setInterval(function() {
    setData(data.datasets[0].data);
    setLabels(data.labels);

    var myLineChart = new Chart(ctx).Line(data, options);
  }, 2000);

  function setLabels(labels) {
    var today = new Date();   
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    labels.push(time);
    labels.shift();
  }

  function setData(data) {
    data.push(Math.floor(Math.random() * 100) + 1);
    data.shift();
  }
  
 

});