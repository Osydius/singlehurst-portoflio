<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="icon" href="../../../../favicon.ico">

        <title>Casey Singlehurst | @yield ('pageTitle')</title>

        <!-- Fonts -->
        @include ('Site.fonts')
        @yield ('fonts')

        <!-- Styles -->
        @include ('Site.css')
        @yield ('css')
    </head>

    <body>
        <div class="container">
            @include ('Site.header')

            @include ('Site.nav')
        </div>

        @yield ('content')

        @include ('Site.footer')
    </body>

    @include ('Site.scripts')
    @yield ('scripts')
</html>
