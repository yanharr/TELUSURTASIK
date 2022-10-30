@extends('master')
@section('home')
active
@endsection

@section('content')
<div class="container bootstrap snippets bootdey">
  <h1 class="">Edit Profile</h1>
  <hr>
	<div class="row">
      <!-- left column -->
      <form class="form-horizontal" role="form" method="post" action="/ProfileUserUpdate/{{$user->id}}" enctype="multipart/form-data">
        @method('put')
        @csrf
      <div class="col-md-3">
        <div class="text-center">
          <img src="/images/{{$user->photo_user}}" class="avatar img-circle img-thumbnail" alt="{{$user->name}}" width="200" height="200">
          <h6>Upload a different photo...</h6>
          
          <input type="file" name="gambar" class="form-control">
        </div>
      </div>
   
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        @if(session('message'))
          <div class="alert alert-info alert-dismissable text-green-600 mb-4">{{ session('message') }}</div>
        @endif
        <h3 class="text-center">My Profile</h3>
        
        
        
         
          <div class="form-group">
            <label class="col-lg-3 control-label" for="email">Email</label>
            <div class="col-lg-8">
              <input class="form-control" id="email" type="text" name="email" value="{{$user->email}}" readonly>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="name">Name</label>
            <div class="col-lg-8">
              <input class="form-control" id="name" type="text" name="name" value="{{$user->name}}" required>
            </div>
          </div>  
            
          <div class="form-group">
            <label class="col-lg-3 control-label" for="no HP">No HP</label>
            <div class="col-lg-8">
              <input class="form-control" id="no HP" type="number" name="no_hp" value="{{$user->no_hp}}" required>
            </div>
          </div>
          <br>
          <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-warning col-12 btn-sm">Submit</button>
            <a href="/editPasswordUser" class="btn btn-danger col-12 btn-sm">Edit Password</a>
          </div>  
        </form>
        
        
      </div>
      
  </div>
</div>
<hr>
@endsection
