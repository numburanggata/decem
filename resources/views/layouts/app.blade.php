<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Diseminasi ITSA</title>
        <link rel="stylesheet" href="css/app.css">
        @yield('style')
    </head>

    <body>
        @include('inc.navigas2')
        @yield('content')

        <!-- @section('content') -->
        @include('inc.footer')
        <script src="js/app.js"></script>        
    </body>
</html>