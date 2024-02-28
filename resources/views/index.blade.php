@extends('app')
@section('main')

    <div class = "container">
<div class="text-right">
    <a href="create" class="btn btn-dark mt-2">Add Product </a>
</div>

        <h1>Product</h1>
    </div>


    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Discription</th>
          <th scope="col">Image</th>
          <th scope="col">update</th>
          <th scope="col">Delete</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
        <tr>
          <td>{{ ($products->currentPage() - 1) * $products->perPage() + $loop->index + 1 }}</td>
          <td><a href="{{$product->id}}/show" style="color: black !important;">{{$product->name}}</a></td>
          <td>{{$product->description}}</td>
          <td><img src="product/{{$product -> image}}" class="rounded-circle" width="50" height="50"></td>
          <td><a href="{{$product->id}}/edit" class="btn btn-dark btn-sm">Edit</a></td>
          <td><a href="{{$product->id}}/delete" class="btn btn-danger btn-sm">Delete</a></td>

        </tr>
      
        @endforeach
      
      </tbody>
    </table>

    {{$products->links()}}

    @endsection

    