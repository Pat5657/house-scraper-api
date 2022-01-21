<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="icon" href="{{ asset('images/business.png') }}">

        
        <title>House Scrapper</title>
    </head>
    
    <body class="bg-dark text-white">
        <nav class="p-5 bg-lighter flex justify-between">
            <div class="flex gap-4 font-bold">
                <a href="{{ route('listings') }}">Listings</a>
                <a href="{{ route('targets') }}">Targets</a>
            </div>
            <div class="flex gap-4">
                <p>Hi, Pat</p>
                <p class="font-bold">Logout</p>
            </div>
        </nav>

        <div class="flex justify-center py-6">
            <div class="flex flex-col gap-6 w-2/3">
                @yield('content') 
            </div>
        </div>
    </body>
</html>