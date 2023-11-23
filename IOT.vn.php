<!DOCTYPE html>
<html>
<head>
  <title>IOT LBL NĐK</title>
  <!-- Thêm liên kết đến Bootstrap CSS -->
  <!-- Thêm liên kết đến Bootstrap JS và Popper.js -->
  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="index.css"> -->
</head>
<style type="text/css">
  /* CSS code for styling */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
    
    h1 {
      text-align: center;
    }
    
    .chart-container {
      justify-content: center; /* Căn giữa theo chiều ngang */
      align-items: center;
      display: flex;
      margin-bottom: 20px;
    }
    
    .chart {
      width:100%;
      height: 400px;
      margin-right: 60px;
      margin-left: 60px;
    }
    
    .toggle-switch {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
    }
    
    .toggle-switch label {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }
    
    .toggle-switch input {
      display: none;
    }
    
    .toggle-switch .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    .toggle-switch .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    .toggle-switch input:checked + .slider {
      background-color: #2196F3;
    }
    
    .toggle-switch input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }
    
    .toggle-switch input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }
    
    .toggle-switch .slider.round {
      border-radius: 34px;
    }
    
    .toggle-switch .slider.round:before {
      border-radius: 50%;
    }

    .manual-control {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
    }
    
    .manual-control label {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }
    
    .manual-control input {
      display: none;
    }
    
    .manual-control .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    .manual-control .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    .manual-control input:checked + .slider {
      background-color: #2196F3;
    }
    
    .manual-control input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }
    
    .manual-control input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }
    
    .manual-control .slider.round {
      border-radius: 34px;
    }
    
    .manual-control .slider.round:before {
      border-radius: 50%;
    }
    
    .hidden {
      display: none;
    }

    .highcharts-figure,
.highcharts-data-table table {
    min-width: 360px;
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

.ld-label {
    width: 200px;
    display: inline-block;
}

.ld-url-input {
    width: 500px;
}

.ld-time-input {
    width: 40px;
}

</style>
<body>
  <div class="container">
    <h1 class="mt-4">IOT LBL NĐK</h1>
    
    <div class="chart-container">
      <canvas class="chart" id="inner-chart"></canvas>
      <!-- <canvas class="chart" id="outer-chart"></canvas> -->
    </div>


<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
    Datasets formatted in CSV or JSON can be fetched remotely using the
    <code>data</code> module. This chart shows how a chart can also be
    configured to poll against the remote source.
    </p>
</figure>

<div class="ld-row">
  <label class="ld-label">
    Enable Polling
  </label>
  <input type="checkbox" checked="checked" id="enablePolling"/>
</div>
<div class="ld-row">
  <label class="ld-label">
    Polling Time (Seconds)
  </label>
  <input class="ld-time-input" type="number" value="2" id="pollingTime"/>
</div>
<div class="ld-row">
  <label class="ld-label">
    CSV URL
  </label>
  <input class="ld-url-input" type="text" id="fetchURL"/>
</div>

    
    <div class="toggle-switch">
      <label class="switch">
        <input type="checkbox" id="auto-toggle">
        <span class="slider round"></span>
      </label>
      <span class="ml-2">Chế độ tự động</span>
    </div>
    
    <div class="manual-control">
      <label class="switch">
        <input type="checkbox" id="manual-toggle">
        <span class="slider round"></span>
      </label>
      <span class="ml-2">Chế độ thủ công</span>
      <button id="open-valve" class="btn btn-primary ml-3 d-none">Mở van</button>
      <button id="close-valve" class="btn btn-danger ml-2 d-none">Đóng van</button>
    </div>
  </div>
</body>
<script type="text/javascript">
      // JavaScript code for controlling the IOT devices
    
    // Function to update the inner and outer water level charts
    // Initial chart update
    updateCharts(170.986, 160.837);
    function updateCharts(innerLevel, outerLevel) {
      var innerChart = new Chart(document.getElementById('inner-chart'), {
        type: 'bar',
        data: {
          labels: ['Bên trong','Bên ngoài'],
          datasets: [{
            label: 'Mực nước hiện tại',
            data: [innerLevel , outerLevel],
            backgroundColor: ['rgba(75, 192, 192, 0.2)','rgba(75, 192, 192, 0.2)'],
            borderColor: ['rgb(75, 192, 192)', 'rgb(75, 192, 192)'],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });
      
      /*var outerChart = new Chart(document.getElementById('outer-chart'), {
        type: 'line',
        data: {
          labels: ['Bên trong','Bên ngoài'],
          datasets: [{
            label: 'Mực nước hiện tại',
            data: [innerLevel, outerLevel],
            fill: false,
            borderColor: 'rgb(75, 192, 192)',
            tension: 0.1
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });*/
    
var defaultData = 'https://demo-live-data.highcharts.com/time-data.csv';
var urlInput = document.getElementById('fetchURL');
var pollingCheckbox = document.getElementById('enablePolling');
var pollingInput = document.getElementById('pollingTime');

function createChart() {
    Highcharts.chart('container', {
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Live Data'
        },
        accessibility: {
            announceNewData: {
                enabled: true,
                minAnnounceInterval: 15000,
                announcementFormatter: function (allSeries, newSeries, newPoint) {
                    if (newPoint) {
                        return 'New point added. Value: ' + newPoint.y;
                    }
                    return false;
                }
            }
        },
        data: {
            csvURL: urlInput.value,
            enablePolling: pollingCheckbox.checked === true,
            dataRefreshRate: parseInt(pollingInput.value, 10)
        }
    });

    if (pollingInput.value < 1 || !pollingInput.value) {
        pollingInput.value = 1;
    }
}

urlInput.value = defaultData;

// We recreate instead of using chart update to make sure the loaded CSV
// and such is completely gone.
pollingCheckbox.onchange = urlInput.onchange = pollingInput.onchange = createChart;

// Create the chart
createChart();

    

  }




    // Function to handle the auto/manual toggle switches
    function handleAutoToggle() {
      var autoToggle = document.getElementById('auto-toggle');
      var manualToggle = document.getElementById('manual-toggle');
      var openValve = document.getElementById('open-valve');
      var closeValve = document.getElementById('close-valve');

      if (autoToggle.checked) {
        manualToggle.checked = false; // Tắt nút Manual Control
        openValve.classList.add('d-none');
        closeValve.classList.add('d-none');
      } else {
        openValve.classList.remove('d-none');
        closeValve.classList.remove('d-none');
      }
    }

    function handleManualToggle() {
      var autoToggle = document.getElementById('auto-toggle');
      var manualToggle = document.getElementById('manual-toggle');
      var openValve = document.getElementById('open-valve');
      var closeValve = document.getElementById('close-valve');

      if (manualToggle.checked) {
        autoToggle.checked = false; // Tắt nút Auto Control
        openValve.classList.remove('d-none');
        closeValve.classList.remove('d-none');
      } else {
        openValve.classList.add('d-none');
        closeValve.classList.add('d-none');
      }
    }

    // Event listeners
    document.getElementById('auto-toggle').addEventListener('change', handleAutoToggle);
    document.getElementById('manual-toggle').addEventListener('change', handleManualToggle);
</script>
</html>
