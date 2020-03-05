<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Skripsi Zulian
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
  
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper">
   
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
        <div class="main-panel">
      <!-- Navbar -->
      
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h2 class="card-title">Chart Kesimpulan</h2>
                  </div>
                  <div class="col-sm-6">
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area" style="height:500px">
                  <canvas height="500" width="1550" id="chartKesimpulan"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> Chart Suhu</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas height="230" width="590" id="chartSuhu"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
               
                <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> Chart Kekeruhan</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas height="230" width="590" id="chartKekeruhan"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
               
                <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> Chart PH</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas height="230" width="590" id="chartPH"></canvas>
                </div>
              </div>
            </div>
            
          </div>
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h5 class="card-category">Total Shipments</h5>
                    <h2 class="card-title">Performance</h2>
                  </div>
                  
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartBig1"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
       
      <footer class="footer">
       
            <script>
              document.write(new Date().getFullYear())
            </script> <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">Zulian</a>
          </div>
        <
      </footer>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
 
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>

</body>

</html>
<script src='https://code.jquery.com/jquery-3.3.1.js'></script>
<script src='https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./data.js"></script>

<script>
    function setDataSuhu(kesimpulan1,kesimpulan2,kesimpulan3,suhu,kekeruhan,ph) {
		$.ajax({
			url: "http://127.0.0.1:8000/api/getData",
			type: "GET",
			cache: false,
			success: function (response) {
                // alert(response);
                kesimpulan1.push(response[0]['suhu']);
                kesimpulan2.push(response[0]['kekeruhan']);
                kesimpulan3.push(response[0]['ph']);
                kesimpulan1.shift();
                kesimpulan2.shift();
                kesimpulan3.shift();
                suhu.push(response[0]['suhu']);
                kekeruhan.push(response[0]['kekeruhan']);
                ph.push(response[0]['ph']);
                suhu.shift();
                kekeruhan.shift();
                ph.shift();
			  }
    });
        var cek = Math.floor(Math.random() * 20) + 1;
        
    }

    
    </script>