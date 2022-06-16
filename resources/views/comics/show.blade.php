@extends('layouts.comics_layout')

@section('pageTitle', 'DC Comics '.$comic->title)

@section('mainContent')

<div class="detail">
    <div class="container">

        <button class="update-btn">
            <a href="{{route('comics.edit', $comic->id)}}">MODIFY</a>
        </button>

        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" class="delete-btn">DELETE</button>
        </form>

        <h1>{{$comic->title}}</h1>

        <div class="image">
            <img src="{{$comic->thumb}}" alt="immagine di {{$comic->title}}">
        </div>

        <h3 class="series">Serie {{$comic->series}}</h3>

        <div class="description">{{$comic->description}}</div>

        <div class="price">
            <span style="font-size: 1.2em; font-weight: 600;">Price : </span>
            {{$comic->price}} &dollar;
        </div>

        <div style="float: right" class="sale-date">Sale On {{$comic->sale_date}}</div>

    </div>
</div>

@endsection