@extends('layout.lout')
@section('content')

    <div>
        @include('message.message')

    </div>
    <form action="{{url('/uploadImage/'.$data->id)}}" enctype="multipart/form-data" method="post">
        {{csrf_field()}}
        <input name="image" type="file">
        <button type="submit">Upload</button>
    </form>


    @endsection