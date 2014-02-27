<!doctype html>
<html>
    <head>
        @include('partials.head')
    </head>
    <body>
        
        <!-- HEADER -->
        <header class="row">
            @include('partials.header')
        </header><!-- /HEADER -->
        
        <!-- MAIN CONTAINER -->
        <div class="container">
            <div id="main" class="row">
                @yield('content')
            </div>
        </div><!-- MAIN CONTAINER -->
        
        <!-- FOOTER -->
        <footer class="row">
            @include('partials.footer')
        </footer><!-- FOOTER -->
        
    </body>
</html>