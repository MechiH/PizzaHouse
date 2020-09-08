@extends('layouts.app')
@section('content')
<div class="wrapper pizza-details">
    <h2>order for {{$pizza->name}}</h2>
    <p>type : {{$pizza->type}}</p>
    <p>base : {{$pizza->base}}</p>
    <h3>Toppings</h3>
    <ul>
        @foreach($pizza->toppings as $i)
        <li>{{$i}}</li>
        @endforeach
    </ul>

    <form action="{{route('pizzas.show',$pizza->id)}}" method="post">
        @csrf
        @method('delete')
        <button>Complete order</button>
    </form>
</div>
<div>
    <a href="/pizzas" class="back">
        <- back to all pizzas</a>
</div>
@endsection