<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h1 class="mt-4">Tables</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('admin') ?>">Dashboard</a></li>
        <li class="breadcrumb-item"><a href=" <?= base_url('admin/c_triwulan1') ?>">Tables</a></li>

      </ol>


      <div class="container-fluid">
        <canvas id="myChart"></canvas>
      </div>

      <div class="row justify-content-around">
        <div class="col-4 col-md-4 ml-5">
          <div class="card">
            <script>
              let myChart = document.getElementById('myChart').getContext('2d');

              // Global Options
              Chart.defaults.global.defaultFontFamily = 'Lato';
              Chart.defaults.global.defaultFontSize = 13;
              Chart.defaults.global.defaultFontColor = '#777';

              let massPopChart = new Chart(myChart, {
                type: 'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
                data: {
                  labels: ['Januari', 'Februari', 'Maret'],
                  datasets: [{
                    label: 'Baik',
                    data: [
                      617,
                      181,
                      153,

                    ],
                    //backgroundColor:'green',
                    backgroundColor: [
                      'rgba(255, 99, 132, 0.6)',
                      'rgba(54, 162, 235, 0.6)',
                      'rgba(255, 206, 86, 0.6)',

                    ],
                    borderWidth: 1,
                    borderColor: '#777',
                    hoverBorderWidth: 3,
                    hoverBorderColor: '#000'
                  }]
                },
                options: {
                  title: {
                    display: true,
                    text: 'TRIWULAN 1',
                    fontSize: 30
                  },
                  legend: {
                    display: true,
                    position: 'right',
                    labels: {
                      fontColor: '#000'
                    }
                  },
                  layout: {
                    padding: {
                      left: 10,
                      right: 0,
                      bottom: 0,
                      top: 0
                    }
                  },
                  tooltips: {
                    enabled: true
                  }
                }
              });
            </script>
          </div>
  </main>
</div>
</div>
</div>
</div>
</div>