@extends('layouts.main')

@section('container')

    <h1>Halaman About</h1>
    <h3>{{  $nama }}</h3>
    <p> {{  $email }}</P>
    <img src="image/{{ $gambar }}" alt="{{ $nama }}" width="200px" >
    
@endsection