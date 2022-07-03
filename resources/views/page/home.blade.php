@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Home</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <div class="raw">
                    <div class="card card-info">
                        <div class="card-header bg-info mb-3">
                            <b class="text-white"><i class="fas fa-history"></i> Last Update &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; waktu </strong> </b>
                        </div>
                        <div class="row">
                            @foreach ($temps as $temp )
                            <div class="col-sm-6">
                                <div id="card" class="card card-info m-0 border-primary" style="border: 1px solid;border-radius: 3px;">
                                    <div class="card-header" style="background-color:#d9edf7; border:-1px!important; ">
                                        <div class="row">
                                            <div class="col-12 text-left">
                                                <span style="font-size:20px;font-weight:50;color:blue;">{{ $temp->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body mb-0 mt-0">
                                        <div class="col-xs-12 text-right">
                                            <span style="font-size:55px;font-weight: bold;">{{ $temp->avg_sensor }}&deg; C
                                                <!-- <div class="debuReload"></div> -->
                                            </span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="raw">
                    <div class="card card-info">
                        <div class="row">
                            @foreach ($hums as $hum)
                            <div class="col-sm-6">
                                <div id="card" class="card card-info m-0 border-primary" style="border: 1px solid;border-radius: 3px;">
                                    <div class="card-header" style="background-color:#d9edf7; border:-1px!important; ">
                                        <div class="row">
                                            <div class="col-12 text-left">
                                                <span style="font-size:20px;font-weight:50;color:blue;">{{ $hum->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body mb-0 mt-0">
                                        <div class="col-xs-12 text-right">
                                            <span style="font-size:55px;font-weight: bold;">{{ $hum->avg_sensor }} %
                                                <!-- <div class="testReload"></div> -->
                                            </span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- <div class="raw">
                    <div class="card">
                        <div class="card-header bg-danger mb-3">
                            <b class="text-white"><i class="fas fa-wrench"></i> Setting</strong> </b>
                        </div>
                        <div class="card ml-1 mr-1">
                            <p>Kontrol Penuh Lampu dan AC</p>
                            <div class="row">
                                <div class="col-lg-6 ml-auto">
                                    <form action="{{ url('/dashboard') }}/9" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="card">
                                            <button type="submit" name="onall" value="1" class="btn btn-primary ">ON</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <form action="{{ url('/dashboard') }}/9" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="card">
                                            <button type="submit" name="offall" value="0" class="btn btn-warning ">OFF</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="col-sm-4">
                <div class="raw">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h4 class="text-white"><i class="fas fa-box"></i>&nbsp; Kontrol Lampu</strong> </h4>
                        </div><br>
                        <div class="row ml-1 mr-1">
                            @foreach ($lamps as $lamp)
                            <?php
                            $relay = $lamp->avg_sensor;
                            $nama_lampu = $lamp['name'];
                            $id = $lamp['id'];
                            if ($relay == 1) {
                                $status_lampu = "ON";
                            }
                            if ($relay == 0) {
                                $status_lampu = "OFF";
                            }
                            ?>
                            <div class="col-sm-6">
                                <div id="card" class="card card-info m-0 border-primary" style="border: 1px solid;border-radius: 3px;">
                                    <div class="card-header" style="background-color:#d9edf7;color:#31708f; border:-1px!important; ">
                                        <div class="row">
                                            <div class="col-sm-12 ">
                                                <span style="font-size:13px;font-weight:400"><?= $nama_lampu; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <img src="{{ asset('images') }}/<?= $status_lampu; ?>.png" alt="center" alt="" width="80" height="120">
                                        <form method="POST" action="{{ route('lamp',['id'=>$id]) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-success  text-right" name="onlamp" value="1"> ON</button>
                                            <button type="submit" class="btn btn-sm btn-danger" name="offlamp" value="0"> OFF</button>
                                        </form>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection