@extends('master')
@section('content')

<div class="text-center">
	<a href="{{ route('login') }}" class="btn btn-success" style="padding:7px; font-size:13px; margin-bottom:15px;">Gabung Menjadi Mitra Kami &nbsp<i class="far fa-handshake"></i></a><br>
	<img src="{{ asset('images/about_us_image/'.$data->cover) }}" style="width: 1300px; height: 337px; object-fit: cover;">	
</div>
<div class="text-left">
	<div class="container-fluid">
		<div class="col-md-12">
			<h1 style="font-size:30px; margin-left:40px;">{{ $data->judul }}</h1>
			<p align="justify" style="margin-left:40px; margin-right:40px">{{ $data->desc }}</p>
			<div style="font-size:40px; text-align:center; margin-top:40px; margin-bottom:40px; text-underline-offset: 1rem;"><u style="text-decoration-color: #7AC678;">Our Team</u> </div>			
		</div>		
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 text-center">
					<img src="{{ asset('images/about_us_image/'.$data->foto_develop_1) }}" style="height:210px; width:210px; object-fit: cover;" class="img-circle">	
					<br>
					<h4>{{ $data->develop_1 }}</h4>
					<div style="font-size:13px;">{{ $data->nim_develop_1 }}</div>
				</div>
				<div class="col-md-6 col-sm-6 text-center">
					<img src="{{ asset('images/about_us_image/'.$data->foto_develop_2) }}" style="height:210px; width:210px; object-fit: cover;" class="img-circle">	
					<br>
					<h4>{{ $data->develop_2 }}</h4>
					<div style="font-size:13px;">{{ $data->nim_develop_2 }}</div>
				</div>						
			</div>			
			<div class="row" style="margin-top:40px; margin-bottom:120px;">
				<div class="col-md-4 col-sm-4 text-center">
					<img src="{{ asset('images/about_us_image/'.$data->foto_develop_3) }}" style="height:210px; width:210px; object-fit: cover;" class="img-circle">	
					<br>
					<h4>{{ $data->develop_3 }}</h4>
					<div style="font-size:13px;">{{ $data->nim_develop_3 }}</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<img src="{{ asset('images/about_us_image/'.$data->foto_develop_4) }}" style="height:210px; width:210px; object-fit: cover;" class="img-circle">	
					<br>
					<h4>{{ $data->develop_4 }}</h4>
					<div style="font-size:13px;">{{ $data->nim_develop_4 }}</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<img src="{{ asset('images/about_us_image/'.$data->foto_develop_5) }}" style="height:210px; width:210px; object-fit: cover;" class="img-circle">	
					<br>
					<h4>{{ $data->develop_5 }}</h4>
					<div style="font-size:13px;">{{ $data->nim_develop_5 }}</div>
				</div>					
			</div>
		</div>		
	</div>
</div>



@endsection