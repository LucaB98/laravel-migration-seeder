@extends('layouts.main')

@section('title','home')

@section('main-content')

    @forelse ($trains as $train)
        <h1>{{$train->azienda}}</h1>
    @empty
    <h1>non ci sono treni</h1>
    @endforelse
        
@endsection