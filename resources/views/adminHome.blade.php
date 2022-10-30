@extends('partials.Navbar2')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Grafik Jumlah Wisata</h4>
                            <div>
                                {!! $barChart->container() !!}
                            </div>

                        </div>
                        <div class="col-md-6">
                            <h4>Grafik Jumlah Review</h4>
                            <div>
                                {!! $pieChart->container() !!}
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <h4>Grafik Jumlah User dan Mitra</h4>
                            <div>
                                {!! $lineChart->container() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Charting library -->
<script src="https://unpkg.com/chart.js@^2.9.3/dist/Chart.min.js"></script>
<!-- Chartisan -->
<script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>

{!! $barChart->script() !!}
{!! $pieChart->script() !!}
{!! $lineChart->script() !!}
@endsection

