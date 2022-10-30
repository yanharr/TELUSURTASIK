<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Dashboard Mitra</title>


  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



  <!-- Custom styles for this template -->
  <link href="/css/dashboard.css" rel="stylesheet">
</head>
<body>

  <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color:#f7f7f7;">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img class="logo" src="https://drive.google.com/uc?export=view&id=1zsX29peLxMzYsdWqq9zcYBtmUTwXIv8n" width="140"></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="nav-item dropdown">
      <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
        <img class="rounded-circle me-lg-2" src="" alt="" style="width: 40px; height: 40px;">
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

  <div class="container-fluid">
    <div class="row">
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

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Mitra Partner</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">
                <a class="nav-link active" aria-current="page" href="/TambahWisata" style="color:#7AC678;">Tambah Wisata</a>
              </button>

            </div>
          </div>

        </div>
        <div class="row" style="margin-top:50px; margin-left:50px;">
          <div class="col-md-10">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
              <div class="card-body">
                <h3 class="card-title text-center">Edit Wisata</h3>

                <hr style="position: relative;
                top: 20px;
                border: none;
                height: 3px;
                background: #5bc0de;
                margin-bottom: 50px;">
                <form method="POST" action="/EditWisata" enctype="multipart/form-data">
                  @method('PATCH')
                  @csrf

                  <div class="form-group">
                    <label for="id">Id Wisata</label>
                    <input type="text" class="form-control" id="id" name="id_wisata" readonly aria-describedby="" value="{{$dt->id_wisata}}">
                  </div>
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title')is-invalid @enderror" id="title" name="title" aria-describedby="" value="{{$dt->title}}">

                    @error('title')

                    <div class="invalid-feedback">
                      {{$message}}
                    </div>

                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select id="kategori" name="categorie" class="form-control @error('categorie')is-invalid @enderror" >
                      <option value="Curug" {{ ($dt->categorie == 'Curug') ? 'selected' : '' }}>Curug</option>
                      <option value="Pantai" {{ ($dt->categorie == 'Pantai') ? 'selected' : '' }}>Pantai</option>
                      <option value="Danau" {{ ($dt->categorie == 'Danau') ? 'selected' : '' }}>Danau</option>
                      <option value="Sungai" {{ ($dt->categorie == 'Sungai') ? 'selected' : '' }}>Sungai</option>
                      <option value="Caffe" {{ ($dt->categorie == 'Caffe') ? 'selected' : '' }}>Caffe</option>
                      <option value="Taman" {{ ($dt->categorie == 'Taman') ? 'selected' : '' }}>Taman</option>
                      <option value="Cagar Budaya" {{ ($dt->categorie == 'Cagar Budaya') ? 'selected' : '' }}>Cagar Budaya</option>
                      <option value="Kampung Wisata" {{ ($dt->categorie == 'Kampung Wisata') ? 'selected' : '' }}>Kampung Wisata</option>
                    </select>

                    @error('categorie')

                    <div class="invalid-feedback">
                      {{$message}}
                    </div>

                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control @error('location')is-invalid @enderror" id="location" name="location" aria-describedby="" value="{{$dt->location}}">

                    @error('location')

                    <div class="invalid-feedback">
                      {{$message}}
                    </div>

                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="maps">Maps</label>
                    <input type="text" class="form-control @error('maps')is-invalid @enderror" id="maps" name="maps" aria-describedby="" value="{{$dt->maps}}">

                    @error('maps')

                    <div class="invalid-feedback">
                      {{$message}}
                    </div>

                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control @error('desc')is-invalid @enderror" id="deskripsi" name="desc" rows="3">{{$dt->desc}}</textarea>

                    @error('desc')

                    <div class="invalid-feedback">
                      {{$message}}
                    </div>

                    @enderror
                  </div>
                  
                  <div class="mb-3">
                    <label for="picture" class="form-label" style="font-weight:bold;">Gambar</label>
                    <input class="form-control" type="file" id="picture" name="picture">
                  </div>

                  <button type="submit" class="btn btn-primary">Edit Wisata</button>


                </form>


              </div>

            </div>

          </div>

        </div>

      </main>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="/js/dashboard.js"></script>
</body>
</html>
