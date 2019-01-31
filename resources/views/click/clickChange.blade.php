@extends('layout.lout')
@section('content')

<div class="container">

    @include('message.errors')
    @include('message.message')
    <form action="{{route('click-insert')}}" method="post">
        {{csrf_field()}}

        <input name="name" style="width: 1140px;" placeholder="Name" type="text"><i class="fa fa-user"></i><br><br>

        <input name="date" style="width: 1140px;" placeholder="date" type="date"><br><br>
        <input name="status" value="0" type="hidden">

        <input name="detail" style="width: 1140px;" placeholder="Detail" type="text"><br><br>


        <button class="btn btn-success btn-block">go</button>

        <a class="btn btn-danger btn-block" href="{{route('click-view')}}">View list</a>

    </form>
    
</div>

@endsection