<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <script src="{{ mix('/js/app.js') }}"></script>
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    @include('inc.nav')
    <div class="container">
        <div id="app">
            <example-component></example-component>
            @include('inc.msg')
            @yield('content')
        </div>
    </div>
</body>
</html>
