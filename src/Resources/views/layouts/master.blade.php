<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="host" content="{{ url('') }}">
        <title>{{ config('app.name') }} | Make Transaction</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
       {{-- Laravel Mix - CSS File --}}
       <link rel="stylesheet" href="{{ localAsset('css/coinpayment.css').'?_='.config('app.version') }}">
    </head>
    <body style="font-family:{{ config('coinpayment.font.family') }};">
        <div class="container">
            @yield('content')
        </div>
        {{-- Laravel Mix - JS File --}}
        <script src="{{ localAsset('js/coinpayment.js').'?_='.config('app.version') }}"></script>
    </body>
</html>
