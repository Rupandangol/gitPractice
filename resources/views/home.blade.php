@extends('layout.lout')
@section('content')
<div class="container col-7l">

    <div class="jumbotron">
        <img src="{{url('/background/1546158734.png')}}" alt="backgroundImage" height="500px">
    </div>

<div class="jumbotron">


    <form action="">

        <input  style="width: 100%" type="text" placeholder="Username"><br>
        <input  style="width: 100%" type="password" placeholder="Password"><br>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
    <a class="btn btn-secondary btn-block" href="{{url('/useradd')}}">Create New Account</a><br>
    <a class="btn btn-info btn-block" href="{{url('/backgroundImage')}}">Add Carosel Image</a>
</div>
</div>
@endsection