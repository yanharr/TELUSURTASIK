@extends('master')
@section('title', 'Wisata')

@section('content')
{{-- <section id="courses"> --}}
    <div style="background: #def0dd; margin-left: 30px; margin-right: 30px;">
        <div class="container">
            <div class="row">
                <div class="d-flex mb-4">
                    <div class="mr-auto">
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <form action="{{ route('wisata.index') }}" method="GET">
                                    @csrf
                                    <div class="searchbox rounded" >
                                        <input type="text" name="searchWisata" style="margin-top: 20px" class="form-control rounded"
                                            placeholder="Cari Wisata Disini" aria-label="Search"
                                            value="{{request('search')}}" />                                            
                                    </div>
                                    <div>
                                        <button class="btn btn-warning" type="submit" style="margin-top: 20px" >
                                            <i class="fa fa-search"></i></button>
                                    </div>            
                                </form>    
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <form action="{{ route('wisata.index') }}" method="GET" class="form-inline">
                                    @csrf
                                    <div class="searchbox rounded" style="margin-top:11px;">
                                        <select name="searchCategory" class="form-control" id="inputGroupSelect04"
                                            aria-label="Example select with button addon" style="padding: 4px; margin-top: 8px;  font-size: 15px;  border: none;  height:43px;">
                                            <option selected value="All">Choose Category...</option>
                                            <option value="Curug">Curug</option>
                                            <option value="Pantai">Pantai</option>
                                            <option value="Danau">Danau</option>
                                            <option value="Coffee">Caffee</option>
                                            <option value="Wisata Budaya">Wisata Budaya</option>
                                            <option value="Taman">Taman</option>
                                        </select>                                        
                                    </div>
                                    <div>
                                        <button class="btn btn-warning" type="submit" style="margin-top: 20px;" >Lihat</button>
                                    </div>
                                </form> 
                            </div>
                            <div class="col-md-4 col-sm-4 pull-right">
                                <div class="courses-price1" style="margin-top: 20px">
                                    <a class="nav-link active btn btn-secondary btn-sm text-white" style="background-color:#FBB667;" aria-current="page" href="{{ route('wishlist.index') }}">
                                        My Wishlist
                                        <i class="fa fa-fw fa-heart" style="color: red"></i>
                                    </a>
                                </div>
                                <div class="courses-price1" style="margin-top: 20px; margin-right:10px;">
                                    <a class="nav-link active btn btn-secondary btn-sm text-white" style="background-color:#FBB667;" aria-current="page" href="{{ url('/wisata/recently-visit') }}">
                                        Recently Visit                                        
                                    </a>
                                </div>
                            </div>
                        </div>                        
                    </div>                    
                </div>                                
            </div>                                       
            <div class="col-md-12 col-sm-12" style="margin-top:40px;">
                <div class="section-title2">
                    <h2>Wisata <small>Choose place you want to go</small></h2>
                </div>
            </div>
            <div class="row">
                @foreach ($data as $wisata)
                <div class="col-md-4 col-sm-4">
                    <div class="card" style="height: 100%">
                        <img class="card-img-top" src="{{ asset('images/'. $wisata->picture) }}" alt="tempat wisata"
                            height="200" style="object-fit: cover">
                        <div class="card-body">
                            <h5 class="card-title">{{ $wisata->title }} </h5>
                            <p class="card-text">{{ $wisata->desc }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('wisata.show', $wisata->id_wisata) }}"
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
    </div>
</section>
@endsection

<!-- use Illuminate\Support\Collectionlinks;
pake itu kalo mau rapih pagination -->





