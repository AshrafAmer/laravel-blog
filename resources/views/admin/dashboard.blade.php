@extends('admin.layouts.app')
@section('title', "dashboard")

@section('content')
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Categories</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-success">{{$categories}}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Articles</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash2"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-purple">{{$articles}}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Visit</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash3"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-info">{{$visitors}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Top Visited Articles</h3>
                <div id="ct-visits">
                    <canvas id="myChart" height="40vh" width="80vw"></canvas>
                    <script>                                    
                        let ctx1 = document.getElementById('myChart').getContext('2d');
                        let colors = ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)'];

                        let myChart = new Chart(ctx1, {
                            type: 'line',
                            data: {
                                labels: ["{{$top_articles[0]->title ?? ''}}", "{{$top_articles[1]->title ?? ''}}", "{{$top_articles[2]->title ?? ''}}"],
                                datasets: [{
                                    label: "highest articles' views",
                                    data: [{{$top_articles[0]->seen ?? 0}}, {{$top_articles[1]->seen ?? 0}}, {{$top_articles[2]->seen ?? 0}}],
                                    backgroundColor: colors,
                                    borderColor: colors,
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
                                },
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
