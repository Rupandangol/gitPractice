@extends('layout.lout')
@section('content')

    <div class="container col-7 " style="margin-top: 50px">

        <table class="table table-bordered ">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Author</th>
                <th>Image</th>
                <th colspan="4">Action</th>

            </tr>
            @foreach($data as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->title}}</td>
                    <td>{{$value->author}}</td>
                    <td>
                        @if($value->get_book_image_using_books)

                            <img src="{{url('iamge/'.$value->get_book_image_using_books->image)}}" alt="image" height="50px">
                        @endif
                    </td>
                    <td><a class="btn btn-primary" href="{{url('/read/'.$value->id)}}">Read</a></td>
                    <td><a class="btn btn-info" href="{{url('/update/'.$value->id)}}">Update</a></td>
                    <td><a class="btn btn-danger" href="{{url('/delete/'.$value->id)}}">Delete</a></td>
                    <td><a class="btn btn-danger" href="{{url('/uploadImage/'.$value->id)}}">Upload image</a></td>
                </tr>
            @endforeach

        </table>
{{$data->links()}}
    </div>


@endsection