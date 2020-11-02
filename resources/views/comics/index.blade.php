@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="{{$comic->cover}}" alt="{{$comic->title}}">
                        <div class="card-body">
                            <h5>{{$comic->title}}</h5>
                            <a href="#" class="btn btn-primary">More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection