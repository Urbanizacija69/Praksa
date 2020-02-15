<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zadatak3</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: red;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                text-align: center;
                font-size: 30px;
                margin: 0;
            }
        </style>
    </head>
    <body>
    <h1>Lista vrednosti:</h1>
         @foreach($number as $key=>$number)
            {{"Vrednost= ".$number}} <br><br>
        @endforeach
    </body>
</html>
