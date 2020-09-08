@extends('layouts.app')
@section('content')

<div class="wrapper create-pizza">
    <h2>Order a Pizza</h2>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Project name :</label>
        <input type="text" name="name" id="name">
        <label for="type">Choose pizza type</label>
        <select name="type" id="type">
            <option value="margertita">Margerita</option>
            <option value="hawaiin">Hawaiin</option>
            <option value="volcaino">Volcaino</option>
            <option value="vegetable">Vegetable</option>
        </select>
        <label for="base">Choose pizza base</label>
        <select name="base" id="base">
            <option value="thon">Thon</option>
            <option value="jben">Hawaiin</option>
            <option value="Salami">Salami</option>
            <option value="merguez">Merguez</option>
        </select>
        <fieldset>
            <label>Choose Toppings :</label><br>
            <input type="checkbox" name="toppings[]" value="Mushroom">Mushroom<br>
            <input type="checkbox" name="toppings[]" value="pepporoni">Pepperoni<br>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br>
            <input type="checkbox" name="toppings[]" value="thon">Thon<br>
        </fieldset>
        <input type="submit" value="Order">
    </form>
</div>
@endsection