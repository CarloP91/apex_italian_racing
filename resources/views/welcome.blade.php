<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>APEX ITALIAN RACING</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth

                 
                </div>
            @endif

    
            <div class="content">
                @yield('logo_air')
            

            <br>
            


            
                <div class="title m-b-md">
                    @yield("auto")
                </div>

                <div class="links">
                    <a href="/regolamento">Regolamento</a>
                    <a href="/classifica">Classifica</a>
                    <a href="#">Piloti</a>
                    <a href="/eventi">Eventi</a>
                    <a href="/hall_of_fame">Hall of Fame</a>
                </div>
            </div>
        </div>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.css">

        <footer><div class="container-fluid p-3 mb-2 bg-dark text-white">
            <div class="row">
                <div class="col"></div>
                <div class="col-8-auto"> <a href="#">Hai un problema e non sai a chi rivolgerti? Clicca qui!</a>  

<br><br>

                                            <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FApexItalianRacing%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>


                </div>
                <div class="col"> ULTIMO VIDEO SU YOUTUBE  <br><br>
                    <iframe width="350" height="200" src="https://www.youtube.com/embed/dNAKecaCvCQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
       
            </div>
        </div>
        </footer>

    </body>
</html>
