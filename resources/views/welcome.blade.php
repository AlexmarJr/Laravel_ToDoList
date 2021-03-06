<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <title>To Do</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image: url('/img/welcome.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
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

            .top-left {
                position: absolute;
                left: 10px;
                top: 230px;
                border-style: groove;
                border-radius: 0px 10000px 30px 5px;
                border-color: blue;
                color: black
            }


            .top{
                position: absolute;
                top: 100px;
                color: black
            }
            .bottom{
                position: absolute;
                bottom: 100px;
                color: black
            }


            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 26px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .first {
                position: absolute; 
                left: 100px; 
                top: 150px;
                width: 350px;
                color: black
            }

            .second {
                position: absolute; 
                left: 650px; 
                top: 450px;
                width: 350px;
                color: black
            }

            .third {
                position: absolute; 
                right: 550px; 
                bottom: 60px;
                width: 350px;
                color: black
            }

            h2{
                transform: rotate(-335deg); 
                font-size: 50px 
            }
            p {
                transform: rotate(-350deg); 
                font-size: 22px 
            }
            a{
                color: white;
            }
}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrar</a>
                        @endif
                    @endauth
                    <a href="https://github.com/AlexmarJr/Laravel_ToDoList">| GitHub Source Code</a>
                </div>
            @endif

            <h1 style="color: Black">Lets us help you to org<span style="color: white">anize yours Tasks</span></h1>
            
    </body>
</html>
