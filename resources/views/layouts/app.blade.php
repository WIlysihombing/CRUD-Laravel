<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('app-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('app-assets/style.css')}}">
</head>
@yield('style')
<body>
    <nav class="container mt-3">
            <a href="{{route('artikel')}}" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Artikel" >Artikel</a>
            <a href="{{route('create')}}" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="New+" >New+</a>
    </nav>

    <main>
        <div class="py-3">
            @yield('content')
        </div>
    </main>
</body>
</html>