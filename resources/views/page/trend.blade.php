@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Trend</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('trend') }}">Trend</a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <h4 class="text-white"><i class="fas fa-industry"></i>&nbsp; Grafik Log Kelistrikan</strong> </h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="device">Type</label>
                            <select name="device" id="device" class="form-control">
                                @foreach ($devices as $device )
                                <option class="form-control" value="{{ $device->id }}">{{ $device->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div id="location"></div>
                        <h3>Voltage</h3>
                        <canvas id="vlinechart" width="100" height="20"></canvas><br>
                        <h3>Current</h3>
                        <canvas id="clinechart" width="100" height="20"></canvas><br>
                        <h3>Power</h3>
                        <canvas id="plinechart" width="100" height="20"></canvas><br>
                    </div>
                </div>
            </div>
        </div>
        <!-- Close Data -->
    </div>
</section>
@endsection

@section('third_party_scripts')
<script>
    $('#device').on('change', function() {
        console.log('data')
    });
</script>
<script type="text/javascript">
    var ctx = document.getElementById("vlinechart").getContext("2d");
    var data = {
        labels: <?php echo $vlogtime; ?>,
        datasets: [{
            label: "R",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "#29B0D0",
            borderColor: "#29B0D0",
            pointHoverBackgroundColor: "#29B0D0",
            pointHoverBorderColor: "#29B0D0",
            data: <?php echo $vr; ?>
        }, {
            label: "S",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "#2A516E",
            borderColor: "#2A516E",
            pointHoverBackgroundColor: "#2A516E",
            pointHoverBorderColor: "#2A516E",
            data: <?php echo $vs; ?>
        }, {
            label: "T",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "#F07124",
            borderColor: "#F07124",
            pointHoverBackgroundColor: "#F07124",
            pointHoverBorderColor: "#F07124",
            data: <?php echo $vt; ?>
        }, ]
    };

    var myBarChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: {
            legend: {
                display: true
            },
            barValueSpacing: 1,
            scales: {
                yAxes: [{
                    ticks: {
                        // min: 100,
                        beginAtZero: false,
                        // stepSize: 10,
                    }
                }],
                xAxes: [{
                    gridLines: {
                        color: "rgba(0, 0, 0, 0)",
                    }
                }]
            },
            responsive: true,
        }
    });
</script>
<script type="text/javascript">
    var ctx = document.getElementById("clinechart").getContext("2d");
    var data = {
        labels: <?php echo $vlogtime; ?>,
        datasets: [{
            label: "R",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "#29B0D0",
            borderColor: "#29B0D0",
            pointHoverBackgroundColor: "#29B0D0",
            pointHoverBorderColor: "#29B0D0",
            data: <?php echo $cr; ?>
        }, {
            label: "S",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "#2A516E",
            borderColor: "#2A516E",
            pointHoverBackgroundColor: "#2A516E",
            pointHoverBorderColor: "#2A516E",
            data: <?php echo $cs; ?>
        }, {
            label: "T",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "#F07124",
            borderColor: "#F07124",
            pointHoverBackgroundColor: "#F07124",
            pointHoverBorderColor: "#F07124",
            data: <?php echo $ct; ?>
        }, ]
    };

    var myBarChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: {
            legend: {
                display: true
            },
            barValueSpacing: 1,
            scales: {
                yAxes: [{
                    ticks: {
                        // min: 100,
                        beginAtZero: false,
                        // stepSize: 10,
                    }
                }],
                xAxes: [{
                    gridLines: {
                        color: "rgba(0, 0, 0, 0)",
                    }
                }]
            },
            responsive: true,
        }
    });
</script>
<script type="text/javascript">
    var ctx = document.getElementById("plinechart").getContext("2d");
    var data = {
        labels: <?php echo $plogtime; ?>,
        datasets: [{
            label: "R",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "#29B0D0",
            borderColor: "#29B0D0",
            pointHoverBackgroundColor: "#29B0D0",
            pointHoverBorderColor: "#29B0D0",
            data: <?php echo $pr; ?>
        }, {
            label: "S",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "#2A516E",
            borderColor: "#2A516E",
            pointHoverBackgroundColor: "#2A516E",
            pointHoverBorderColor: "#2A516E",
            data: <?php echo $ps; ?>
        }, {
            label: "T",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "#F07124",
            borderColor: "#F07124",
            pointHoverBackgroundColor: "#F07124",
            pointHoverBorderColor: "#F07124",
            data: <?php echo $pt; ?>
        }, ]
    };

    var myBarChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: {
            legend: {
                display: true
            },
            barValueSpacing: 1,
            scales: {
                yAxes: [{
                    ticks: {
                        // min: 100,
                        beginAtZero: false,
                        // stepSize: 10,
                    }
                }],
                xAxes: [{
                    gridLines: {
                        color: "rgba(0, 0, 0, 0)",
                    }
                }]
            },
            responsive: true,
        }
    });
</script>
@endsection