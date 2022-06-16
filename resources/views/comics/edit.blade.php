@extends('layouts.comics_layout')

@section('pageTitle', 'Modify Comic '.$comic->title)

@section('mainContent')

<div class="edit-page">
    <div class="container">

        <h1>Add New Comics</h1>

        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')

            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="insert title" value="{{$comic->title}}">

            <label for="description">Description</label>
            <input type="text" name="description" name="description" placeholder="insert description" value="{{$comic->description}}">

            <label for="thumb">Image Url</label>
            <input type="text" name="thumb" id="thumb" name="thumb" placeholder="insert image url" value="{{$comic->thumb}}">

            <label for="price">Price with decimals</label>
            <input type="number" name="price" id="price" name="price" placeholder="insert price (ex: 12.00)" min="1" max="1000" value="{{$comic->price}}">

            <label for="series">Series</label>
            <input type="text" name="series" id="series" name="series" placeholder="insert series" value="{{$comic->series}}">

            <label for="sale_date">First Sale Date</label>
            <input type="date" name="sale_date" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">

            <label for="type">Type</label>
            <input type="text" name="type" id="type" name="type" placeholder="insert series" value="{{$comic->type}}">

            <button type="submit">Save</button>
        
        </form>

    </div>
</div>

@endsection