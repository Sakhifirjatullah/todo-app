@extends('layout')

@section('content')
<br>
    <form action="/update/{{$todo['id']}}" method="POST" style="max-width: 500px; margin: auto;">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 
    <!-- untuk mengirim data ke controller yang nantinya di tampung oleh Request $request -->
    @csrf
    @method('PATCH')
        <div class="d-flex flex-column">
            <label style="color: white;">Title</label>
            <input type="text" name="tittle" value="{{$todo['tittle']}}">
            <!-- @error('tittle')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror -->
        </div>
        <div class="d-flex flex-column">
            <label style="color: white;">Date</label>
            <input type="date" name="date" value="{{$todo['date']}}">
            <!-- @error('date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror -->
        </div>
        <div class="d-flex flex-column">
            <label style="color: white;">Description</label>
            <textarea name="description" id="" cols="30" rows="10"> {{$todo['description']}}</textarea>
            <!-- @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror -->
        </div>
        <br>
        <button type="submit" class="tombol_login">Kirim</button>
    </form>
@endsection