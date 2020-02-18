<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:ip="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    </head>
    <body>
                <div class="container ">
                    <div class="row justify-content-center form alert-primary mt-5 text-danger">
                        <h1 class="col-12 text-center">IpAddress:</h1>
                    @if(property_exists($object,'error'))
                        {{ $object["error"] }}
                    @else
                        ip: {{ $object->ip }}<br>
                        country: {{ $object->country }}<br>
                        country_code: {{ $object->country_code }}<br>
                        city: {{ $object->city }}<br>
                        continent: {{ $object->continent }}<br>
                        latitude: {{ $object->latitude }}<br>
                        longitude: {{ $object->longitude }}<br>
                        time_zone: {{ $object->time_zone }}<br>
                        postal_code: {{ $object->postal_code }}<br>
                        org: {{ $object->org }}<br>
                        asn: {{ $object->asn }}<br>
                        subdivision: {{ $object->subdivision }}<br>
                        subdivision2: {{ $object->subdivision2 }}<br>
                    @endif
                    </div>
                </div>
    </body>
   </html>
