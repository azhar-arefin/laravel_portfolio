<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title> Portfolio website complete 
        
            @yield('title') 

        </title>
    </head>
    <body>

@include('layouts.header')
    <main class="l-main">

        @yield('content')
        
    </main>
@include('layouts.footer')

 
    <!--===== MAIN JS =====-->
    <script src="{{asset('script.js')}}"></script>
    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!--===== MAIN JS =====-->

    </body>
</html>        