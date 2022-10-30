@extends('master')
@section('title', 'Wishlist')

@section('content')
<div style="background: #def0dd; margin-left: 30px; margin-right: 30px;">
    <div class="container">

        <div class="col-md-12 col-sm-12">
            <div class="section-title2">
                <br>
                <h2>My Wishlist</h2>
            </div>
        </div>

        <div class="row">
            @foreach ($wishlists as $wishlist)
            <div class="col-md-4 col-sm-4">
                <div class="card" style="height: 100%">
                    <img class="card-img-top" src="{{ asset('images/'. $wishlist->wisata->picture) }}"
                        alt="tempat wisata" height="200" style="object-fit: cover">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $wishlist->wisata->title }}</h5>
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('wisata.show', $wishlist->id_wisata) }}"
                            class="btn btn-success btn-block">Lihat
                            Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- pagination -->
    <div class="pagination justify-content-center mt-5">
        {{ $wishlists->links() }}
    </div>
</div>
</section>
@endsection