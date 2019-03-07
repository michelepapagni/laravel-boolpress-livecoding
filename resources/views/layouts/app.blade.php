<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Area Pubblica</title>
    </head>
    <body>
        @yield('content')

        <script src="js/app.js" charset="utf-8"></script>
    </body>
</html>
