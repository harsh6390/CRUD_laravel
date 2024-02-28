@extends('app')
@section('main')

<div class="card" style="width: 18rem;">
    <img src="/product/{{$product -> image}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$product->name}}</h5>
      <p class="card-text">{{$product->description}}</p>
      <a href="/{{$product->id}}/edit" class="btn btn-primary">Edit</a>
    </div>
  </div> 

@endsection