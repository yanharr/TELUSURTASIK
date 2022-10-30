@extends('master')
@section('content')

<section>
    <div class="container">
        <h2>Frequently Asked Questions</h2>
        <main>
          <div class="register-switch"  style="text-align: center">
            <a class="btn {{ request()->route()->getName() === 'help.user' ? 'btn-success' : 'btn-outline-success' }}" href="{{ url('/HelpUser') }}">User</a>
            <a class="btn {{ request()->route()->getName() === 'help.mitra' ? 'btn-success' : 'btn-outline-success' }}" href="{{ url('/HelpMitra') }}">Mitra</a>
          </div>
          <br>
          @foreach ($help as $item)
          <details class="mt-2">
          <summary>{{ $item->title }}</summary>
          <div class="faq__content">
            <p>{{ $item->desc }}</p>
          </div>
          </details>
          @endforeach
        </main>
        <br>
        <div class="number">
          <div class="customer" style="margin-left: 300px">
          <div class="box-icon">
            <a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp"></i></a></div>
            <h5>Customer Care</h5>
            <b>(+62)821234567</b></div>
          <div class="social" >
          <div class="box-icon">
            <i class="fa fa-users"></i></div>
            <h5>Social media</h5>
            <p>
            <a href="https://twitter.com/" class="tw_color"><i class="fa fa-twitter fa-lg"></i>@TelusurTasik_ID</a>
            <a href="https://www.instagram.com/" class="insta_color"><i class="fa fa-instagram fa-lg"></i>@TelusurTasik_ID</a> 
            </p>
          </div>
        </div>
    </div>
</section>

@endsection

