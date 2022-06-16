@extends('layouts.comics_layout')

@section('pageTitle', 'Add Comic')

@section('mainContent')

<div class="create-page">
    <div class="container">

        <h1>Add New Comics</h1>

        <form action="{{route('comics.store')}}" method="POST">
            @csrf

            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="insert title">

            <label for="description">Description</label>
            <input type="text" name="description" name="description" placeholder="insert description">

            <label for="thumb">Image Url</label>
            <input type="text" name="thumb" id="thumb" name="thumb" placeholder="insert image url">

            <label for="price">Price with decimals</label>
            <input type="number" name="price" id="price" name="price" placeholder="insert price (ex: 12.00)" min="1" max="1000">

            <label for="series">Series</label>
            <input type="text" name="series" id="series" name="series" placeholder="insert series">

            <label for="sale_date">First Sale Date</label>
            <input type="date" name="sale_date" id="sale_date" name="sale_date">

            <label for="type">Series</label>
            <input type="text" name="type" id="type" name="type" placeholder="insert series">

            <button type="submit">Save</button>
        
        </form>

    </div>
</div>

@endsection