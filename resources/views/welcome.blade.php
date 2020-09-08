@extends('layouts.layout')
@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Home</a>
        @endauth
    </div>
    @endif

    <div class="content">
        <img src="/img/pizza-house.png" alt="pizza-house-logo">
        <div class="title m-b-md">
            The north's best pizzas
        </div>
        <p>{{session('message')}}</p>
        <a href="{{route('pizzas.create')}}">Order a Pizza</a>


    </div>
</div>
@endsection