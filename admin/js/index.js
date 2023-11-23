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
            localStorage.setItem('autoMode', 'on'); // Lưu trạng thái của chế độ tự động
            localStorage.setItem('manualMode', 'off'); // Đảm bảo rằng chế độ thủ công bị tắt
          } else {
            openValve.classList.remove('d-none');
            closeValve.classList.remove('d-none');
          }

          // Thêm chức năng của bạn cho chế độ tự động ở đây
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
            localStorage.setItem('manualMode', 'on'); // Lưu trạng thái của chế độ thủ công
            localStorage.setItem('autoMode', 'off'); // Đảm bảo rằng chế độ tự động bị tắt
          } else {
            openValve.classList.add('d-none');
            closeValve.classList.add('d-none');
          }

          // Thêm chức năng của bạn cho chế độ thủ công ở đây
        }

        // Event listeners
        document.getElementById('auto-toggle').addEventListener('change', handleAutoToggle);
        document.getElementById('manual-toggle').addEventListener('change', handleManualToggle);

        // Lấy trạng thái từ localStorage khi trang web được load
        window.onload = function() {
          var autoMode = localStorage.getItem('autoMode');
          var manualMode = localStorage.getItem('manualMode');

          if (autoMode === 'on') {
            document.getElementById('auto-toggle').checked = true;
            handleAutoToggle();
          }

          if (manualMode === 'on') {
            document.getElementById('manual-toggle').checked = true;
            handleManualToggle();
          }
        };