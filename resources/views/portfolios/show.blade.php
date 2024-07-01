@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $portfolio->judul }}</h1>
    <img src="{{ asset('storage/' . $portfolio->image) }}" class="img-fluid" alt="{{ $portfolio->judul }}">
    <p>{{ $portfolio->desc }}</p>
    <p>Klasifikasi: {{ $portfolio->klasifikasi }}</p>
</div>
@endsection
