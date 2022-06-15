@extends('layouts.comics_layout')

@section('pageTitle', 'DC Comics')





@section('mainContent')


    <section class="comics-list">
        <div class="container">
            <div class="row">
                
                @foreach($comics as $comic)
                <a class="card" href="{{route('comics.show', $comic->id)}}">
                    <div class="image">
                        <img src="{{$comic->thumb}}" alt="immagine di {{$comic->title}}">
                    </div>
                    <div class="title">{{$comic->title}}</div>
                </a>
                @endforeach
            </div>


        </div>
    </section>

@endsection


@section('mainFooter')

    <section class="main-footer">
        <div class="container">
            <div class="box">
                <div class="image">
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="immagine">
                </div>
                <div class="text">digital comics</div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="immagine">
                </div>
                <div class="text">dc merchandise</div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="immagine">
                </div>
                <div class="text">subscription</div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="immagine">
                </div>
                <div class="text">comic shop locator</div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="immagine">
                </div>
                <div class="text">dc power visa</div>
            </div>
        </div>
    </section>

@endsection



