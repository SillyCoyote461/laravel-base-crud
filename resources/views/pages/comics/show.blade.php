@extends('layout.app')
@section('page-title', ' DC comics - show')

@section('main')
<div class="card my-5 mx-auto" style="max-width: 70%;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{$comic['thumb']}}" class="w-100 rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$comic['title']}}</h5>
          <p class="card-text">{{$comic['description']}}</p>
          <p class="card-text"> <b>U.S. Price:</b> {{$comic['price']}}$</p>
          <p class="card-text"><b>series:</b> {{$comic['series']}}</p>
          <p class="card-text"><b>type of comic:</b> {{$comic['type']}}</p>
          <p class="card-text"><b>sale date:</b> {{$comic['sale_date']}}</p>

        </div>
      </div>
    </div>
  </div>

 
@endsection