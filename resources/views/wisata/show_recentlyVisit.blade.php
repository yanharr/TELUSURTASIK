@extends('master')
@section('title', 'Recently Visit')

@section('content')
{{-- <section id="courses"> --}}
    <div style="background: #def0dd; margin-left: 30px; margin-right: 30px;">
        <div class="container">                                                 
            <div class="col-md-12 col-sm-12" style="margin-top:40px;">
                <div class="section-title2">
                    <h2>Recently Visit</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($data as $datas)
                <div class="col-md-4 col-sm-4">
                    <div class="card" style="height: 100%">
                        <img class="card-img-top" src="{{ asset('images/'. $datas->picture) }}" alt="tempat wisata"
                            height="200" style="object-fit: cover">
                        <div class="card-body">
                            <h5 class="card-title">{{ $datas->title }} </h5>
                            <p class="card-text">{{ $datas->desc }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('wisata.show', $datas->id_wisata) }}"
                                class="btn btn-success btn-block">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>       
        <!-- pagination -->
        <div class="pagination justify-content-center mt-5">
            {{ $data->links() }}
        </div>                 
    </div>
</section>
@endsection

