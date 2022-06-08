@extends('layout.navbar')

@section("body")
  {{-- {{$myposts}} --}}

    <div class="container card bg-light">
        <div class="card-body">
          <h5 class="card-title">{{$data["title"]}}</h5>
          <p class="card-text">{{$data["description"]}}</p>
          <p class="card-text">{{$data["number"]}}</p>

          <a href="/articles" class="btn btn-primary">Back</a>
        </div>
      </div>
@endsection