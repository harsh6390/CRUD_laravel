@extends('app')
@section('main') 

  

<div class="container">
    <div class="card mt-3 p-3">
    <form method="POST" action="store" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name ="name"  value= "{{old('name')}}" placeholder="Enter Name">
          @if($errors->has('name'))
          <span class="text-danger">{{$errors->first('name')}}</span>
          @endif
        </div>

        <div class="form-group">
            <label for="description">Discription</label>
            <textarea class="form-control" name ="description">{{ old('description') }}</textarea>
            @if($errors->has('description'))
          <span class="text-danger">{{$errors->first('description')}}</span>
          @endif
          </div>

          <div class="form-group">
            <label for="image">Image</label>
            <input type="file"  name ="image" class="form-control-file">
            @if($errors->has('image'))
          <span class="text-danger">{{$errors->first('image')}}</span>
          @endif
          </div>

        <button type="submit" class="btn btn-dark">Submit</button>
      </form>
    </div>
</div>

@endsection