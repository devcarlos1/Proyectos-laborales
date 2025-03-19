@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">This month<br><br>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Last month<br><br>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Total something<br><br></div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Danger Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area mr-1"></i>
                    Unique server visitors 
                </div>
                <div class="card-body"><canvas id="joinPerDayStatistic" width="100%" height="40"></canvas></div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar mr-1"></i>
                    Payments got each month
                </div>
                <div class="card-body"><canvas id="gotPaymentsByMonth" width="100%" height="40"></canvas></div>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
var ctx = document.getElementById("gotPaymentsByMonth");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [
    <?php
    foreach ($months as $month) {
      echo '"'.$month.'",';
    }
    ?>
    
    ],
    datasets: [{
      label: "SMS",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: [
        <?php
        foreach ($payments['sms'] as $payment) {
          echo $payment.',';
        }
        ?>
      ],
    },
    {
      label: "Bank",
      backgroundColor: "rgba(2,255,216,1)",
      borderColor: "rgba(2,255,216,1)",
      data: [
        <?php
        foreach ($payments['bank'] as $payment) {
          echo $payment.',';
        }
        ?>
      ],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        },
        stacked: true,
      }
    ],
      yAxes: [{
        ticks: {
          min: 0,
          max: <?php echo $biggest * 1.2; ?>,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        },
        stacked: true,
      }],
    },
    legend: {
      display: false
    }
  }
});
</script>

<script>
  @php 
  $lineBiggest = 0;
  @endphp

  var ctx2 = document.getElementById("joinPerDayStatistic");
  var myLineChart = new Chart(ctx2, {
  type: 'line',
  data: {
    labels: [
		<?php
      //range of days from current to -30 days
      for ($i = 0; $i < 30; $i++) {
        $daysArray[] = date('Y-m-d', strtotime('-'.$i.' days'));
      }
      $daysArray = array_reverse($daysArray);
      foreach ($daysArray as $day) {
        echo '"'.$day.'",';
      }
		?>
    ],
    
    datasets: [{
      label: "Sessions",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [
        @php
        $unequeJoinsClass = \App\Models\UnequeJoinPerDay::class;
        foreach ($daysArray as $day) {
          $day = $unequeJoinsClass::whereDate('created_at', $day)->first();
          if ($day) {
            echo $day->count.',';
            if ($lineBiggest < $day->count) {
              $lineBiggest = $day->count;
            }
          } else {
            echo '0,';
          }
        }
        @endphp
      ],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: <?php echo $lineBiggest * 1.2; ?>,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
</script>
@endsection