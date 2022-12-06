@extends('layout')
@section('content')
<br>
    @if (Session::get('addTodo'))
        <div class="alert alert-success">
            {{ Session::get('addTodo') }}
        </div>
    @endif 
<br>

<h1 style="color: #9edee1;">Selamat Datang di Halaman Kehidupan</h1>
<br>
<h1 style="color: #9edee1;">Username : {{ auth()->user()->username }}</h1>
<br>
<h1 style="color: #9edee1;">Email : {{ auth()->user()->email }}</h1>

@if(session('isGuest'))
<h2>
    <b>
        <i>
            {{ session('isGuest') }}
        </i>
    </b>
</h2>
@endif
@endsection