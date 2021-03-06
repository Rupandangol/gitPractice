@extends('layout.lout')
@section('content')

    <div class="container" style="height: 50px">

        @include('message.message')
    </div>

    <div class="container col-7" style=" margin-top: 30px; height: 100%">


        <form action="{{url('/updated/'.$data->id)}}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input name="title" type="text" class="form-control" value="{{$data->title}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Author</label>
                <input name="author" type="text" class="form-control" value="{{$data->author}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">About</label>
                <textarea name="about" class="form-control" placeholder="{{$data->about}}" rows="3"></textarea>
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-primary btn-block mb-2">UPDATE</button>
            </div>
        </form>

    </div>


@endsection