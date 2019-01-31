@extends('layout.lout')
@section('content')
<div class="container col-7">
    @include('message.message')
    <form action="{{route('useradder')}}" method="post">
        {{csrf_field()}}
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Username</label>
                <input type="text" class="form-control" name="username" placeholder="username">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" name="address1" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" name="address2" placeholder="Apartment, studio, or floor">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>

</div>

    @endsection