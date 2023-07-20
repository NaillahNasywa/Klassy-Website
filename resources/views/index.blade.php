@extends('app')

@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
          <div class="container my-5">
            @if (Auth::user())
            <h1 class="text center">WELCOME TO KLASSY, {{Auth::user()->name}}!</h1>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('Menu.index') }}">
                <i class="btn btn-primary">Start</i>
                <span class="menu-title"></span>
              </a>
            </li>
            @else
            <h1 class="text center">login dulu</h1>
            @endif
          </div>
        </center>

           
         
@endsection