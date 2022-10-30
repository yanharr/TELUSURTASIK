@extends('master')
@section('title', 'Wisata')

@section('content')
<div class="container">
    <div class="py-3 px-5">
        <div class="row mb-5">            
            <div class="col-md-6" style="text-align: center">
                <img src="{{ asset('images/'. $wisata->picture) }}" class="rounded img-fluid" alt="gambar wisata" width="500"/>
            </div>
            <div class="col-md-6">
                <h4 class="font-weight-bold">{{ $wisata->title }}</h4>
                    <i class="fa fa-map-marker"><h5 class="font-weight-bold">{{ $wisata->location }}</h5></i>
                <div class="row">

                    <div class="col-md-4 mb-4">
                        <button type="button" class="btn btn-success rounded btn-block" data-toggle="modal" data-target="#exampleModal">
                            Beri Ulasan
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Berikan Rating</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('wisata.add_review') }}" method="Post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">


                                                <div class="rating-css" style="color: #ffe400;font-size: 15px;font-family: sans-serif;font-weight: 800;">
                                                    <div class="star-icon">
                                                        <input type="hidden" name="id_wisata" value="{{ $data->id_wisata }}">
                                                        <input type="radio" value="1" name="show" checked id="rating1">
                                                        <label for="rating1" class="fa fa-star"></label>
                                                        <input type="radio" value="2" name="show" id="rating2">
                                                        <label for="rating2" class="fa fa-star"></label>
                                                        <input type="radio" value="3" name="show" id="rating3">
                                                        <label for="rating3" class="fa fa-star"></label>
                                                        <input type="radio" value="4" name="show" id="rating4">
                                                        <label for="rating4" class="fa fa-star"></label>
                                                        <input type="radio" value="5" name="show" id="rating5">
                                                        <label for="rating5" class="fa fa-star"></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="coment" class="form-label">Berikan Komentar</label>
                                                <textarea class="form-control " id="desc" rows="3" id="desc" name="desc" placeholder="..."></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="{{ $wisata->maps}}" class="btn btn-success rounded btn-block">Lihat Lokasi</a>
                    </div>
                    <div class="col-md-4 mb-2">
                        <form action="{{ route('wishlist.store') }}" method="POST">
                            @csrf

                            <input type="hidden" name="id_wisata" value="{{ $wisata->id_wisata }}">

                            @if ($isAlreadyWishlist)
                            <button class="btn btn-success rounded btn-block" type="submit">
                                Hapus Wishlist
                                <i class="fa fa-fw fa-heart"
                                style="color: red"></i>
                            </button>
                            @else
                            <button class="btn btn-success rounded btn-block" type="submit">
                                Tambah Wishlist
                                <i class="fa fa-fw fa-heart" style="color: white"></i>
                            </button>
                            @endif

                        </form>
                    </div>
                    <div class="col-md-4 mb-3" style="margin-top:12px;">                        
                        <form action="{{ url('/wisata/recently-visit/add') }}" method="post">
                            @csrf
                            <input type="text" name="id_user" value="{{ Auth::user()->id }}" hidden>
                            <input type="text" name="id_wisata" value="{{ $wisata->id_wisata }}" hidden>
                            @if($recentlyVisitAdded)                    
                            <button type="submit" class="btn btn-success rounded btn-block">Delete Recently</button>
                            @else
                            <button type="submit" class="btn btn-success rounded btn-block">Recently Visit</button>
                            @endif                    
                        </form>                            
                    </div>
                </div>
            </div>
        </div>
        




        <div class="row mb-5">
            <div class="col-md-6">
                <h4>Deskripsi</h4>
                <p class="text-muted">{{ $wisata->desc }}</p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6">
                <h4>Ulasan</h4>
                <hr style="position: relative;

                border: none;
                height: 3px;
                background: #7AC678;
                margin-bottom: 5px;">

                <div class="col-md-6 col-sm-12">
                    <div class="card" style="width: 75rem; margin-top: 15px;">

                        @foreach($review as $rv)
                        <div class="card-body">
                            <h5 class="card-title">{{ $rv->name }}</h5>
                            <div class="rating-css">
                                <div class="star-icon" style="color: #ffe400;font-size: 15px;font-family: sans-serif;font-weight: 800;">

                                    <?php if($rv->show == 1) :  ?>

                                    <label for="rating1" class="fa fa-star"></label>

                                    <?php elseif($rv->show == 2) :  ?>

                                    <label for="rating1" class="fa fa-star"></label>
                                    <label for="rating2" class="fa fa-star"></label>

                                    <?php elseif($rv->show == 3) :  ?>

                                    <label for="rating1" class="fa fa-star"></label>
                                    <label for="rating2" class="fa fa-star"></label>
                                    <label for="rating3" class="fa fa-star"></label>

                                    <?php elseif($rv->show == 4) :  ?>

                                    <label for="rating1" class="fa fa-star"></label>
                                    <label for="rating2" class="fa fa-star"></label>
                                    <label for="rating3" class="fa fa-star"></label>
                                    <label for="rating4" class="fa fa-star"></label>

                                    <?php elseif($rv->show == 5) :  ?>

                                    <label for="rating1" class="fa fa-star"></label>
                                    <label for="rating2" class="fa fa-star"></label>
                                    <label for="rating3" class="fa fa-star"></label>
                                    <label for="rating4" class="fa fa-star"></label>
                                    <label for="rating5" class="fa fa-star"></label>

                                    <?php endif; ?>
                                </div>
                            </div>
                            <p class="card-text">{{ $rv->desc }}</p>

                        </div>
                        @endforeach
                    </div>
                </div>
                <p class="text-muted"></p>
            </div>
        </div>

    </div>
</div>
@endsection