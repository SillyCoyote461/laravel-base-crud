@extends('layout.app')
@section('page-title', ' DC comics - edit')

@section('main')
<div class="container-xl mx-auto my-5">
    <form method="POST" action="{{route('comics.update', $comic ->id)}}">
        {{-- token e metodo --}}
        @csrf
        @method('PUT')
        {{-- title --}}
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Title</span>
            <input value="{{$comic['title']}}" name="title" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
        {{-- description --}}
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text w-100" id="inputGroup-sizing-sm">Description</span>
            <textarea name="description" class="w-100" cols="30" rows="10">{{$comic['description']}}
            </textarea>
        </div>
        {{-- thumb --}}
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Thumb</span>
            <input value="{{$comic['thumb']}}" name="thumb" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
        {{-- price --}}
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Price</span>
            <input value="{{$comic['price']}}" name="price" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
        {{-- series --}}
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Series</span>
            <input value="{{$comic['series']}}" name="series" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
        {{-- sale date --}}
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Sale Date "YYYY-MM-DD"</span>
            <input value="{{$comic['sale_date']}}" name="sale_date" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
        {{-- type --}}
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Type</span>
            <input value="{{$comic['type']}}" name="type" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
        <button type="submit" class="btn btn-secondary">Edit</button>
    </form>
</div>
@endsection
