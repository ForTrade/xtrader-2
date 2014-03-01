<!doctype html>
<html>
    <head>
        @include('partials.head')
    </head>
    <body>
        
        <!-- HEADER -->
        <header class="">
            @include('partials.header')
        </header><!-- /HEADER -->
        
        <!-- MAIN CONTAINER -->
        <div class="container">
            <div id="main" class="row">
                @yield('content')
            </div>
        </div><!-- MAIN CONTAINER -->
        
        <!-- FOOTER -->
        <footer class="">
            @include('partials.footer')
        </footer><!-- FOOTER -->
        
    </body>
</html>