<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <h2>※メニュー</h2>
    <ul>
        <li>@show</li>
    </ul>
    <hr>
    <div>
        @yield('content')
    </div>
    <hr>
    <div>
        @yield('footer')
    </div>
</body>
</html>