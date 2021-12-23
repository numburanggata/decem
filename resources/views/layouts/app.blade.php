<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Diseminasi ITSA</title>
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/style.css">
        @yield('style')
    </head>

    <body>
        @include('inc.navigas2')
        <div class="container">
            @yield('content')

            <!-- @section('content') -->
        </div>
        @include('inc.footer')
        <script src="js/app.js"></script>        
    </body>
</html>