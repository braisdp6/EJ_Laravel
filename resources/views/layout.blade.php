<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'aprendible')</title>
    <style>
        .active a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>

<body>
    @include('partials/nav')<!-- note: aqui copiamos y pegamos la vista nav entera -->
    @yield('content')<!-- note: aqui copiamos y pegamos una "section con un id" de una vista -->
</body>

</html>
