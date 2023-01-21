@extends('layout.app')
@section('page-title', ' DC comics - home')

@section('main')
<div class="container-lg d-flex gap-5 flex-wrap">
    @foreach ($comics as $key => $elem)

        <div class="card" style="width: 18rem;">
            <img src="{{$elem['thumb']}}" class="card-img-top" alt="{{$elem['title']}}">
            <div class="card-body">
                <h5 class="card-title">{{$elem['title']}}</h5>
                <p class="card-text">{{$elem['description']}}</p>
                <a href="{{route('comics.show', $key)}}" class="btn btn-primary">Go to comic</a>
            </div>
        </div>
    @endforeach
</div>
@endsection