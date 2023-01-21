@extends('layout.app')
@section('page-title', ' DC comics - home')

@section('main')
<div class="container-fluid">
    <a class="btn btn-secondary my-5 mx-3" role="button" href="{{route('comics.create')}}">Primary link</a>
</div>
<div class="container-lg d-flex gap-5 flex-wrap">
    @foreach ($comics as $elem)

        <div class="card" style="width: 18rem;">
            <img src="{{$elem['thumb']}}" class="card-img-top" alt="{{$elem['title']}}">
            <div class="card-body">
                <h5 class="card-title">{{$elem['title']}}</h5>
                <p class="card-text">{{$elem['description']}}</p>
                <a href="{{route('comics.show', $elem['id'])}}" class="btn btn-primary">Go to comic</a>
            </div>
        </div>
    @endforeach
</div>
@endsection