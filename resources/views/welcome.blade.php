<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Flyhjaelp</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <style>
        body { padding-bottom: 100px }
        .level { display: flex; align-items: center; }
        .flex { flex: 1; }
        .ml-a { margin-left: auto; }
        .font-color { color: white; }
        [v-cloak] { display: none; }
        .ais-highlight > em { background: black; font-style: normal; color: white;}
        .pad-top { padding-top: 10px; }
    </style>
    </head>
    <body>
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        @endauth
                    </div>
                @endif

                <div class="content">
                    <div class="title m-b-md">
                        Flyhjaelp
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
