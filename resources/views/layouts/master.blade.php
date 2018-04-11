<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bill Splitter PHP App">
    <meta name="author" content="Chutian Gao">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>@yield('pageTitle', 'Bill Splitter')</title>
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' type='text/css'>
    @stack('head')
</head>
<body>
<div class="container">
    <div>
        @yield('title')
    </div>

    <div>
        @yield('errors')
    </div>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

    @stack('body')
</div><!-- /.container -->
</body>
</html>