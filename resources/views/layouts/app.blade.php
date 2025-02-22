<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-gray-400 flex flex-col min-h-screen overflow-hidden"
      style="background: url('{{ asset('images/background.webp') }}') no-repeat center center fixed; 
             background-size: 100% 100%;">


    <nav class="text-white py-4 bg-transparent text-lg">
        <div class="container mx-auto flex items-center px-6">
            <div class="flex-1"></div>
            <ul class="flex space-x-6">
                <li><a href="{{ url('/') }}" class="text-white no-underline text-xl">Home</a></li>
                <li><a href="{{ url('/about') }}" class="text-white no-underline text-xl">About</a></li>
                <li><a href="{{ url('/contact') }}" class="text-white no-underline text-xl">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="flex-1 flex items-center justify-center text-center text-2xl">
        @yield('content')
    </div>

</body> 
</html>
