@extends('partials.Navbar2')

@section('content')
<h1 style="Margin-top:10px; margin-left: 20px;">{{ $title }}</h1>

<form style="margin-top:20px" action="/DataUserUpdate" method="post">
  {{ csrf_field() }}

  <div class="form-group" style="margin-left: 20px; margin-right: 20px;">
    <label for="id">Id</label>
    <input type="text" class="form-control" id="id" name="id" readonly aria-describedby="" value="{{$data->id}}" placeholder="">
  </div>
  <div class="form-group" style="margin-left: 20px; margin-right: 20px;">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="name" aria-describedby="" value="{{$data->name}}" placeholder="" required>
  </div>
  <div class="form-group" style="margin-left: 20px; margin-right: 20px;">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="" value="{{$data->email}}" placeholder="" required>
  </div>
  <div class="form-group" style="margin-left: 20px; margin-right: 20px;">
    <label for="no hp">No HP</label>
    <input type="text" class="form-control" id="no hp" name="no_hp"aria-describedby="" value="{{$data->no_hp}}" placeholder="" required>
  </div>

  <input type="submit" value="Submit"  style="margin-top:20px; margin-left: 20px;">
  
  
  
  
</form>
@endsection