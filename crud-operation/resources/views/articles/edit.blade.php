@extends('layout.navbar')

@section("body")
    <div class="container">
        <form action="/articles/{{$data->id}}"  method="POST">
           @csrf
            @method('PUT')
           
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Title</label>
              <input type="text" class="form-control" value="{{$data->title}}" name="title" >
              <label class="text-danger">{{$errors->first('title')}}  </label>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Description</label>
              <input type="text" value="{{$data->description}}" class="form-control" name="description"  >
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Number</label>
                <input type="text" value="{{$data->number}}" class="form-control" name="number"  >
              </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </div>

@endsection