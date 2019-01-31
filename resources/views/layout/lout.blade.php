<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::to('/lib/bootstrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::to('/lib/font_awesome/css/font_awesome.min.css')}}">
    <title>FindYourBook</title>
</head>
<body style="height: 100%; background-image: linear-gradient(to right,#577490,#a1bec7)">
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: linear-gradient(to right, #20b2aa , #6459a9);">
        <a class="navbar-brand" href="{{route('home')}}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/add')}}">Add Books<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('view')}}">View List</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
@yield('content')


</body>
</html>