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
      
      
   
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        @if(session('error'))
        <div class="alert alert-danger" role="alert">
        {{ session('error') }}
        </div>
        @endif
        @if(session('message'))
        <div class="alert alert-success" role="alert">
        <a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>
        <strong>SUCCESS:</strong>&nbsp;{{ session('message') }}
        </div>
        @endif

        
        <h3 class="text-center">Edit Password</h3>
        
        <form class="form-horizontal" role="form" method="post" action="/passwordsubmit" enctype="multipart/form-data">
        @method('put')
        @csrf 
          <div class="form-group">
            <label class="col-lg-3 control-label" for="current_password">Current Password</label>
            <div class="col-lg-8">
              <input class="form-control" id="current_password" type="password" name="current_password" >
            </div>
          </div>
          

          <div class="form-group">
            <label class="col-lg-3 control-label" for="password">New Password</label>
            <div class="col-lg-8">
              <input class="form-control" id="password" type="password" name="password"  required>
            </div>
          </div>
            
            
          <div class="form-group">
            <label class="col-lg-3 control-label" for="password_confirm">Confirm Password</label>
            <div class="col-lg-8">
              <input class="form-control" id="password_confirm" type="password" name="password_confirm" required>
            </div>
          </div>
          
          <br>
          <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-warning col-12 btn-sm">Submit</button>
          </div>  
        </form>
        
        
      </div>
      
  </div>
</div>
<hr>
@endsection