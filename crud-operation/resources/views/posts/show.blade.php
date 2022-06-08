@extends('layout.navbar')

@section("body")
  {{-- {{$myposts}} --}}

    <div class="container card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$myposts["title"]}}</h5>
          <p class="card-text">{{$myposts["description"]}}</p>
          <a href="/posts" class="btn btn-primary">Back</a>
        </div>
      </div>
@endsection