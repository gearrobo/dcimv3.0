@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Alarm</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('alarm') }}">Alarm</a></li>
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
                        <h4 class="text-white"><i class="fas fa-industry"></i>&nbsp; Log Alarm</strong> </h4>
                    </div>
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Perangkat</th>
                                        <th>Nama Sensor(s)</th>
                                        <th>Nilai</th>
                                        <th>L1</th>
                                        <th>L2</th>
                                        <th>L3</th>
                                        <th>Waktu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alarmlogs as $alarmlog)
                                    <?php 
                                        if ($alarmlog->sensor->device_id < 1) {
                                            $devicename = "Tidak Ada";
                                        }else
                                        {
                                            $devicename = $alarmlog->sensor->device->name;
                                        }
                                    ?>
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $devicename }}</td>
                                        <td>{{ $alarmlog->sensor->name }}</td>
                                        <td>{{ $alarmlog->avg_sensor}}</td>
                                        <td>{{ $alarmlog->L1}}</td>
                                        <td>{{ $alarmlog->L2}}</td>
                                        <td>{{ $alarmlog->L3}}</td>
                                        <td>{{ $alarmlog->updated_at }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Perangkat</th>
                                        <th>Nama Sensor(s)</th>
                                        <th>Nilai</th>
                                        <th>Waktu</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- Close Data -->
    </div>
</section>
@endsection

@section('third_party_scripts')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection