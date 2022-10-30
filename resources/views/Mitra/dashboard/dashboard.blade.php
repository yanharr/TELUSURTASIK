<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DASHBOARD | Mitra</title>


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color:#f7f7f7;">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{ route('landing.page') }}"><img class="logo" src="https://drive.google.com/uc?export=view&id=1zsX29peLxMzYsdWqq9zcYBtmUTwXIv8n" width="140"></a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <img class="rounded-circle me-lg-2" src="/images/{{ Auth::user()->photo_user }}" alt="" style="width: 40px; height: 40px;">
            <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
          </a>  
          <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
              <a href="{{url('/showProfileMitra/'.Auth::user()->id)}}" class="dropdown-item">My Profile</a>
              <form action="logout" method="post">
                  @csrf
                  <button type="submit" class="nav-link px-3 border-0" style="background-color:#f7f7f7;color:#7AC678;">Logout <span data-feather="log-out"></span></button>
      
              </form>
          </div>
        </div>
       
         
      </header>

    <div class="row">
        {{-- <div class="col"> --}}
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar" style="background-color:#f7f7f7;">
                <div class="position-sticky pt-3">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/dashboard">
                        <span data-feather="home"></span>
                        Dashboard
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{ route('mitra.home') }}">
                        <span data-feather="home"></span>
                        Data Wisata
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('/HelpMitra')}}">
                        <span data-feather="help-circle"></span>
                        Customer Service
                      </a>
                    </li>
                  </ul>
                </div>
            </nav>
        {{-- </div> --}}
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="row mb-3">
            <div class="col">
                <div class="card shadow mb-4 h-100">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-success">Wisata Terfavorit</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div id="column_favorit"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow mb-4 h-100">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-success">Kategori Wisata</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div id="pie_wisata"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card shadow mb-4 h-100">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-success">Wisata Paling Banyak Direview</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div id="column_rating"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </main>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="/js/dashboard.js"></script>
<script>
    google.charts.load('current', {
    'packages': ['corechart']
});

google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var data1 = new google.visualization.DataTable();
        data1.addColumn('string', 'Wisata');
        data1.addColumn('number', 'Total');
        data1.addRows([
            <?php
                foreach($wisata as $a) {
                    echo "['".$a->categorie."', ".$a->total."],";
            }
        ?>
    ]);

    var options1 = {
        legend: {position: 'bottom'}};
    var chart1 = new google.visualization.PieChart(document.getElementById('pie_wisata'));
    chart1.draw(data1, options1);

    var data2 = new google.visualization.arrayToDataTable([
        ['Nama', 'Jumlah'],
        <?php
        foreach($favorit as $p) {
            echo "['".$p->title."', ".$p->total."],";
        } ?>
    ]);
    var options2 = {
        width: 500,
        height: 200,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
    };
    var chart2 = new google.visualization.ColumnChart(document.getElementById('column_favorit'));
    chart2.draw(data2,options2);

    var data3 = new google.visualization.arrayToDataTable([
        ['Nama', 'Jumlah'],
        <?php
        foreach($rating as $p) {
            echo "['".$p->title."', ".$p->total."],";
        } ?>
    ]);
    var options3 = {
        height: 200,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
    };
    var chart3 = new google.visualization.ColumnChart(document.getElementById('column_rating'));
    chart3.draw(data3,options3);
}
  </script>

</html>
