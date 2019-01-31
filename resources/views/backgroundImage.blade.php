@extends('layout.lout')
@section('content')
<div class="container col-7">
<div class="jumbotron">
    @include('message.message')
    <form action="{{url('/backgroundImage')}}" enctype="multipart/form-data" method="post">
        {{csrf_field()}}
        <input name="backgroundImage" class="btn btn-secondary  " type="file">
        <button class="btn btn-primary" type="submit">Upload</button>
    </form>
</div>
</div>


@endsection
