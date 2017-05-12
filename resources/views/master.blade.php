<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <div style="background-color: #f7e1b5">
        @section('sidebar')
            This is the master sidebar.
        @show
</div>

        <div class="container">
            @yield('content')
        </div>    
        <hr>
        @yield('enviroment')
        
        
        <hr>
    </body>
</html>