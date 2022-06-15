@extends('layouts.comics_layout')

@section('pageTitle', 'DC Comics')

@section('mainContent')


<main>
    <section class="comics-list">
        <div class="container">
            {{-- <div class="row">
                @foreach($comics as $comic)
                    <div class="card">
                        <div class="title">{{$comic->title}}</div>
                        <div class="description">{{$comic->description}}</div>
                        <div class="thumb">
                            <img src="{{$comic->thumb}}" alt="{{$comic->title}} image">
                        </div>
                        <div class="price">{{$comic->price}}</div>
                        <div class="series">{{$comic->series}}</div>
                        <div class="sale_date">{{$comic->sale_date}}</div>
                        <div class="type">{{$comic->type}}</div>
                    </div>
                @endforeach

                
            </div> --}}

            {{-- prova nuova row --}}

            <div class="row">
                
                @foreach($comics as $comic)
                <div class="card">
                    <div class="image">
                        <img src="{{$comic->thumb}}" alt="immagine di {{$comic->title}}">
                    </div>
                    <div class="title">{{$comic->title}}</div>
                </div>
                @endforeach
            </div>


        </div>
    </section>
</main>


@endsection