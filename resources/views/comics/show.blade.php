@extends('layouts.comics_layout')

@section('pageTitle', 'DC Comics '.$comic->title)

@section('mainContent')

<div class="detail">
    <div class="container">
        <h1>{{$comic->title}}</h1>
    </div>
</div>

@endsection