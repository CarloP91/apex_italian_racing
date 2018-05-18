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
                    <a href="/classifica_piloti">Classifica S. 2</a>
                    <a href="#">Piloti</a>
                    <a href="/eventi">Eventi</a>
                    <a href="/hall_of_fame">Hall of Fame</a>
                </div>
            </div>
        </div>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.css">

        <footer><div class="container-fluid p-3 mb-2 bg-dark text-white">
            <div class="row">
                <div class="col-4"><p align="center">APEX ITALIAN RACING</p>
                    <p style="text-align:justify">AIR è un gruppo di appassionati per la Formula 1 e l'automobilismo in generale. Insieme gareggiamo e ci affrontiamo in Campionati ed Eventi dei più popolari giochi online su quattro ruote per PC. Insieme discutiamo di gare reali, organizziamo i più epici eventi e sempre insieme insegniamo ai nuovi talenti come crescere e migliorarsi. 
                        Chiunque può entrare a far parte di Apex Italian Racing, basta avere la voglia di migliorarsi, giocare pulito e soprattutto di VINCERE!
                    </p> <iframe  src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FApexItalianRacing%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> </div>

                <div class="col-4" align="center"> 
                    <a href="#">Non sai a chi rivolgerti? CONTATTACI</a>



<br><br>

                                            


                </div>
                <div class="col-4"> ULTIMO VIDEO SU YOUTUBE  <br><br>
                    <iframe width="350" height="200" src="https://www.youtube.com/embed/SPg02eSl43Q"" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
       
            </div>
        </div>
        </footer>

    </body>
</html>
