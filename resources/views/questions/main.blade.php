<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title></title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/questions/index.css') }}" />
        @yield('assets')
    </head>
    <body>
    @yield('content')
    </body>
</html>