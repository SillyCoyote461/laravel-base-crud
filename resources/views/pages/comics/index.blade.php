@extends('layout.app')
@section('page-title', ' DC comics - home')

@section('main')
@if ( session('deleted') )
<div class="alert alert-warning my-3">
    {{ session('deleted') }}
</div>
@endif
<div class="container-fluid">
    <a class="btn btn-secondary my-5 mx-3" role="button" href="{{route('comics.create')}}">Create comic</a>
</div>
<div class="container-lg d-flex gap-5 flex-wrap">
    @foreach ($comics as $elem)

        <div class="card" style="width: 18rem;">
            <img src="{{$elem['thumb']}}" class="card-img-top" alt="{{$elem['title']}}">
            <div class="card-body">
                <h5 class="card-title">{{$elem['title']}}</h5>
                <p class="card-text">{{$elem['description']}}</p>
                <a href="{{route('comics.show', $elem['id'])}}" class="btn btn-primary">Go to comic</a>
                <a href="{{route('comics.edit', $elem['id'])}}" class="btn btn-success">Edit comic</a>
                <form action="{{route('comics.destroy', $elem['id'])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger my-2">Delete comic</button>
                </form>

            </div>
        </div>
    @endforeach
</div>
@endsection
