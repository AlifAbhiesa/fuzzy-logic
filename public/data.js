$(document).ready(function() {
  var ctx = document.getElementById("chartKesimpulan").getContext("2d");
  var cta = document.getElementById("chartSuhu").getContext("2d");
  var ctk = document.getElementById("chartKekeruhan").getContext("2d");
  var ctp = document.getElementById("chartPH").getContext("2d");

  var kesimpulan = {
    labels: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    datasets: [{
      label: "My First dataset",
      fillColor: "#0000",
      strokeColor: "rgb(211, 70, 177)",
      pointColor: "rgb(211, 70, 177)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(151,187,205,1)",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
    },
    {
      label: "My Second dataset",
      fillColor: "#0000",
      strokeColor: "rgb(31, 142, 241)",
      pointColor: "rgb(31, 142, 241)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(151,187,205,1)",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
    },
    {
      label: "My Third dataset",
      fillColor: "#0000",
      strokeColor: "rgb(0, 214, 180)",
      pointColor: "rgb(0, 214, 180)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(151,187,205,1)",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
    },
    
    ],

  };

  var suhu = {
    labels: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    datasets: [{
      label: "My First dataset",
      fillColor: "#0000",
      strokeColor: "rgb(211, 70, 177)",
      pointColor: "rgb(211, 70, 177)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(151,187,205,1)",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
    }
    ],

  };

  var kekeruhan = {
    labels: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    datasets: [{
      label: "My First dataset",
      fillColor: "#0000",
      strokeColor: "rgb(31, 142, 241)",
      pointColor: "rgb(31, 142, 241)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(151,187,205,1)",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
    }
    ],

  };

  var ph = {
    labels: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    datasets: [{
      label: "My First dataset",
      fillColor: "#0000",
      strokeColor: "rgb(0, 214, 180)",
      pointColor: "rgb(0, 214, 180)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(151,187,205,1)",
      data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
    }
    ],

  };
  var options = {
    animation: false,
    //Boolean - If we want to override with a hard coded scale
    scaleOverride: true,
    //** Required if scaleOverride is true **
    //Number - The number of steps in a hard coded scale
    scaleSteps: 5,
    responsive: false,
    //Number - The value jump in the hard coded scale
    scaleStepWidth: 10,
    //Number - The scale starting value
    scaleStartValue: 0,
    chartArea: {
      backgroundColor: ' rgb(255,255,255)',
    }
  };

  var myLineChart = new Chart(ctx).Line(kesimpulan, options);
  var myLineChart2 = new Chart(cta).Line(suhu, options);
  var myLineChart3 = new Chart(ctk).Line(kekeruhan, options);
  var myLineChart4 = new Chart(ctp).Line(ph, options);

    setInterval(function() {
    setDataSuhu(kesimpulan.datasets[0].data,
      kesimpulan.datasets[1].data,
      kesimpulan.datasets[2].data,
      suhu.datasets[0].data,
      kekeruhan.datasets[0].data,
      ph.datasets[0].data);
    // setDataSuhu(data2.datasets[0].data);
    // setDataKekeruhan(data.datasets[1].data);
    // setDataKekeruhan(data3.datasets[0].data);
    // setDataPh(data.datasets[2].data);
    // setDataPh(data4.datasets[0].data);
    setLabels(kesimpulan.labels, suhu.labels, kekeruhan.labels, ph.labels);
   

    var myLineChart = new Chart(ctx).Line(kesimpulan, options);
    var myLineChart2 = new Chart(cta).Line(suhu, options);
    var myLineChart3 = new Chart(ctk).Line(kekeruhan, options);
  var myLineChart4 = new Chart(ctp).Line(ph, options);
  }, 10000);

  function setLabels(labelKesimpulan, labelSuhu, labelKekeruhan, labelPh) {
    var today = new Date();   
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    labelKesimpulan.push(time);
    labelSuhu.push(time);
    labelKekeruhan.push(time);
    labelPh.push(time);
    labelKesimpulan.shift();
    labelSuhu.shift();
    labelKekeruhan.shift();
    labelPh.shift();
  }

  
  
 

});