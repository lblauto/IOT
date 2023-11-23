<?php
 include('security.php');
 include('includes/header.php');
 include('includes/navbar.php');

?>    
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

                
              </div>
    

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

    

    

    

