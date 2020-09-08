@extends('layouts.app')
@section('content')
<div class="wrapper pizza-index">
    <h1>Pizza Orders</h1>
    @foreach($pizzas as $i)
    <div class="pizza-item">
        <img src="/img/pizza.png" alt="pizza">
        <h4><a href="{{route('pizzas.show',$i->id)}}">{{$i->name}}</a></h4>
    </div>
    @endforeach
</div>
@endsection