<footer class="py-4 bg-light mt-auto">
  <div class="container-fluid">
    <div class="d-flex align-items-center justify-content-between small">
      <div class="text-muted">
        </i>Copyright &copy;BiroPendidikanNurulJadid</div>
      <div>
        <i class="fab fa-github"></i>
        <a href="https://github.com/mohnuris">mohnuris</a>
        &middot;
        <!-- <a href="#">Terms &amp; Conditions</a> -->
      </div>
    </div>
  </div>
</footer>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>


<script src="<?= base_url('template/js/scripts.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('template/assets/demo/chart-area-demo.js') ?>"></script>
<script src="<?= base_url('template/assets/demo/chart-bar-demo.js') ?>"></script>
<script src="<?= base_url('template/assets/demo/chart-bar-demo2.js') ?>"></script>
<script src="<?= base_url('template/assets/demo/chart-bar-demo3.js') ?>"></script>
<script src="<?= base_url('template/assets/demo/chart-bar-demo4.js') ?>"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('template/assets/demo/datatables-demo.js') ?>"></script>
<script src="<?= base_url('template/assets/demo/chart-pie-demo.js') ?>"></script>
<script src="<?= base_url('template/assets/demo/custom.js') ?>"></script>

<!-- sweartalert -->
<!-- <script src="<?= base_url('template/assets/js/myjs.js') ?>"></script> -->


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
  google.charts.load('current', {
    'packages': ['corechart']
  });
  google.charts.setOnLoadCallback(drawVisualization);

  function drawVisualization() {
    // Some raw data (not necessarily accurate)
    var data = google.visualization.arrayToDataTable([
      ['Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
      ['2004/05', 165, 938, 522, 998, 450, 614.6],
      ['2005/06', 135, 1120, 599, 1268, 288, 682],
      ['2006/07', 157, 1167, 587, 807, 397, 623],
      ['2007/08', 139, 1110, 615, 968, 215, 609.4],
      ['2008/09', 136, 691, 629, 1026, 366, 569.6]
    ]);

    var options = {
      title: 'Monthly Coffee Production by Country',
      vAxis: {
        title: 'Cups'
      },
      hAxis: {
        title: 'Month'
      },
      seriesType: 'bars',
      series: {
        5: {
          type: 'line'
        }
      }
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
</script>

</body>

</html>