@extends('layouts.comics_layout')

@section('pageTitle', 'Add Comic')

@section('mainContent')

<div class="create-page">
    <div class="container">

        <h1>Add New Comics</h1>

        <form action="{{route('comics.store')}}" method="POST">
            @csrf

            <div class="input-box">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" 
                placeholder="insert title" 
                class="@error('title') input-error @enderror" 
                {{-- value="@error('title') {{old('title')}} @enderror" --}}
                >

                @error('title')
                    <div class="input-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-box">
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="10" placeholder="insert description" class="@error('description') input-error @enderror"></textarea>

                @error('description')
                    <div class="input-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-box">
                <label for="thumb">Image Url</label>
                <input type="text" name="thumb" id="thumb" name="thumb" 
                placeholder="insert image url" 
                class="@error('thumb') input-error @enderror" 
                {{-- value="@error('thumb') {{old('thumb')}} @enderror" --}}
                >

                @error('thumb')
                    <div class="input-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-box">
                <label for="price">Price with decimals</label>
                <input type="number" name="price" id="price" name="price" 
                placeholder="insert price (ex: 12.00)" min="1" max="1000" 
                class="@error('price') input-error @enderror"
                {{-- value="@error('price') {{old('price')}} @enderror" --}}
                >

                @error('price')
                    <div class="input-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-box">
                <label for="series">Series</label>
                <input type="text" name="series" id="series" name="series" 
                placeholder="insert series" 
                class="@error('series') input-error @enderror"
                {{-- value="@error('series') {{old('series')}} @enderror" --}}
                >

                @error('series')
                    <div class="input-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-box">
                <label for="sale_date">First Sale Date</label>
                <input type="date" name="sale_date" id="sale_date" name="sale_date" 
                class="@error('sale_date') input-error @enderror"
                {{-- value="@error('sale_date') {{old('sale_date')}} @enderror" --}}
                >

                @error('sale_date')
                    <div class="input-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-box">
                <label for="type">Type</label>
                <input type="text" name="type" id="type" name="type" 
                placeholder="insert series" 
                class="@error('type') input-error @enderror"
                {{-- value="@error('type') {{old('type')}} @enderror" --}}
                >
                
                @error('type')
                    <div class="input-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-box">
                <button type="submit" class="save">Save</button>
            </div>
        
        </form>

    </div>
</div>

@endsection