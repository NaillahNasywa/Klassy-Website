<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>hallo</title>
</head>

<body>
    <div class="container">
    <!--jika nilai nya true mka dia  akn mnampilkan dri menu, kalo false tdk akn mnmpilkn menu-->
        @if (Auth::check())
            @include('heder/menu')
        @endif
        {{-- <h1>welcome</h1> --}}
        @yield('content')
    </div>
</body>

</html>