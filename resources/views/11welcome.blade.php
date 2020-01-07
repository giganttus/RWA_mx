<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Početna</a>
                    @else
                        <a href="{{ route('login') }}">Prijava</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registracija</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
        </div>
    </body>
</html>




<!-- primatelj (receive) info BACKUPPPPPPPP -->
<div class="card text-center">
    <div class="card-header">
        Informacije primatelja
    </div>
    <div class="card-body">
        <div class="container ">
            <!-- Stack the columns on mobile by making one full-width and the other half-width -->


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>