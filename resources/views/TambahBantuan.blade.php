@extends('partials.Navbar2')

@section('content')
{{-- <h2 style="Margin-top:10px;">{{ $title }}</h2> --}}

    <div class="row" style="margin-top:50px; margin-left:50px;">
        <div class="col-md-10">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card-body">
            <h3 class="card-title text-center">Tambah FaQ</h3>
            
            <hr style="position: relative;
            top: 20px;
            border: none;
            height: 3px;
            background: #5bc0de;
            margin-bottom: 50px;">
            <form method="POST" action="{{ url('/SimpanBantuan') }}" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-3">
                <label for="title" class="form-label" style="font-weight:bold;">Judul Pertanyaan</label>
                <input type="text" class="form-control @error('title')is-invalid @enderror" id="title" name="title" placeholder="Judul Pertanyaan">

                @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror

                </div>

                <div class="mb-3">
                    <label for="" class="form-label" style="font-weight:bold;">Kategori</label>
                    <select class="form-select" name="categories" aria-label="Default select example">
                        <option value="User">User</option>
                        <option value="Mitra">Mitra</option>
                    </select>
                    @error('categories')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
    
                </div>
    
                <div class="mb-3">
                <label for="desc" class="form-label" style="font-weight:bold;">Deskripsi</label>
                <textarea class="form-control @error('desc')is-invalid @enderror" id="desc" rows="3" id="desc" name="desc" placeholder="..."></textarea>

                @error('desc')

                <div class="invalid-feedback">
                    {{$message}}
                </div>

                @enderror

                </div>
                <button type="submit" class="btn btn-primary">Tambah FaQ</button>

@endsection
