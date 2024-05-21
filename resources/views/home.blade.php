@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-4">
        @foreach($movies as $movie)
        <div class="col">
            <div class="movies">
                <h3>{{$book -> title}}</h3>
                <p>{{$book -> date}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection