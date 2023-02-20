@extends('layouts.master')

@section('content')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-success color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">{{ $tamu }}</h2>
                    <div class="m-b-5">Total Tamu</div><i class="ti-user widget-stat-icon"></i>
                    <div><i class="fa fa-level-up m-r-5"></i><small>
                    <a href="{{ route('admintamu') }}" style="color: white">Detail...</a>
                    </small></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-info color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">{{ $devisi }}</h2>
                    <div class="m-b-5">Total Devisi</div><i class="ti-bar-chart widget-stat-icon"></i>
                    <div><i class="fa fa-level-up m-r-5"></i>
                    <small>
                    <a href="{{ route('devisi') }}" style="color: white">Detail...</a>
                    </small>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-warning color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">{{ $pegawai }}</h2>
                    <div class="m-b-5">Total Pegawai</div><i class="fa fa-money widget-stat-icon"></i>
                    <div><i class="fa fa-level-up m-r-5"></i>
                        <small>
                        <a href="{{ route('pegawai') }}" style="color: white">Detail...</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-danger color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">{{ $user }}</h2>
                    <div class="m-b-5">Admin</div><i class="ti-user widget-stat-icon"></i>
                    <div><i class="fa fa-level-down m-r-5"></i>
                        <small>
                        <a href="{{ route('pegawai') }}" style="color: white">Detail...</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-6">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Line Chart</div>
                </div>
                <div class="ibox-body">
                    <div>
                        <canvas id="line_chart" style="height:200px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Bar Chart</div>
                </div>
                <div class="ibox-body">
                    <div>
                        <canvas id="bar_chart" style="height:200px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="./assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
<script>
    $(function() {
    // Line Chart example
    var lineData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                label: "Data 1",
                backgroundColor: 'rgba(52,152,219, 0.9)',
                borderColor: 'rgba(52,152,219, 1)',
                pointBorderColor: "#fff",
                data: [28, 48, 40, 19, 86, 27, 90],
            },{
                label: "Data 2",
                backgroundColor: 'rgba(213,217,219, 0.9)',
                borderColor: 'rgba(213,217,219, 1)',
                pointBorderColor: "#fff",
                data: [65, 59, 80, 81, 56, 55, 40],
            }
        ]
    };
    var lineOptions = {
        responsive: true,
        maintainAspectRatio: false
    };
    var ctx = document.getElementById("line_chart").getContext("2d");
    new Chart(ctx, {type: 'line', data: lineData, options:lineOptions});

    // Bar Chart example

    var barData = {
        labels: ["Sunday", "Munday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        datasets: [
            {
                label: "Data 1",
                backgroundColor:'#DADDE0',
                data: [45, 80, 58, 74, 54, 59, 40]
            },
            {
                label: "Data 2",
                backgroundColor: '#2ecc71',
                borderColor: "#fff",
                data: [29, 48, 40, 19, 78, 31, 85]
            }
        ]
    };
    var barOptions = {
        responsive: true,
        maintainAspectRatio: false
    };

    var ctx = document.getElementById("bar_chart").getContext("2d");
    new Chart(ctx, {type: 'bar', data: barData, options:barOptions}); 

    // doughnut chart example

    var doughnutData = {
        labels: ["App","Software","Laptop" ],
        datasets: [{
            data: [200,40,60],
            backgroundColor: ["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]
        }]
    } ;


    var doughnutOptions = {
        responsive: true
    };


    var ctx4 = document.getElementById("doughnut_chart").getContext("2d");
    new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

    // Radar chart example

    var radarData = {
        labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
        datasets: [{
            label: "My First Dataset",
            data: [65, 59, 90, 81, 56, 55, 40],
            fill: true,
            backgroundColor: "rgba(255, 99, 132, 0.2)",
            borderColor: "rgb(255, 99, 132)",
            pointBackgroundColor: "rgb(255, 99, 132)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgb(255, 99, 132)"
        }, {
            label: "My Second Dataset",
            data: [28, 48, 40, 19, 96, 27, 100],
            fill: true,
            backgroundColor: "rgba(54, 162, 235, 0.2)",
            borderColor: "rgb(54, 162, 235)",
            pointBackgroundColor: "rgb(54, 162, 235)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgb(54, 162, 235)"
        }]
    };

    var radarOptions = {
        responsive: true
    };

    var ctx5 = document.getElementById("radar_chart").getContext("2d");
    new Chart(ctx5, {type: 'radar', data: radarData, options:radarOptions});

});

</script>
@endpush
