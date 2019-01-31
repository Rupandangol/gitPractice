@extends('layout.lout')

@section('content')


    <div class="container col-9">

    <div class="jumbotron">
        <h1 class="display-4">{{$data->title}}</h1>
        <p class="lead">{{$data->author}}</p>
        <hr class="my-4">
        <p>{{$data->about}}</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
    </div>
    </div>


@endsection